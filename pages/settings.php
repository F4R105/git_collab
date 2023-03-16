<?php
require_once("../processes/in.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Git collab | Settings</title>
    <link rel="stylesheet" href="../styles/styles.css">
</head>
<body>
    <?php require './partials/inside_nav.php'; ?>
    <main id="settings">
        <div class="container">
            <section>
                <form action="../processes/update_account.php" id="settings_form" method="POST">
                    <div class="form_header">
                        <h3>Settings</h3>
                    </div>
                    <div class="input_container">
                        <label for="username">Change username</label>
                        <input type="text" id="username" name="username">
                    </div>
                    <div class="input_container">
                        <label for="password">Change password</label>
                        <input type="password" id="password" name="password">
                    </div>
                    <div class="input_container">
                        <label for="confirm_password">Confirm password</label>
                        <input type="password" id="confirm_password" name="confirm_password">
                    </div>
                    <div>
                        <button type="submit">Update account</button>
                    </div>
                    <div class="feedback_container <?php if(isset($_GET['msg'])) echo 'show'; ?>">
                        <p><?php if(isset($_GET['msg'])) echo base64_decode($_GET['msg']); ?></p>
                    </div>
                </form>
            </section>
            <section>
                <form action="../processes/delete_account.php" id="settings_form" method="POST">
                    <div class="form_header">
                        <h3>Delete account</h3>
                    </div>
                    <div>
                        <button type="submit">Delete account</button>
                    </div>
                    <div class="feedback_container <?php if(isset($_GET['msg'])) echo 'show'; ?>">
                        <p><?php if(isset($_GET['msg'])) echo base64_decode($_GET['msg']); ?></p>
                    </div>
                </form>
            </section>
        </div>
    </main>
</body>
<script src="./JsController/bloghandler.js"></script>
</html>