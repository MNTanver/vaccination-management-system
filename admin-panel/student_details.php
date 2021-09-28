<?php
include 'dbconfig.php';
include 'security.php';
include 'includes/header.php';
include 'includes/navbar.php';
include 'includes/pagetitle.php';
?>
<!-- page title area end -->
<div class="main-content-inner">
    <div class="row">
        <div class="col-lg-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <div class="invoice-area">
                        <div class="invoice-table table-responsive mt-5">
                            <?php
                            $query = "SELECT * FROM student_registration";
                            $query_run = mysqli_query($connection, $query);
                            ?>
                            <table class="table datatable table-bordered table-hover text-right">
                                <thead>
                                    <tr class="text-capitalize">
                                        <th>id</th>
                                        <th>Student Name</th>
                                        <th>Matric No</th>
                                        <th>Mobile No</th>
                                        <th>Address</th>
                                        <th>DOB</th>
                                        <th>Virus Type</th>
                                        <th>Student Affected</th>
                                        <th>Student Vaccination Dose</th>
                                        <th>Vaccine Type</th>
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
                                                <td><?php echo $row['id']; ?></td>
                                                <td><?php echo $row['full_name']; ?></td>
                                                <td><?php echo $row['matric_no']; ?></td>
                                                <td><?php echo $row['mobile_no']; ?></td>
                                                <td><?php echo $row['residence']; ?></td>
                                                <td><?php echo $row['dob']; ?></td>
                                                <td><?php echo $row['virus_type']; ?></td>
                                                <td><?php echo $row['student_affected']; ?></td>
                                                <td><?php echo $row['student_vaccination_dose']; ?></td>
                                                <td><?php echo $row['vaccine_type']; ?></td>
                                                <td>
                                                    <!-- <form action="student_registration_update.php" method="post"> -->
                                                        <!-- <input type="hidden" name="stu_edit_id" value="<?php echo $row['id'];  ?>"> -->
                                                        <!-- <button type="submit" name="stu_edit_btn" class="btn btn-success">Edit</button> -->
                                                    <!-- </form> -->
                                                    <a href="student_details_update.php?edit=<?php echo $row['id']; ?>" class="btn btn-success">Edit</a>
                                                    <!-- echo '<a href="student_registrati_update.phpv?id='. $row['id'] .'" class="mr-3" title="Update Record" data-toggle="tooltip"><span class="fa fa-pencil"></span></a>'; -->
                                                </td>
                                                <td>
                                                    <form action="process.php" method="post">
                                                        <input type="hidden" name="stu_edit_id" value="<?php echo $row['id'];  ?>">
                                                        <button type="submit" name="stu_delete_btn" class="btn btn-danger">Delete</button>
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