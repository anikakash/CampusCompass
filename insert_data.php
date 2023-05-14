<?php
include 'dbcon.php';
if(isset($_POST['add_students'])){
    $uname  = $_POST['uni_name'];
    $dept = $_POST['department'];
    $time = $_POST['courses_duration']; 
    $city = $_POST['location']; 

    if($uname == "" || empty($uname)){
        header('location:index.php?message=You need to fill in the first name');
    }
    else{
        $query = "insert into `students` (`uni_name`, `department`, `courses_duration`,`location`) values('$uname', '$dept','$time', '$city')";
            
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