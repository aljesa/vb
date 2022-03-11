<?php
// Template Name: Contact Template

get_header(); ?>
<?php


?>
    <div class="content">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2695.8059827469465!2d8.705549515323648!3d47.49369287917736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x479a996c99189205%3A0x59e9d9c70ad0fc54!2sSchlosstalstrasse%209%2C%208406%20Winterthur%2C%20Switzerland!5e0!3m2!1sen!2s!4v1647008230778!5m2!1sen!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
    <div class="contact-form my-100">
        <div class="container">

            <div class="row justify-content-md-center">
                <div class="col-xl-8 col-lg-8 col-md-12 col-12">
                    <h1 class="section-title">
                        Kontaktformular
                    </h1>
                    <div class="contact-form">
                        <?php echo apply_shortcodes( '[contact-form-7 id="2032" title="Kontakt Form"]' ); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php
get_footer();
