<!DOCTYPE html>
<html lang="en">
<?php
require 'connection.php';
$row;
if (!isset($_GET['id'])) {
    header('location: productlist.php');
} else {
    $sql = "SELECT * FROM orders o INNER JOIN order_details od ON o.id=od.order_id INNER JOIN products p ON od.item_id=p.id where o.id=" . $_GET['id'];
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        header('location: orders.php');
    }
}

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $name = $_POST['productname'];
    $punit = $_POST['productunit'];
    $cat = $_POST['cat'];
    $price = $_POST['price'];
    $desc = $_POST['desc'];
    $qty = $_POST['qty'];
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $n3 = $_POST['n3'];
    $n4 = $_POST['n4'];
    $n5 = $_POST['n5'];
    $n1unit = $_POST['n1unit'];
    $n2unit = $_POST['n2unit'];
    $n3unit = $_POST['n3unit'];
    $n4unit = $_POST['n4unit'];
    $n5unit = $_POST['n5unit'];
    $date = time();
    $imgname = $date . ".jpg";
    // $img = $_POST['img'];
    if (empty($name) || empty($cat) || empty($price) || empty($qty) || empty($n1) || empty($n2) || empty($n3) || empty($n4) || empty($n5) || empty($n1unit) || empty($n2unit) || empty($n3unit) || empty($n4unit) || empty($n5unit)) {
        echo ("<script>alert('Fill out all the fields')</script>");
        // exit();
    } else if (empty($_FILES["img"]['name'])) {
        $sql = "UPDATE products SET cat_id ='$cat',name='$name',price='$qty', description='$desc',qty='$qty',unit='$punit' WHERE id=" . $_GET['id'];
        $result = $conn->query($sql);
        echo ("<script>alert('Product Updated Successfully!!!')</script>");
        $conn->close();
    } else {
        move_uploaded_file($_FILES["img"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/Foodsysterm/images/" . $date . ".jpg");
        $sql = "UPDATE products SET cat_id ='$cat',name='$name',price='$qty', description='$desc',qty='$qty',unit='$punit',img='$imgname' WHERE id=" . $_GET['id'];
        $result = $conn->query($sql);
        echo ("<script>alert('Product Updated Successfully!!!')</script>");
        $conn->close();
    }
}
?>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Product add admin</title>
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
                        <a class="nav-link" href="productlist.php">
                            <div class="sb-nav-link-icon"><i class="fa fa-archive"></i></div>
                            Products
                        </a>
                        <a class="nav-link active" href="orders.php">
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
                <div class="container-fluid px-4">
                    <h1 class="mx-1 mb-1 mt-3">View Order Details</h1>
                    <h4 class="mx-2 mb-2 mt-3">Ref No # <?php echo $row['ref'] ?></h4>
                    <h4 class="mx-2 mb-2 mt-3">Date and time - <?php echo $row['dateadded'] ?></h4>
                    <br>
                    <form method="post" action="" enctype="multipart/form-data">
                        <!-- 2 column grid layout with text inputs for the first and last names -->
                        <div class="row mb-4">
                            <div class="col">
                                <div class="form-outline">
                                    <h5 class="form-label font-weight-bold" for="productname">Customer Name</h5>
                                    <p><?php echo $row['fname'] . ' ' . $row['lname'] ?></p>
                                </div>
                            </div>
                            <div class="col ">
                                <h5 for="exampleFormControlTextarea11" class="form-label">Address</h5>
                                <p><?php echo $row['addr1'] ?></p>
                                <p><?php echo $row['addr2'] ?></p>
                                <p><?php echo $row['city'] ?></p>
                                <p><?php echo $row['zip'] ?></p>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col">
                                <div class="form-outline">
                                    <h5 class="form-label font-weight-bold" for="productname">Contact Number</h5>
                                    <p><?php echo $row['phone'] ?></p>
                                </div>
                            </div>
                            <div class="col ">
                                <h5 for="exampleFormControlTextarea11" class="form-label">Customer Email</h5>
                                <p><?php echo $row['email'] ?></p>

                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col">
                                <div class="form-outline">
                                    <h5 class="form-label font-weight-bold" for="productname">Total Amount</h5>
                                    <p>Rs. <?php echo $row['total'] ?></p>
                                </div>
                            </div>
                            <div class="col ">
                                <h5 class="form-label font-weight-bold" for="productname">Total Amount</h5>
                                <p>Rs. <?php echo $row['total'] ?></p>
                            </div>
                        </div>
                        <!-- table -->
                        <div class="row mb-4">
                            <div class="col">
                                <div class="form-outline">
                                    <h5 class="form-label font-weight-bold" for="productname">Order Details</h5>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">Product Name</th>
                                                <th scope="col">Quantity</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $sql = "SELECT *,od.qty as oqty FROM order_details od INNER JOIN products p ON p.id=od.item_id WHERE order_id = '" . $_GET['id'] . "'";
                                            $result = $conn->query($sql);
                                            while ($row = mysqli_fetch_assoc($result)) {
                                                echo '<tr>';
                                                echo '<td>' . $row['name'] . '</td>';
                                                echo '<td>' . $row['oqty'] . '</td>';
                                                echo '<td>' . $row['price'] . '</td>';
                                                echo '<td>' . number_format($row['price'] * $row['oqty'], 2) . '</td>';
                                                echo '</tr>';
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                    </form>
                </div>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>

</html>