<?php
//Start a session and include the confic for connecting to the database
session_start();
include('./conf/dbconnect.php');

//Set the error variable so a undeclared variable exception doesn't occur
$err = "";

//If the form has been submitted and sends the post method...
if($_SERVER['REQUEST_METHOD'] == "POST"){

  //escape the username and password fields - avoids SQL injection
  $user = mysqli_real_escape_string($conn,$_POST['user']);
  $pass = mysqli_real_escape_string($conn,$_POST['pass']);

  //Run a query to find the row where username and password matches
  $qry = "SELECT * FROM users WHERE username='$user' and password='$pass'";
  $sql = mysqli_query($conn,$qry);

  //Count the number of rows
  $numrows = mysqli_num_rows($sql);

//If the number of rows the query produces is equal to 1...
if($numrows == 1){

  //Set the session username to username variable and redirect to home page
  $_SESSION['user'] = $user;
  header('location:./home.php');

//If not, set the error message to display on the form
}else{
  $err = "Your login details are incorrect!";
}
}

if(isset($_SESSION['user'])){
  header('location:./home.php');
}
?>