<?php
include 'security.php';
include 'dbconfig.php';
include 'includes/header.php';
include 'includes/navbar.php';
include 'includes/pagetitle.php';
?>
<div class="main-content-inner">
    <!-- Modal -->
    <div class="modal fade" id="add_admin">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Create Admin Profile</h5>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                </div>
                <form action="process.php" method="POST">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Username</label>
                            <input type="text" class="form-control" placeholder="Enter Username" name="admin_username">
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" class="form-control" placeholder="Enter Email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" class="form-control" placeholder="Enter Password" name="first_password">
                        </div>
                        <div class="form-group">
                            <label for="">Confirm Password</label>
                            <input type="password" class="form-control" placeholder="Enter Confirm Password" name="confirm_password">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="register_btn" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- basic modal end -->
    <div class="row">
        <div class="col-lg-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <button data-toggle="modal" data-target="#add_admin" class="btn btn-primary">Create Admin Profile</button>
                    </div>
                    <?php
                    if (isset($_SESSION['success']) && $_SESSION['success'] != '') {
                        echo '<h6>' . $_SESSION['success'] . '</h6>';
                        unset($_SESSION['success']);
                    } else {
                        if (isset($_SESSION['status']) && $_SESSION['status'] != '') {
                            echo '<h6>' . $_SESSION['status'] . '</h6>';
                            unset($_SESSION['status']);
                        }
                    }
                    ?>
                    <div class="invoice-area">
                        <div class="invoice-table table-responsive mt-5">
                            <?php
                            $query = "SELECT * FROM admin_registration";
                            $query_run = mysqli_query($connection, $query);
                            ?>
                            <table class="table table-bordered table-hover text-right">
                                <thead>
                                    <tr class="text-capitalize">
                                        <th>id</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    if (mysqli_num_rows($query_run) > 0) {
                                        while ($row = mysqli_fetch_assoc($query_run)) {
                                    ?>
                                            <tr>
                                                <td><?php echo $row['id'];  ?></td>
                                                <td><?php echo $row['admin_username']; ?></td>
                                                <td><?php echo $row['email']; ?></td>
                                                <td>
                                                    <form action="admin_profile_update.php" method="post">
                                                        <input type="hidden" name="admin_edit_id" value="<?php echo $row['id'];  ?>">
                                                        <button type="submit" name="admin_edit_btn" class="btn btn-success">Edit</button>
                                                    </form>
                                                </td>
                                                <td>
                                                    <form action="process.php" method="post">
                                                        <input type="hidden" name="teacher_delete_id" value="<?php echo $row['id'];  ?>">
                                                        <button type="submit" name="teacher_delete_btn" class="btn btn-danger">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                    <?php
                                        }
                                    } else {
                                        echo "No record found";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- main content area end -->
<!-- page container area end -->
<?php
include 'includes/scripts.php';
include 'includes/footer.php';
?>