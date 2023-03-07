<?php
session_start();
session_destroy();
unset($_SESSION['email_session']);
header("location:../pages/login.html");
?>