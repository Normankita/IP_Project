<?php
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values for Categories
$Cat_Name = $Details = $icon = $Cat_group = "";
$Cat_Name_err = $Details_err = $icon_err = $Cat_group_err ="";

// Define variables and initialize with empty values for products
$Prod_Name = $Details = $image = $prod_group = "";
$Prod_Name_err = $Details_err = $image_err = $prod_group_err= "";


// Define variables and initialize with empty values for products
$Shop_Name = $Details = $logo = $shop_group = "";
$Shop_Name_err = $Details_err = $logo_err = $shop_group_err= "";

 
// Processing form data when form is submitted for Category
if(isset($_POST["category_ID"]) && !empty($_POST["category_ID"])){
    // Get hidden input value
    $category_ID = $_POST["category_ID"];
    
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
        // Prepare an update statement
        $sql = "UPDATE categories SET Cat_Name=?, Details=?, icon=?, cat_group=? WHERE category_ID=?";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssssi", $param_name, $param_Details, $param_icon,$param_group, $param_id);
            
            // Set parameters
            $param_name = $Cat_Name;
            $param_Details = $Details;
            $param_icon = $icon;
            $param_id = $category_ID;
            $param_group = $Cat_group;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records updated successfully. Redirect to landing page
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



// Processing form data when form is submitted for Products
elseif(isset($_POST["product_ID"]) && !empty($_POST["product_ID"])){
    // Get hidden input value
    $product_ID = $_POST["product_ID"];
    
    // Validate Cat_Name
    $input_name = trim($_POST["Prod_Name"]);
    if(empty($input_name)){
        $Prod_Name_err ="Please enter Product name.";
    } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $Prod_Name_err = "Please enter a valid Product Name.";
    } else{
        $Prod_Name = $input_name;
    }

    //Validate category group
    $input_prod_group = trim($_POST["prod_group"]);
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
        $sql = "UPDATE products SET Prod_Name=?, Details=?, image=?, prod_group=? WHERE product_ID=?";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssssi", $param_name, $param_Details, $param_image,$param_group, $param_id);
            
            // Set parameters
            $param_name = $Prod_Name;
            $param_Details = $Details;
            $param_image = $image;
            $param_id = $product_ID;
            $param_group = $prod_group;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records updated successfully. Redirect to landing page
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

//the part for shop begins here 

// Processing form data when form is submitted for Products
elseif(isset($_POST["shop_ID"]) && !empty($_POST["shop_ID"])){
    // Get hidden input value
    $shop_ID = $_POST["shop_ID"];
    
    // Validate Cat_Name
    $input_name = trim($_POST["Shop_Name"]);
    if(empty($input_name)){
        $Shop_Name_err ="Please enter Product name.";
    } elseif(!filter_var($input_name, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $Shop_Name_err = "Please enter a valid Product Name.";
    } else{
        $Shop_Name = $input_name;
    }

    //Validate category group
    $input_shop_group = trim($_POST["shop_group"]);
    if(empty($input_shop_group)){
        $shop_group_err = "Please enter a Product group.";
    } elseif(!filter_var($input_prod_group, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $shop_group_err = "Please enter a valid Product Group name.";
    } else{
        $shop_group = $input_prod_group;
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
    $input_logo = trim($_POST["logo"]);
    if(empty($logo_image)){
        $logo_err = "Please upload the logo";     
    } else{
        $logo = $input_logo;
    }
    
    // Check input errors before inserting in database
    if(empty($Shop_Name_err) && empty($Details_err) && empty($shop_group_err) &&empty($logo_err)){
        // Prepare an update statement
        $sql = "UPDATE shops SET shop_name=?, Details=?, logo=?, shop_loc=? WHERE show_ID=?";   
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssssi", $param_name, $param_Details, $param_image,$param_group, $param_id);
            
            // Set parameters
            $param_name = $Shop_Name;
            $param_Details = $Details;
            $param_image = $logo;
            $param_id = $shop_ID;
            $param_group = $shop_group;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records updated successfully. Redirect to landing page
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
// ends here 




    // Check existence of category_ID parameter before processing further
    elseif(isset($_GET["category_ID"]) && !empty(trim($_GET["category_ID"]))){
        // Get URL parameter
        $category_ID = trim($_GET["category_ID"]);
        
        // Prepare a select statement
        $sql = "SELECT * FROM categories WHERE category_ID = ?";
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "i", $param_id);
            
            // Set parameters
            $param_id = $category_ID;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_get_result($stmt);
    
                if(mysqli_num_rows($result) == 1){
                    /* Fetch result row as an associative array. Since the result set
                    contains only one row, we don't need to use while loop */
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    
                    // Retrieve individual field value
                    $Cat_Name = $row["Cat_Name"];
                    $Details = $row["Details"];
                    $icon = $row["icon"];
                    $cat_group = $row['cat_group'];
                } else{
                    // URL doesn't contain valid category_ID. Redirect to error page
                    header("location: error.php");
                    exit();
                }
                
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
        
        // Close connection
        mysqli_close($link);
    }  
    
    
    // Check existence of product_ID parameter before processing further
    elseif(isset($_GET["product_ID"]) && !empty(trim($_GET["product_ID"]))){
        // Get URL parameter
        $product_ID = trim($_GET["product_ID"]);
        
        // Prepare a select statement
        $sql = "SELECT * FROM products WHERE product_ID = ?";
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "i", $param_id);
            
            // Set parameters
            $param_id = $product_ID;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_get_result($stmt);
    
                if(mysqli_num_rows($result) == 1){
                    /* Fetch result row as an associative array. Since the result set
                    contains only one row, we don't need to use while loop */
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    
                    // Retrieve individual field value
                    $Prod_Name = $row["Prod_Name"];
                    $Details = $row["Details"];
                    $image = $row["image"];
                    $prod_group = $row['prod_group'];
                } else{
                    // URL doesn't contain valid category_ID. Redirect to error page
                    header("location: error.php");
                    exit();
                }
                
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
        
        // Close connection
        mysqli_close($link);
    }
    
    
     // Check existence of product_ID parameter before processing further
     elseif(isset($_GET["shop_ID"]) && !empty(trim($_GET["shop_ID"]))){
        // Get URL parameter
        $product_ID = trim($_GET["shop_ID"]);
        
        // Prepare a select statement
        $sql = "SELECT * FROM shops WHERE shop_ID = ?";
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "i", $param_id);
            
            // Set parameters
            $param_id = $shop_ID;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                $result = mysqli_stmt_get_result($stmt);
    
                if(mysqli_num_rows($result) == 1){
                    /* Fetch result row as an associative array. Since the result set
                    contains only one row, we don't need to use while loop */
                    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                    
                    // Retrieve individual field value
                    $Shop_Name = $row["shop_name"];
                    $Details = $row["owner_ID"];
                    $logo = $row["logo"];
                    $shop_group = $row['shop_loc'];
                } else{
                    // URL doesn't contain valid category_ID. Redirect to error page
                    header("location: error.php");
                    exit();
                }
                
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        mysqli_stmt_close($stmt);
        
        // Close connection
        mysqli_close($link);
    }
    

    
    else{
        // URL doesn't contain category_ID parameter. Redirect to error page
        header("location: error.php");
        exit();
    }

    //checking what to dsplay to the user
    
    if(isset($_GET["product_ID"])){
        //variable for displaing name 
        $dispname =  "Product";
        $dispi = "Imade";

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
    elseif(isset($_GET["category_ID"])){
        //variable for displaing name 
        $dispname =  "Category";
        $dispi = "icon";

        // variables for error messages
        $name_err = $Cat_Name_err;
        $group_err = $Cat_group_err;
        $disp_err = $icon_err;

        //variables fro diplaying input
        $itemName = $Cat_Name;
        $disp = $icon;
        $group= $cat_group;
        $id= $category_ID;

        //send to post php
        $senname = "Cat_Name";
        $sengroup = "Cat_group";
        $sendisp = "icon";
        $senid ="category_ID";
        $href = "../category.php";
    }


    elseif(isset($_GET["shop_ID"])){
        //variable for displaing name 
        $dispname =  "Shops";
        $dispi = "logo";

        // variables for error messages
        $name_err = $Shop_Name_err;
        $group_err = $shop_group_err;
        $disp_err = $logo_err;

        //variables fro diplaying input
        $itemName = $Shop_Name;
        $disp = $logo;
        $group= $shop_group;
        $id= $shop_ID;

        //send to post php
        $senname = "Shop_Name";
        $sengroup = "shop_group";
        $sendisp = "logo";
        $senid ="shop_ID";
        $href = "../shops.php";
    }
    

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Record</title>
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
                    <h2 class="mt-5">Update <?php echo $dispname; ?> Record</h2>
                    <p>Please edit the input values and submit to update <?php echo $dispname; ?> record.</p>
                    <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                        <div class="form-group">
                            <label><?php echo $dispname; ?> Name</label>
                            <input type="text" name="<?php echo $senname; ?>" class="form-control <?php echo (!empty($name_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $itemName; ?>">
                            <span class="invalid-feedback"><?php echo $name_err;?></span>
                        </div>
                        <div class="form-group">
                            <label>Details</label>
                            <textarea name="Details" class="form-control <?php echo (!empty($Details_err)) ? 'is-invalid' : ''; ?>"><?php echo $Details; ?></textarea>
                            <span class="invalid-feedback"><?php echo $Details_err;?></span>
                        </div>
                        <div class="form-group">
                            <label><?php echo $dispi ;?></label>
                            <input type="text" name="<?php echo $sendisp ;?>" class="form-control <?php echo (!empty($disp_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $disp; ?>">
                            <span class="invalid-feedback"><?php echo $disp_err;?></span>
                        </div>
                        <div class="form-group">
                            <label><?php echo $dispname ;?> Group</label>
                            <input type="text" name="<?php echo $sengroup ;?>" class="form-control <?php echo (!empty($group_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $group; ?>">
                            <span class="invalid-feedback"><?php echo $group_err;?></span>
                        </div>
                        <input type="hidden" name="<?php echo $senid;?>" value="<?php echo $id; ?>"/>
                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="<?php echo $href; ?>" class="btn btn-secondary ml-2">Cancel</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>