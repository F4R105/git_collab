<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Git collab | Login</title>
    <link rel="stylesheet" href="../styles/styles.css">
</head>
<body>
    <?php require './partials/outside_nav.php'; ?>
    <main>
        <div class="container">
            <section>
                <form action="../processes/login.php" id="login_form" method="POST">
                    <div class="form_header">
                        <h3>Login form</h3>
                    </div>
                    <div class="input_container">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username">
                    </div>
                    <div class="input_container">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password">
                    </div>
                    <div>
                        <button type="submit">Login</button>
                    </div>
                    <div class="feedback_container" style="opacity: 0">
                        <p>Wrong email or password</p>
                    </div>
                    <div class="redirection">
                        <p>Don't have an account yet? <a href="./register.php" style="color: blue">Register here</a></p>
                    </div>
                </form>
            </section>
        </div>
    </main>
    <?php require './partials/footer.php'; ?>
</body>
</html>