<div class="app layout-fixed-header bg-white usersession">
    <div class="full-height">
        <div class="center-wrapper">
            <div class="center-content">
                <div class="row no-margin">
                    <div class="col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                        <form role="form" method="post" action="<?php echo base_url('login/ingresar'); ?>" class="form-layout">
                            <div class="text-center mb15">
                                <img src="<?php echo base_url('assets/images/logo.jpg'); ?>"/>
                            </div>
                            <p class="text-center mb30">Bienvenido a I-ebooks!!</p>
                            <div class="form-inputs">
                                <input type="text" value="<?php echo $this->session->userdata('sess_user_admin'); ?>" name="txtUser" class="form-control input-lg" placeholder="Usuario">
                                <input type="password" name="txtPass" class="form-control input-lg" placeholder="Contrase&ntilde;a">
                            </div>
                            <button class="btn btn-danger btn-block btn-lg mb15" type="submit">
                                <span>Entrar</span>
                            </button>
                            <p>
                                <a href="extras-forgot.html">&iquest;Has olvidado tu contrase&ntilde;a?</a>
                            </p>
                        </form>
                         
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>