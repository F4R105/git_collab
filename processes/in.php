<?php
session_start();
$uri_fragments = explode("/", $_SERVER["REQUEST_URI"]);
$current_page = end($uri_fragments);

if (empty($_SESSION["username"]) && $current_page != "login.php") {
    header("location:./login.php");
    die();
} elseif (!empty($_SESSION["username"]) && $current_page == "login.php") {
    header("location: ../pages/user_account.php");
    die();
}
