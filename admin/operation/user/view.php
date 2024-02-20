<?php  include ('server.php');
if(isset($_GET['user_ID']) && !empty($_GET['user_ID'])){
    $user_ID= trim($_GET['user_ID']);
    $sql = "SELECT * FROM Users WHERE user_ID = ? ";
    if($stmt = mysqli_prepare($link, $sql)){
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        $param_id = $user_ID;
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
            if(mysqli_num_rows($result)== 1){
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                $user_id = $row['user_ID'];
                $username = $row['username'];
                $folder = $row ['display'];
                $email = $row ['email'];
                $usertype = $row['usertype'];
                $userstatus = $row['userstatus'];
                
            }
            else{
                header("location: ../error.php");
                exit();
            }
        }else{
            echo 'Oops, something went wronng, please try again later';
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($link);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Record</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="mt-5 mb-3">View User Details</h1>
                    <div class="form-group">
                         <img style="height: 100px; width: 200px;;" src="../../../img/dp/<?= $folder ?>" alt="icon">
                    </div>
                    <div class="form-group">
                        <label>User Details</label>
                        <p><b><?= $username?></b></p>
                    </div>
                    <div class="form-group">
                        <label>User Status</label>
                        <p><b><?= $userstatus?></b></p>
                    </div>
                    <div class="form-group">
                        <label>User Type</label>
                        <p><b><?= $usertype ?></b></p>
                    </div>
                    <p><a href="../../users.php" class="btn btn-primary">Back</a></p>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>