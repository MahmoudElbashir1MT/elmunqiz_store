<?php
require_once '../../Config\config.php';
include '../inc/header.php';
?>

<div class="container">
    <table class="table">

        <tbody>
            <?php
            $sql = mysqli_query($con, "SELECT * FROM product");
            if (mysqli_num_rows($sql) > 0) {
                $i = 1;
            ?>
                <caption>all categories Table </caption>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>name</th>
                        <th>description</th>
                        <th>price</th>
                        <th>cayegory</th>
                        <th>active</th>
                        <th>action</th>

                    </tr>
                </thead>
                <?php
                while ($row = mysqli_fetch_array($sql)) {
                    $cat_id = $row['cat_id'];
                ?>
                    <tr class="active">
                        <td><?php echo $i++; ?> </td>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['description']; ?></td>
                        <td><?php echo $row['price']; ?></td>
                        <?php $cat_query = mysqli_query($con, "SELECT name FROM category WHERE id= '$cat_id'");
                        if (mysqli_num_rows($cat_query) > 0) {
                            $cat = mysqli_fetch_array($cat_query)
                        ?>
                            <td><?php echo $cat['name']; ?></td>
                        <?php
                        }
                        ?>

                        <td><?php echo $row['active']; ?></td>
                        <td><a href="edit.php?id=<?php echo $row['id']; ?>"><button type="submit" class="btn btn-primary">Edit</button></a>
                            <a href="delete.php?id=<?php echo $row['id']; ?>"><button type="submit" class="btn btn-danger">Delete</button></a>
                        </td>
                    </tr>

            <?php
                }
            } else {
                echo '<div class="alert alert-warning"> <center>No Product to show</center></div>';
            }
            ?>

        </tbody>
    </table>
</div>
<br><br><br><br>
<?php include '../inc/footer.php'; ?>
</div>
</body>

</html>