<!DOCTYPE html>
<html lang="en">

<?php
if (!isset($_COOKIE['admin_logged']) || $_COOKIE['admin_logged'] != 1) {
    header("Location: login.php");
}

?>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Food Mart Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="adminindex.php">FOOD MART</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
        <!-- Navbar Search-->
        <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
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
                        <a class="nav-link active" href="index.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                        <a class="nav-link " href="productlist.php">
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
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Welcome!</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active"></li>
                    </ol>
                    <div class="row" class="text-center">
                        <div class="col-xl-3 col-md-6">

                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">

                </div>
                <div class="col-xl-3 col-md-6">

                </div>
                <div class="col-xl-3 col-md-6">

                </div>
        </div>
        <div class="row">
            <div class="col-xl-6">
                <div class="card mb-4">

                </div>
            </div>
            <div class="container-xl">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <h2>CEO Message</h2>
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">

                            <!-- Wrapper for carousel items -->
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="img-box"><img src="assets/img/person_3.jpg" alt=""></div>
                                    <h3 class="testimonial">The COVID-19 situation has evolved further and we are dealing with a significant global challenge.
                                        The World Health Organization has declared this outbreak a pandemic. Many governments around the world have taken stricter and more impactful measures to ensure the safety of their citizens.
                                        In addition to the immediate and grave health concerns, we are seeing a much wider impact on all of our lives as well as the global economy.
                                        Understandably, there is a great sense of unease everywhere.
                                        It is in this context that I would like to address you on behalf of our Chairman, our entire Board of Directors, our Executive Board and myself..</h3>
                                    <p class="overview"><b>Ranoga Frenando</b>,CEO FOOD MART STORE</p>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                </main>

            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
</body>

</html>