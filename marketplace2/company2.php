<?php

    $ch = curl_init("http://kitkavicky.com/getproducts.php");
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    curl_close($ch);
    $product_array = unserialize(base64_decode($result));

    $dbh=mysql_connect ("localhost", "root", "CMPE281")
        or die ('I cannot connect to the database.');
    mysql_select_db ("marketplace");
?>
     

<?php include 'header.php';?>


    <div class="jumbotron feature">
        <div class="container">
            <h1><span class="glyphicon glyphicon-knight"></span> kitka</h1>
        </div>
    </div>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            
            <div class="col-md-10">

            <?php 
                foreach($product_array as $index => $product) {
                    if($index % 3 == 2) echo '<div class="row">';
            ?>
                        <a href="<?php echo $product[6] ?>">
                        <div class="col-sm-4 col-lg-4 col-md-3">
                            <div class="thumbnail">
                                <img src="<?php echo $product[2] ?>" alt="">
                                <div class="caption">
                                    <h4 class="pull-right"><?php echo $product[4] ?></h4>
                                    <h4><?php echo $product[1] ?></a>
                                    </h4>
                                    <p><?php echo $product[3] ?></p>
                                </div>
                                <div class="ratings">
                                    <p class="pull-right" onclick="openModal(<?php echo $product[0] ?>)">Reviews and Ratings</p>
                                    <p>
                                    <?php 
                                        $result = mysql_query("SELECT ratetotal, ratenum FROM ratings WHERE productid = ".$product[0]);
                                        $data = mysql_fetch_array($result, MYSQL_NUM);
                                        if(!$data)
                                            $stars = 0;
                                        else 
                                            $stars = intval($data[0]) / intval($data[1]);

                                        for($i = 1; $i <= round($stars); $i++)
                                            echo '<span class="glyphicon glyphicon-star"></span>';
                                        for($i = round($stars)+1; $i <= 5; $i++)
                                            echo '<span class="glyphicon glyphicon-star-empty"></span>';
                                        echo '&nbsp;&nbsp;&nbsp;'.round($stars, 1);
                                    ?>
                                    </p>
                                </div>
                            </div>
                        </div>
            <?php 
                    if($index % 3 == 2)    echo '</div>';
                }
            ?>
                
            </div>   

        </div>
    </div>           

    <!-- /.container -->
    <div id="popupModal" class="modal">
        <div class="modal-content">
            <span class="close">x</span>
            <h2>Product Reviews</h2>
            <div class="review-box"></div>
            <div class="input-box">
                <div class="input-top">
                    <span class="rate-label">Please rate our product</span>
                    <span id="star1" class="glyphicon glyphicon-star-empty"></span>
                    <span id="star2" class="glyphicon glyphicon-star-empty"></span>
                    <span id="star3" class="glyphicon glyphicon-star-empty"></span>
                    <span id="star4" class="glyphicon glyphicon-star-empty"></span>
                    <span id="star5" class="glyphicon glyphicon-star-empty"></span>
                </div>
                <input type="hidden" id="username" value="<?php echo $_SESSION["login_as"] ?>">
                <input type="hidden" id="star-rating" value="0">
                <div class="review-input"></div>
            </div>
        </div>
    </div>

    
    <!-- jQuery -->
    <script src="js/jquery-1.11.3.min.js"></script>

    <script src="js/bootstrap.min.js"></script>
    
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    
    <script src="js/holder.min.js"></script>

    <script src="js/modal.js"></script>
    
</body>

</html>
