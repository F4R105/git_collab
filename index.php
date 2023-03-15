<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Git collab | Home</title>
    <link rel="stylesheet" href="./styles/styles.css">
</head>
<body>
    <nav>
        <div class="container">
            <div id="logo">
                <a href="./index.php">Git collab</a>
            </div>
            <ul>
                <li><a href="./pages/login.php">Login</a></li>
                <li><a href="./pages/register.php">Register</a></li>
            </ul>
        </div>
    </nav>
    <main id="index">
        <section id="hero">
            <div class="container">
                <h1>Welcome to git collab</h1>
                <p>Writer's favourite platform</p>
                <div id="hero_buttons">
                    <a href="./pages/register.php">Create account</a>
                    <!-- <a href="./pages/register.php">Create account</a> -->
                </div>
            </div>
        </section>
        <section id="middle">
            <div class="container">
                <h2>Publish your experience on your own way</h2>
                <div>
                    <div class="info">
                        <h3>Authors</h3>
                        <span>235</span>
                    </div>
                    <div class="info">
                        <h3>Blogs</h3>
                        <span>4530</span>
                    </div>
                </div>
            </div>
        </section>
        <section id="blogs">
            <div class="container">
                <!-- <h1>Most liked blogs</h1> -->
            </div>
        </section>
        <section id="authors">
            <div class="container">
                <!-- <h1>Most followed authors</h1> -->
            </div>
        </section>
    </main>
    <?php require './pages/partials/footer.php'; ?>
</body>
</html>