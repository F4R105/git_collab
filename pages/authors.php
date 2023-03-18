<?php
    require_once("../processes/in.php");
    require_once("../processes/db.php");
    ini_set ('display_errors', 1);
    ini_set ('display_startup_errors', 1);
    error_reporting (E_ALL);

    $user_id = $_SESSION["user_id"];
    $query = "SELECT users.user_id, users.user_name, COUNT(*) as no_of_followers FROM users JOIN following ON users.user_id = following.author_id WHERE NOT users.user_id = '$user_id' GROUP BY following.author_id ORDER BY no_of_followers DESC LIMIT 5";
    $fetch_authors = mysqli_query($dbConnect, $query);
    $no_of_authors = mysqli_num_rows($fetch_authors);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Git collab | Authors</title>
    <link rel="stylesheet" href="../styles/styles.css">
</head>
<body>
    <?php require './partials/inside_nav.php'; ?>
    <main id="authors" class="unscrollable_body">
        <div class="container">
            <section class="sticky_header_container">
                <div id="header">
                    <h1>All Authors</h1>
                </div>

                <div id="authors_container">
                    <?php if($no_of_authors == 0){ ?>
                        <div id="emptyblogs">
                            <p>No authors registered yet</p>
                        </div>
                    <?php } else { ?>
                        <?php while ($author = mysqli_fetch_assoc($fetch_authors)) { ?>
                            <div class="author">
                                <h3 class="author_name"><?php echo $author['user_name']; ?></h3>
                                <div class="author_info">
                                    <div class="info number_of_followers">
                                        Number of followers: <span><?php echo $author['no_of_followers']; ?></span>
                                    </div>
                                </div>
                                <div class="author_buttons">
                                    <a href="./author.php?author_id=<?php echo $author['user_id']; ?>" class="viewAuthorBtn">View Author</a>
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