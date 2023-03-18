<?php
require_once("../processes/in.php");
require_once("../processes/db.php");
ini_set ('display_errors', 1);
ini_set ('display_startup_errors', 1);
error_reporting (E_ALL);

$user_id = $_SESSION['user_id'];

$select_query = 
"SELECT 
blogs.blog_id,
blogs.heading,
blogs.content,
blogs.user_id,
users.user_name,
COUNT(*) as no_of_likes
FROM blogs
JOIN likes
ON blogs.blog_id = likes.blog_id
JOIN users
ON blogs.user_id = users.user_id
WHERE NOT users.user_id='$user_id'
GROUP BY blog_id
ORDER BY no_of_likes DESC";

$select_query_execution = mysqli_query($dbConnect, $select_query);
$no_of_blogs = mysqli_num_rows($select_query_execution);

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
                    <?php if($no_of_blogs == 0){ ?>
                        <div id="emptyblogs">
                            <p>There are no blogs posted yet</p>
                        </div>
                    <?php } else { ?>
                        <?php while ($blog_post = mysqli_fetch_assoc($select_query_execution)) { ?>
                            <div class="blog">
                                <h3><?php echo $blog_post["heading"] ?></h3>
                                <div class="blog_retension">
                                    <div class="info number_of_likes">
                                        Author: <span><?php echo $blog_post["user_name"] ?></span>
                                    </div>
                                    <div class="info number_of_likes">
                                        Number of Likes: <span><?php echo $blog_post['no_of_likes']; ?></span>
                                    </div>
                                </div>
                                <p><?php echo $blog_post["content"] ?></p>
                                <div class="blog_buttons">
                                    <button class="likeBtn">Like</button>
                                    <button class="followAuthorBtn">Follow author</button>
                                </div>
                            </div>
                        <?php }; ?>
                    <?php }; ?>
                </div>
            </section>
        </div>
    </main>
</body>
<script src="./JsController/bloghandler.js"></script>
</html>