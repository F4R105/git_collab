<?php
require_once("./in.php");
require_once("./db.php");

$heading = $_POST['heading'];
$blog = $_POST['blog'];

if (empty($heading) && empty($blog)) {
    header("location: ../pages/blog_create.php");
    die();
}

create_blog($dbConnect, $heading, $blog);

function create_blog($dbConnect, $heading, $blog)
{
    if (validate_heading($heading) && validate_blog($blog)) {
        $user_id = $_SESSION['user_id'];

        $create_query = "INSERT INTO blogs (heading, content, user_id) VALUES ('$heading', '$blog', '$user_id')";
        $create_query_execution = mysqli_query($dbConnect, $create_query);
        if ($create_query_execution) {
            $msg = "Blog created succesfully";
            header("location: ../pages/blog_create.php?msg=$msg");
        } else {
            $msg = "Oops! Something wen't wrong";
            header("location: ../pages/blog_create.php?msg=$msg");
        }
    } else {
        $msg = "Oops! Something wen't wrong";
        header("location: ../pages/blog_create.php?msg=$msg");
    }
}

function validate_heading($heading)
{
    if (strlen($heading) > 60) {
        $msg = "The heading is too long!";
        header("location: ../pages/blog_create.php?msg=$msg");
        die();
    } else {
        return true;
    }
}

function validate_blog($blog)
{
    if (strlen($blog) > 640) {
        $msg = "The blog post is too long!";
        header("location: ../pages/blog_create.php?msg=$msg");
        die();
    } else {
        return true;
    }
}
