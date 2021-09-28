<?php
include 'security.php';
include 'dbconfig.php';
include 'includes/header.php';
include 'includes/navbar.php';
include 'includes/pagetitle.php';

	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		// $record = mysqli_query($db, "SELECT * FROM student_registration WHERE id=$id");
        $query = "SELECT * FROM student_registration WHERE id=$id";
        $record = mysqli_query($connection, $query);
		if (mysqli_num_rows($record) == 1) {
			$n = mysqli_fetch_array($record);
			$name = $n['full_name'];
			$matric = $n['matric_no'];
			$mobile_no = $n['mobile_no'];
			$residence = $n['residence'];
			$dob = $n['dob'];
			$virus_type = $n['virus_type'];
			$student_affected = $n['student_affected'];
			$vaccine_type = $n['vaccine_type'];
            $student_vaccination_dose = explode(",", $n['student_vaccination_dose']);
        //    return $student_vaccination_dose;
		}
	}

?>

<div class="main-content-inner">
    <div class="row">
        <div class="col-lg-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="mb-3">Update Student Registration</h4>
                   
                            <form action="process.php" method="POST">
                            <input type="hidden" class="form-control" name="stu_update_id" value="<?php echo $n['id'];  ?>">
                                <div class="row">
                                    <div class="col">
                                        <label for="fname">Full Name</label>
                                        <input type="text" class="form-control" id="fname" placeholder="Enter Full Name" name="update_full_name" style="width: 100%;" value="<?php echo $name; ?>">
                                    </div>
                                    <br>
                                    <div class="col">
                                        <label for="matric">Matric No</label>
                                        <input type="text" class="form-control" id="matric" placeholder="Enter Matric No" name="update_matric_no" style="width: 100%;" value="<?php echo $matric; ?>">
                                    </div>
                                    <br>
                                    <div class="col">
                                        <label for="mobile">Mobile No</label>
                                        <input type="tel" class="form-control" id="mobile" placeholder="Enter Mobile No" name="update_mobile_no" style="width: 100%" value="<?php echo $mobile_no; ?>">
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col">
                                        <label for="address">Residence</label>
                                        <input type="text" class="form-control" id="fname" placeholder="Enter residence" name="update_residence" style="width: 100%;" value="<?php echo $residence; ?>">
                                    </div>
                                    <br>
                                    <div class="col">
                                        <label for="dob">Date of Birth</label>
                                        <input type="date" class="form-control" id="dob" placeholder="Enter Date Of Birth" name="update_dob" style="width: 100%;" value="<?php echo $dob; ?>">
                                    </div>
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label for="vtype" style="margin-right:10px;">Virus Type</label>
                                    <input type="radio" name="update_virus_type" id="vtype" style="margin-right:10px;" value="corona" <?php echo ($virus_type=='corona')?'checked':'' ?> >Corona
                                    <input type="radio" name="update_virus_type" id="vtype" style="margin-right:10px;" value="other" <?php echo ($virus_type=='other')?'checked':'' ?>>Other
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label for="affected" style="margin-right:10px;">Student Affected</label>
                                    <input type="radio" name="update_student_affected" id="vtype" style="margin-right:10px;" value="no" <?php echo ($student_affected=='no')?'checked':'' ?>>No
                                    <input type="radio" name="update_student_affected" id="vtype" style="margin-right:10px;" value="yes" <?php echo ($student_affected=='yes')?'checked':'' ?>>Yes
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label for="affected" style="margin-right:10px;">Stuff Vaccination Dose</label>
                                    <input type="checkbox" name="update_student_vaccination_dose[]" id="vtype" style="margin-right:10px;" value="1st dose" <?php if(in_array("1st dose", $student_vaccination_dose)){ echo " checked=\"checked\""; } ?>>1st Dose
                                    <input type="checkbox" name="update_student_vaccination_dose[]" id="vtype" style="margin-right:10px;" value="2nd dose" <?php if(in_array("2nd dose", $student_vaccination_dose)){ echo " checked=\"checked\""; } ?>>2nd Dose
                                    <input type="checkbox" name="update_student_vaccination_dose[]" id="vtype" style="margin-right:10px;" value="Not Vaccinated" <?php if(in_array("Not Vaccinated", $student_vaccination_dose)){ echo " checked=\"checked\""; } ?>>Not Vaccinated
                                </div>
                                <hr>
                                <div class="form-group">
                                    <label for="affected" style="margin-right:10px;">Vaccine Type</label>
                                    <input type="radio" name="update_vaccine_type" id="vtype" style="margin-right:10px;" value="moderna" <?php echo ($vaccine_type=='moderna')?'checked':'' ?>>Moderna
                                    <input type="radio" name="update_vaccine_type" id="vtype" style="margin-right:10px;" value="astrazeneca" <?php echo ($vaccine_type=='astrazeneca')?'checked':'' ?>>AstraZeneca
                                    <input type="radio" name="update_vaccine_type" id="vtype" style="margin-right:10px;" value="pfizer" <?php echo ($vaccine_type=='pfizer')?'checked':'' ?>>pfizer
                                    <input type="radio" name="update_vaccine_type" id="vtype" style="margin-right:10px;" value="sinopharm" <?php echo ($vaccine_type=='sinopharm')?'checked':'' ?>>sinopharm
                                    <input type="radio" name="update_vaccine_type" id="vtype" style="margin-right:10px;" value="other" <?php echo ($vaccine_type=='other')?'checked':'' ?>>Other
                                </div>
                                <br>
                                <button type="submit" name="stu_update_btn" class="btn btn-primary">Update</button>
                            </form>
                 
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include 'includes/scripts.php';
include 'includes/footer.php';
?>