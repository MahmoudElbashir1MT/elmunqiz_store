<?php
require_once '../../Config\config.php';
include '../inc/header.php';
?>
<div>
    <div class="container">
        <table class="table">

            <tbody>
                <?php
                $sql = mysqli_query($con, "SELECT * FROM category");
                if (mysqli_num_rows($sql) > 0) {
                    $i = 1;
                ?>
                    <caption>all categories Table </caption>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>name</th>
                            <th>description</th>
                            <th>active</th>
                            <th>action</th>
                            
                        </tr>
                    </thead>
                    <?php
                    while ($row = mysqli_fetch_array($sql)) {
                    ?>
                        <tr class="active">
                            <td><?php echo $i++; ?> </td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['description']; ?></td>
                            <td><?php echo $row['active']; ?></td>
                            
                            <td><a href="edit.php?id=<?php echo $row['id']; ?>"><button type="submit" class="btn btn-primary">Edit</button></a>
                                <a href="delete.php?id=<?php echo $row['id']; ?>"><button type="submit" class="btn btn-danger">Delete</button></a>
                            </td>
                        </tr>

                <?php
                    }
                } else {
                    echo '<div class="alert alert-warning"> <center>No category to show</center></div>';
                }
                ?>

            </tbody>
        </table>
    </div>
</div>
<?php include '../inc/footer.php'; ?>
</div>
</body>

</html>