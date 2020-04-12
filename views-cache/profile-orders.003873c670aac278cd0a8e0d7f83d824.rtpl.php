<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="single-product-area" id="profile-menu-espaco">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">                
            <div class="col-md-4">
                <?php require $this->checkTemplate("profile-menu");?>

            </div>
            <div class="col-md-8">
                
                <div class="cart-collaterals">
                    <h2>Meus Pedidos</h2>
                </div>

                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Valor Total</th>
                            <th>Status</th>
                            <th>Endereço</th>
                            <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $counter1=-1;  if( isset($orders) && ( is_array($orders) || $orders instanceof Traversable ) && sizeof($orders) ) foreach( $orders as $key1 => $value1 ){ $counter1++; ?>

                        <tr>
                            <th scope="row"><?php echo htmlspecialchars( $value1["idorder"], ENT_COMPAT, 'UTF-8', FALSE ); ?></th>
                            <td>R$<?php echo htmlspecialchars( $value1["vltotal"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                            <td><?php echo htmlspecialchars( $value1["desstatus"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                            <td><?php echo htmlspecialchars( $value1["desaddress"], ENT_COMPAT, 'UTF-8', FALSE ); ?>, <?php echo htmlspecialchars( $value1["desdistrict"], ENT_COMPAT, 'UTF-8', FALSE ); ?>, <?php echo htmlspecialchars( $value1["descity"], ENT_COMPAT, 'UTF-8', FALSE ); ?> - , <?php echo htmlspecialchars( $value1["desstate"], ENT_COMPAT, 'UTF-8', FALSE ); ?> CEP: <?php echo htmlspecialchars( $value1["deszipcode"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                            <td style="width:222px;">
                                <a class="site-btn" href="/payment/<?php echo htmlspecialchars( $value1["idorder"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" role="button">Imprimir Boleto</a>
                                <a class="site-btn" href="/profile/orders/<?php echo htmlspecialchars( $value1["idorder"], ENT_COMPAT, 'UTF-8', FALSE ); ?>" role="button">Detalhes</a>
                            </td>
                        </tr>
                        <?php }else{ ?>

                        <div class="alert alert-info">
                            Nenhum pedido foi encontrado.
                        </div>
                        <?php } ?>

                    </tbody>
                </table>

            </div>
        </div>
    </div>
</div>