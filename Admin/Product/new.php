<?php
require_once '../../Config\config.php';
require '../inc/header.php';


if (isset($_POST['Save'])) {

    $name =  $_POST['name'];
    $price = $_POST['price'];
    $cat_id=$_POST['cat_id'];
    $description = $_POST['description'];
    $active = $_POST['active'];

    $uploadedTempFile = $_FILES['file']['tmp_name'];
    $filename = $_FILES['file']['name'];
    $destFile = "../../Assets/img/Products/" . $filename;
    move_uploaded_file($uploadedTempFile, $destFile);




    $user_registration_query = "INSERT INTO product VALUES('','$name','$description','$price','$filename','$cat_id','$active')  ";
    //die($user_registration_query);
    $user_registration_result = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
?>
    <script>
        alert("Category successfully updated");
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
                    <h1><b>New Product</b></h1>
                    <form method="post" action="new.php" enctype="multipart/form-data">

                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Name" required="true">
                        </div>
                        <div class="form-group">
                            <input type="decimal" class="form-control" name="price" placeholder="price" required="true">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="description" placeholder="description" required="true">
                        </div>
                        <label for="active">Category:</label>
                        <div class="form-group">
                            <select class="form-control" name="cat_id">
                                <?php
                                $sql = mysqli_query($con, "SELECT * FROM category");
                                if (mysqli_num_rows($sql) > 0) {
                                    while ($row = mysqli_fetch_array($sql)) {
                                ?>
                                        <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                                <?php                                    }
                                }

                                ?>

                            </select>
                        </div>
                        <label for="active">Active?</label>
                        <div class="form-group">
                            <select class="form-control" name="active">
                                <option value="yes">Yes</option>
                                <option value="no">No</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <input type="file" class="form-control" name="file" id="file"">
                        </div>

                        <div class=" form-group">
                            <input type="submit" class="btn btn-primary" value="Save" name="Save">
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