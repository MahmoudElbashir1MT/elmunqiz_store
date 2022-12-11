<?php
require_once '../../Config\config.php';
require '../inc/header.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = mysqli_query($con, "DELETE  FROM product WHERE id='$id'");
    if ($sql) {


?>

        <center>
            <div class="container">
                <div class="alert alert-success">Product successfully Deleted</div>

            </div>

        </center>
        <meta http-equiv="refresh" content="2;url=viewAll.php" />
<?php
    }
}
require '../inc/footer.php';
?>