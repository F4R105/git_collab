<?php
session_start();
$uri_fragments = explode("/", $_SERVER["REQUEST_URI"]);
$current_page = explode("?", end($uri_fragments))[0];

if (empty($_SESSION["username"]) && $current_page != "login.php") {
    header("location: ../pages/login.php");
    die();
} elseif (!empty($_SESSION["username"]) && $current_page == "login.php") {
    header("location: ../pages/user_account.php");
    die();
}
