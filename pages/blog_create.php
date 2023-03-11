<?php
require_once("../processes/in.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Git collab | Create blog</title>
    <link rel="stylesheet" href="../styles/styles.css">
</head>
<body>
    <?php require './partials/inside_nav.php'; ?>
    <main id="blog_create">
        <div class="container">
            <section>
                <form action="../processes/create_blog.php" id="blog_creation_form" method="POST">
                    <div class="form_header">
                        <h3>Create new blog</h3>
                    </div>
                    <div class="input_container">
                        <label for="heading">Heading</label>
                        <input type="text" id="heading" name="heading">
                    </div>
                    <div class="input_container">
                        <label for="blog">Paragraph</label>
                        <textarea type="text" id="blog" name="blog" rows=10></textarea>
                    </div>
                    <div>
                        <button type="submit">Create new blog</button>
                    </div>
                    <div class="feedback_container <?php if(isset($_GET['msg'])) echo 'show'; ?>">
                        <p><?php if(isset($_GET['msg'])) echo base64_decode($_GET['msg']); ?></p>
                    </div>
                </form>
            </section>
        </div>
    </main>
</body>
</html>