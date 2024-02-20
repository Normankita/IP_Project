<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Shops</title>
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
            <?=include "sidenav.php";?>
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" style="background-color: #009F7F; color: #fff;" class="btn ">
                        <i class="fas fa-align-left"></i>
                        <span>Toggle Sidebar</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Page</a>
                            </li>
                        </ul>
                    </div> -->
                </div>
            </nav>



            <div class="card">
                <div class="card-body">
                    <div class="form-group has-search">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-4">
                                    <h3>Shops</h3>
                                </div>
                                <div class="col-sm-8">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Type your query and press enter" aria-label="Recipient's username" aria-describedby="button-addon2">
                                        <button class="btn" style="background-color: #009F7F; color: #fff;" type="button" id="button-addon2">Search</button>
                                      </div>
                                    
                                    <!-- <input type="text" class="form-control"
                                        placeholder="Type your query and press enter"> -->
                                    
                                    </div>
                            </div>
                        </div>

                        <!-- <span class="fa fa-search form-control-feedback"></span> -->

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
                        <th scope="col">Logo</th>
                        <th scope="col">Name</th>
                        <th scope="col">Owner Name</th>
                        <!-- <th scope="col">Products</th> -->
                        <th scope="col">Status</th>
                        <th scope="col">Actions</th>
                    </tr>

                </thead>
                <tbody>
                    <tr>
                        <td>
                            <img class="rounded mx-auto " src="../img/admin-svg/Furniture-thumbnail.webp" alt=""
                                height="50" width="50">
                        </td>
                        <td>Grocery Shop</td>
                        <td>Frederic Apina</td>
                        <!-- <td>Products</td> -->
                        <td><span class="badge text-bg-success"> Open </span></td>
                        <td>
                            <button type="button" class="btn btn-outline-primary"><a href="../stores/grocery/grocery.html">View</a></button>
                            <button type="button" class="btn btn-outline-success">Edit</button>
                            <button type="button" class="btn btn-outline-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img class="rounded mx-auto " src="../img/admin-svg/fashion-thumbnail.webp" alt=""
                                height="50" width="50">
                        </td>
                        <td>Clothing Shop</td>
                        <td>Norman Kita</td>
                        <!-- <td>Products</td> -->
                        <td><span class="badge text-bg-success"> Open </span></td>
                        <td>
                            <button type="button" class="btn btn-outline-primary"><a href="../stores/clothing/clothing.html">View</a></button>
                            <button type="button" class="btn btn-outline-success">Edit</button>
                            <button type="button" class="btn btn-outline-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img class="rounded mx-auto " src="../img/admin-svg/Backpack-thumbnail.webp" alt=""
                                height="50" width="50">
                        </td>
                        <td>Bags Shop</td>
                        <td>Richar Magubila</td>
                        <!-- <td>Products</td> -->
                        <td><span class="badge text-bg-success"> Open </span></td>
                        <td>
                            <button type="button" class="btn btn-outline-primary"><a href="../stores/bags/bags.html">View</a></button>
                            <button type="button" class="btn btn-outline-success">Edit</button>
                            <button type="button" class="btn btn-outline-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img class="rounded mx-auto " src="../img/admin-svg/Makeup-thumbnail.webp" alt=""
                                height="50" width="50">
                        </td>
                        <td>Makeup Shop</td>
                        <td>Aurelia Mallya</td>
                        <!-- <td>Products</td> -->
                        <td><span class="badge text-bg-success"> Open </span></td>
                        <td>
                            <button type="button" class="btn btn-outline-primary"><a href="../stores/makeup/makeup.html">View</a></button>
                            <button type="button" class="btn btn-outline-success">Edit</button>
                            <button type="button" class="btn btn-outline-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img class="rounded mx-auto " src="../img/admin-svg/bakery-thumbnail.webp" alt=""
                                height="50" width="50">
                        </td>
                        <td>Bakery Shop</td>
                        <td>Fransica John</td>
                        <!-- <td>Products</td> -->
                        <td><span class="badge text-bg-danger">Closed</span></td>
                        <td>
                            <button type="button" class="btn btn-outline-primary">View</button>
                            <button type="button" class="btn btn-outline-success">Edit</button>
                            <button type="button" class="btn btn-outline-danger">Delete</button>
                        </td>
                    </tr>
                    <tr>
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