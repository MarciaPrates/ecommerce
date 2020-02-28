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


    <!-- product section -->
    <section class="product-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="product-pic-zoom">
                        <img class="product-big-img" src="<?php echo htmlspecialchars( $product["desphoto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" alt="">
                    </div>
                    <div class="product-thumbs" tabindex="1" style="overflow: hidden; outline: none;">
                        <div class="product-thumbs-track">
                            <div class="pt active" data-imgbigurl="img/single-product/1.jpg"><img src="<?php echo htmlspecialchars( $product["desphoto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" alt=""></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 product-details">
                    <h2 class="p-title"><?php echo htmlspecialchars( $product["desproduct"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h2>
                    <h3 class="p-price">R$<?php echo formatPrice($product["vlprice"]); ?></h3>
                    <h4 class="p-stock">Status: <span>Disponível</span></h4>
                    <!--<div class="p-rating">
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o fa-fade"></i>
                    </div>-->
                    <div class="p-review">
                        <p class="categoria-detail">Categoria<?php $counter1=-1;  if( isset($categories) && ( is_array($categories) || $categories instanceof Traversable ) && sizeof($categories) ) foreach( $categories as $key1 => $value1 ){ $counter1++; ?> | <a id="categoria-detail" href="/categories/<?php echo htmlspecialchars( $value1["idcategory"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $value1["descategory"], ENT_COMPAT, 'UTF-8', FALSE ); ?></a><?php } ?>

                    </div>
                    <!--<div class="fw-size-choose">
                        <p>Tamanho</p>
                        <div class="sc-item">
                            <input type="radio" name="sc" id="xs-size">
                            <label for="xs-size">32</label>
                        </div>
                        <div class="sc-item">
                            <input type="radio" name="sc" id="s-size">
                            <label for="s-size">34</label>
                        </div>
                        <div class="sc-item">
                            <input type="radio" name="sc" id="m-size" checked="">
                            <label for="m-size">36</label>
                        </div>
                        <div class="sc-item">
                            <input type="radio" name="sc" id="l-size">
                            <label for="l-size">38</label>
                        </div>
                        <div class="sc-item disable">
                            <input type="radio" name="sc" id="xl-size" disabled>
                            <label for="xl-size">40</label>
                        </div>
                        <div class="sc-item">
                            <input type="radio" name="sc" id="xxl-size">
                            <label for="xxl-size">42</label>
                        </div>
                    </div>-->
                    <div class="quantity">
                        <p>Quantidade</p>
                        <div class="pro-qty"><input type="text" value="1" name="qtd"></div>
                    </div>
                    <a href="/cart/<?php echo htmlspecialchars( $product["idproduct"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/add" class="site-btn">COMPRAR</a>
                    <div id="accordion" class="accordion-area">
                        <div class="panel">
                            <div class="panel-header" id="headingOne">
                                <button class="panel-link active" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">informação</button>
                            </div>
                            <div id="collapse1" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="panel-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra tempor so dales. Phasellus sagittis auctor gravida. Integer bibendum sodales arcu id te mpus. Ut consectetur lacus leo, non scelerisque nulla euismod nec.</p>
                                    <p>Approx length 66cm/26" (Based on a UK size 8 sample)</p>
                                    <p>Mixed fibres</p>
                                    <p>The Model wears a UK size 8/ EU size 36/ US size 4 and her height is 5'8"</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="panel-header" id="headingTwo">
                                <button class="panel-link" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">Detalhes </button>
                            </div>
                            <div id="collapse2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="panel-body">
                                    <img src="./img/cards.png" alt="">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra tempor so dales. Phasellus sagittis auctor gravida. Integer bibendum sodales arcu id te mpus. Ut consectetur lacus leo, non scelerisque nulla euismod nec.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel">
                            <div class="panel-header" id="headingThree">
                                <button class="panel-link" data-toggle="collapse" data-target="#collapse3" aria-expanded="false" aria-controls="collapse3">shipping & Returns</button>
                            </div>
                            <div id="collapse3" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                <div class="panel-body">
                                    <h4>7 Days Returns</h4>
                                    <p>Cash on Delivery Available<br>Home Delivery <span>3 - 4 days</span></p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin pharetra tempor so dales. Phasellus sagittis auctor gravida. Integer bibendum sodales arcu id te mpus. Ut consectetur lacus leo, non scelerisque nulla euismod nec.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product section end -->




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
