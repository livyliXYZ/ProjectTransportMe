<?php
session_start();

if(isset($_SESSION['userID'])!=""){
    header("Location: home.php");
}

if(isset($_POST['regsubmit'])){
  $username = $_POST['email'];
  $password = $_POST['password'];
  $firstname = $_POST['firstName'];
  $lastname = $_POST['lastName'];

//echo $email;
//echo $password;
//echo $firstname;
//echo $lastname;
  if(!preg_match('/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/', $username)){
    echo "invalid email address";
	exit('Invalid Email<a href="javascript:history.back(-1);">back</a>');
    }

  if(strlen($password) < 6){
    echo "password length is less than 6 character";
	exit('Invalid password<a href="javascript:history.back(-1);">back</a>');
    }

  include 'connection.php';

  $check_query = mysql_query("SELECT userID FROM users WHERE email = '$username' limit 1");
  if(mysql_fetch_array($check_query)){
    echo $username, 'already exites<a href="javascript:history.back(-1);">back</a>';
    exit;
    }

  $insert_sql = "INSERT INTO users(email, password, firstName, lastName)VALUES('$username','$password','$firstname','$lastname')";

  if(mysql_query($insert_sql, $conn)){
    echo ("<SCRIPT LANGUAGE='JavaScript'>
            window.location.href='home.php'
            </SCRIPT>");
    exit();
  }else {
      echo $insert_sql;
	  echo 'Sorry, sign up failed ',mysql_error(),'<br />';
	  echo '<a href="javascript:history.back(-1);">Try Again</a>';
  }
}else{
    exit('illegal access');
}
?>
