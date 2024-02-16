
<?php 
session_start();
$_SESSION["location"] = "login";


include ('server.php');?>
<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Signin</title>
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/json2@20160511/dist/json2.min.js"></script>
  <link rel="stylesheet" href="css/sign-in.css">
  <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body class="d-flex align-items-center py-4 bg-body-tertiary">

  <main class="container">
    <div class="row justify-content-center">
      <div class="col-lg-4 col-md-6">
        <div class="card">
          <div class="card-body">
            <form class="needs-validation" id="loginForm" action="sign-in.php" method="post" novalidate>
              <h2 class="text-center" style="color: #181F6A; font-weight: bold; padding-top: 20px;">Multi<span style="color: #009F7F;">Vendor</span></h2> <br>
              <h1 class="h3 mb-3 fw-normal">Login</h1>            
              <div class="form-floating">
              <?php include ("errors.php");?>
                <input type="email" id="username" class="form-control" id="floatingInput" placeholder="name@example.com" name="username"
                  required>
                <label for="floatingInput">Email address</label>
                <div class="invalid-feedback">
                  Enter valid email
                </div>
              </div> <br>
              <div class="form-floating">
                <input type="password" id="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" required>
                <label for="floatingPassword">Password</label>
                <div class="invalid-feedback">
                  Enter valid password
                </div>
              </div>

              <div class="form-check text-start my-3">
                <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  Remember me 
                </label>
              </div>
              <button style="background-color: #009F7F; color: #fff;" class="btn w-100 py-2" type="submit" name="login_user">Login</button>
              <br><br>
              <p>Don't have any account? <a href="register.php?login=1" style="color: #009F7F;">Register as Shop Owner</a></p>
            </form>
          </div>
        </div>
      </div>
    </div>
  </main>
</body>

</html>
