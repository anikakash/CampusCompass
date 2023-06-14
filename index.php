<?php include("header.php"); ?>
<?php include("dbcon.php"); ?>


<div class="mx-auto" style="width: 80vw;">
    <form action="" method="GET">
        <div class="input-group mb-3">
            <input type="text" name="search" required value="<?php echo isset($_GET['search']) ? $_GET['search'] : ''; ?>" class="form-control" placeholder="Search data">
            <button type="submit" class="btn btn-primary">Search</button>
        </div>
    </form>
    <div class='university-list'>
        <p>#1 Best University in Bangladesh</p>
        <h2>Dhaka University</h2>
        <div class="info" style="display: flex">
            <h5><i class="fa-duotone fa-map-location"></i> Dhaka, Bangladesh</h5>
            <h5><i class="fa-duotone fa-graduation-cap"></i> 4 Years</h4>
            <h5><i class="fa-duotone fa-building-columns"></i> Public</h4>
        </div>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis, possimus. Excepturi itaque repellat sed rem assumenda molestiae illo inventore magni corrupti saepe! Magni officia tempora, dolor minus ipsam voluptas amet cum praesentium nisi in, ex eius porro incidunt doloribus reiciendis consequuntur velit eligendi! Mollitia debitis totam illum, quos in expedita. <a href="/du">Learn More</a></p>
        
    </div>
    <div class='university-list'>
        <p>#2 Best University in Bangladesh</p>
        <h2>Dhaka International University</h2>
        <div class="info" style="display: flex">
            <h5><i class="fa-duotone fa-map-location"></i> Banani, Dhaka, Bangladesh</h5>
            <h5><i class="fa-duotone fa-graduation-cap"></i> 4 Years</h4>
            <h5><i class="fa-duotone fa-building-columns"></i> Private</h4>
        </div>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nobis, possimus. Excepturi itaque repellat sed rem assumenda molestiae illo inventore magni corrupti saepe! Magni officia tempora, dolor minus ipsam voluptas amet cum praesentium nisi in, ex eius porro incidunt doloribus reiciendis consequuntur velit eligendi! Mollitia debitis totam illum, quos in expedita. <a href="/du">Learn More</a></p>
        
    </div>

    <!-- <table class="table table-hover table-bordered table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>University Name</th>
                <th>Department</th>
                <th>Course Duration</th>
                <th>Location</th>
                <th>Description</th>
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
                            <td><?php echo $items['desc']; ?></td>
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
                            <td><?php echo $row['desc']; ?></td>
                        </tr>
            <?php
                    }
                }
            }
            ?>
        </tbody>
    </table> -->
</div>

<?php include("footer.php"); ?>
