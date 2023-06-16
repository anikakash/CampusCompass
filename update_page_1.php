<?php include("header.php");?>
<?php include("dbcon.php");?>


    <?php
        if(isset($_GET['id'])){
            $id =$_GET['id']; 
        
        
            $query = "select * from `unis` where `id` = '$id'";
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
        if(isset($_POST['update_unis'])){

            if(isset($_GET['id_new'])){
                $idnew = $_GET['id_new'];
            }
            $uname  = $_POST['uniName'];
            $location = $_POST['location'];
            $sem = $_POST['semester']; 
            $type = $_POST['type']; 
            $desc = $_POST['description']; 
            $tusion = $_POST['tuition_fee']; 
            $csystem = $_POST['credit_system'];
            $esystem = $_POST['entrance_system'];

            $query = "update `unis` set `uniName` = '$uname', `location` = '$location', `semester` = '$sem',
            `type` = '$type', `description` = '$desc', `tuition_fee` = '$tusion', `credit_system` = '$csystem', `entrance_system` = '$esystem'  where `id` = '$idnew'";

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
            <label for="uniName">University Name</label>
            <input type="text" name="uniName" class="form-control" value="<?php echo $row['uniName'] ?>">
        </div>

        <div class="form-group">
            <label for="location">Location</label>
            <input type="text" name="location" class="form-control" value="<?php echo $row['location'] ?>">
        </div>

        <div class="form-group">
            <label for="semester">Semesters</label>
            <input type="text" name="semester" class="form-control" value="<?php echo $row['semester'] ?>">
        </div>
        
        <div class="form-group">
            <label for="type">Type</label>
            <input type="text" name="type" class="form-control" value="<?php echo $row['type'] ?>">
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" name="description" class="form-control" value="<?php echo $row['description'] ?>">
        </div>

        <div class="form-group">
            <label for="tuition_fee">Tution Fee</label>
            <input type="number" name="tuition_fee" class="form-control" value="<?php echo $row['tuition_fee'] ?>">
        </div>

        <div class="form-group">
            <label for="credit_system">Credit System</label>
            <input type="text" name="credit_system" class="form-control" value="<?php echo $row['credit_system'] ?>">
        </div>

        <div class="form-group">
            <label for="entrance_system">Entrance System</label>
            <input type="text" name="entrance_system" class="form-control" value="<?php echo $row['entrance_system'] ?>">
        </div>

        <div class="update_btn">
            <input type="submit" class="btn btn-success" name="update_unis" value="UPDATE">
        </div>
    </form>

<?php include("footer.php");?>