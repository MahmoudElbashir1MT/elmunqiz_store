<?php
require_once '../Config\config.php';
include 'inc/header.php';

if (!isset($_SESSION['email'])) {
    header("location: login.php");
}

?>


<div id="bannerImage">
    <div class="container">
        <center>
            <div id="bannerContent">
                <h1>Admin Portal</h1>
                <p>Manage all of your site from here</p>
            </div>
        </center>
    </div>
</div>

<?php
include 'inc/footer.php';
?>

</div>
</body>

</html>