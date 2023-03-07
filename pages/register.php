<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Git collab | Register</title>
    <link rel="stylesheet" href="../styles/styles.css">
</head>
<body>
    <?php require './partials/outside_nav.php'; ?>
    <main>
        <div class="container">
            <section>
                <form action="../processes/register.php" id="registration_form" method="POST">
                    <div class="form_header">
                        <h3>Registration form</h3>
                    </div>
                    <div class="input_container">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username">
                    </div>
                    <div class="input_container">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password">
                    </div>
                    <div class="input_container">
                        <label for="confirm_password">Confirm password</label>
                        <input type="password" id="confirm_password" name="confirm_password">
                    </div>
                    <div>
                        <button type="submit">Create account</button>
                    </div>
                    <div class="feedback_container <?php if(isset($_GET['msg'])) echo 'show'; ?>">
                        <p><?php if(isset($_GET['msg'])) echo base64_decode($_GET['msg']); ?></p>
                    </div>
                    <div class="redirection">
                        <p>Already have an account? <a href="./login.php" style="color: blue">Login here</a></p>
                    </div>
                </form>
            </section>
        </div>
    </main>
    <?php require './partials/footer.php'; ?>
</body>
<script src="JsController/validator.js"></script>
</html>