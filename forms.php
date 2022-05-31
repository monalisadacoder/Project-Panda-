<?php
include("config.php");
if($_SERVER["REQUEST_METHOD"]=="POST"){
 
if(empty(trim($_POST["name"]))){
echo "no name";
}else{
    $name= trim($_POST["name"]);
}

if(empty(trim($_POST["email"]))){
echo "no email";
}else{
    $email= trim($_POST["email"]);
}

if(empty(trim($_POST["subject"]))){
echo "no subject";
}else{
    $subject= trim($_POST["subject"]);
}
if(empty(trim($_POST["message"]))){
    echo "no message";
    }else{
        $message=trim($_POST["message"]);
    }
    
}
$save=mysqli_query($link,"insert into activityform (YourName,YourEmail,Subject,YourMessage)
 values('$name','$email','$subject','$message')");
 if($save){
    echo"Saved";
}else{echo "oswadde";}

?>
<script>
					window.alert('Sent Successfully');
					window.location.href='index.php';
</script>
<?php
?>

