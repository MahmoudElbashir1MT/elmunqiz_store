<?php
require_once '../../Config/config.php';
require '../inc/header.php';

if (isset($_GET['id'])) {
    $id=$_GET['id'];
    $user_registration_query = "UPDATE users_items SET status='Buyed' WHERE id='$id'";
    //die($user_registration_query);
    $user_registration_result = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
?>
<script>
    alert("Quantity successfully updated");
</script>
<meta http-equiv="refresh" content="1;url=index.php" />
<?php

}

?>
