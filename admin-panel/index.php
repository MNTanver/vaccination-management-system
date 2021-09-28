<?php
include 'security.php';
include 'dbconfig.php';
include 'includes/header.php';
include 'includes/navbar.php';
include 'includes/pagetitle.php';
?>

<div class="main-content-inner">
    <!-- total registered admin start -->
    <div class="sales-report-area mt-5 mb-5">
        <div class="row">
            <div class="col-md-4">
                <div class="single-report mb-xs-30">
                    <div class="s-report-inner pr--20 pt--30 mb-3">
                        <div class="icon"><i class="fa fa-user"></i></div>
                        <div class="s-report-title d-flex justify-content-between">
                            <h4 class="header-title mb-0">Total registered Admin</h4>
                        </div>
                        <div class="d-flex justify-content-between pb-2">
                            <?php
                            $query = "SELECT id  FROM admin_registration  ORDER BY id";
                            $query_run = mysqli_query($connection, $query);
                            $row = mysqli_num_rows($query_run);

                            echo '<h5>Total Admin:' . $row . '</h5>';
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- total registered admin end -->

            <!-- total registered student start -->
            <div class="col-md-4">
                <div class="single-report mb-xs-30">
                    <div class="s-report-inner pr--20 pt--30 mb-3">
                        <div class="icon"><i class="fa fa-user"></i></div>
                        <div class="s-report-title d-flex justify-content-between">
                            <h4 class="header-title mb-0">Total registered Student</h4>

                        </div>
                        <div class="d-flex justify-content-between pb-2">
                            <?php
                            $query = "SELECT id  FROM student_registration  ORDER BY id";
                            $query_run = mysqli_query($connection, $query);
                            $row = mysqli_num_rows($query_run);

                            echo '<h5>Total Student:' . $row . '</h5>';
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- total registered student end -->

            <!-- total registered stuff start -->
            <div class="col-md-4">
                <div class="single-report mb-xs-30">
                    <div class="s-report-inner pr--20 pt--30 mb-3">
                        <div class="icon"><i class="fa fa-user"></i></div>
                        <div class="s-report-title d-flex justify-content-between">
                            <h4 class="header-title mb-0">Total registered Stuff</h4>
                        </div>
                        <div class="d-flex justify-content-between pb-2">
                            <?php
                            $query = "SELECT id  FROM stuff_registration  ORDER BY id";
                            $query_run = mysqli_query($connection, $query);
                            $row = mysqli_num_rows($query_run);

                            echo '<h5>Total Stuff:' . $row . '</h5>';
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- total registered stuff end -->
        </div>
    </div>
    <!-- sales report area end -->
    <!-- total registered teacher start -->
    <div class="sales-report-area mt-5 mb-5">
        <div class="row">
            <div class="col-md-4">
                <div class="single-report mb-xs-30">
                    <div class="s-report-inner pr--20 pt--30 mb-3">
                        <div class="icon"><i class="fa fa-user"></i></div>
                        <div class="s-report-title d-flex justify-content-between">
                            <h4 class="header-title mb-0">Total registered Teacher</h4>
                        </div>
                        <div class="d-flex justify-content-between pb-2">
                            <?php
                            $query = "SELECT id  FROM teacher_registration  ORDER BY id";
                            $query_run = mysqli_query($connection, $query);
                            $row = mysqli_num_rows($query_run);

                            echo '<h5>Total Teacher:' . $row . '</h5>';
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- total registered teacher end -->
    <?php
    include 'includes/scripts.php';
    include 'includes/footer.php';
    ?>