<?php
include 'security.php';
include 'dbconfig.php';
include 'includes/header.php';
include 'includes/navbar.php';
include 'includes/pagetitle.php';
?>
<div class="main-content-inner">
    <div class="row">
        <div class="col-lg-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <h2>Update Admin Profile</h2>
                    </div>

                    <div class="invoice-area">
                        <div class="invoice-table table-responsive mt-5">
                            <?php
                            //admin profile edit process start
                            if (isset($_POST['admin_edit_btn'])) {
                                $id   = $_POST['admin_edit_id'];

                                $query = "SELECT * FROM admin_registration WHERE id = '$id'";
                                $query_run = mysqli_query($connection, $query);

                                foreach ($query_run as $row) {
                                    
                            ?>
                                    <form action="process.php" method="post">
                                        <input type="hidden" class="form-control" name="update_id" value="<?php echo $row['id'];  ?>">
                                        <div class="form-group">
                                            <label for="">Username</label>
                                            <input type="text" class="form-control" placeholder="Enter Username" name="update_admin_username" value="<?php echo $row['admin_username'];  ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Email</label>
                                            <input type="email" class="form-control" placeholder="Enter Email" name="update_email" value="<?php echo $row['email'];  ?>">
                                        </div>
                                        <div class="form-group">
                                            <label for="">Password</label>
                                            <input type="password" class="form-control" placeholder="Enter Password" name="update_first_password" value="<?php echo $row['first_password'];  ?>">
                                        </div>

                                        <div class="form-group">
                                            <button type="submit" name="update_register_btn" class="btn btn-primary">Update</button>
                                        </div>
                                    </form>
                            <?php
                                }
                            }
                            //admin profile edit process end
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php
include 'includes/scripts.php';
include 'includes/footer.php';
?>