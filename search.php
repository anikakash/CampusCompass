<?php 
include("header.php");
include("dbcon.php");
?>

    <div class="mx-auto" style="width: 80vw;">
    <form action="" method="GET">
        <div class="input-group mb-3">
            <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>"           class="form-control" placeholder="Search data"><button type="submit" class="btn btn-primary">Search</button>
        </div>
    </form>
        <!-- <h1 class="text-center">Search Result</h1> -->
        <table class="table table-hover table-bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>University Name</th>
                    <th>Department</th>
                    <th>Course Duration</th>
                    <th>Location</th>
                </tr>
            </thead>
            <tbody>
            <?php 
                if(isset($_GET['search'])){
                    $filtervalues = $_GET['search'];
                    $query = "SELECT * FROM students WHERE (location LIKE '%$filtervalues%' OR department Like '%$filtervalues%' OR 
                    uni_name Like '%$filtervalues%')";
                    $query_run = mysqli_query($connection, $query);
                    if(mysqli_num_rows($query_run) > 0){
                        foreach($query_run as $items){
                            ?>
                                <tr>
                                <td> <?php echo $items['id'];  ?> </td>
                                <td> <?php echo $items['uni_name'];  ?> </td>
                                <td> <?php echo $items['department'];  ?> </td>
                                <td> <?php echo $items['courses_duration'];  ?> </td>
                                <td> <?php echo $items['location'];  ?> </td>
                                </tr>
                            <?php
                        }
                    }else{
                        ?>
                            <tr>
                                <td colspan="4">No Data</td>
                            </tr>
                        <?php
                    }
                }
                ?>
            </tbody>
        </table>
    </div>

</body>

</html>
<?php include("footer.php"); ?>