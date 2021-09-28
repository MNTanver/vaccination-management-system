<?php
session_start();
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>IIUC Covid19 Vaccination Management System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/images/icon/favicon.ico">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/metisMenu.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/slicknav.min.css">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="assets/css/typography.css">
    <link rel="stylesheet" href="assets/css/default-css.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- modernizr css -->
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<!-- login area start -->
<div class="login-area">
    <div class="container">
        <div class="login-box ptb--100">
            <form action="process.php" method="POST">
                <div class="login-form-head">
                    <h4>Admin Panel</h4>
                    <p>Welcome to IIUC Covid19 Vaccination management System</p>
                    <?php 
                        if(isset($_SESSION['status']) && $_SESSION['status'] != ''){
                            echo '<h2 class = "text-white">'.$_SESSION['status'].'</h2>';
                            unset($_SESSION['status']);
                        }
                    ?>
                </div>

                <div class="login-form-body">
                    <div class="form-gp">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="text" name="email">
                        <i class="ti-email"></i>
                        <div class="text-danger"></div>
                    </div>
                    <div class="form-gp">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="first_password">
                        <i class="ti-lock"></i>
                        <div class="text-danger"></div>
                    </div>
                    <div class="submit-btn-area">
                        <button id="form_submit" type="submit" name="login_btn">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- login area end -->

<?php
include 'includes/scripts.php';
?>