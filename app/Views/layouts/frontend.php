<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Important CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- jQuery Library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Popper and JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

    <!-- Custom CSS -->
    <!--<link rel="stylesheet" href="<?php echo base_url() ?>/assets/css/style.css">-->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <title>Dashboard</title>
    <style>
         @import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');

        *{
            list-style: none;
            text-decoration: none;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Open Sans', sans-serif;
        }

        body{
            background: #f5f6fa;
        }

        .wrapper .sidebar{
            background: rgb(5, 68, 104);
            position: fixed;
            top: 0;
            left: 0;
            width: 250px;
            height: 100%;
            padding: 20px 0;
            transition: all 0.5s ease;
        }
        .wrapper .sidebar .profile{
            margin-bottom: 30px;
            text-align: center;
        }

        .wrapper .sidebar .profile img{
            display: block;
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin: 0 auto;
        }

        .wrapper .sidebar .profile h3{
            color: #ffffff;
            margin: 10px 0 5px;
        }

        .wrapper .sidebar .profile p{
            color: rgb(206, 240, 253);
            font-size: 14px;
        }
        .wrapper .sidebar ul li a{
            display: block;
            padding: 13px 30px;
            border-bottom: 1px solid #10558d;
            color: rgb(241, 237, 237);
            font-size: 16px;
            position: relative;
            text-decoration: none;
        }

        .wrapper .sidebar ul li a .icon{
            color: #dee4ec;
            width: 30px;
            display: inline-block;
        }
        .wrapper .sidebar ul li a:hover,
        .wrapper .sidebar ul li a.active{
            color: #0c7db1;

            background:white;
            border-right: 2px solid rgb(5, 68, 104);
        }

        .wrapper .sidebar ul li a:hover .icon,
        .wrapper .sidebar ul li a.active .icon{
            color: #0c7db1;
        }

        .wrapper .sidebar ul li a:hover:before,
        .wrapper .sidebar ul li a.active:before{
            display: block;
        }
        .wrapper .section{
            width: calc(10% - 225px);
            margin-left: 225px;
            transition: all 0.5s ease;
        }

        .wrapper .section .top_navbar{
            background: rgb(7, 105, 185);
            height: 40px;
            display: flex;
            align-items: center;
            padding: 0 30px;

        }

        .wrapper .section .top_navbar .hamburger a{
            font-size: 28px;
            color: #f4fbff;
        }

        .wrapper .section .top_navbar .hamburger a:hover{
            color: #a2ecff;
        }
        body.active .wrapper .sidebar{
            left: -225px;
        }

        body.active .wrapper .section{
            margin-left: 0;
            width: 10%;
        }
    </style>
</head>
<body>

<div class="app">
    <?= $this->renderSection('content') ?>
</div>
<!-- Sidebar -->

 <div class="row">
    <div class="col-md-4">
    <div class="wrapper">
    <!--Top menu -->
    <div class="sidebar">
        <!--profile image & text-->
        <div class="profile">
            <img src="" alt="Image">
            <h3>Md Nayem</h3>
            <p>Studying</p>
        </div>
        <!--menu item-->
        <ul>
                <li>
                    <a href="#" class="active">
                        <span class="icon"><i class="fas fa-home"></i></span>
                        <span class="item">Home</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('employee') ?>">
                        <span class="icon"><i class="fas fa-users"></i></span>
                        <span class="item">Employee</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('product') ?>">
                        <span class="icon"><i class="fas fa-user-friends"></i></span>
                        <span class="item">Products</span>
                    </a>
                </li>
                <li>
                    <a href="<?= base_url('student') ?>">
                        <span class="icon"><i class="fas fa-tachometer-alt"></i></span>
                        <span class="item">Student</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-database"></i></span>
                        <span class="item">Development</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-chart-line"></i></span>
                        <span class="item">Reports</span>
                    </a>
                </li>
                <!--<li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-user-shield"></i></span>
                        <span class="item">Admin</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-cog"></i></span>
                        <span class="item">Settings</span>
                    </a>
                </li>-->
                <li>
                    <a href="<?php echo base_url('/logout') ?>">
                        <span class="icon"><i class="fas fa-sign-out-alt"></i></span>
                        <span class="item">Logout</span>
                    </a>
                </li>
            </ul>
    </div>
    <div class="section">
        <div class="top_navbar">
            <div class="hamburger">
                <a href="#">
                    <i class="fas fa-bars"></i>
                </a>
            </div>
        </div>
    </div>
 </div>
    </div>
    <div class="col-md-8">
        <h4>Dashboard</h4>
    </div>
 </div>
<script>
    var hamburger = document.querySelector(".hamburger");
        hamburger.addEventListener("click", function(){
            document.querySelector("body").classList.toggle("active");
        })
</script>
</body>
</html>