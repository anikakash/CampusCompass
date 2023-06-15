<?php
include("header.php");
include("dbcon.php");

// Check if the 'id' parameter is present in the URL
if (isset($_GET['id'])) {
    // Sanitize and retrieve the ID from the URL parameter
    $universityId = $_GET['id'];

    // Query the database to fetch the university information
    $query = "SELECT * FROM unis WHERE id = $universityId";
    $result = mysqli_query($connection, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $universityData = mysqli_fetch_assoc($result);

        // Extract the individual columns from the fetched data
        $universityName = $universityData['uniName'];
        $type = $universityData['type'];
        $location = $universityData['location'];
        $creditSystem = $universityData['credit_system'];
        $tuitionFee = $universityData['tuition_fee'];
        $entranceSystem = $universityData['entrance_system'];
        $semester = $universityData['semester'];
    } else {
        // If no university found with the given ID, handle the error
        echo "University not found.";
        exit;
    }
} else {
    // If the 'id' parameter is not provided in the URL, handle the error
    echo "University ID not specified.";
    exit;
}
?>
<style>
h4 {
    font-size: 20px;
}
</style>
<body>
    <div class="container">
        <h1><i class="fas fa-university"></i>  <?php echo $universityName; ?></h1>
        <hr>
        <div class="row">
            <div class="col-md-6">

                <h4><i class="fas fa-info-circle"></i> Type:</h4>
                <p><?php echo $type; ?></p>

                <h4><i class="fas fa-map-marker-alt"></i> Location:</h4>
                <p><?php echo $location; ?></p>

                <h4><i class="fas fa-graduation-cap"></i> Credit System:</h4>
                <p><?php echo $creditSystem; ?> </p>
            </div>
            <div class="col-md-6">
            <h4><i class="fas fa-dollar-sign"></i> Tuition Fee:</h4>
                <p><?php echo $tuitionFee; ?> USD/Year</p>

                <h4><i class="fas fa-key"></i> Entrance System:</h4>
                <p><?php echo $entranceSystem; ?></p>

                <h4><i class="fas fa-calendar"></i> Semesters:</h4>
                <p><?php echo $semester; ?> in a Year </p>
            </div>
        </div>
    </div>
    <?php include("footer.php"); ?>
