<?php if(!class_exists('Rain\Tpl')){exit;}?>    <!-- Contact section -->
    <section class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 contact-info">

                    <?php if( $error != '' ){ ?>

                        <div class="alert alert-danger">
                            <?php echo htmlspecialchars( $error, ENT_COMPAT, 'UTF-8', FALSE ); ?>

                        </div>
                    <?php } ?>


                    <h3>Acessar</h3>
                    <form class="contact-form" method="post" action="/login" id="login-form-wrap">
                        <input type="text" placeholder="Login*" id="login" name="login">
                        <input type="password" placeholder="Senha*" id="senha" name="password">
                        <a class="esqueci-senha" id="esqueci-senha" href="/forgot">Esqueci a senha</a><br>
                        <button class="site-btn" value="Login">LOGIN</button>
                    </form>
                </div>
                <div class="col-lg-6 contact-info">

                    <?php if( $errorRegister != '' ){ ?>

                        <div class="alert alert-danger">
                            <?php echo htmlspecialchars( $errorRegister, ENT_COMPAT, 'UTF-8', FALSE ); ?>

                        </div>
                    <?php } ?>


                    <h3>Criar Conta</h3>
                    <form class="contact-form" id="register-form-wrap" action="/register" method="post">
                        <input type="text" placeholder="Nome Completo*" id="nome" name="name" value="<?php echo htmlspecialchars( $registerValues["name"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        <input type="email" placeholder="Email*" id="email" name="email" value="<?php echo htmlspecialchars( $registerValues["email"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        <input type="text" placeholder="Telefone*" id="phone" name="phone" value="<?php echo htmlspecialchars( $registerValues["phone"], ENT_COMPAT, 'UTF-8', FALSE ); ?>">
                        <input type="password" placeholder="Senha*" id="senha" name="password">
                        <button class="site-btn" type="submit" value="Criar Conta" name="login">CRIAR CONTA</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact section end -->
    <br>