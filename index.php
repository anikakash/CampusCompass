<?php include("header.php");?>
<?php include("dbcon.php");?>

    <table class="table table-hover table-bordered table-striped">
        <tr>
            <th>ID</th>
            <th>University Name</th>
            <th>Department</th>
            <th>Course Duration</th>
            <th>Location</th>
        </tr>
        <tr>
            <?php
                $query = "select * from `students`";
                $result = mysqli_query($connection, $query);

                if(!$result){
                    die("Query Failed".mysqli_error());
                }
                else{
                    while($row = mysqli_fetch_assoc($result)){
                        ?>
                            <tr>
                                <td> <?php echo $row['id'];  ?> </td>
                                <td> <?php echo $row['uni_name'];  ?> </td>
                                <td> <?php echo $row['department'];  ?> </td>
                                <td> <?php echo $row['courses_duration'];  ?> </td>
                                <td> <?php echo $row['location'];  ?> </td>
                            </tr>
                        <?php
                    }
                }
            ?>
    </table>

<?php include("footer.php");?>