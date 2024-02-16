<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Product</title>
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
                    <a class="nav-link d-flex align-items-center gap-2" href="#">
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
                    <a class="nav-link d-flex align-items-center gap-2" href="../sign-in.html">
                        <img src="../img/admin-svg/settings.svg" alt="">
                        <a href="../index.php?logout='1'"><span style="color: #4B5563;"> Logout</span></a>
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
                                    <h3>Products</h3>
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
                                        <option value="1">Grocery</option>
                                        <option value="2">Backery</option>
                                        <option value="3">Makeup</option>
                                        <option value="3">Bags</option>
                                        <option value="3">Clothing</option>
                                    </select>
                                </div>
                                <div class="col-sm-2">
                                    <a href="operation/create.php?product=1"><button type="button" style="background-color: #009F7F; color: #fff;"
                                        class="btn  btn-md">Add Product</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <br><br>


            <!-- <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Shops</h1>
            </div> <br> -->
            <table class="table table-hover">
                <thead style="background-color: #f7f8f9;">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Details</th>
                        <th scope="col">Image</th>
                        <th scope="col">Group</th>
                        <th scope="col">Actions</th>
                    </tr>

                </thead>
                <tbody>
                    <?php
                    require_once "../config.php";
                    $sql = "SELECT * FROM products";
                    if($result = mysqli_query($link, $sql)){
                        if(mysqli_num_rows($result)>0){
                            while($row = mysqli_fetch_array($result)){
                                echo "<tr>";
                                echo "<td>".$row['product_ID']."</td>";
                                echo "<td>".$row['Prod_Name']."</td>";
                                echo "<td>".$row['Details']."</td>";
                                echo "<td><img class='rounded floeat-left' src= '".$row['image']."' alt='' width='70' height='70'></td>";
                                echo "<td>".$row['prod_group']."</td>"."</td>";
                                echo "<td>";
                                echo '<a href="operation/read.php?product_ID='.$row['product_ID'].'"title="view Product" data-toggle="tooltip"><button type="button" class="btn btn-outline-primary">View</button></a> &nbsp';
                                echo '<a href="operation/update.php?product_ID='.$row['product_ID'].'"title="Edit Product" data-toggle="tooltip"><button type="button" class="btn btn-outline-success">Edit</button></a> &nbsp ';
                                echo '<a href="operation/delete.php?product_ID='.$row['product_ID'].'"title="Delete Product" data-toggle="tooltip"><button type="button" class="btn btn-outline-danger">Delete</button></a>';
                                echo "</td>";
                                echo "</tr>";
                            }
                        }
                    }
                    ?>
                </tbody>
            </table>

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