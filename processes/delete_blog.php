<?php
require_once("./db.php");
require_once("../processes/in.php");

if (isset($_GET['blog_id'])) {
    $blog_id = $_GET['blog_id'];
} else {
    header("location: ../pages/user_account.php");
    die();
}

delete_blog($dbConnect, $blog_id);

function delete_blog($dbConnect, $blog_id)
{
    $delete_query = "DELETE FROM blogs WHERE blogs.blog_id = $blog_id";
    $delete_query_execution = mysqli_query($dbConnect, $delete_query);

    if ($delete_query_execution) {
        $msg = "The post was deleted successfully!";
        header("location: ../pages/user_account.php?msg=$msg");
        die();
    } else {
        $msg = "Something went wrong, the post deletion failed!";
        header("location: ../pages/user_account.php?msg=$msg");
        die();
    }
}
