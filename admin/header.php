<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin123.css">
    <link rel="stylesheet" href="../css/admin.header.css">
    <link rel="stylesheet" href="../css/phantrang.css">
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- plugin css -->
    <link href="../css/assets/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />

    <!-- Layout config Js -->
    <script src="../css/assets/js/layout.js') }}"></script>
    <!-- Bootstrap Css -->
    <link href="../css/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="../css/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="../css/assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="../css/assets/css/custom.min.css" rel="stylesheet" type="text/css" />
    <title>Hot Coffee Shop Admin</title>
</head>

<body>

    <header>
        <h1>Hot Coffee Shop Admin</h1>
    </header>

    <div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index.html" class="logo logo-dark">
            <span class="logo-sm">
                <img src="assets/images/logo-sm.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="assets/images/logo-dark.png" alt="" height="17">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="index.html" class="logo logo-light">
            <span class="logo-sm">
                <img src="assets/images/logo-sm.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="assets/images/logo-light.png" alt="" height="17">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div> 
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarUsers" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarUsers">
                        <i class="ri-user-2-line"></i> <span data-key="t-users">Quản Lí Thành Viên</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarUsers">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-key="t-user"> Quản lý user </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('user.index')}}" class="nav-link" data-key="t-user"> Quản lý thành viên </a>
                            </li>
                        </ul>
                    </div>
                </li>
               
             

            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>


    <!-- <nav>
        <ul>
            <li><a href="../index.php">Trang chủ</a></li>
            <li><a href="index.php?act=adddm">Danh mục</a></li>
            <li><a href="index.php?act=addsp">Sản phẩm</a></li>
            <li><a href="index.php?act=dskh">Khách hàng</a></li>
            <li><a href="index.php?act=dsdh">Đơn hàng</a></li>
            <li><a href="index.php?act=dsbl">Bình luận</a></li>
            <li><a href="index.php?act=thongke">Thống kê</a></li>
        </ul>
    </nav> -->