<?php
  session_start(); 

  if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: ../sign-in.php');
  } 
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Category</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
        integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ"
        crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
        integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY"
        crossorigin="anonymous"></script>
</head>

<body>
    <div class="wrapper">
        <nav id="sidebar">
            <div class="sidebar-header">
                <h2 style="color: #181F6A; font-weight: bold; padding-top: 20px;">Multi<span
                    style="color: #009F7F;">Vendor</span></h2>
                <!-- <button type="button" class="close" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                <button type="button" id="sidebarCollapse2" class="btn btn-info">
                    <i class="fas fa-align-left"></i>
                </button> -->
            </div>

            <ul class="list-unstyled components">
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2 active" aria-current="page" href="#">
                        <img src="../img/admin-svg/dashboard.svg" alt="">

                        <span style="color: #4B5563;"> Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="shops.html">
                        <img src="../img/admin-svg/shop.svg" alt="">
                        <span style="color: #4B5563;"> Shops</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="#">
                        <img src="../img/admin-svg/shops.svg" alt="">

                        <span style="color: #4B5563;"> My Shops</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="products.php">
                        <img src="../img/admin-svg/products.svg" alt="">

                        <span style="color: #4B5563;"> Products</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="category.php">
                        <img src="../img/admin-svg/category.svg" alt="">

                        <span style="color: #4B5563;"> Categories</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center gap-2" href="users.php">
                        <img src="../img/admin-svg/users.svg" alt="">

                        <span style="color: #4B5563;"> Users</span>
                    </a>
                </li>
            </ul>
            <ul class="nav flex-column mb-auto">
                <li class="nav-item">
                        <img src="../img/admin-svg/settings.svg" alt=""><a href="../index.php?logout='1'"><span style="color: #4B5563;"> Logout</span></a>
                    </a>
                </li>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" style="background-color: #009F7F; color: #fff;"
                        class="btn">
                        <i class="fas fa-align-left"></i>
                        <span>Toggle Sidebar</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>
                </div>
            </nav>



            <div class="card">
                <div class="card-body">
                    <div class="form-group has-search">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-2">
                                    <h3>Users</h3>
                                </div>
                                <div class="col-sm-5">
                                    <div class="input-group mb-4">
                                        <input type="text" class="form-control"
                                            placeholder="Type your query and press enter"
                                            aria-label="Recipient's username" aria-describedby="button-addon2">
                                        <button class="btn btn-outline-secondary"
                                            style="background-color: #009F7F; color: #fff;" type="button"
                                            id="button-addon2">Search</button>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <select class="form-select form-select-md mb-3"
                                        aria-label=".form-select-lg example">
                                        <option selected>Filter by group</option>
                                        <option value="1">Admin</option>
                                        <option value="2">Vendor</option>
                                        <option value="3">Cutomer</option>
                                        <option value="3">Store Owner</option>
                                    </select>
                                </div>
                                <div class="col-sm-2">
                                    <a href="operation/user/register.php?users=1"><button type="button" style="background-color: #009F7F; color: #fff;"
                                        class="btn  btn-md">Add User</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <br><br>

            <?php
            require_once "../config.php";
            $sql = "SELECT * FROM Users";
            if($result = mysqli_query($link, $sql)){
                echo '<table class="table table-hover">';
                echo '<table class="table table-hover">';
                echo '<tr>';
                echo '<th scope="col">Image</th>';
                echo '<th scope="col">Name</th>';
                echo '<th scope="col">Email</th>';
                echo '<th scope="col">Permision</th>';
                echo '<th scope="col">Status</th>';
                echo '<th scope="col">Actions</th>';
                echo '</tr>';
                echo '<tbody>';
                if(mysqli_num_rows($result)>0){
                   while($row = mysqli_fetch_array($result)){
                        echo '<tr>';
                        echo '<td><img class="rounded float-left" src="../img/dp/'.$row['display'].'" alt="" width="70" height="70"></td>';
                        echo '<td>'.$row['username'].'</td>';
                        echo '<td>'.$row['email'].'</td>';
                        echo '<td>'.$row['usertype'].'</td>';
                        echo '<td><span class="badge text-bg-success">'.$row['userstatus'].'</span></td>';
                        echo '<td>';
                        echo '<a href="operation/user/view.php?user_ID='.$row['user_ID'].'"><button type="button" class="btn btn-outline-primary">View</button></a>';
                        echo '<a href="operation/user/edit.php?user_ID='.$row['user_ID'].'"><button type="button" class="btn btn-outline-success">Edit</button></a>';
                        echo '<a href="operation/delete.php?user_ID='.$row['user_ID'].'><button type="button" class="btn btn-outline-danger">Delete</button></a>';
                        echo '</td>';
                        echo '</tr>';
                    }
                }
                else{
                    echo'<h1><span class="badge text-bg-danger">Oops! seems there are no records here !!</span></h1>';
                }
                echo'</tbody>';
                echo '</table>';
            }
            ?>
            <nav aria-label="...">
                <ul class="pagination pagination-md">
                    <li class="page-item active" aria-current="page">
                        <span class="page-link">1</span>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                </ul>
            </nav>
        </div>

        <!-- jQuery CDN - Slim version (=without AJAX) -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
        <!-- Popper.JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
            integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
            crossorigin="anonymous"></script>
        <!-- Bootstrap JS -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
            integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
            crossorigin="anonymous"></script>

        <script type="text/javascript">
            $(document).ready(function () {
                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar').toggleClass('active');
                });
            });
        </script>
</body>

</html>