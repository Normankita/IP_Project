<?php
session_start();
include ('../config.php');
// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = trim($_POST["username"]);
  $email = trim($_POST["email"]);
  $password_1 = trim($_POST["pasword_1"]);
  $password_2 = trim($_POST["pasword_2"]);
  $status = trim($_POST["status"]);
  $usertype = trim($_POST["usertype"]);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($status)) { array_push($errors, "status is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
        array_push($errors, "The two passwords do not match");
  }


 

$filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "../../../img/dp/" . $filename;
    // moving the uploaded image into the folder: img    
    if (move_uploaded_file($tempname, $folder)) {
        echo "<h3>  Image uploaded successfully!</h3>";
    }
    else {
        echo "<h3>Failed to upload image!</h3>";
    }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM Users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($link, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    elseif ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  $password = md5($password_1);//encrypt the password before saving in the database
        // $password = $password_1;//unencrypted



// Prepare an update statement
$sql = "INSERT INTO Users (username, display, email, usertype, userpassword, userstatus) VALUES (?, ?, ?, ?, ?, ?)";
         
if($stmt = mysqli_prepare($link, $sql)){
    // Bind variables to the prepared statement as parameters
    mysqli_stmt_bind_param($stmt, "ssssss", $param_name, $param_display, $param_email, $param_usertype, $param_userpassword, $param_userstatus);
    
  // Set parameters
  $param_name = $username;
  $param_display = $filename;
  $param_email = $email;
  $param_usertype = $usertype;
  $param_userpassword=$password;
  $param_userstatus=$status;
    
    // Attempt to execute the prepared statement
    if(mysqli_stmt_execute($stmt)){
        // Records created successfully. Redirect to landing page
        header("location:../../users.php");
        exit();
    } else{
        echo "Oops! Something went wrong. Please try again later.";
    }

  }   
  
  else{
    header("location: ../error.php");
  }
  
}

// LOGIN USER
if (isset($_POST['login_user'])) {
    $username = mysqli_real_escape_string($link, $_POST['username']);
    $password = mysqli_real_escape_string($link, $_POST['password']);
  
    if (empty($username)) {
          array_push($errors, "Username is required");
    }
    if (empty($password)) {
          array_push($errors, "Password is required");
    }
  
    if (count($errors) == 0) {
          $password = md5($password);//encrypts to check 
          $query = "SELECT * FROM Users WHERE username='$username' AND userpassword='$password'";
          $results = mysqli_query($link, $query);
          if (mysqli_num_rows($results) == 1) {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: admin/category.php');
          }else {
                  array_push($errors, "Wrong username/password combination");
          }
    }
  }
  
  ?>