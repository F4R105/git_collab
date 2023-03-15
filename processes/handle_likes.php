<!-- inserts the likes to the likes table -->
<?php
// checks if the user is logged in
require_once("./in.php");

// includes the connection file
require_once("./db.php");

// get the user's id
$user_id = $_SESSION['user_id'];

// function call
insert_likes($user_id, 6, $dbConnect);

function insert_likes($user_id, $blog_id, $dbConnect){
    // checks if the blog_id and the user_id are the same
    $create_query = "INSERT INTO `likes`(`user_id`, `blog_id`) VALUES ($user_id,$blog_id)";
    $create_query_execution = mysqli_query($dbConnect, $create_query);

    if ($create_query_execution) {
        return "True";
    }else {
        return "False";
    }
}