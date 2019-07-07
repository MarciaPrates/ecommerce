<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Márcia Prates | Loja Virtual</title>
    <meta charset="UTF-8">
    <meta name="description" content="Loja Virtual">
    <meta name="keywords" content="Loja Virtual, eCommerce, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="shortcut icon"/>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,300i,400,400i,700,700i" rel="stylesheet">


    <!-- Stylesheets -->
    <link rel="stylesheet" href="../custom/site/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="../custom/site/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="../custom/site/css/flaticon.css"/>
    <link rel="stylesheet" href="../custom/site/css/slicknav.min.css"/>
    <link rel="stylesheet" href="../custom/site/css/jquery-ui.min.css"/>
    <link rel="stylesheet" href="../custom/site/css/owl.carousel.min.css"/>
    <link rel="stylesheet" href="../custom/site/css/animate.css"/>
    <link rel="stylesheet" href="../custom/site/css/style.css"/>
    <link rel="stylesheet" href="../custom/site/css/custom.css"/>

</head>
<body>


    <!-- RELATED PRODUCTS section -->
    <section class="related-product-section">
        <div class="container">
            <div class="section-title">
                <h2><?php echo htmlspecialchars( $category["descategory"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h2>
            </div>
            <div class="product-slider owl-carousel">
                <?php $counter1=-1;  if( isset($products) && ( is_array($products) || $products instanceof Traversable ) && sizeof($products) ) foreach( $products as $key1 => $value1 ){ $counter1++; ?>

                <div class="product-item">
                    <div class="pi-pic">
                        <div class="tag-new">New</div>
                        <img src="../custom/site/img/product/2.jpg" alt="">
                        <div class="pi-links">
                            <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                            <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>$35,00</h6>
                        <p>Black and White Stripes Dress</p>
                    </div>
                </div>
                <?php } ?>


            </div>
        </div>
    </section>
    <!-- RELATED PRODUCTS section end -->



    <!--====== Javascripts & Jquery ======-->
    <script src="../custom/site/js/jquery-3.2.1.min.js"></script>
    <script src="../custom/site/js/bootstrap.min.js"></script>
    <script src="../custom/site/js/jquery.slicknav.min.js"></script>
    <script src="../custom/site/js/owl.carousel.min.js"></script>
    <script src="../custom/site/js/jquery.nicescroll.min.js"></script>
    <script src="../custom/site/js/jquery.zoom.min.js"></script>
    <script src="../custom/site/js/jquery-ui.min.js"></script>
    <script src="../custom/site/js/main.js"></script>

    </body>
</html>
