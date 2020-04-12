<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Category section -->
    <section class="category-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 order-2 order-lg-1">
                    <div class="filter-widget">
                        <h2 class="fw-title">Pagamento N°<?php echo htmlspecialchars( $order["idorder"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h2>
                        <ul class="category-menu">
                            <li><a href="#"><button type="submit" id="btn-print" class="button alt" style="margin-bottom:10px">Imprimir</button></a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-9  order-1 order-lg-2 mb-5 mb-lg-0">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6">
                            <div class="product-item">
                                <iframe src="/boleto/<?php echo htmlspecialchars( $order["idorder"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" name="boleto" frameborder="0" style="width:100%; min-height:1000px; border:1px solid #CCC; padding:20px;"></iframe>

                                <script>
                                document.querySelector("#btn-print").addEventListener("click", function(event){

                                    event.preventDefault();

                                    window.frames["boleto"].focus();
                                    window.frames["boleto"].print();

                                });                
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Category section end -->