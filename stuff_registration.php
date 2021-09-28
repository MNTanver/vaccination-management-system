<?php
session_start();
include 'includes/dbconfig.php';
include 'includes/header.php';
include 'includes/navbar.php';
?>
<!--=======================Registration form start======================-->
<div class="container">
    <?php
    if (isset($_SESSION['status_stu'])) {
        echo "<h4>" . $_SESSION['status_stu'] . "</h4>";
        unset($_SESSION['status_stu']);
    }
    ?>
    <h2 class="text-center">Stuff Registration Form</h2>
    <hr>
    <form action="action_handler.php" method="POST">
        <div class="row">
            <div class="col">
                <label for="fname">Full Name</label>
                <input type="text" class="form-control" id="fname" placeholder="Enter Full Name" name="full_name" style="width: 100%;">
            </div>
            <hr>
            <div class="col">
                <label for="matric">NID No</label>
                <input type="number" class="form-control" id="matric" placeholder="Enter NID No" name="nid_no" style="width: 100%;">
            </div>
            <hr>
            <div class="col">
                <label for="mobile">Mobile No</label>
                <input type="number" class="form-control" id="mobile" placeholder="Enter Mobile No" name="mobile_no" style="width: 100%">
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col">
                <label for="address">Residence</label>
                <input type="text" class="form-control" id="fname" placeholder="Enter residence" name="residence" style="width: 100%;">
            </div>
            <br>
            <div class="col">
                <label for="dob">Date of Birth</label>
                <input type="date" class="form-control" id="dob" placeholder="Enter Date Of Birth" name="dob" style="width: 100%;">
            </div>
        </div>
        <hr>
        <div class="form-group">
            <label for="vtype" style="margin-right:10px;">Virus Type</label>
            <input type="radio" name="virus_type" id="vtype" style="margin-right:10px;" value="corona">Corona
            <input type="radio" name="virus_type" id="vtype" style="margin-right:10px;" value="other">Other
        </div>
        <hr>
        <div class="form-group">
            <label for="affected" style="margin-right:10px;">Stuff Affected</label>
            <input type="radio" name="stuff_affected" id="vtype" style="margin-right:10px;" value="no">No
            <input type="radio" name="stuff_affected" id="vtype" style="margin-right:10px;" value="yes">Yes
        </div>
        <hr>
        <div class="form-group">
            <label for="affected" style="margin-right:10px;">Stuff Vaccination Dose</label>
            <input type="checkbox" name="stuff_vaccination_dose[]" id="vtype" style="margin-right:10px;" value="1st dose">1st Dose
            <input type="checkbox" name="stuff_vaccination_dose[]" id="vtype" style="margin-right:10px;" value="2nd dose">2nd Dose
            <input type="checkbox" name="stuff_vaccination_dose[]" id="vtype" style="margin-right:10px;" value="Not Vaccinated">Not Vaccinated
        </div>
        <hr>
        <div class="form-group">
            <label for="affected" style="margin-right:10px;">Vaccine Type</label>
            <input type="radio" name="vaccine_type" id="vtype" style="margin-right:10px;" value="moderna">Moderna
            <input type="radio" name="vaccine_type" id="vtype" style="margin-right:10px;" value="astrazeneca">AstraZeneca
            <input type="radio" name="vaccine_type" id="vtype" style="margin-right:10px;" value="pfizer">pfizer
            <input type="radio" name="vaccine_type" id="vtype" style="margin-right:10px;" value="sinopharm">sinopharm
            <input type="radio" name="vaccine_type" id="vtype" style="margin-right:10px;" value="other">Other
        </div>
        <br>
        <button type="submit" name="stuff_login_btn" class="btn btn-dark">Submit</button>
    </form>
</div>
<!--=======================Registration form end======================-->
<?php include 'includes/footer.php';  ?>