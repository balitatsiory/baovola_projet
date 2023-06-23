<link rel="stylesheet" href="<?php echo site_url('assets'); ?>/css/produitscss/bootstrap.css">
<link rel="stylesheet" href="<?php echo site_url('assets'); ?>/css/logincss/main.css">

<section class="login_box_area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="login_box_img">
                    <img class="img-fluid" src="<?php echo site_url('assets/images'); ?>/login.jpg" alt="">
                    <div class="hover">
                        <h4>Vous avez un compte !</h4>

                        <a class="primary-btn" href="login.html">Se connecter</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="login_form_inner">
                    <h3>Inscrivez-Vous</h3>
                    <form class="row login_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Nom" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'">
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Prenom" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'">
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'">
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Telephone" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="password" class="form-control" id="name" name="name" placeholder="Mot de passe" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
                        </div>

                        <div class="col-md-12 form-group">
                            <button type="submit" value="submit" class="primary-btn">Enregistrer</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>