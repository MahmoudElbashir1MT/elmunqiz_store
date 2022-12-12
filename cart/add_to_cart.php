<?php
require_once '../Config\config.php';
require '../header.php';

if (isset($_POST['add_to_cart'])) {
    $user_id = $_SESSION['id'];
    $item_id = $_POST['id'];
    $qty = $_POST['qty'];

    $item_reservation = "insert into users_items(user_id,item_id,qty) values ('$user_id','$item_id','$qty')";
    //die($item_reservation);
    ($user_registration_result = mysqli_query($con, $item_reservation)) or die(mysqli_error($con));
    echo 'Produt successfully added to cart';
   
    //The mysqli_insert_id() function returns the id (generated with AUTO_INCREMENT) used in the last query.

    //header('location: products.php');  //for redirecting
    header('location: index.php');
}

?>
