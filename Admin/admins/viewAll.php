<?php
require_once '../../Config\config.php';
require '../inc/header.php';
?>
<div>
    <div class="container">
        <table class="table">

            <tbody>
                <?php
                $sql = mysqli_query($con, "SELECT * FROM admin");
                if (mysqli_num_rows($sql) > 0) {
                    $i = 1;
                ?>
                    <caption>all admins Table </caption>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>name</th>
                            <th>email</th>
                            <th>phone</th>
                            <th>city</th>
                            <th>address</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <?php
                    while ($row = mysqli_fetch_array($sql)) {
                    ?>
                        <tr class="active">
                            <td><?php echo $i++; ?> </td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['phone']; ?></td>
                            <td><?php echo $row['city']; ?></td>
                            <td><?php echo $row['address']; ?></td>
                            <td><a href="edit.php?id=<?php echo $row['id']; ?>"><button type="submit" class="btn btn-primary">Edit</button></a>
                                <a href="delete.php?id=<?php echo $row['id']; ?>"><button type="submit" class="btn btn-danger">Delete</button></a>
                            </td>
                        </tr>

                <?php
                    }
                } else {
                    echo '<div class="alert alert-warning"> <center>no admins</center></div>';
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