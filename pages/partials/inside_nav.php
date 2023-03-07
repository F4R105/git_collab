<!-- NAVBAR FOR PAGES WITHIN PAGES DIRECTORY -->
<!-- for logged in users -->
<nav>
    <div class="container">
        <div id="logo">
            <a href="../index.php">Git collab</a>
        </div>
        <div id="user_nav">
            <ul>
                <li><a href="../processes/logout.php">Logout</a></li>
            </ul>
            <div id="user_avatar">
                <span><?php echo substr($_SESSION['username'],0,2); ?></span>
            </div>
        </div>
    </div>
</nav>