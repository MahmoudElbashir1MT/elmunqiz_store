<?php
require_once '../../Config\config.php';
require '../inc/header.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = mysqli_query($con, "SELECT * FROM admin WHERE id='$id'");
    if (mysqli_num_rows($sql) == 1) {
        $row = mysqli_fetch_array($sql);
        $name = $row['name'];
        $email = $row['email'];
        $phone = $row['phone'];
        $city = $row['city'];
        $address = $row['address'];
    }
}

if (isset($_POST['Update'])) {
    $id = $_GET['id'];
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    if (!preg_match('/^[A-Za-z0-9]/', $email)) {
        echo "Incorrect email. Redirecting you back to registration page...";
?>
        <meta http-equiv="refresh" content="2;url=edit.php" />
    <?php
    }

    $contact = $_POST['contact'];
    $city = mysqli_real_escape_string($con, $_POST['city']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $user_registration_query = "UPDATE admin SET name='$name',email='$email',phone='$contact',city='$city',address='$address' where id=$id ";
    //die($user_registration_query);
    $user_registration_result = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
    ?>
    <script>
        alert("User successfully updated")
    </script>

<?php
    header("location: viewAll.php");
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
                    <h1><b>Update Admin</b></h1>
                    <form method="post" action="edit.php?id=<?php echo  $id ?>">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Name" required="true" value="<?php echo $name; ?>">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" value="<?php echo $email; ?>">
                        </div>

                        <div class="form-group">
                            <input type="tel" class="form-control" name="contact" placeholder="Contact" required="true" value="<?php echo $phone; ?>">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="city" placeholder="City" required="true" value="<?php echo $city; ?>">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="address" placeholder="Address" required="true" value="<?php echo $address; ?>">
                        </div>
                        <div class="form-group">
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