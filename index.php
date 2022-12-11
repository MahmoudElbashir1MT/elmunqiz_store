<?php
require_once 'Config\config.php';
include 'header.php';
?>

<div>
    <div id="bannerImage">
        <div class="container">
            <center>
                <div id="bannerContent">
                    <h1>We sell .</h1>
                    <p>Flat 40% OFF on all premium brands.</p>
                    <a href="products.php" class="btn btn-danger">Shop Now</a>
                </div>
            </center>
        </div>
    </div>
    <?php

    $sql = mysqli_query($con, "SELECT * From category where active='yes'");
    $str = "
        <div class='container'>
            <div class='row'>
            ";
    if (mysqli_num_rows($sql) > 0) {
        while ($row = mysqli_fetch_assoc($sql)) {
            $str .= '
           <div class="col-xs-4">
                <div class="thumbnail">
                    <a href="products.php?cat_id='.$row['id'].'">
                        <img src="assets/img/Categories/'.$row['pic'].'" alt="'.$row['name'].'">
                    </a>
                    <center>
                        <div class="caption">
                            <p id="autoResize">'.$row['name'].'</p>
                            <p>'.$row['description'].'</p>
                        </div>
                    </center>
                </div>
            </div>
           ';
        }
        echo $str;
    }
    ?>
</div>
<br><br> <br><br><br><br>


<?php include 'footer.php'; ?>
</div>
</body>

</html>