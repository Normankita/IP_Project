<?php
// Process delete operation after confirmation
if(isset($_POST["category_ID"]) && !empty($_POST["category_ID"])){
    // Include config file
    require_once "config.php";

    //include vaiables

    $senname = "category_ID";
    $surename = "category";
    $href="../category.php";
    
    // Prepare a delete statement
    $sql = "DELETE FROM categories WHERE category_ID = ?";
    
    if($stmt = mysqli_prepare($link, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
        // Set parameters
        $param_id = trim($_POST["category_ID"]);
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            // Records deleted successfully. Redirect to landing page
            header("location: ../category.php");
            exit();
        } else{
            echo "Oops! Something went wrong. couldn't delete, Please try again later.";
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
    
    // Close connection
    mysqli_close($link);
} 
 

//for products starts here
elseif(isset($_POST["product_ID"]) && !empty($_POST["product_ID"])){
    // Include config file
    require_once "config.php";

    //reset variables 

    $senname = "product_ID";
    $surename = "product";
    $href="../products.php";
    
    // Prepare a delete statement
    $sql = "DELETE FROM products WHERE product_ID = ?";
    
    if($stmt = mysqli_prepare($link, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
        // Set parameters
        $param_id = trim($_POST["product_ID"]);
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            // Records deleted successfully. Redirect to landing page
            header("location: ../products.php");
            exit();
        } else{
            echo "Oops! Something went wrong. couldn't delete, Please try again later.";
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
    
    // Close connection
    mysqli_close($link);
}

//for products starts here
elseif(isset($_POST["user_ID"]) && !empty($_POST["user_ID"])){
    // Include config file
    require_once "config.php";

    //reset variables 

    $senname = "user_ID";
    $surename = "user";
    $href="../users.php";
    
    // Prepare a delete statement
    $sql = "DELETE FROM Users WHERE user_ID = ?";
    
    if($stmt = mysqli_prepare($link, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
        // Set parameters
        $param_id = trim($_POST["user_ID"]);
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            // Records deleted successfully. Redirect to landing page
            header("location: ../users.php");
            exit();
        } else{
            echo "Oops! Something went wrong. couldn't delete, Please try again later.";
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
    
    // Close connection
    mysqli_close($link);
}



//for shops starts here
elseif(isset($_POST["shop_ID"]) && !empty($_POST["shop_ID"])){
    // Include config file
    require_once "config.php";

    //reset variables 

    $senname = "shop_ID";
    $surename = "Shop";
    $href="../shops.php";
    
    // Prepare a delete statement
    $sql = "DELETE FROM shops WHERE shop_ID = ?";
    
    if($stmt = mysqli_prepare($link, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
        // Set parameters
        $param_id = trim($_POST["shop_ID"]);
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            // Records deleted successfully. Redirect to landing page
            header("location: ../shops.php");
            exit();
        } else{
            echo "Oops! Something went wrong. couldn't delete, Please try again later.";
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
    
    // Close connection
    mysqli_close($link);
}



elseif(isset($_GET["category_ID"])){
    $senname = "category_ID";
    $surename = "category";
    $href="../category.php";
}
elseif(isset($_GET["product_ID"])){
    $senname = "product_ID";
    $surename = "product";
    $href="../products.php";
}
elseif(isset($_GET["user_ID"])){
    $senname = "user_ID";
    $surename = "user";
    $href="../users.php";
}
elseif(isset($_GET["shop_ID"])){
    $senname = "shop_ID";
    $surename = "shop";
    $href="../shops.php";
}

else{
    // Check existence of id parameter
    if(empty(trim($_GET["category_ID"])) && empty(trim($_GET["product_ID"]))&& empty(trim($_GET["user_ID"]))&& empty(trim($_GET["shop_ID"]))){
        // URL doesn't contain id parameter. Redirect to error page
        header("location: error.php");
        exit();
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete Record</title>
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
                    <h2 class="mt-5 mb-3">Delete Record</h2>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="alert alert-danger">
                            <?php
                            if(isset($_GET['product_ID'])){
                                echo '<input type="hidden" name="'.$senname.'" value="'.trim($_GET["product_ID"]).'"/>';
                            }
                            if(isset($_GET['category_ID'])){
                                echo '<input type="hidden" name="'.$senname.'" value="'.trim($_GET["category_ID"]).'"/>';
                            }
                            if(isset($_GET['user_ID'])){
                                echo '<input type="hidden" name="'.$senname.'" value="'.trim($_GET["user_ID"]).'"/>';
                            }
                            ?>
                            <p>Are you sure you want to delete this <?php echo $surename; ?>?</p>
                            <p>
                                <input type="submit" value="Yes" class="btn btn-danger">
                                <a href="<?= $href; ?>" class="btn btn-secondary">No</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>