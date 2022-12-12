<?php
require_once 'Config/config.php';
require 'header.php';

if (isset($_POST['Login'])) {
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[_a-z0-9-]+)*(\.[a-z]{2,3})$/";
    if (!preg_match($regex_email, $email)) {
        echo "Incorrect email. Redirecting you back to login page...";
?>
<meta http-equiv="refresh" content="2;url=login.php" />
<?php
    }
    $password = md5(md5(mysqli_real_escape_string($con, $_POST['password'])));
    if (strlen($password) < 6) {
        echo "Password should have atleast 6 characters. Redirecting you back to login page...";
    ?>
<meta http-equiv="refresh" content="2;url=login.php" />
<?php
    }
    $user_authentication_query = "select id,email ,isadmin from users where email='$email' and password='$password'";
    $user_authentication_result = mysqli_query($con, $user_authentication_query) or die(mysqli_error($con));
    $rows_fetched = mysqli_num_rows($user_authentication_result);
    if ($rows_fetched == 0) {
        //no user
        //redirecting to same login page
    ?>
<script>
    window.alert("Wrong username or password");
</script>
<meta http-equiv="refresh" content="1;url=login.php" />
<?php
        //header('location: login');
        //echo "Wrong email or password.";
    } else {
        $row = mysqli_fetch_array($user_authentication_result);
        $_SESSION['email'] = $row['email'];
        $_SESSION['id'] = $row['id'];  //user id
        $isadmin=$row['isadmin'];
        
        if($isadmin){
            header("location:Admin/index.php");
        }else{
            header("location:index.php");
        }
        // 
    }
}

?>
<br><br><br><br><br>
<div class="container">
    <div class="row">
        <div class="col-xs-6 col-xs-offset-3">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3>LOGIN</h3>
                </div>
                <div class="panel-body">
                    <p>Login to make a purchase.</p>
                    <form method="post" action="login.php">
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Email"
                                pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password"
                                placeholder="Password(min. 6 characters)" pattern=".{6,}">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="Login" value="Login" class="btn btn-primary">
                        </div>
                    </form>
                </div>
                <div class="alert alert-warning">
                    don't have account! <a href="signup.php" class="alert-link">Register here</a>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br><br><br><br>
