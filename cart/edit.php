<?php
require_once '../Config\config.php';
require '../header.php';


if (isset($_POST['Update'])) {
    $id =  $_POST['id'];
    $qty =  $_POST['qty'];

    $user_registration_query = "UPDATE users_items SET qty='$qty' WHERE id='$id'";
    //die($user_registration_query);
    $user_registration_result = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
    header("location:index.php");
?>
<script>
    alert("Quantity successfully updated");
</script>
<meta http-equiv="refresh" content="1;url=index.php" />
<?php

}

?>

<!DOCTYPE html>
<html>

<body>
    <div>

        <br><br>
        <div class="container">
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4">
                    <h1><b> Set Quantity</b></h1>
                    <form method="post" action="edit.php" enctype="multipart/form-data">

                        <input class="m-2" type="hidden" name="id" id="id" value="<?php echo $_GET['id']; ?>">
                        <input class="m-2" type="number" name="qty" id="qty" min="1"
                            value="$qty">

                </div>

                <div class=" form-group">
                    <input type="submit" class="btn btn-primary" value="Update" name="Update">
                </div>
                </form>
            </div>
        </div>
    </div>
    <br><br><br><br><br><br>

    <?php include '../footer.php'; ?>

    </div>
</body>

</html>
