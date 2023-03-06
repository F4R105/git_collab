<?php
require_once("./db.php");
//initiation of script to handle login activities

function handleLogin($dbConnect, $email, $password)
{
    //Select relevant credential from database
    $credential = "SELECT email, password from tablename WHERE email = '$email'";
    //to run sql query direct to our database
    $query = mysqli_query($dbConnect, $credential);
    //to check if a runed query do not return null and fetch its information
    if ($query) {
        $data = mysqli_fetch_array($query);
        //check if runed query returned with information or not
        if (sizeof($data) != 0) {
            //if its size is not zero it means has data
            //lets us compaire a given data with user password
            $pass = $data['password'];
            if (password_verify($password, $pass)) {
                echo "login succes full";
            } else {
                echo "sorry you enter wrong credential repeate again please";
            }
        } else {
            echo "sorry you enter wrong credential repeate again please";
        }
    } else {
        echo "Some thing wrong when run your sql query";
    }
}
