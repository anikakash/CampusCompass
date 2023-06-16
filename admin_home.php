<?php include("admin_header.php");?>
<?php include("dbcon.php");?>
<?php
include_once './auth_user.php'
?>

    <div class="box1">
        <h2>All Information</h2>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">ADD DATA</button>
    </div>

    <table class="table table-hover table-bordered table-striped">
        <tr>
            <th>ID</th>
            <th>University Name</th>
            <th>Location</th>
            <th>Semesters</th>
            <th>Type</th>
            <th>Description</th>
            <th>Tution Fee</th>
            <th>Credit System</th>
            <th>Entrance System</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        <tr>
            <?php
                $query = "select * from `unis` ORDER BY id ASC";
                $result = mysqli_query($connection, $query);

                if(!$result){
                    die("Query Failed".mysqli_error());
                }
                else{
                    while($row = mysqli_fetch_assoc($result)){
                        ?>
                            <tr>
                                <td> <?php echo $row['id'];  ?> </td>
                                <td> <?php echo $row['uniName'];  ?> </td>
                                <td> <?php echo $row['location'];  ?> </td>
                                <td> <?php echo $row['semester'];  ?> </td>
                                <td> <?php echo $row['type'];  ?> </td>
                                <td> <?php echo $row['description'];  ?> </td>
                                <td> <?php echo $row['tuition_fee'];  ?> </td>
                                <td> <?php echo $row['credit_system'];  ?> </td>
                                <td> <?php echo $row['entrance_system'];  ?> </td>
                                <td><a href="update_page_1.php?id=<?php echo $row['id'];?>" class='btn btn-success'>Update</a></td>
                                <td><a href="delete_page.php?id=<?php echo $row['id'];?>" class='btn btn-danger'>Delete</a></td>
                            </tr>
                        <?php
                    }
                }
            ?>
    </table>
    <!-- For Form validation -->
    <?php
        if(isset($_GET['message'])){
            echo "<h6>".$_GET['message']."</h6>";
        }
    ?>
    <!-- for qury validation -->

    <?php
        if(isset($_GET['insert_msg'])){
            echo "<h6 style='color:green'>".$_GET['insert_msg']."</h6>";
        }
    ?>

    <!-- Update Successfull massage -->

    <?php
        if(isset($_GET['update_msg'])){
            echo "<h6 style='color:green'>".$_GET['update_msg']."</h6>";
        }
    ?>
    
    <?php
        if(isset($_GET['delete_msg'])){
            echo "<h6 style='color:red'>".$_GET['delete_msg']."</h6>";
        }
    ?>

<?php
        if(isset($_GET['already_exist'])){
            echo "<h6 style='color:organe'>".$_GET['already_exist']."</h6>";
        }
    ?>


<!-- Modal Form -->
<form action="insert_data.php" method="post">
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">ADD STUDENTS</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body">
            <div class="form-group">
                <label for="id">ID</label>
                <input type="number" name="id" class="form-control">
            </div>
            <div class="form-group">
                <label for="uniName">University Name</label>
                <input type="text" name="uniName" class="form-control">
            </div>

            <div class="form-group">
                <label for="location">Location</label>
                <input type="text" name="location" class="form-control">
            </div>

            <div class="form-group">
                <label for="semester">Semester</label>
                <input type="number" name="semester" class="form-control">
            </div>

            <div class="form-group">
                <label for="type">Type</label>
                <input type="text" name="type" class="form-control">
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" name="description" class="form-control">
            </div>

            <div class="form-group">
                <label for="tuition_fee">Tuition Fee</label>
                <input type="number" name="tuition_fee" class="form-control">
            </div>

            <div class="form-group">
                <label for="credit_system">Credit System</label>
                <input type="text" name="credit_system" class="form-control">
            </div>

            <div class="form-group">
                <label for="entrance_system">Entrance System</label>
                <input type="text" name="entrance_system" class="form-control">
            </div>

      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-success" name="add_unis" value="ADD">
      </div>
    </div>
  </div>
</div>
</form>


<?php include("footer.php");?>
