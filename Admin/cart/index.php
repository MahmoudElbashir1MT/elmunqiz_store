<?php
require_once '../../Config\config.php';
include '../inc/header.php';
?>

<div class="container">
    <table class="table">

        <tbody>
            <?php
           
            $sql = mysqli_query($con, "SELECT * FROM users_items  ");
            if (mysqli_num_rows($sql) > 0) {
                $i = 1;
            ?>
            <caption>My Cart </caption>
            <thead>
                <tr>
                    <th>#</th>
                    <th>user name</th>
                    <th>item</th>
                    <th>price</th>
                    <th>qty</th>
                    <th>total</th>
                    <th>Buyed</th>


                </tr>
            </thead>
            <?php
                while ($cart = mysqli_fetch_array($sql)) {
                    $item_id = $cart['item_id'];
                    $user_id = $cart['user_id'];
  
                    
                ?>
            <tr class="active">
                <td><?php echo $i++; ?> </td>

                <?php $item_query = mysqli_query($con, "SELECT name , price FROM product WHERE id= '$item_id'");
                                if (mysqli_num_rows($item_query) > 0) {
                                    $item = mysqli_fetch_array($item_query);

                               $user_query = mysqli_query($con, "SELECT *  FROM users WHERE id= '$user_id'");
                                if (mysqli_num_rows($user_query) > 0) {
                                    $user = mysqli_fetch_array($user_query);
                                  ?>
                <td><?php echo $user['name']; ?></td>
                <td><?php echo $item['name']; ?></td>
                <td><?php echo $item['price']; ?></td>
                <td><?php echo $cart['qty']; ?></td>
                <td><?php echo $cart['qty'] * $item['price']; ?></td>
                <td>
                    <?php
                if($cart['status']=='Buyed'){
?>
                    <a href="edit.php?id=<?php echo $cart['id']; ?>" disabled> <button type="submit" class="btn btn-primary" disabled> Buyed
                            </button></a>


                    <?php
                }else{
                    ?>
                    <a href="edit.php?id=<?php echo $cart['id']; ?>"><button type="submit" class="btn btn-primary">Compelete
                            buy</button></a>


                    <?php
                }
                
                
                               }}
                            }
                                ?>

                </td>
            </tr>

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
<?php include '../inc/footer.php'; ?>
</div>
</body>

</html>
