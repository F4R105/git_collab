<?php
    require_once("../processes/in.php");
    require_once("../processes/db.php");
    ini_set ('display_errors', 1);
    ini_set ('display_startup_errors', 1);
    error_reporting (E_ALL);

    $user_id = $_SESSION["user_id"];
    $query = "SELECT * FROM blogs WHERE user_id='$user_id'";
    $fetch_blogs = mysqli_query($dbConnect, $query);
    $no_of_blogs = mysqli_num_rows($fetch_blogs); 

    $query = "SELECT * FROM users WHERE NOT user_id='$user_id' LIMIT 5";
    $fetch_authors = mysqli_query($dbConnect, $query);
    $no_of_authors = mysqli_num_rows($fetch_authors);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Git collab | User</title>
    <link rel="stylesheet" href="../styles/styles.css">
</head>
<body>
    <?php require './partials/inside_nav.php'; ?>
    <main id="user_account" class="unscrollable_body">
        <div class="container">
            <section id="user_dashboard" class="sticky_header_container">
                <div id="header">
                    <h1>My blogs</h1>
                    <div id="information">
                        <div class="info no_of_blogs">
                            Number of blogs: <span><?php echo $no_of_blogs; ?></span>
                        </div>
                        <div class="info no_of_blogs">
                            Number of followers: <span>10</span>
                        </div>
                    </div>
                </div>

                <div id="blogs_container">

                    <!-- IF START -->
                    <?php if($no_of_blogs == 0){ ?>
                        <div id="emptyblogs">
                            <p>You do not have any blog</p>
                            <a href="./blog_create.php">Click here to create a blog</a>
                        </div>
                    <!-- ELSE -->
                    <?php } else { ?>
                        <!-- LOOP START -->
                        <?php while($blog = mysqli_fetch_array($fetch_blogs)){ ?>
                            <div class="blog">
                                <div class="verify_delete show">
                                    <p>Are you sure?</p>
                                    <div class="verification_buttons">
                                        <button class="confirmDeleteBtn"><a href="../processes/delete_blog.php?blog_id=<?php echo $blog['blog_id']; ?>">Delete</a></button>
                                        <button class='cancelDeleteBtn'>Cancel</button>
                                    </div>
                                </div>
                                <h3><?php echo $blog['heading']; ?></h3>
                                <div class="blog_retension">
                                    <div class="info number_of_likes">
                                        Number of Likes: <span>150</span>
                                    </div>
                                </div>
                                <p><?php echo $blog['content']; ?></p>
                                <div class="blog_buttons">
                                    <button class="deleteBtn">Delete</button>
                                    <button class="editBtn"><a href="./blog_edit.php?blog_id=<?php echo $blog['blog_id'];?>">Edit</a></button>
                                </div>
                            </div>
                        <?php }; ?>
                        <!-- LOOP END -->
                    <?php }; ?>
                    <!-- IF END -->
                </div>
            </section>
            <section id="best_authors_list">
                <h4>Best authors</h4>
                <div id="authors_container">

                    <?php if($no_of_authors == 0){ ?>
                        <div class="emptyauthors">
                            <span>No authors available</span>
                        </div>
                    <?php } else { ?>
                        <?php while($author = mysqli_fetch_array($fetch_authors)){ ?>
                            <a class="user" href="./author.php?author_id=<?php echo $author['user_id']; ?>">
                                <span><?php echo $author['user_name']; ?></span>
                                <div>Followers: <span>100</span></div>
                            </a>
                        <?php }; ?>
                        <a href="./authors.php" id="viewAllAuthorsBtn">View all authors</a>
                    <?php }; ?>

                </div>
                
            </section>
        </div>
    </main>
</body>
<script src="./JsController/bloghandler.js"></script>
</html>