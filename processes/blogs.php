<?php
require_once("../processes/in.php");
require_once("../processes/db.php");

$select_query = "SELECT blogs.heading, blogs.content, blogs.user_id, blogs.time, users.user_name FROM blogs JOIN users ON blogs.user_id  =  users.user_id ORDER BY blogs.time DESC";
$select_query_execution = mysqli_query($dbConnect, $select_query);

while ($blog_post = mysqli_fetch_assoc($select_query_execution)) { ?>
    <div class="blog">
        <h3><?php echo $blog_post["heading"] ?></h3>
        <div class="blog_retension">
            <div class="info number_of_likes">
                Author: <span><?php echo $blog_post["user_name"] ?></span>
            </div>
            <div class="info number_of_likes">
                Number of Likes: <span>150</span>
            </div>
        </div>
        <p><?php echo $blog_post["content"] ?></p>
        <div class="blog_buttons">
            <button class="likeBtn">Like</button>
            <button class="followAuthorBtn">Follow author</button>
        </div>
    </div>
<?php
}
?>