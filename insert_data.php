<?php
include 'dbcon.php';


if(isset($_POST['add_unis'])){
    $id = $_POST['id'];
    $uname  = $_POST['uniName'];
    $location = $_POST['location'];
    $sem = $_POST['semester']; 
    $type = $_POST['type']; 
    $desc = $_POST['description']; 
    $tusion = $_POST['tuition_fee']; 
    $csystem = $_POST['credit_system'];
    $esystem = $_POST['entrance_system']; 

    $query = "SELECT * FROM `unis` WHERE `id` = '$id'";
    $cros_chk_uni_info = mysqli_query($connection, $query);
    if(mysqli_num_rows($cros_chk_uni_info)>0){
        echo '<script>alert("University already exists!");</script>';
    }
    else{
        $query = "insert into `unis` (`id`, `uniName`, `location`, `semester`,`type`, `description`, `tuition_fee`, `credit_system`, `entrance_system`) values('$id', '$uname', '$location','$sem', '$type', '$desc', '$tusion', '$csystem', '$esystem')";
            
        $result = mysqli_query($connection,$query);

        if(!$result){
            die("Query Failed".mysqli_error($connection));
        }
        else{
            header('location:admin_home.php?insert_msg=Your data has been added successfully');
        }
    }
}
 ?>