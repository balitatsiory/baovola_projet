<link rel="stylesheet" href="<?php echo site_url('assets'); ?>/css/aboutuscss/styles.css" type="text/css">
<style>
    .btn-solid-reg:hover {
        background-color: transparent;
        color: #4555d2;
        /* needs to stay here because of the color property of a tag */
        text-decoration: none;
    }

    .btn-solid-lg {
        display: inline-block;
        padding: 1.625rem 2.625rem 1.625rem 2.625rem;
        border: 1px solid #4555d2;
        border-radius: 30px;
        background-color: #4555d2;
        color: #ffffff;
        font-weight: 600;
        font-size: 0.875rem;
        line-height: 0;
        text-decoration: none;
        transition: all 0.2s;
    }

    .btn-solid-lg:hover {
        background-color: transparent;
        color: #4555d2;
        /* needs to stay here because of the color property of a tag */
        text-decoration: none;
    }

    .btn-outline-reg {
        display: inline-block;
        padding: 1.375rem 2.25rem 1.375rem 2.25rem;
        border: 1px solid #cc2973;
        border-radius: 30px;
        background-color: transparent;
        color: #cc2973;
        font-weight: 600;
        font-size: 0.875rem;
        line-height: 0;
        text-decoration: none;
        transition: all 0.2s;
    }

    .btn-outline-reg:hover {
        background-color: #cc2973;
        color: #ffffff;
        text-decoration: none;
    }

    .btn-outline-lg {
        display: inline-block;
        padding: 1.625rem 2.625rem 1.625rem 2.625rem;
        border: 1px solid #cc2973;
        border-radius: 30px;
        background-color: transparent;
        color: #cc2973;
        font-weight: 600;
        font-size: 0.875rem;
        line-height: 0;
        text-decoration: none;
        transition: all 0.2s;
    }

    .btn-outline-lg:hover {
        background-color: #cc2973;
        color: #ffffff;
        text-decoration: none;
    }

    .btn-outline-sm {
        display: inline-block;
        padding: 1rem 1.5rem 1rem 1.5rem;
        border: 1px solid #cc2973;
        border-radius: 30px;
        background-color: transparent;
        color: #cc2973;
        font-weight: 600;
        font-size: 0.875rem;
        line-height: 0;
        text-decoration: none;
        transition: all 0.2s;
    }

    .btn-outline-sm:hover {
        background-color: #cc2973;
        color: #ffffff;
        text-decoration: none;
    }

    .form-group {
        position: relative;
        margin-bottom: 1.25rem;
    }

    .form-control-input,
    .form-control-textarea {
        width: 100%;
        padding-top: 0.875rem;
        padding-bottom: 0.875rem;
        padding-left: 1.5rem;
        border: 1px solid #cbcbd1;
        border-radius: 30px;
        background-color: #ffffff;
        font-size: 0.875rem;
        line-height: 1.5rem;
        /* removes inner shadow on form inputs on ios safari */
    }

    .form-control-textarea {
        display: block;
        height: 14rem;
        /* used instead of html rows to normalize height between Chrome and IE/FF */
    }

    .form-control-input:focus,
    .form-control-textarea:focus {
        border: 1px solid #a1a1a1;
        outline: none;
        /* Removes blue border on focus */
    }

    .form-control-input:hover,
    .form-control-textarea:hover {
        border: 1px solid #a1a1a1;
    }

    .form-control-submit-button {
        display: inline-block;
        width: 100%;
        height: 3.25rem;
        border: 1px solid #4555d2;
        border-radius: 30px;
        background-color: #4555d2;
        color: #ffffff;
        font-weight: 600;
        font-size: 0.875rem;
        line-height: 0;
        cursor: pointer;
        transition: all 0.2s;
    }

    .form-control-submit-button:hover {
        border: 1px solid #4555d2;
        background-color: transparent;
        color: #4555d2;
    }


    /*******************/
    /*     Contact     */
    /*******************/
    .form-1 {
        position: relative;
        overflow: hidden;
        padding-top: 9.5rem;
        padding-bottom: 8.75rem;
        text-align: center;
    }

    .form-1 .decoration-star {
        position: absolute;
        top: 600px;
        left: -100px;
        width: 200px;
        opacity: 0.7;
    }

    .form-1 .decoration-star-2 {
        position: absolute;
        top: 600px;
        right: -100px;
        width: 200px;
        opacity: 0.7;
    }

    .form-1 div[class*="col"] {
        /* selects all elements which have classes starting with col */
        /* needed so that the absolute positioned decoration stays behind */
        position: relative;
    }

    .form-1 .image-container {
        margin-bottom: 5rem;
    }

    .form-1 h2 {
        margin-bottom: 2.5rem;
    }
</style>
<div id="contact" class="form-1">
    <img class="decoration-star" src="<?php echo site_url('assets'); ?>/images/decoration-star.svg" alt="alternative">
    <img class="decoration-star-2" src="<?php echo site_url('assets'); ?>/images/decoration-star.svg" alt="alternative">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="image-container">
                    <img class="img-fluid" src="<?php echo site_url('assets'); ?>/images/contact.png" alt="alternative">
                </div> <!-- end of image-container -->
            </div> <!-- end of col -->
            <div class="col-lg-6">
                <div class="text-container">
                    <h2>Contact us for a quote using the following form</h2>

                    <!-- Contact Form -->
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control-input" placeholder="Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control-input" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control-textarea" placeholder="Message" required></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control-submit-button">Submit</button>
                        </div>
                    </form>
                    <!-- end of contact form -->
                </div> <!-- end of text-container -->
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</div> <!-- end of form-1 -->
<!-- end of contact -->