<?php
include("config.php");
if($_SERVER["REQUEST_METHOD"]=="POST"){
//echo"Registered Successfully"; 
if(empty(trim($_POST["email"]))){
echo "no email";
}else{
    $email=trim($_POST["email"]);
}

if(empty(trim($_POST["tel"]))){
echo "no tel";
}else{
    $tel= trim($_POST["tel"]);
}

if(empty(trim($_POST["shift"]))){
echo "no shift";
}else{
    $shift= trim($_POST["shift"]);
}

if(empty(trim($_POST["position"]))){
echo "no position";
}else{
    $position= trim($_POST["position"]);
}

if(empty(trim($_POST["psw"]))){
echo "no password";
}else{
    $psw= trim($_POST["psw"]);
}

if(empty(trim($_POST["psw-repeat"]))){
echo "no password";
}else{
    $rpsw= trim($_POST["psw-repeat"]);
    if($psw==$rpsw){
        $password=md5($rpsw);
    }else{echo "password doesn't match";}
}
$save=mysqli_query($link,"insert into registration (WorkEmail,Telephone,Shift,Position,Password)
 values('$email','$tel','$shift','$position','$password')");
 if($save){
    echo"Saved";
}else{echo "oswadde";}
}
?>
<script>
					window.alert('Registered Successfully');
					window.location.href='index.php';
</script>
<?php
?>

