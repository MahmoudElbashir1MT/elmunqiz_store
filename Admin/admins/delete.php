<?php
require_once '../../Config\config.php';
require '../inc/header.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = mysqli_query($con, "DELETE  FROM admin WHERE id='$id'");
    if ($sql) {
       

?>
        <meta http-equiv="refresh" content="3;url=viewAll.php" />
        <div class="alert alert-success">Admin successfully Deleted</div>
        
<?php
    }
}
require '../inc/footer.php';
?>