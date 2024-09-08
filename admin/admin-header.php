<?php
// header.php
?>

<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    <title>Admin</title>
    <link rel="canonical" href="">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="/admin/css/styles.css">
<link rel="stylesheet" href="/admin/css/simple-datatables-style.css">
<link rel="stylesheet" href="/admin/css/select2.min.css">
<link rel="stylesheet" href="/admin/css/vanillaSelectBox.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- icons -->
    <link rel="icon" href="../logo-pwc.png">
    <meta name="theme-color" content="#800000">
    <style>
        .breadcrumb {
            background-color: #f8f9fa;
            padding: 8px 15px;
            margin-bottom: 20px;
            border-radius: 4px;
        }

        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        /* Style for the dropdown content */
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown-icon {
            margin-left: 5px;
        }
    </style>

</head>

<body class="sb-nav-fixed">

    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">

        <a class="navbar-brand ps-3" href="/admin/index.php">
            <img src="/content/img/logo-pwc.png" alt="pwc logo" width="35px">&nbsp;&nbsp;&nbsp;Admin - Prince of Wales' College
        </a>

    </nav>

    

    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">

                        <a class="nav-link <?php if ($page === 'index') echo 'active'; ?>" href="/admin/index.php"><img src="/admin/ion-icon/dashboard.png" width="20px">&nbsp Dashboard</a>
                        <a class="nav-link <?php if ($page === 'blog') echo 'active'; ?>" href="/admin/blog.php"><img src="/admin/ion-icon/news.png" width="20px">&nbsp Blog</a>
                        <a class="nav-link <?php if ($page === 'events') echo 'active'; ?>" href="/admin/events.php"><img src="/admin/ion-icon/events.png" width="20px">&nbsp Events</a>
                        <a class="nav-link <?php if ($page === 'publications') echo 'active'; ?>" href="/admin/publications.php"><img src="/admin/ion-icon/events.png" width="20px">&nbsp Publications</a>
                        <a class="nav-link <?php if ($page === 'principal-msg') echo 'active'; ?>" href="/admin/principal-msg.php?id=1"><img src="/admin/ion-icon/comment.png" width="20px">&nbsp Principal's Msg</a>
                        <a class="nav-link <?php if ($page === 'past-principals') echo 'active'; ?>" href="/admin/past-principals.php"><img src="/admin/ion-icon/owner.png" width="20px">&nbsp Past Principals</a>
                        <a class="nav-link <?php if ($page === 'school-admins') echo 'active'; ?>" href="/admin/school-admins.php"><img src="/admin/ion-icon/profile.png" width="20px">&nbsp School Admins</a>
                        <a class="nav-link <?php if ($page === 'prefects-topboard') echo 'active'; ?>" href="/admin/prefects-topboard.php"><img src="/admin/ion-icon/badge.png" width="20px">&nbsp Prefect Topboard</a>
                        <a class="nav-link <?php if ($page === 'past-prefects') echo 'active'; ?>" href="/admin/past-prefects.php"><img src="/admin/ion-icon/badge (1).png" width="20px">&nbsp Past Headprefects</a>
                        <a class="nav-link <?php if ($page === 'bigmatch') echo 'active'; ?>" href="/admin/bigmatch/bigmatch.php"><img src="/admin/ion-icon/cricket.png" width="20px">&nbsp Big Match</a>

                        <hr>

                        <a class="nav-link" href="/admin/logout.php"><img src="/admin/ion-icon/logout.png" width="20px">&nbsp Logout</a>

                    </div>

                </div>

                <div class="sb-sidenav-footer">

                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>