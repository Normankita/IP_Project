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
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <br><br>
            <table class="table table-hover">
                <?php
                require_once "operation/config.php";
                $sql = "SELECT * FROM shops";
                    if($result = mysqli_query($link, $sql)){
                        
                        echo '<thead style = "background-color: $f7f8f9;">';
                        echo '<tr>
                        <th scope="col">Logo</th>
                        <th scope="col">Name</th>
                        <th scope="col">Owner Name</th>
                        <th scope="col">Status</th>
                        <th scope="col">Actions</th>
                            </tr>';
                        echo '</thead>';
                        echo '<tbody>'; 
                        if(mysqli_num_rows($result)>0){
                            while($row = mysqli_fetch_array($result)){
                                
                                echo '<tr>
                                        <td>
                                            <img class = "rounded mx-auto " src= "../'.$row['logo'].'" alt = "" height= "50" width ="50">
                                        </td>
                                        <td>'.$row['shop_name'].'</td>';
                                        $sql = "SELECT * FROM Users WHERE user_ID = ?";
                                        if($stmt = mysqli_prepare($link, $sql)){
                                             mysqli_stmt_bind_param($stmt, "i", $param_id);
                                             $param_id = $row['owner_ID'];
                                             if(mysqli_stmt_execute($stmt)){
                                                 $nresult= mysqli_stmt_get_result($stmt);
                                                 if(mysqli_num_rows($nresult)==1){
                                                     $nrow = mysqli_fetch_array($nresult, MYSQLI_ASSOC);
                                                    echo '<td>'.$nrow['username'].'</td>';
                                        }
                                    }
                                }
                                $status = $row['status'];
                                if($status == 1){
                                    echo '<td><span class="badge text-bg-success"> Open </span></td>';
                                }
                                else echo '<td><span class="badge text-bg-danger"> Closed </span></td>';
                                echo '<td>
                                    <button type="button" class="btn btn-outline-primary"><a href="'.$row['shop_loc'].'">View</a></button>
                                     <a href="operation/update.php?shop_ID='.$row['shop_ID'].'"><button type="button" class="btn btn-outline-success">Edit</button></a>
                                     <a href="operation/delete.php?shop_ID='.$row['shop_ID'].'"><button type="button" class="btn btn-outline-danger">Delete</button></a>
                                 </td>';                                      
                                        
                            }
                            echo '</tbody>';
                        }
                        else echo '<h1>Oops!! No records were found </h1>';
                    }
                ?>
                
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
</body>

</html>