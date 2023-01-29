<?php
/**
 * The template for displaying the footer
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bogart Studio
 */
?>

<footer>
    <section class="copyright container">
        <div class="row">
            <div class="col-md-4 policies footer-legal-icons">
                <p>Original acrylic paintings by Darien Bogart</p>
                <div class="footer-social-icons">
                <a href="https://www.facebook.com/BogartStudio" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
         
                <a href="https://www.instagram.com/darienbogart"><i class="fa-brands fa-instagram" target="_new"></i></a>
                <a href="https://twitter.com/darienbogartart?lang=en
"><i class="fa-brands fa-twitter"></i></a>
</div>
<div class="footer-copyright">
<a href="home"><p>&copy; <?php echo date('Y') . " &nbsp;" .  get_bloginfo('name') ; ?></p></a>
<a href="https://aspeneyestudio.com" target="_blank" class="promo">Website by Aspen Eye Studio</a>
</div>
    
            </div>
            <div class="col-md-4 policies footer-policies">
                <p>POLICIES</p>
                <a href="shipping-policy"><p>Shipping Policy</p></a>
                <a href="return-policy"><p>Returns and Refunds</p></a>
                <a href="privacy-policy"><p>Privacy Policy</p></a>
            </div>
            <div class="col-md-4 policies footer-newsletter">
                <p>NEWSLETTER</p>
                <p>Be the first to see my new paintings!</p>
                <?php echo do_shortcode('[contact-form-7 id="432" title="Newsletter form - Footer" html_id="footer-form"]'); ?>
            </div>
         

        </div>
    </section>
</footer>

    
    <?php wp_footer(); ?>
    
    </body>
    </html>


