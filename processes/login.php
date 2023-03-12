<?php
require_once("./db.php");
//initiation of script to handle login activities

function handleLogin($username, $password)
{
    global $dbConnect;

    if ($username || $password) {
        //Select relevant credential from database
        $credential = "SELECT user_id, user_name, password from users WHERE user_name = '$username'";

        //to run sql query direct to our database
        $query = mysqli_query($dbConnect, $credential);


        //to check if a runed query do not return null and fetch its information
        if ($query) {
            $data = mysqli_fetch_array($query);
            //check if runed query returned with information or not

            if ($data) {
                //if  fetch return true it means has data
                //lets us compaire a given data with user password

                $pass = $data['password'];
                if (password_verify($password, $pass)) {
                    //direct user to its account
                    session_start();
                    $_SESSION['username'] = $username;
                    $_SESSION['user_id'] = $data['user_id'];
                    header("location:../pages/user_account.php");
                } else {
                    $msg =  "Wrong username or password!";
                    $msg = base64_encode($msg);
                    header("location:../pages/login.php?msg=$msg");
                }
            } else {
                $msg =  "Wrong username or password!";
                $msg = base64_encode($msg);
                header("location:../pages/login.php?msg=$msg");
            }
        } else {
            echo "Oops, Something went wrong!";
        }
    } else {
        $msg =  "Please, provide the required cridentials!";
        $msg = base64_encode($msg);
        header("location:../pages/login.php?msg=$msg");
    }
}

handleLogin($_POST['username'], $_POST['password']);
