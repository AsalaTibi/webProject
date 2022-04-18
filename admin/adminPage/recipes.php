<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BonAppetit</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">


        <!-- Divider -->
        <hr class="sidebar-divider my-0">


        <!-- Heading -->
        <div class="sidebar-heading">
            Interface
        </div>

        <!-- Nav Item - Pages Collapse Menu -->


        <li class="nav-item">
            <a class="nav-link collapsed" href="admins.php">
                <img src="https://img.icons8.com/wired/64/000000/businessman.png" width="30px" height="30px"/>
                <span>Admins</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="products.php">
                <img src="https://img.icons8.com/dotty/80/000000/ingredients.png" height="30px" width="30px"/>
                <span>Products</span>
            </a>

        </li>


        <li class="nav-item">
            <a class="nav-link collapsed" href="TheSales.php">
                <img src="https://img.icons8.com/wired/64/000000/average-2.png" width="30px" height="30px"/>
                <span>The Sales</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="recipes.php">
                <img src="https://img.icons8.com/wired/64/000000/tableware.png" width="30px" height="30px"/>
                <span>The Recipes</span>
            </a>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                    <i class="fa fa-bars"></i>
                </button>

                <!-- Topbar Search -->
                <form
                    class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                               aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                    <li class="nav-item dropdown no-arrow d-sm-none">
                        <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-search fa-fw"></i>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                             aria-labelledby="searchDropdown">
                            <form class="form-inline mr-auto w-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small"
                                           placeholder="Search for..." aria-label="Search"
                                           aria-describedby="basic-addon2">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </li>



                    <div class="topbar-divider d-none d-sm-block"></div>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php
                                echo $_SESSION['email'];
                                ?></span>
                            <img class="img-profile rounded-circle"
                                 src="imgs/undraw_profile.svg">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                             aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                Profile
                            </a>

                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <!-- Begin Page Content -->
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                    <h1 class="h3 mb-0 text-gray-800">The Recipes Table</h1>
                </div>
            </div>

            <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">ADD Recipe</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form method="post" action="code.php">
                            <div class="modal-body">
                                <div class="form-group">
                                    <label>Recipe Number</label>
                                    <input type="text" name="RecipeNum" class="form-control" placeholder="Enter Recipe Number">
                                </div>
                                <div class="form-group">
                                    <label>Recipe Name</label>
                                    <input type="text" name="recipeName" class="form-control" placeholder="Enter Recipe Name">
                                </div>
                                <div class="form-group">
                                    <label>Recipe Image</label>
                                    <input type="file" name="recipeImage" class="form-control" placeholder="Upload Recipe Image">
                                </div>
                                <div class="form-group">
                                    <label>Category</label>
                                    <input type="text" name="category" class="form-control" placeholder="Enter category">
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal" name="close">Close</button>
                                <button type="submit" class="btn btn-primary" name="saveRecipe" ">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Add Product -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">

                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
                        Add Recipes
                    </button>
                </div>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <?php
                    $db=new mysqli('localhost','root','','food_database');
                    $sql="SELECT recipeNum,recipeName,recipeImage,category from recipes";
                    $res=$db->query($sql);
                    ?>
                    <table class="table table-bordered " id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Recipe Number</th>
                            <th>Recipe Name</th>
                            <th>Recipe Image</th>
                            <th>Category</th>
                            <th>EDIT</th>
                            <th>DELETE</th>
                        </tr>
                        </thead>

                        <tbody>
                        <?php
                        if($res->num_rows > 0){
                            while ($row=$res->fetch_assoc()){
                                ?>
                                <tr>
                                    <td><?php echo $row['recipeNum']; ?></td>
                                    <td><?php echo $row['recipeName']; ?></td>
                                    <td><img src="imgs/<?php echo $row['recipeImage'];?>" style="width: 150px;
                                     height: 150px"></td>
                                    <td><?php echo $row['category']; ?></td>

                                    <form action="editRecipe.php" method="post">
                                        <input type="hidden" name="edit_recipeNum" value="<?php echo $row['recipeNum']?>">
                                        <td><button type="submit" class="btn btn-success" name="edit_recipe">EDIT</button></td>
                                    </form>

                                    <form action="code.php" method="post">
                                        <input type="hidden" name="delete_recipeNum" value="<?php echo $row['recipeNum']?>">
                                        <td><button type="submit" class="btn btn-danger" name="delete_recipe">DELETE</button></td>
                                    </form>
                                </tr>
                                <?php
                            }
                        }
                        else{
                            echo "No Record Found";
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <div>

            </div>


            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>

            <!-- Logout Modal-->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                 aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <a class="btn btn-primary" href="login.html">Logout</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bootstrap core JavaScript-->
            <script src="vendor/jquery/jquery.min.js"></script>
            <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- Core plugin JavaScript-->
            <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

            <!-- Custom scripts for all pages-->
            <script src="js/sb-admin-2.min.js"></script>



</body>

</html>


