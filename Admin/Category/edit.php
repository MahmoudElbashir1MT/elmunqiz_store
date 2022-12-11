<?php
require_once '../../Config\config.php';
require '../inc/header.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = mysqli_query($con, "SELECT * FROM category WHERE id='$id'");
    if (mysqli_num_rows($sql) == 1) {
        $row = mysqli_fetch_array($sql);
        $name = $row['name'];
        $description = $row['description'];
        $pic = $row['pic'];
        $active = $row['active'];
    }
}

if (isset($_POST['Update'])) {
    $id = $_GET['id'];
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $description = mysqli_real_escape_string($con, $_POST['description']);
    $active = $_POST['active'];

    $uploadedTempFile = $_FILES['file']['tmp_name'];
    $filename = $_FILES['file']['name'];
    $destFile = "../../Assets/img/Categories/" . $filename;
    move_uploaded_file($uploadedTempFile, $destFile);




    $user_registration_query = "UPDATE category SET name='$name',description='$description',active='$active',pic='$filename' where id=$id ";
    //die($user_registration_query);
    $user_registration_result = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
?>
    <script>
        alert("Category successfully updated")
    </script>
    <meta http-equiv="refresh" content="1;url=viewAll.php" />
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
                    <h1><b>Update Category</b></h1>
                    <form method="post" action="edit.php?id=<?php echo  $id ?>" enctype="multipart/form-data">

                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Name" required="true" value="<?php echo $name; ?>">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="description" placeholder="description" required="true" value="<?php echo $description; ?>">
                        </div>
                        <label for="active">Active?</label>
                        <div class="form-group">
                            <select class="form-control" name="active">
                                <option value="yes" <?= $active == 'yes' ? 'selected' : ''; ?>>Yes</option>
                                <option value="no" <?= $active == 'no' ? 'selected' : ''; ?>>No</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <input type="file" class="form-control" name="file" id="file"">
                        </div>

                        <div class=" form-group">
                            <input type="submit" class="btn btn-primary" value="Update" name="Update">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <br><br><br><br><br><br>

        <?php include '../inc/footer.php'; ?>

    </div>
</body>

</html>