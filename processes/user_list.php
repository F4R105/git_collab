<?php
require_once("../processes/db.php");

function get_all_users($dbConnect)
{
    $user = array();
    $select_query = "SELECT user_name FROM users";
    $select_query_execution = mysqli_query($dbConnect, $select_query);

    while($users = mysqli_fetch_array($select_query_execution)){
        $user[] = $users;
    }
    echo json_encode($user);
    // use the following code to access the elements
    // print($user[0]["user_name"]);
}

$all_users = get_all_users($dbConnect);
