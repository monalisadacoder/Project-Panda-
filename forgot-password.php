<?php
$msg = "lines of text";
$msg = wordwrap($msg,70);
mail("someone@example.com", "My subject", $msg);
?>