<!-- handles the following table -->
<?php
// checks if the user is logged in
require_once("./in.php");

// includes the connection file
require_once("./db.php");

// get the user's id
$user_id = $_SESSION['user_id'];

insert_following($user_id, $author_id, $dbConnect);
function insert_following($user_id, $author_id, $dbConnect){
    // checks if the author_id and the user_id are the same
    $create_query = "INSERT INTO `following`(`user_id`, `author_id`) VALUES ($user_id,$author_id)";
    $create_query_execution = mysqli_query($dbConnect, $create_query);

    if ($create_query_execution) {
        return "True";
    }else {
        return "False";
    }
}