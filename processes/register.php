<?php
require_once("./db.php");

registration($dbConnect, $_POST['username'], $_POST['password'], $_POST['confirm_password']);

function registration($dbConnect, $user_name, $password, $c_password)
{
    if ($dbConnect && $user_name && $password && $c_password) {
        if ($password == $c_password) {
            $select_query = "SELECT COUNT(users.user_name) as 'users_count' FROM users WHERE users.user_name = '$user_name'";
            $select_query_execution = mysqli_query($dbConnect, $select_query);

            if ($select_query_execution) {
                $possible_users_count = mysqli_fetch_array($select_query_execution);
                if ($possible_users_count['users_count'] == 0) {
                    $c_password = password_hash($c_password, PASSWORD_DEFAULT);

                    $insert_query = "INSERT INTO users (user_name, password) VALUES ('$user_name', '$c_password')";
                    $insert_query_execution = mysqli_query($dbConnect, $insert_query);
                    if ($insert_query_execution) {
                        $select_query = "SELECT user_id, user_name, password from users WHERE user_name = '$user_name'";
                        $select_query_execution = mysqli_query($dbConnect, $select_query);
                        if ($select_query_execution) {
                            $user_data = mysqli_fetch_array($select_query_execution);
                            session_start();
                            $_SESSION['username'] = $user_name;
                            $_SESSION['user_id'] = $user_data['user_id'];
                            header("location: ../pages/user_account.php");
                            exit;
                        }
                    }
                } else {
                    $message = base64_encode("This username is not available!");
                }
            } else {
                $message = base64_encode("Oops! Something wen't wrong!");
            }
        } else {
            $message = base64_encode("Passwords don't match!");
        }
    } else {
        $message = base64_encode("Please provide all credentials!");
    }

    header("location: ../pages/register.php?msg=$message");
}
