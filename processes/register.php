<?php
require_once("./db.php");

function regitration($dbConnect, $user_name, $password, $c_password)
{
    if ($dbConnect && $user_name && $password && $c_password) {
        if ($password == $c_password) {
            $select_query = "SELECT COUNT(users.user_name) as 'users_count' FROM users WHERE users.user_name = $user_name";
            $select_query_execution = mysqli_query($dbConnect, $select_query);

            if ($select_query_execution) {
                $possible_users_count = mysqli_fetch_array($select_query_execution);
                if ($possible_users_count['users_count'] == 0) {
                    $insert_query = "INSERT INTO users (user_name, password) VALUES ($user_name, $c_password)";
                    $insert_query_execution = mysqli_query($dbConnect, $insert_query);
                    if ($insert_query_execution) {
                        $note = "Account created succesfully, log in to continue!";
                        header("location: ./login.php?note=$note");
                    }
                } else {
                    $message = "This username is not available!";
                }
            } else {
                $message = "Oops! Something wen't wrong!";
            }
        } else {
            $message = "Passwords dont't match!";
        }
    } else {
        $message = "Please provide all creedentials!";
    }

    return $message;
}
