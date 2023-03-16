<!-- NAVBAR FOR PAGES WITHIN PAGES DIRECTORY -->
<!-- for logged in users -->
<nav>
    <div class="container">
        <div id="logo">
            <a href="./user_account.php">Git collab</a>
        </div>
        <div id="user_nav">
            <ul>
                <li><a href="./blog_create.php">New blog</a></li>
            </ul>
            <div id="user_avatar">
                <span><?php echo substr($_SESSION['username'],0,2); ?></span>
                <div id="dropdown">
                    <a href="./user_account.php">Dashboard</a>
                    <a href="./authors.php">Authors</a>
                    <a href="./blogs.php">Blogs</a>
                    <a href="./settings.php">Settings</a>
                    <a href="../processes/logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>
</nav>

