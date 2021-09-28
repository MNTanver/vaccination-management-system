<?php 
    session_start();
    include 'includes/dbconfig.php';
    //STUDENT REGISTRATION INSERT PROCESS START

    if (isset($_POST['stu_login_btn'])) {
            
        $full_name    = $_POST['full_name'];
        $matric_no       = $_POST['matric_no'];
        $mobile_no    = $_POST['mobile_no'];
        $residence    = $_POST['residence'];
        $dob          =date("Y-m-d", strtotime($_POST['dob']));
        $virus_type     = $_POST['virus_type'];
        $student_affected = $_POST['student_affected'];
        $student_vaccination_dose= $_POST['student_vaccination_dose'];
        foreach($student_vaccination_dose as $item){
            $item_vc .= $item.",";
        }
        $vaccine_type = $_POST['vaccine_type'];
        


        $query = "INSERT INTO student_registration(full_name,matric_no,mobile_no,residence,dob,virus_type,student_affected,student_vaccination_dose,vaccine_type) VALUES ('$full_name','$matric_no','$mobile_no','$residence','$dob','$virus_type','$student_affected','$item_vc','$vaccine_type')";
        //echo $query;
        $query_run = mysqli_query($connection,$query);

        if($query_run){
            $_SESSION['status_stu'] = "Data inserted successfully";
            header("Location:student_registration.php");
        }
        else{
            $_SESSION['status_stu'] = "Data not inserted!";
            header("Location:student_registration.php");
        }
    }
    //STUDENT REGISTRATION INSERT PROCESS END

    //STUFF REGISTRATION INSERT PROCESS START


    if (isset($_POST['stuff_login_btn'])) {
            
        $full_name    = $_POST['full_name'];
        $nid_no       = $_POST['nid_no'];
        $mobile_no    = $_POST['mobile_no'];
        $residence    = $_POST['residence'];
        $dob          =date("Y-m-d", strtotime($_POST['dob']));
        $virus_type     = $_POST['virus_type'];
        $stuff_affected = $_POST['stuff_affected'];
        $stuff_vaccination_dose= $_POST['stuff_vaccination_dose'];
        foreach($stuff_vaccination_dose as $item){
            $item_vc .= $item.",";
        }
        $vaccine_type = $_POST['vaccine_type'];
        


        $query = "INSERT INTO stuff_registration(full_name,nid_no,mobile_no,residence,dob,virus_type,stuff_affected,stuff_vaccination_dose,vaccine_type) VALUES ('$full_name','$nid_no','$mobile_no','$residence','$dob','$virus_type','$stuff_affected','$item_vc','$vaccine_type')";
        //echo $query;
        $query_run = mysqli_query($connection,$query);

        if($query_run){
            $_SESSION['status_stu'] = "Data inserted successfully";
            header("Location:stuff_registration.php");
        }
        else{
            $_SESSION['status_stu'] = "Data not inserted!";
            header("Location:stuff_registration.php");
        }
    }
    //STUFF REGISTRATION INSERT PROCESS END

    //TEACHER REGISTRATION INSERT PROCESS START


    if (isset($_POST['teacher_login_btn'])) {
            
        $full_name      = $_POST['full_name'];
        $nid_no         = $_POST['nid_no'];
        $mobile_no      = $_POST['mobile_no'];
        $residence      = $_POST['residence'];
        $dob            = date("Y-m-d", strtotime($_POST['dob']));
        $virus_type     = $_POST['virus_type'];
        $teacher_affected         = $_POST['teacher_affected'];
        $teacher_vaccination_dose = $_POST['teacher_vaccination_dose'];
        foreach($teacher_vaccination_dose as $item){
            $item_vc .= $item.",";
        }
        $vaccine_type = $_POST['vaccine_type'];
        


        $query = "INSERT INTO teacher_registration(full_name,nid_no,mobile_no,residence,dob,virus_type,teacher_affected,teacher_vaccination_dose,vaccine_type) VALUES ('$full_name','$nid_no','$mobile_no','$residence','$dob','$virus_type','$teacher_affected','$item_vc','$vaccine_type')";
        //echo $query;
        $query_run = mysqli_query($connection,$query);

        if($query_run){
            $_SESSION['status_stu'] = "Data inserted successfully";
            header("Location:teacher_registration.php");
        }
        else{
            $_SESSION['status_stu'] = "Data not inserted!";
            header("Location:teacher_registration.php");
        }
    }
    //TEACHER REGISTRATION INSERT PROCESS END

    //STUDENT REGISTRATION FORM VALIDATION

    /*
    $name = $email = $website = $comment = $gender = "";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $full_name=validate( $_POST['full_name']);
        $mobile_no= validate($_POST['mobile_no']);
        $residence= validate($_POST['residence']);
        $dob=validatedate(("Y-m-d", strtotime($_POST['dob'])));
        $virus_type = validate($_POST['virus_type']);
        $student_affected= validate($_POST['student_affected']);
        $student_vaccination_dose= validate($_POST['student_vaccination_dose']);
        foreach($student_vaccination_dose as $item){
            $item_vc .= $item.",";
        }
        $vaccine_type= validate($_POST['vaccine_type']);
    }

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }
    */
?>