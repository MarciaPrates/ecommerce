<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- checkout section  -->
    <section class="checkout-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 order-2 order-lg-1">
                    <form class="checkout-form" action="/profile" method="post">
                        <div class="cf-title">Minha Conta</div>
                        <div class="row address-inputs">

                            <div class="col-md-12">
                                <input type="text" placeholder="Nome Completo" id="desperson" name="desperson" value="<?php echo htmlspecialchars( $user["desperson"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">

                                <input type="text" placeholder="Email" id="desemail" name="desemail" value="<?php echo htmlspecialchars( $user["desemail"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">

                                <input type="text" placeholder="Telefone" id="nrphone" name="nrphone" value="<?php echo htmlspecialchars( $user["nrphone"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                            </div>
                        </div>
                        <button class="site-btn submit-order-btn">SALVAR</button>
                    </form>
                </div>
                <div class="col-lg-4 order-1 order-lg-2">
                    <?php if( $profileMsg != '' ){ ?>

                <div class="alert alert-success">
                    <?php echo htmlspecialchars( $profileMsg, ENT_COMPAT, 'UTF-8', FALSE ); ?>

                </div>
                    <?php } ?>

                        <?php if( $profileError != '' ){ ?>

                    <div class="alert alert-danger">
                        <?php echo htmlspecialchars( $profileError, ENT_COMPAT, 'UTF-8', FALSE ); ?>

                    </div>
                        <?php } ?>


                <?php require $this->checkTemplate("profile-menu");?>


                </div>

                
            </div>
        </div>
    </section>
    <!-- checkout section end -->