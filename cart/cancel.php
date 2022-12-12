<?php
require_once '../Config\config.php';
require '../header.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = mysqli_query($con, "DELETE  FROM users_items WHERE id='$id'");
    if ($sql) {
       

?>
<meta http-equiv="refresh" content="3;url=index.php" />
<div class="alert alert-success">item canceled successfully </div>

<?php
    }
}
require '../footer.php';
?>
