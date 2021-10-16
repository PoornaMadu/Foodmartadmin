<!DOCTYPE html>
<html lang="en">
<?php

require 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    // $mailid = $_POST["emailid"];
    // $password = $_POST["password"];
    $name = $_POST['productname'];
    $punit = $_POST['productunit'];
    $cat = $_POST['cat'];
    $price = $_POST['price'];
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
    // $img = $_POST['img'];
    if (empty($name) || empty($cat) || empty($price) || empty($qty) || empty($n1) || empty($n2) || empty($n3) || empty($n4) || empty($n5) || empty($n1unit) || empty($n2unit) || empty($n3unit) || empty($n4unit) || empty($n5unit)) {
        echo ("<script>alert('Fill out all the fields')</script>");
        // exit();
    } else {
        move_uploaded_file($_FILES["img"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/Foodsysterm/images/" . $date . ".jpg");
        $sql = "INSERT INTO products(cat_id,name,price,qty,unit,img) values (" . $cat . ",'" . $name . "'," . $price . "," . $qty . ",'" . $punit . "','" . $date . ".jpg')";
        $result = $conn->query($sql);
        $insertedid = mysqli_insert_id($conn);
        $sql2 = "INSERT INTO nutrients(product_id,n1,n2,n3,n4,n5,n1_unit,n2_unit,n3_unit,n4_unit,n5_unit) values (" . $insertedid . "," . $n1 . "," . $n2 . "," . $n3 . "," . $n4 . "," . $n5 . ",'" . $n1unit . "','" . $n2unit . "','" . $n3unit . "','" . $n4unit . "','" . $n5unit . "')";
        $result2 = $conn->query($sql2);
        echo ("<script>alert('Product Added Successfully!!!')</script>");
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
                    <li><a class="dropdown-item" href="login.php">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Core</div>
                        <a class="nav-link" href="index.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <a class="nav-link" href="index.php">
                            <div class="sb-nav-link-icon"><i class="fa fa-archive"></i></div>
                            Products
                        </a>
                        <a class="nav-link" href="index.php">
                            <div class="sb-nav-link-icon"><i class="fa fa-gift"></i></div>
                            Orders
                        </a>
                        <a class="nav-link active" href="productadd.php">
                            <div class="sb-nav-link-icon"><i class="fa fa-plus-square "></i></div>
                            Add Products
                        </a>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Add Products</h1>
                    <br>
                    <form method="post" action="" enctype="multipart/form-data">
                        <!-- 2 column grid layout with text inputs for the first and last names -->
                        <div class="row mb-4">
                            <div class="col">
                                <div class="form-outline">
                                    <label class="form-label" for="productname">Product Name</label>
                                    <input type="text" id="productname" name="productname" class="form-control" />
                                </div>
                            </div>
                            <div class="col ">
                                <label for="exampleFormControlTextarea11" class="form-label">Unit of Measure</label>
                                <select class="form-select" aria-label="Default select example" name="productunit">
                                    <option selected hidden value="">Select Unit</option>
                                    <option value="">none</option>
                                    <option value="mg">kg</option>
                                </select>
                            </div>
                        </div>

                        <!-- Text input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form6Example3">Setect Category</label>
                            <select class="form-select" name="cat" aria-label="Default select example" name="cat">
                                <option selected hidden value="">Select Category</option>
                                <option value="1">Vegetables</option>
                                <option value="2">Fruits</option>
                                <option value="3">Juices</option>
                                <option value="4">Dried</option>
                            </select>
                        </div>

                        <!-- Text input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form6Example4">Product Price</label>
                            <input type="text" name="price" id="form6Example4" class="form-control" />
                        </div>
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form6Example4">Available Qunatity</label>
                            <input type="text" name="qty" id="form6Example4" class="form-control" />
                        </div>

                        <!-- Number input -->
                        <!-- <div class="form-outline mb-4">
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Product Content</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
                            </div>

                        </div> -->

                        <div class="row mb-4">
                            <div class="col">
                                <label for="exampleFormControlTextarea1" class="form-label">Protein Content in Product</label>
                                <input type="text" class="form-control" placeholder="120" name="n1">
                            </div>
                            <div class="col">
                                <label for="exampleFormControlTextarea111" class="form-label">Unit</label>
                                <select class="form-select" aria-label="Default select example" name="n1unit" required>
                                    <option selected value="" hidden>Select Unit</option>
                                    <option value="g">gram</option>
                                    <option value="mg">miligram</option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="exampleFormControlTextarea13" class="form-label">Fat Content in Product</label>
                                <input type="text" class="form-control" placeholder="200" name="n2">
                            </div>
                            <div class="col">
                                <label for="exampleFormControlTextarea12" class="form-label">Unit</label>
                                <select class="form-select" aria-label="Default select example" name="n2unit">
                                    <option selected value="" hidden>Select Unit</option>
                                    <option value="g">gram</option>
                                    <option value="mg">miligram</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col ">
                                <label for="exampleFormControlTextarea1" class="form-label">Carbs Content in Product</label>
                                <input type="text" class="form-control" placeholder="150" name="n3">
                            </div>
                            <div class="col ">
                                <label for="exampleFormControlTextarea11" class="form-label">Unit</label>
                                <select class="form-select" aria-label="Default select example" name="n3unit">
                                    <option selected value="" hidden>Select Unit</option>
                                    <option value="g">gram</option>
                                    <option value="mg">miligram</option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="exampleFormControlTextarea1" class="form-label">Fiber Content in Product</label>
                                <input type="text" class="form-control" placeholder="320" name="n4">
                            </div>
                            <div class="col">
                                <label for="exampleFormControlTextarea1" class="form-label">Unit</label>
                                <select class="form-select" aria-label="Default select example" name="n4unit">
                                    <option selected value="" hidden>Select Unit</option>
                                    <option value="g">gram</option>
                                    <option value="mg">miligram</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col">
                                <label for="exampleFormControlTextarea1" class="form-label">Iron Content in Product</label>
                                <input type="text" class="form-control" placeholder="180" name="n5">
                            </div>
                            <div class="col">
                                <label for="exampleFormControlTextarea1" class="form-label">Unit</label>
                                <select class="form-select" aria-label="Default select example" name="n5unit">
                                    <option selected value="" hidden>Select Unit</option>
                                    <option value="g">gram</option>
                                    <option value="mg">miligram</option>
                                </select>
                            </div>

                        </div>

                        <!-- Message input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="customFile">Choose Product Image</label>
                            <input type="file" class="form-control" id="customFile" name="img" />
                            <br>

                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block mb-4">Add Product</button>
                    </form>

                </div>

            </main>

        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>

</html>