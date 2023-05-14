<?php
while($row = mysqli_fetch_assoc($result)){
    ?>
        <tr>
            <td> <?php echo $row['id'];  ?> </td>
            <td> <?php echo $row['first_name'];  ?> </td>
            <td> <?php echo $row['last_name'];  ?> </td>
            <td> <?php echo $row['age'];  ?> </td>
            <td><a href="update_page_1.php?id=<?php echo $row['id'];?>" class='btn btn-success'>Update</a></td>
            <td><a href="delete_page.php?id=<?php echo $row['id'];?>" class='btn btn-danger'>Delete</a></td>
        </tr>
    <?php
}
?>