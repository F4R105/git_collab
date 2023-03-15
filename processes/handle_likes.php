<!-- inserts the likes to the likes table -->
<?php
// checks if the user is logged in
require_once("./in.php");

// get the user's id
$user_id = $_SESSION['user_id'];
print($user_id);