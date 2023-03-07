<?php
require_once("../processes/db.php");

function get_all_users($dbConnect)
{
    $select_query = "SELECT * FROM users";
    $select_query_execution = mysqli_query($dbConnect, $select_query);

    $users = mysqli_fetch_array($select_query_execution);
    return $users;
}

$all_users = get_all_users($dbConnect);
