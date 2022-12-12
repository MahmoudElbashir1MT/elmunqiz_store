<?php
require 'Config/config.php';
include 'header.php';
function check_if_added_to_cart($item_id)
{
    //session_start();
    require 'Config/connection.php';
    $user_id = $_SESSION['id'];
    $product_check_query = "select * from users_items where item_id='$item_id' and user_id='$user_id' and status='Added to cart'";
    ($product_check_result = mysqli_query($con, $product_check_query)) or die(mysqli_error($con));
    $num_rows = mysqli_num_rows($product_check_result);
    if ($num_rows >= 1) {
        return 1;
    }
    return 0;
}
?>

<div>

    <div class="container">
        <div class="jumbotron">
            <center>
                <h2>Welcome to our Projectworlds Store!</h2>
            </center>
            <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.
            </p>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <?php
            $cat_id = "";
            $sql = "";
            $str = "";
            if (isset($_GET['cat_id'])) {
                $cat_id = $_GET['cat_id'];
                $sql = mysqli_query($con, "SELECT * FROM product WHERE cat_id='$cat_id' and active='yes'");
            } else {
                $sql = mysqli_query($con, "SELECT * FROM product WHERE   active='yes'");
            }


            if (mysqli_num_rows($sql) > 0) {
                while ($row = mysqli_fetch_assoc($sql)) {
                   ?>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <a href="<?php echo BURL; ?>cart/cart.php?id=<?php echo $row['id']; ?>">
                        <img src='<?php echo ASSETS; ?>img/Products/<?php echo $row['pic']; ?>' alt="' . $row['name'] . '">
                    </a>
                    <center>
                        <div class="caption">
                            <h3><?php echo $row['name']; ?></h3>
                            <form action="cart/add_to_cart.php" method="post">

                                <p>Price: SD. <?php echo $row['price']; ?> SD </p>

                                <label for="qty">Quantity</label>
                                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                <input type="hidden" name="<?php echo $row['price']; ?>">
                                <input class="m-2" type="number" name="qty" id="qty" min="1"
                                    value="1">


                                <?php               
                            if (!isset($_SESSION['email'])) {
                                ?>
                                <button type="submit" class="btn btn-primary btn-block">Buy Now</button>

                                <!-- <a href="login.php?item_id=' . $row['id'] . '" role="button"
                                        class="btn btn-primary btn-block"></a> -->
                                <?php } else if (check_if_added_to_cart($row['id'])) {

                                        ?>
                                <button type="submit" class="btn btn-block btn-success" disabled>Added to cart</button>
                                <!-- <a href="" class="btn btn-block btn-success" disabled>Added to cart</a> -->
                                <?php
                                } else {
                                ?>
                                <button type="submit" class="btn btn-block btn-primary" name="add_to_cart">Add to
                                    cart</button>
                                <?php }
                                                        
                                    ?>


                            </form>




                        </div>
                    </center>
                </div>
            </div>
            <?php }
                                                        }
                                  
            ?> ?>
        </div>


    </div>
    <br><br><br><br><br><br><br><br>

    <?php include 'footer.php'; ?>
</div>
</body>

</html>
