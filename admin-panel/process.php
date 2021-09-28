<?php
include 'security.php';
//admin profile registration process start
if (isset($_POST['register_btn'])) {
    $admin_username    = $_POST['admin_username'];
    $email             = $_POST['email'];
    $first_password    = $_POST['first_password'];
    $confirm_password  = $_POST['confirm_password'];


    if ($first_password === $confirm_password) {
        $query = "INSERT INTO admin_registration(admin_username,email,first_password) VALUES('$admin_username','$email','$first_password')";
        $query_run = mysqli_query($connection, $query);

        if ($query_run) {
            $_SESSION['success'] = "Admin profile added";
            header('Location: admin_registration.php');
        } else {
            $_SESSION['status'] = "Admin profile not added";
            header('Location: admin_registration.php');
        }
    } else {
        $_SESSION['status'] = "password and confirm password does not match";
        header('Location: admin_registration.php');
    }
}
//admin profile registration process end

//Update admin profile process strat
if (isset($_POST['update_register_btn'])) {
    $id = $_POST['update_id'];
    $admin_username    = $_POST['update_admin_username'];
    $email             = $_POST['update_email'];
    $first_password    = $_POST['update_first_password'];


    $query = "UPDATE admin_registration SET admin_username = '$admin_username',email = '$email',first_password = '$first_password' WHERE id = '$id'";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $_SESSION['success'] = "Admin profile is updated successfully";
        header('Location: admin_registration.php');
    } else {
        $_SESSION['status'] = "Admin profile is not updated";
        header('Location: admin_registration.php');
    }
}
//update admin profile process end

//delete admin profile process start
if (isset($_POST['admin_delete_btn'])) {
    $id = $_POST['delete_id'];

    $query = "DELETE  FROM admin_registration  WHERE id = '$id'";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $_SESSION['success'] = "Your data is deleted";
        header('Location: admin_registration.php');
    } else {
        $_SESSION['status'] = "Your data is not deleted";
        header('Location: admin_registration.php');
    }
}
//delete admin profile process end

//Update student registration process strat
if (isset($_POST['stu_update_btn'])) {
    $id = $_POST['stu_update_id'];
    $full_name   = $_POST['update_full_name'];
    $matric_no   = $_POST['update_matric_no'];
    $mobile_no   = $_POST['update_mobile_no'];
    $residence   = $_POST['update_residence'];
    $dob         = date("Y-m-d", strtotime($_POST['update_dob']));
    $virus_type  = $_POST['update_virus_type'];
    $student_affected         = $_POST['update_student_affected'];
    $student_vaccination_dose= $_POST['update_student_vaccination_dose'];
        foreach($student_vaccination_dose as $item){
            $item_vc .= $item.",";
        }
    $vaccine_type  = $_POST['update_vaccine_type'];


    $query = "UPDATE student_registration SET full_name = '$full_name',matric_no = '$matric_no ',mobile_no = '$mobile_no ',residence ='$residence',dob = '$dob',virus_type = '$virus_type',student_affected = '$student_affected',student_vaccination_dose = '$item_vc',vaccine_type = '$vaccine_type' WHERE id = '$id'";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $_SESSION['success'] = "Student registration is updated successfully";
        header('Location: student_details.php');
    } else {
        $_SESSION['status'] = "Student registration is not updated";
        header('Location: student_details.php');
    }
}
//update student registration process end

//Update teacher registration process strat
if (isset($_POST['tea_update_btn'])) {
    $id = $_POST['tea_update_id'];
    $full_name   = $_POST['full_name'];
    $nid_no   = $_POST['nid_no'];
    $mobile_no   = $_POST['mobile_no'];
    $residence   = $_POST['residence'];
    $dob         = date("Y-m-d", strtotime($_POST['dob']));
    $virus_type  = $_POST['virus_type'];
    $teacher_affected         = $_POST['teacher_affected'];
    $teacher_vaccination_dose= $_POST['teacher_vaccination_dose'];
        foreach($teacher_vaccination_dose as $item){
            $item_vc .= $item.",";
        }
    $vaccine_type  = $_POST['update_vaccine_type'];


    $query = "UPDATE teacher_registration SET full_name = '$full_name',nid_no = '$nid_no ',mobile_no = '$mobile_no ',residence ='$residence',dob = '$dob',virus_type = '$virus_type',teacher_affected = '$teacher_affected',teacher_vaccination_dose = '$item_vc',vaccine_type = '$vaccine_type' WHERE id = '$id'";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $_SESSION['success'] = "Teacher registration is updated successfully";
        header('Location: teacher_details.php');
    } else {
        $_SESSION['status'] = "Student registration is not updated";
        header('Location: teacher_details.php');
    }
}
//update teacher registration process end


