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


    <!-- Category section -->
    <section class="category-section spad">
        <div class="container">
            <div class="section-title mb-5">
                <h2 class="titulo-categoria"><?php echo htmlspecialchars( $category["descategory"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h2>
            </div>
            <div class="row">
                <div class="col-lg-12 order-1 order-lg-2 mb-5 mb-lg-0 mt-3">
                    <div class="row">
                        <?php $counter1=-1;  if( isset($products) && ( is_array($products) || $products instanceof Traversable ) && sizeof($products) ) foreach( $products as $key1 => $value1 ){ $counter1++; ?>

                        <div class="col-lg-4 col-sm-6 mb-5">
                            <div class="product-item">
                                <div class="pi-pic">
                                    <img src="<?php echo htmlspecialchars( $value1["desphoto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" alt="">
                                    <div class="pi-links">
                                        <a href="#" class="add-card"><i class="flaticon-bag"></i><span>ADD TO CART</span></a>
                                        <a href="#" class="wishlist-btn"><i class="flaticon-heart"></i></a>
                                    </div>
                                </div>
                                <div class="pi-text">
                                    <h6>R$<?php echo formatPrice($value1["vlprice"]); ?></h6>
                                    <p class="texto-categoria"><a href="/products/<?php echo htmlspecialchars( $value1["desurl"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $value1["desproduct"], ENT_COMPAT, 'UTF-8', FALSE ); ?></a></p>
                                </div>
                            </div>
                            
                        </div>
                        <?php } ?>


                        <div class="text-center w-100 pt-3">
                            <nav aria-label="Navegação de página exemplo">
                                <ul class="pagination justify-content-center">
                                    <?php $counter1=-1;  if( isset($pages) && ( is_array($pages) || $pages instanceof Traversable ) && sizeof($pages) ) foreach( $pages as $key1 => $value1 ){ $counter1++; ?>

                                    <li class="page-item">
                                        <a class="page-link" href="<?php echo htmlspecialchars( $value1["link"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $value1["page"], ENT_COMPAT, 'UTF-8', FALSE ); ?></a>
                                    </li>
                                    <?php } ?>

                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Category section end -->




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
