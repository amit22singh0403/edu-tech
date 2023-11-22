<?php
session_start();
header("location: loginpage.php");
session_unset();
session_destroy();
exit();
?>

