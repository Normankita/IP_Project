<?php  include ('server.php');?>
<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link rel="stylesheet" href="css/sign-in.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link href="sign-in.css" rel="stylesheet">
</head>

<body class="d-flex align-items-center py-4 bg-body-tertiary">
    <main class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="text-center" style="color: #181F6A; font-weight: bold; padding-top: 20px;">Multi<span
                                style="color: #009F7F;">Vendor</span></h2> <br>
                       

                        <form class="needs-validation" id="registrationForm" action="register.php" method ="post" enctype="multipart/form-data" novalidate>
                            <?php include ('errors.php');?>
                            <div class="form-floating">
                                <input type="text" id="username" class="form-control" value ="<?php echo $username; ?>" name ="username" required>
                                <label for="floatingInput">Username</label>
                                <div class="invalid-feedback">
                                    Please choose a username.
                                </div>
                            </div> <br>
                            

                            <div class="form-group">
                            <input class="form-control" id="uploadfile" type="file" name="uploadfile" value="<?= $folder ?>"   required >
                            <label for="floatingInput">Profile picture</label>
                            </div><br>
                            

                             <div class="form-group">
                                <label for="category">Status</label>
                                <select class="form-control" id="status" name="status">
                                    <option value="Active">Active</option>
                                    <option value="Inactive">Inactive</option>
                                </option>
                            </div> <br>


                            <div class="form-floating">
                                <input type="email" id="email" class="form-control" value ="<?php echo $email; ?>" name ="email" required>
                                <label for="floatingInput">Email</label>
                                <div class="invalid-feedback">
                                    Please choose a correct email.
                                </div>
                            </div> <br>

                            <div class="form-group">
                                <label for="usertype">Type of User</label>
                                <select class="form-control" id="usertype" name="usertype">
                                    <option value="user">Normal User</option>
                                    <option value="Admin">Admin</option>
                                    <option value="Shop Owner">Shop owner</option>
                                </option>
                            </div> <br>


                            <div class="form-floating">
                                <input type="password" id="password" class="form-control" name="password_1" placeholder="Password"
                                    pattern=".{8,}" required>
                                <label for="floatingPassword">Password</label>
                                <div class="invalid-feedback">
                                    Please choose a correct password (at least 8 characters).
                                </div>
                            </div> <br>

                            <div class="form-floating">
                                <input type="password" id="confirmPassword" class="form-control" name="password_2"
                                    placeholder="Confirm Password" pattern=".{8,}" required>
                                <label for="floatingPassword">Confirm Password</label>
                                <div class="invalid-feedback">
                                    Passwords do not match.
                                </div>
                            </div> <br>


                            <button style="background-color: #009F7F; color: #fff;" class="btn w-100 py-2"
                                type="submit" name="reg_user" >Register As shop owner</button>
                            <br><br>
                            <span>already have an account? <a href="sign-in.php">Sign in</a></span>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>