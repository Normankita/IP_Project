<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values for category
$Cat_Name = $Details = $icon = $cat_group = "";
$Cat_Name_err = $Details_err = $icon_err=$cat_group_err = "";

// Define variables and initialize with empty values for products
$Prod_Name = $Details = $image = $prod_group = "";
$Prod_Name_err = $Details_err = $image_err = $prod_group_err= "";
 
// Processing form data when form is submitted
if(($_SERVER["REQUEST_METHOD"] == "POST") && (isset($_POST["Cat_Name"]))){

 //variable for displaing name 
 $dispname =  "Category";
 $dispi = "icon";

 // variables for error messages
 $name_err = $Cat_Name_err;
 $group_err = $cat_group_err;
 $disp_err = $icon_err;

 //variables fro diplaying input
 $itemName = $Cat_Name;
 $disp = $icon;
 $group= $cat_group;

 //send to post php
 $senname = "Cat_Name";
 $sengroup = "Cat_group";
 $sendisp = "icon";
 $senid ="category_ID";
 $href = "../category.php";

    // Validate Cat_Name
    $input_name = trim($_POST["Cat_Name"]);
    if(empty($input_name)){
        $Cat_Name_err = "Please enter a Category name.";
    } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $name_err = "Please enter a valid Category Name.";
    } else{
        $Cat_Name = $input_name;
    }

    //Validate category group
    $input_Cat_group = trim($_POST["Cat_group"]);
    if(empty($input_Cat_group)){
        $Cat_group_err = "Please enter a Category group.";
    } elseif(!filter_var($input_Cat_group, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $Cat_group_err = "Please enter a valid Category Group.";
    } else{
        $Cat_group = $input_Cat_group;
    }
    
    // Validate Details
    $input_details = trim($_POST["Details"]);
    if(empty($input_details)){
        $Details_err = "Please enter details";     
    } elseif(!filter_var($input_details, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $name_err = "Please enter valid Category Details.";}
     else{
        $Details = $input_details;
    }
    
    // Validate icon
    $input_icon = trim($_POST["icon"]);
    if(empty($input_icon)){
        $icon_err = "Please upload and icon you want to use";     
    } else{
        $icon = $input_icon;
    }
    
    // Check input errors before inserting in database
    if(empty($Cat_Name_err) && empty($Details_err) && empty($Cat_group_err) &&empty($icon_err)){
        // Prepare an insert statement
        $sql = "INSERT INTO categories (Cat_Name, Details, icon, cat_group) VALUES (?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssss", $param_name, $param_Details, $param_icon, $param_group);
            
          // Set parameters
          $param_name = $Cat_Name;
          $param_Details = $Details;
          $param_icon = $icon;
          $param_group = $Cat_group;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location: ../category.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}



// Processing form data when form is submitted
elseif(($_SERVER["REQUEST_METHOD"] == "POST") && (isset($_POST["Prod_Name"]))){
    

 //variable for displaing name 
 $dispname =  "Product";
 $dispi = "Image";

 // variables for error messages
 $name_err = $Prod_Name_err;
 $group_err = $prod_group_err;
 $disp_err = $image_err;

 //variables fro diplaying input
 $itemName = $Prod_Name;
 $disp = $image;
 $group= $prod_group;

 //send to post php
 $senname = "Prod_Name";
 $sengroup = "prod_group";
 $sendisp = "image";
 $senid ="product_ID";
 $href = "../products.php";



     // Validate Prod_Name
     $input_name = trim($_POST["Prod_Name"]);
     if(empty($input_name)){
         $Prod_Name_err ="Please enter Product name.";
     } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
         $Prod_Name_err = "Please enter a valid Product Name.";
     } else{
         $Prod_Name = $input_name;
     }
 
     //Validate category group
     $input_prod_group = $_POST["prod_group"];
     if(empty($input_prod_group)){
         $prod_group_err = "Please enter a Product group.";
     } elseif(!filter_var($input_prod_group, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
         $prod_group_err = "Please enter a valid Product Group name.";
     } else{
         $prod_group = $input_prod_group;
     }
     
     // Validate Details
     $input_details = trim($_POST["Details"]);
     if(empty($input_details)){
         $Details_err = "Please enter details";     
     } elseif(!filter_var($input_details, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
         $Details_err = "Please enter valid Product Details.";}
      else{
         $Details = $input_details;
     }
     
     // Validate icon
     $input_image = trim($_POST["image"]);
     if(empty($input_image)){
         $image_err = "Please upload the image";     
     } else{
         $image = $input_image;
     }
     
     // Check input errors before inserting in database
     if(empty($Prod_Name_err) && empty($Details_err) && empty($prod_group_err) &&empty($image_err)){
         // Prepare an update statement
         $sql = "INSERT INTO products (Prod_Name, Details, image, prod_group) VALUES (?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssss", $param_name, $param_Details, $param_image, $param_group);
            
          // Set parameters
          $param_name = $Prod_Name;
          $param_Details = $Details;
          $param_image = $image;
          $param_group = $prod_group;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location: ../products.php");
                exit();
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}



elseif(isset($_GET["product"])){
    //variable for displaing name 
    $dispname =  "Product";
    $dispi = "Image";

    // variables for error messages
    $name_err = $Prod_Name_err;
    $group_err = $prod_group_err;
    $disp_err = $image_err;

    //variables fro diplaying input
    $itemName = $Prod_Name;
    $disp = $image;
    $group= $prod_group;
    $id = $product_ID;

    //send to post php
    $senname = "Prod_Name";
    $sengroup = "prod_group";
    $sendisp = "image";
    $senid ="product_ID";
    $href = "../products.php";

}
elseif(isset($_GET["category"])){
    //variable for displaing name 
    $dispname =  "Category";
    $dispi = "icon";

    // variables for error messages
    $name_err = $Cat_Name_err;
    $group_err = $cat_group_err;
    $disp_err = $icon_err;

    //variables fro diplaying input
    $itemName = $Cat_Name;
    $disp = $icon;
    $group= $cat_group;

    //send to post php
    $senname = "Cat_Name";
    $sengroup = "Cat_group";
    $sendisp = "icon";
    $senid ="category_ID";
    $href = "../category.php";
}

else{
    header("location: error.php");
}

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create <?php echo $senname ?> Record</title>
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
                    <h2 class="mt-5">Create <?php echo $dispname ?></h2>
                    <p>Please fill this form and submit to add <?php echo $dispname;?> record to the database.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group">
                        <input type="text" name="<?php echo $senname; ?>" class="form-control <?php echo (!empty($name_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $itemName; ?>">
                            <span class="invalid-feedback"><?php echo $name_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Details</label>
                            <textarea name="Details" class="form-control <?php echo (!empty($Details_err)) ? 'is-invalid' : ''; ?>"><?php echo $Details; ?></textarea>
                            <span class="invalid-feedback"><?php echo $Details_err;?></span>
                        </div>
                        <div class="form-group">
                            <label><?php echo $dispi;?></label>
                            <input type="text" name="<?php echo $sendisp?>" class="form-control <?php echo (!empty($disp_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $disp; ?>">
                            <span class="invalid-feedback"><?php echo $disp_err;?></span>
                        </div>
                        <div class="form-group">
                            <?php
                             if(isset($_GET['category'])){
                                echo'<label>'.$dispname.' group</label>
                                <input type="text" name="Cat_group" class="form-control" value="'.$group.'">
                                    <span class="invalid-feedback">'. $group_err.'</span>';
                            }
                            if(isset($_GET['product'])){
                                $sql = "SELECT * FROM categories";
                                if($result = mysqli_query($link, $sql)){
                                    if(mysqli_num_rows($result)>0){
                                        echo ' <label for="category">'.$dispname.' Category</label>
                                        <select class="form-control" id="prod_group" name="'.$sengroup.'">
                                        ';
                                        while($row = mysqli_fetch_array($result)){
                                            echo' <option value ='.$row['Cat_Name'].'" >'.$row['Cat_Name'].'</option>';
                                        }
                                        echo '</option>';
                                        
                                    }
                               }
                            }
                            ?>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="<?php echo $href ?>" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>