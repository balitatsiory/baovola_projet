<link rel="stylesheet" href="<?php echo site_url('assets'); ?>/css/produitscss/bootstrap.css">
<link rel="stylesheet" href="<?php echo site_url('assets'); ?>/css/logincss/main.css">

<section class="login_box_area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="login_box_img">
                    <img class="img-fluid" src="<?php echo site_url('assets/images'); ?>/login.jpg" alt="">
                    <div class="hover">
                        <h4>Vous n'avez pas de compte ?</h4>

                        <a class="primary-btn" href="<?php echo site_url('Welcome/inscription'); ?>">S'inscrire</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="login_form_inner">
                    <h3>connectez-Vous</h3>
                    <form class="row login_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'">
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
                        </div>
                        <div class="col-md-12 form-group">

                        </div>

                        <div class="col-md-12 form-group">
                            <button type="submit" value="submit" class="primary-btn">Se connecter</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>