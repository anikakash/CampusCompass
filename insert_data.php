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

    if($uname == "" || empty($uname)){
        header('location:index.php?message=You need to fill in the first name');
    }
    else{
        $query = "insert into `unis` (`id`, uniName`, `location`, `semester`,`type`, `description`, `tuition_fee`, `credit_system`, `entrance_system`) values('$id', '$uname', '$location','$sem', '$type', '$desc', '$tusion', '$csystem', '$esystem)";
            
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