<?php if(!class_exists('Rain\Tpl')){exit;}?>    <!-- cart section end -->
    <section class="cart-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cart-table">
                        <h3>Pagamento Nº: <?php echo htmlspecialchars( $order["idorder"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h3>
                        <div class="cart-table-warp">

                            <iframe src="/boleto/<?php echo htmlspecialchars( $order["idorder"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" name="boleto" frameborder="0" style="width:100%; min-height:1000px; border:1px solid #CCC; padding:20px;"></iframe>

                            <script>
                                document.querySelector("#btn-print").addEventListener("click", function(event){

                                    event.preventDefault();

                                    window.frames["boleto"].focus();
                                    window.frames["boleto"].print();

                                });                
                            </script>

                        </div>
                        <div class="total-cost" id="botao-imprimir">
                            <a href="" class="site-btn" type="submit" id="btn-print">IMPRIMIR</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- cart section end -->