//Update Stuff registration process strat
if (isset($_POST['stuff_update_btn'])) {
    $id = $_POST['stuff_update_id'];
    $full_name   = $_POST['full_name'];
    $nid_no   = $_POST['nid_no'];
    $mobile_no   = $_POST['mobile_no'];
    $residence   = $_POST['residence'];
    $dob         = date("Y-m-d", strtotime($_POST['dob']));
    $virus_type  = $_POST['virus_type'];
    $stuff_affected         = $_POST['stuff_affected'];
    $stuff_vaccination_dose = $_POST['stuff_vaccination_dose'];
        foreach($stuff_vaccination_dose as $item){
            $item_vc .= $item.",";
        }
    $vaccine_type  = $_POST['update_vaccine_type'];


    $query = "UPDATE stuff_registration SET full_name = '$full_name',nid_no = '$nid_no ',mobile_no = '$mobile_no ',residence ='$residence',dob = '$dob',virus_type = '$virus_type',stuff_affected = '$stuff_affected',stuff_vaccination_dose = '$item_vc',vaccine_type = '$vaccine_type' WHERE id = '$id'";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $_SESSION['success'] = "Stuff registration is updated successfully";
        header('Location: stuff_details.php');
    } else {
        $_SESSION['status'] = "Student registration is not updated";
        header('Location: stuff_details.php');
    }
}
//update Stuff registration process end
//delete student registration process start
if (isset($_POST['stu_delete_btn'])) {
    $id = $_POST['stu_edit_id'];

    $query = "DELETE  FROM student_registration  WHERE id = '$id'";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $_SESSION['success'] = "Your data is deleted";
        header('Location: student_details.php');
    } else {
        $_SESSION['status'] = "Your data is not deleted";
        header('Location: student_details.php');
    }
}
//delete student registration process end

//delete stuff registration process start
if (isset($_POST['stuff_delete_btn'])) {
    $id = $_POST['stuff_edit_id'];

    $query = "DELETE  FROM stuff_registration  WHERE id = '$id'";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $_SESSION['success'] = "Your data is deleted";
        header('Location: stuff_details.php');
    } else {
        $_SESSION['status'] = "Your data is not deleted";
        header('Location: stuff_details.php');
    }
}
//delete stuff registration process end

//delete teacher registration process start
if (isset($_POST['teacher_delete_btn'])) {
    $id = $_POST['teacher_edit_id'];

    $query = "DELETE  FROM teacher_registration  WHERE id = '$id'";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) {
        $_SESSION['success'] = "Your data is deleted";
        header('Location: teacher_details.php');
    } else {
        $_SESSION['status'] = "Your data is not deleted";
        header('Location: teacher_details.php');
    }
}
//delete teacher registration process end

//login process start

if (isset($_POST['login_btn'])) {
    $email_login = $_POST['email'];
    $password_login = $_POST['first_password'];

    $query = "SELECT * FROM admin_registration WHERE email = '$email_login' AND first_password = '$password_login'";
    $query_run = mysqli_query($connection, $query);

    if (mysqli_fetch_array($query_run)) {
        $_SESSION['username'] = $email_login;
        header('Location: index.php');
    } else {
        $_SESSION['status'] = 'email or password is invalid';
        header('Location: login.php');
    }
}

//login process end

//logout process start

if (isset($_POST['logout_btn'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('Location: login.php');
}

//logout process end