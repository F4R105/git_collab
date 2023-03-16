<?php
    require_once("../processes/in.php");
    require_once("../processes/db.php");
    ini_set ('display_errors', 1);
    ini_set ('display_startup_errors', 1);
    error_reporting (E_ALL);

    $author_id = $_GET["author_id"];

    $query = "SELECT * FROM users WHERE user_id='$author_id'";
    $fetch_author = mysqli_query($dbConnect, $query);
    $author = mysqli_fetch_array($fetch_author);
    $author_name = $author['user_name'];

    $query = "SELECT * FROM blogs WHERE user_id='$author_id'";
    $fetch_blogs = mysqli_query($dbConnect, $query);
    $no_of_blogs = mysqli_num_rows($fetch_blogs); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Git collab | Author</title>
    <link rel="stylesheet" href="../styles/styles.css">
</head>
<body>
    <?php require './partials/inside_nav.php'; ?>
    <main id="author" class="unscrollable_body">
        <div class="container">
            <section id="author_info">
                <div id="information">
                    <h1 class="author_name"><?php echo $author_name; ?></h1>
                    <div class="info no_of_blogs">
                        Number of blogs: <span><?php echo $no_of_blogs; ?></span>
                    </div>
                    <div class="info no_of_followers">
                        Number of followers: <span>10</span>
                    </div>
                </div>
                <button>Follow author</button>
            </section>
            <section id="author_blogs" class="sticky_header_container">
                <div id="header">
                    <h1><?php echo $author_name; ?></h1>
                    <div id="information">
                        <div class="info no_of_blogs">
                            Number of blogs: <span><?php echo $no_of_blogs; ?></span>
                        </div>
                        <div class="info no_of_followers">
                            Number of followers: <span>10</span>
                        </div>
                    </div>
                </div>

                <div id="blogs_container">
                    <?php if($no_of_blogs == 0){ ?>
                        <div id="emptyblogs">
                            <p>There are no blogs posted yet</p>
                        </div>
                    <?php } else { ?>
                        <?php while ($blog = mysqli_fetch_assoc($fetch_blogs)) { ?>
                            <div class="blog">
                                <h3><?php echo $blog['heading']; ?></h3>
                                <div class="blog_retension">
                                    <div class="info number_of_likes">
                                        Number of Likes: <span>150</span>
                                    </div>
                                </div>
                                <p><?php echo $blog['content']; ?></p>
                                <div class="blog_buttons">
                                    <button class="likeBtn">Like</button>
                                </div>
                            </div>
                        <?php }; ?>
                    <?php }; ?>
                </div>
            </section>
        </div>
    </main>
</body>
</html>