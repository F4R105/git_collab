<?php
require_once("../processes/in.php");
require_once("../processes/db.php");

$select_query = "SELECT blogs.heading, blogs.content, blogs.user_id, blogs.time, users.user_name FROM blogs JOIN users ON blogs.user_id  =  users.user_id ORDER BY blogs.time DESC";
$select_query_execution = mysqli_query($dbConnect, $select_query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Git collab | Blogs</title>
    <link rel="stylesheet" href="../styles/styles.css">
</head>
<body>
    <?php require './partials/inside_nav.php'; ?>
    <main id="blogs" class="unscrollable_body">
        <div class="container">
            <section class="sticky_header_container">
                <div id="header">
                    <h1>All Blogs</h1>
                </div>

                <div id="blogs_container">
                    <?php while ($blog_post = mysqli_fetch_assoc($select_query_execution)) { ?>
                        <div class="blog">
                            <h3><?php echo $blog_post["heading"] ?></h3>
                            <div class="blog_retension">
                                <div class="info number_of_likes">
                                    Author: <span><?php echo $blog_post["user_name"] ?></span>
                                </div>
                                <div class="info number_of_likes">
                                    Number of Likes: <span>150</span>
                                </div>
                            </div>
                            <p><?php echo $blog_post["content"] ?></p>
                            <div class="blog_buttons">
                                <button class="likeBtn">Like</button>
                                <button class="followAuthorBtn">Follow author</button>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </section>
        </div>
    </main>
</body>
<script src="./JsController/bloghandler.js"></script>
</html>