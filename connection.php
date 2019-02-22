<?php

session_start();
$usrname = "";
$email="";
$servername ="localhost";
$username="root";
$password="24march1997";
$dbname="EMPLOYEES";
$db = mysqli_connect($servername,$username,$password,$dbname);

$errors = array();

// REGISTER PART
if (isset($_POST['reg_user'])) {
  $usrname = mysqli_real_escape_string($db, $_POST['usrname']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // by adding (array_push()) corresponding error unto $errors array
  if (empty($usrname)) { array_push($errors, "usrname is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
  array_push($errors, "The two passwords do not match");
  }
  if(strlen($password_1)<6) {array_push($errors, "Password too small");}

  // first check the database to make sure 
  // a user does not already exist with the same usrname and/or email
  $user_check_query = "SELECT * FROM users WHERE usrname='$usrname' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['usrname'] === $usrname) {
      array_push($errors, "usrname already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    $password = md5($password_1);//encrypt the password before saving in the database

    $query = "INSERT INTO users (usrname, email_id, password) 
          VALUES('$usrname', '$email', '$password')";
    mysqli_query($db, $query);
    $_SESSION['usrname'] = $usrname;
    $_SESSION['success'] = "You are now logged in";
    header('location: index.php');
  }
}

//login part
if (isset($_POST['login_user'])){
    $usrname = mysqli_real_escape_string($db, $_POST['usrname']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
      if (empty($usrname)) {
        array_push($errors, "usrname is required");
      }
      if (empty($password)) {
        array_push($errors, "Password is required");
      }

      if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM users WHERE usrname='$usrname' AND password='$password'";
        $result = mysqli_query($db, $query);
        if (mysqli_num_rows($result) == 1) {
          $_SESSION['usrname'] = $usrname;
          header('location: index.php');
        }else {
          array_push($errors, "Wrong usrname/password combination");
        }
        }
      }
?>





