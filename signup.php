<?php
require_once 'Config\config.php';
require 'header.php';

if (isset($_POST['register'])) {
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);

    if (!preg_match('/^[A-Za-z0-9]/', $email)) {
        echo "Incorrect email. Redirecting you back to registration page...";
?>
        <meta http-equiv="refresh" content="2;url=signup.php" />
    <?php
    }
    $password = md5(md5(mysqli_real_escape_string($con, $_POST['password'])));
    if (strlen($password) < 6) {
        echo "Password should have atleast 6 characters. Redirecting you back to registration page...";
    ?>
        <meta http-equiv="refresh" content="2;url=signup.php" />
    <?php
    }
    $contact = $_POST['contact'];
    $city = mysqli_real_escape_string($con, $_POST['city']);
    $address = mysqli_real_escape_string($con, $_POST['address']);
    $duplicate_user_query = "select id from users where email='$email'";
    $duplicate_user_result = mysqli_query($con, $duplicate_user_query) or die(mysqli_error($con));
    $rows_fetched = mysqli_num_rows($duplicate_user_result);
    if ($rows_fetched > 0) {
        //duplicate registration
        //header('location: signup.php');
    ?>
        <script>
            window.alert("Email already exists in our database!");
        </script>
        <meta http-equiv="refresh" content="1;url=signup.php" />
<?php
    } else {
        $user_registration_query = "insert into users(name,email,phone,password,city,address) values ('$name','$email','$contact','$password','$city','$address')";
        //die($user_registration_query);
        $user_registration_result = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
        echo "Admin successfully registered";
        $_SESSION['email'] = $email;
        //The mysqli_insert_id() function returns the id (generated with AUTO_INCREMENT) used in the last query.
        $_SESSION['id'] = mysqli_insert_id($con);
        //header('location: products.php');  //for redirecting
        header("location: index.php");
    }
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
                    <center>
                        <h1><b>Sign Up</b></h1>
                    </center>
                    <form method="post" action="signup.php">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Name" required="true">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Password(min. 6 characters)" required="true" pattern=".{6,}">
                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-control" name="contact" placeholder="Contact" required="true">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="city" placeholder="City" required="true">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="address" placeholder="Address" required="true">
                        </div>
                        <div class="form-group">
                            <center> <input type="submit" name="register" class="btn btn-primary" value="Register"></center>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <br><br><br><br><br><br>

        <?php include 'footer.php'; ?>

    </div>
</body>

</html>