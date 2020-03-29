<?php if(!class_exists('Rain\Tpl')){exit;}?>    <!-- cart section end -->
    <section class="cart-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="cart-table">
                        <h3>Seu Carrinho</h3>
                        <div class="cart-table-warp">
                        <table>
                            <thead>
                                <tr>
                                    <th class="product-th">Produto</th>
                                    <th class="quy-th">Quantidade</th>
                                    <th class="total-th">Preço</th>
                                    <th class="total-th">Remover</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $counter1=-1;  if( isset($products) && ( is_array($products) || $products instanceof Traversable ) && sizeof($products) ) foreach( $products as $key1 => $value1 ){ $counter1++; ?>

                                <tr>
                                    <td class="product-col">
                                        <a href="/products/<?php echo htmlspecialchars( $value1["desurl"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><img src="<?php echo htmlspecialchars( $value1["desphoto"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" alt=""></a>
                                        <div class="pc-title">
                                            <a href="/product/<?php echo htmlspecialchars( $value1["desurl"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><h4><?php echo htmlspecialchars( $value1["desproduct"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h4></a>
                                            <p>R$<?php echo formatPrice($value1["vlprice"]); ?></p>
                                        </div>
                                    </td>
                                    <td class="quy-col">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" value="1">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="total-col"><h4>R$<?php echo formatPrice($value1["vltotal"]); ?></h4></td>
                                    <td class="total-col"><a href="/cart/<?php echo htmlspecialchars( $value1["idproduct"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/remove"><i class="flaticon-cancel-1"></i></a></td>
                                </tr>
                                <?php } ?>

                                
                            </tbody>
                            
                        </table><a href="" class="site-btn btn-total">TOTAL: R$ <?php echo formatPrice($cart["vltotal"]); ?></a>
                        
                        </div>
                        
                    </div>
                </div>
                
                <div class="col-lg-4 card-right" action="/checkout">

                    <?php if( $error != '' ){ ?>

                        <div class="alert alert-danger" role="alert">
                            <?php echo htmlspecialchars( $error, ENT_COMPAT, 'UTF-8', FALSE ); ?>

                        </div>
                     <?php } ?>


                    <!--<form class="promo-code-form">
                        <input type="text" placeholder="Cupom de desconto">
                        <button>Aplicar</button>
                    </form>-->

                    <form class="promo-code-form">
                        <input type="text" id="cep" placeholder="CEP 00000-000" name="zipcode" value="<?php echo htmlspecialchars( $cart["deszipcode"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        <button type="submit" formmethod="post" formaction="/cart/freight" value="CALCULAR">Calcular</button>
                    </form>
                    <a href="" class="site-btn btn-frete">FRETE: R$ <?php echo formatPrice($cart["vlfreight"]); ?><?php if( $cart["nrdays"] > 0 ){ ?> <br> <small>prazo de <?php echo htmlspecialchars( $cart["nrdays"], ENT_COMPAT, 'UTF-8', FALSE ); ?> dia(s)</small><?php } ?></a>

                    &#10035; &#10035; &#10035; &#10035; &#10035; &#10035; &#10035; &#10035; &#10035; &#10035; &#10035; &#10035; &#10035; &#10035; &#10035;

                    <a type="submit" href="/login" class="site-btn" name="proceed" value="Finalizar Compra">Finalizar compra</a>
                    <!--<a href="" class="site-btn sb-dark">Continuar comprando</a>-->
                </div>
            </div>
        </div>
    </section>
    <!-- cart section end -->