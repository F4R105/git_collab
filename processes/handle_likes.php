<!-- inserts the likes to the likes table -->
<?php
// checks if the user is logged in
require_once("./in.php");

// includes the connection file
require_once("./db.php");

// get the user's id
$user_id = $_SESSION['user_id'];
print($user_id);
insert_likes($user_id, $blog_id, $dbConnect);
function insert_likes($user_id, $blog_id, $dbConnect){
    // checks if the blog_id and the user_id are the same
    if ($user_id == $blog_id) {
        $msg = base64_encode("you can't like your own post!");
        header("location: ../pages/blogs.php?msg=$msg");
    }else {
        $create_query = "INSERT INTO `likes`(`user_id`, `blog_id`) VALUES ('$user_id','$blog_id')";
        $create_query_execution = mysqli_query($dbConnect, $create_query);
        // if ($create_query_execution) {
        //     $msg = base64_encode("something went wrong");
        //     header("location: ../pages/blogs.php?msg=$msg");
        // } else {
        //     $msg = base64_encode("something went wrong");
        //     header("location: ../pages/blogs.php?msg=$msg");
        // }
    }
}