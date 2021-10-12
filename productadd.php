<!DOCTYPE html>
<html lang="en">

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
                            <div class="sb-nav-link-icon"><i class="fa fa-usd"></i></div>
                            Orders
                        </a>
                        <a class="nav-link active" href="index.php">
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
                    <form>

                        <!-- 2 column grid layout with text inputs for the first and last names -->
                        <div class="row mb-4">
                            <div class="col">
                                <div class="form-outline">
                                    <label class="form-label" for="productname">Product Name</label>
                                    <input type="text" id="productname" name="productname" class="form-control" />
                                </div>
                            </div>
                        </div>

                        <!-- Text input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form6Example3">Setect Category</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Select Category</option>
                                <option value="1">Vegetables</option>
                                <option value="2">Fruits</option>
                                <option value="3">Juices</option>
                                <option value="4">Dried</option>
                            </select>
                        </div>

                        <!-- Text input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form6Example4">Product Price</label>
                            <input type="text" id="form6Example4" class="form-control" />
                        </div>
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form6Example4">Qunatity</label>
                            <input type="text" id="form6Example4" class="form-control" />
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
                                <input type="text" class="form-control" placeholder="120">
                            </div>
                            <div class="col">
                                <label for="exampleFormControlTextarea1" class="form-label">Unit</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select Unit</option>
                                    <option value="g">gram</option>
                                    <option value="mg">miligram</option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="exampleFormControlTextarea1" class="form-label">Fat Content in Product</label>
                                <input type="text" class="form-control" placeholder="200">
                            </div>
                            <div class="col">
                                <label for="exampleFormControlTextarea1" class="form-label">Unit</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select Unit</option>
                                    <option value="g">gram</option>
                                    <option value="mg">miligram</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col ">
                                <label for="exampleFormControlTextarea1" class="form-label">Carbs Content in Product</label>
                                <input type="text" class="form-control" placeholder="150">
                            </div>
                            <div class="col ">
                                <label for="exampleFormControlTextarea1" class="form-label">Unit</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select Unit</option>
                                    <option value="g">gram</option>
                                    <option value="mg">miligram</option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="exampleFormControlTextarea1" class="form-label">Fiber Content in Product</label>
                                <input type="text" class="form-control" placeholder="320">
                            </div>
                            <div class="col">
                                <label for="exampleFormControlTextarea1" class="form-label">Unit</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select Unit</option>
                                    <option value="g">gram</option>
                                    <option value="mg">miligram</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col">
                                <label for="exampleFormControlTextarea1" class="form-label">Iron Content in Product</label>
                                <input type="text" class="form-control" placeholder="180">
                            </div>
                            <div class="col">
                                <label for="exampleFormControlTextarea1" class="form-label">Unit</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select Unit</option>
                                    <option value="g">gram</option>
                                    <option value="mg">miligram</option>
                                </select>
                            </div>

                        </div>

                        <!-- Message input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="customFile">Choose Product Image</label>
                            <input type="file" class="form-control" id="customFile" />
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