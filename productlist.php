<!DOCTYPE html>
<html lang="en">
<?php

require 'connection.php';

$sql = "SELECT *,p.id as pid FROM products p INNER JOIN category c ON c.id=p.cat_id INNER JOIN nutrients n ON p.id=n.product_id";
$result = $conn->query($sql);

//delete
if (isset($_GET['delete_id'])) {
    $id = $_GET['delete_id'];
    $sql2 = "DELETE FROM products WHERE id = $id";
    $result = $conn->query($sql2);
    header('location: productlist.php');
}


?>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Product View admin</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="index.php">FOOD MART</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            <div class="input-group">
                <!-- <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button> -->
            </div>
        </form>
        <!-- Navbar-->
        <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <a class="nav-link" href="index.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <a class="nav-link active" href="productlist.php">
                            <div class="sb-nav-link-icon"><i class="fa fa-archive"></i></div>
                            Products
                        </a>
                        <a class="nav-link" href="orders.php">
                            <div class="sb-nav-link-icon"><i class="fa fa-gift"></i></div>
                            Orders
                        </a>
                        <a class="nav-link " href="productadd.php">
                            <div class="sb-nav-link-icon"><i class="fa fa-plus-square "></i></div>
                            Add Products
                        </a>
                        <a class="nav-link " href="users.php">
                            <div class="sb-nav-link-icon"><i class="fa fa-user "></i></div>
                            Users
                        </a>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container">
                    <div class="row">
                        <h1 class="mx-5 mb-5 mt-3">Listed Products</h1>
                        <div class="col-12">
                            <table class="table table-image">
                                <thead>
                                    <tr>
                                        <!-- <th scope="col">Image</th> -->
                                        <th scope="col">Category</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Available Qty</th>
                                        <th scope="col">Edit</th>
                                        <th scope="col">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>


                                    <?php while ($row = $result->fetch_assoc()) { ?>
                                        <tr>
                                            <td class="h5"><?php echo $row['cat_name'] ?> </td>
                                            <td class="h5"><?php echo $row['name'] ?></td>
                                            <td class="h5"><?php echo $row['price'] ?></td>
                                            <td class="h5"><?php echo $row['qty'] ?> <?php echo $row['unit'] == '' ? '' : $row['unit'] ?></td>
                                            <td class="h5">
                                                <form action="edit.php">
                                                    <button type="submit" name="id" value="<?php echo $row['pid'] ?>" class="btn btn-primary btn-block mb-4 h5">Edit</button>
                                                </form>
                                            </td>
                                            <td class="h5">
                                                <form action="">
                                                    <button type="submit" name="delete_id" value="<?php echo $row['pid'] ?>" class="btn btn-danger btn-block mb-4 h5">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </main>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>

</html>