<?php include("header.php");?>
<?php include("dbcon.php");?>


    <?php
        if(isset($_GET['id'])){
            $id =$_GET['id']; 
        
        
            $query = "select * from `students` where `id` = '$id'";
            $result = mysqli_query($connection, $query);
            
            if(!$result){
                die("Query Failed**".mysqli_error($connection));
            }
            else{
                $row = mysqli_fetch_assoc($result);
                // print_r($row);
            }
        }
    ?>
    
    <?php
        if(isset($_POST['update_students'])){

            if(isset($_GET['id_new'])){
                $idnew = $_GET['id_new'];
            }
            $uname  = $_POST['uni_name'];
            $dept = $_POST['department'];
            $time = $_POST['courses_duration']; 
            $city = $_POST['location']; 

            $query = "update `students` set `uni_name` = '$uname', `department` = '$dept', `courses_duration` = '$time', `location` = '$city'  where `id` = '$idnew'";

            $result = mysqli_query($connection, $query);
            
            if(!$result){
                die("Query Failed*a*".mysqli_error($connection));
            }else{
                header("location:admin_home.php?update_msg=You have successfully updated the data.");
            }
        }
    ?>



    <form action="update_page_1.php?id_new=<?php echo $id;?>" method="post">
        <div class="form-group">
            <label for="uni_name">University Name	</label>
            <input type="text" name="uni_name" class="form-control" value="<?php echo $row['uni_name'] ?>">
        </div>

        <div class="form-group">
            <label for="department">Department</label>
            <input type="text" name="department" class="form-control" value="<?php echo $row['department'] ?>">
        </div>

        <div class="form-group">
            <label for="courses_duration">Course Duration</label>
            <input type="text" name="courses_duration" class="form-control" value="<?php echo $row['courses_duration'] ?>">
        </div>

        <div class="form-group">
            <label for="location">Location</label>
            <input type="text" name="location" class="form-control" value="<?php echo $row['location'] ?>">
        </div>

        <div class="update_btn">
            <input type="submit" class="btn btn-success" name="update_students" value="UPDATE">
        </div>
    </form>

<?php include("footer.php");?>