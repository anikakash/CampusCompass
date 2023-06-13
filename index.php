<?php include("header.php"); ?>
<?php include("dbcon.php"); ?>

<div class="mx-auto" style="width: 80vw;">
    <form action="" method="GET">
        <div class="input-group mb-3">
            <input type="text" name="search" required value="<?php echo isset($_GET['search']) ? $_GET['search'] : ''; ?>" class="form-control" placeholder="Search data">
            <button type="submit" class="btn btn-primary">Search</button>
        </div>
    </form>

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
            if (isset($_GET['search'])) {
                $filtervalues = $_GET['search'];
                $query = "SELECT * FROM students WHERE (location LIKE '%$filtervalues%' OR department LIKE '%$filtervalues%' OR uni_name LIKE '%$filtervalues%')";
                $query_run = mysqli_query($connection, $query);
                if (mysqli_num_rows($query_run) > 0) {
                    foreach ($query_run as $items) {
                        ?>
                        <tr>
                            <td><?php echo $items['id']; ?></td>
                            <td><?php echo $items['uni_name']; ?></td>
                            <td><?php echo $items['department']; ?></td>
                            <td><?php echo $items['courses_duration']; ?></td>
                            <td><?php echo $items['location']; ?></td>
                        </tr>
                    <?php
                    }
                } else {
                    ?>
                    <tr>
                        <td colspan="5">No Data</td>
                    </tr>
                <?php
                }
            } else {
                $query = "SELECT * FROM students";
                $result = mysqli_query($connection, $query);
                if (!$result) {
                    die("Query Failed" . mysqli_error());
                } else {
                    while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['uni_name']; ?></td>
                            <td><?php echo $row['department']; ?></td>
                            <td><?php echo $row['courses_duration']; ?></td>
                            <td><?php echo $row['location']; ?></td>
                        </tr>
            <?php
                    }
                }
            }
            ?>
        </tbody>
    </table>
</div>

<?php include("footer.php"); ?>
