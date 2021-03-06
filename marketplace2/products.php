<?php


    $ch = curl_init("http://chuyuany.com/getproducts.php");
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    curl_close($ch);
    $product_array1 = unserialize(base64_decode($result));
    
    $ch = curl_init("http://kitkavicky.com/getproducts.php");
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    curl_close($ch);
    $product_array2 = unserialize(base64_decode($result));

    $ch = curl_init("http://daisydanlu.info/getproducts.php");
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    curl_close($ch);
    $product_array3 = unserialize(base64_decode($result));


    $ch = curl_init("http://sheraton-departures.000webhostapp.com/getproducts.php");
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    curl_close($ch);
    $product_array4 = unserialize(base64_decode($result));

    $ch = curl_init("http://look4helper.com/getproducts.php");
    curl_setopt($ch, CURLOPT_HEADER, false);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    curl_close($ch);
    $product_array5 = unserialize(base64_decode($result));

    $product_array = array_merge($product_array1,$product_array2, $product_array3, $product_array4, $product_array5);
?>
     

<?php include 'header.php';?>


    <div class="jumbotron feature">
        <div class="container">
            <h1><span class="glyphicon glyphicon-knight"></span> Products</h1>
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
                                    <p class="pull-right">15 reviews</p>
                                    <p>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
                                        <span class="glyphicon glyphicon-star"></span>
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

    
    <!-- jQuery -->
    <script src="js/jquery-1.11.3.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    
    <!-- IE10 viewport bug workaround -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    
    <!-- Placeholder Images -->
    <script src="js/holder.min.js"></script>
    
</body>

</html>
