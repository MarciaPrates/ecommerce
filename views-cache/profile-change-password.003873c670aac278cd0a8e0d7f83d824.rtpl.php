<?php if(!class_exists('Rain\Tpl')){exit;}?><div class="single-product-area" id="profile-menu-espaco">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">                
            <div class="col-md-4">
                <?php require $this->checkTemplate("profile-menu");?>

            </div>
            <div class="col-md-8">
                <div class="cart-collaterals">
                    <h2>Alterar Senha</h2>
                </div>

                <?php if( $changePassError != '' ){ ?>

                <div class="alert alert-danger">
                    <?php echo htmlspecialchars( $changePassError, ENT_COMPAT, 'UTF-8', FALSE ); ?>

                </div>
                <?php } ?>


                <?php if( $changePassSuccess != '' ){ ?>

                <div class="alert alert-success">
                    <?php echo htmlspecialchars( $changePassSuccess, ENT_COMPAT, 'UTF-8', FALSE ); ?>

                </div>
                <?php } ?>

                
                <form action="/profile/change-password" method="post">
                    <div class="form-group">
                    <label for="current_pass">Senha Atual</label>
                    <input type="password" class="form-control" id="current_pass" name="current_pass">
                    </div>
                    <hr>
                    <div class="form-group">
                    <label for="new_pass">Nova Senha</label>
                    <input type="password" class="form-control" id="new_pass" name="new_pass">
                    </div>
                    <div class="form-group">
                    <label for="new_pass_confirm">Confirme a Nova Senha</label>
                    <input type="password" class="form-control" id="new_pass_confirm" name="new_pass_confirm">
                    </div>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </form>

            </div>
        </div>
    </div>
</div>