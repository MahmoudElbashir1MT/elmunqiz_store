<?php
require_once '../../Config\config.php';
require '../inc/header.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = mysqli_query($con, "DELETE  FROM category WHERE id='$id'");
    if ($sql) {


?>
        <meta http-equiv="refresh" content="3;url=viewAll.php" />
        <center>
            <div class="container">
                <div class="alert alert-success">Category successfully Deleted</div>

            </div>

        </center>
        <meta http-equiv="refresh" content="1;url=viewAll.php" />
<?php
    }
}
require '../inc/footer.php';
?>