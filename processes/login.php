<?php
require_once("./db.php");
//initiation of script to handle login activities

function handleLogin($email, $password)
{ 
 global $dbConnect;

 if($email || $password){
 //Select relevant credential from database
$credential = "SELECT user_name, password from users WHERE user_name = '$email'";

//to run sql query direct to our database
$query = mysqli_query($dbConnect, $credential);


//to check if a runed query do not return null and fetch its information
if ($query) {
$data = mysqli_fetch_array($query);
//check if runed query returned with information or not


if ($data) {
//if  fetch return true it means has data
//lets us compaire a given data with user password


$pass = $data['password'];
if (password_verify($password, $pass)) {
//direct user to its account
header("location:../pages/user_account.html");
} 
else {
$msg =  "sorry you enter wrong credential repeate again please";
header("location:../pages/login.html?msg=$msg");
}


}
 else {
$msg =  "sorry you enter wrong credential repeate again please";
header("location:../pages/login.html?msg=$msg");
}
} else {
echo "Some thing wrong when run your sql query";
}

 }
 else{
$msg =  "please make sure all filed is not empty";
header("location:../pages/login.html?msg=$msg");
 }

}

handleLogin($_POST['username'], $_POST['password']);


