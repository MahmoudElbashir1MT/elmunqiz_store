<?php
require_once '../Config\config.php';
include '../header.php';
?>

<div class="container">
    <table class="table">

        <tbody>
            <?php
            $user_id= $_SESSION['id'];
            $sql = mysqli_query($con, "SELECT * FROM users_items where user_id= '$user_id'");
            if (mysqli_num_rows($sql) > 0) {
                $i = 1;
                $total = 0;
            ?>
            <caption>My Cart </caption>
            <thead>
                <tr>
                    <th>#</th>
                    <th>NAME</th>
                    <th>PRICE</th>
                    <th>QUANTITY</th>
                    <th>TOTAl</th>
                    <th>STATUS</th>


                </tr>
            </thead>
            <?php
                while ($cart = mysqli_fetch_array($sql)) {
                    $item_id = $cart['item_id'];
  
                    
                ?>
            <tr class="active">
                <td><?php echo $i++; ?> </td>

                <?php $item_query = mysqli_query($con, "SELECT name , price FROM product WHERE id= '$item_id'");
                                if (mysqli_num_rows($item_query) > 0) {
                                    $item = mysqli_fetch_array($item_query);
                                    $total += $cart['qty'] * $item['price'];
                                ?>
                <td><?php echo $item['name']; ?></td>
                <td><?php echo $item['price']; ?></td>
                <td><?php echo $cart['qty']; ?></td>
                <td><?php echo $cart['qty'] * $item['price']; ?></td>


                <td>
                    <?php
                    if ($cart['status'] == 'Buyed') {
                        echo $cart['status'] ; 

                    } else {
                        ?>
                    <a href="edit.php?id=<?php echo $cart['id']; ?> &&qty=<?php echo $cart['qty']; ?>"><button type="submit"
                            class="btn btn-primary">Edit</button></a>
                    <a href="cancel.php?id=<?php echo $cart['id']; ?>"><button type="submit"
                            class="btn btn-danger">Cancel</button></a>
                    <?php
                    }
                    ?>

                </td>
                <?php
                               } 

                            }
                                ?>


            </tr>

            <h3><?php echo $total; ?> SD</h3>

            <?php
            
                }
             else {
                echo '<div class="alert alert-warning"> <center>No Product in the cart</center></div>';
            }
            ?>

        </tbody>
    </table>
</div>
<br><br><br><br>
<?php include '../footer.php'; ?>
</div>
</body>

</html>
