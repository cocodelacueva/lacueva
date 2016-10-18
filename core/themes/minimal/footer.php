<?php
/**
 * The template for displaying the footer.
 *
 * @package minimal
 */
//redes sociales:
    $minimalSettings = get_option('minimal_settings');
    $telContact = $minimalSettings['minimal_redes_tel'];
    $emailContact = $minimalSettings['minimal_redes_email'];
    $skypeSB = $minimalSettings['minimal_redes_skype'];
    $facebookSB = $minimalSettings['minimal_redes_facebook'];
    $twitterSB = $minimalSettings['minimal_redes_twitter'];
    $googlePlusSB = $minimalSettings['minimal_redes_googleplus'];
    $linkedinSB = $minimalSettings['minimal_redes_linkedin'];
    $githubSB = $minimalSettings['minimal_redes_github'];
    $pinterestSB = $minimalSettings['minimal_redes_pinterest'];
    $behanceSB = $minimalSettings['minimal_redes_behance'];
    $snapchatSB = $minimalSettings['minimal_redes_snapchat'];
    $instagramSB = $minimalSettings['minimal_redes_instagram'];
?>

<!---- section: contact form ---->
    <section id="form" class="complete-form">
        <h2>Contacto</h2>
        
        <?php 
		  get_template_part( 'template-parts/content', 'form' ); 
        ?>
        
    </section><!-- //cierra contact form -->
    
</div>  <!-- //cierra wrapper -->
<!------------------------- footer ---------------------->
<footer class="main-footer">
    <div>
        <a href="index.html"><h5>LaCueva.tv</h5></a>
    </div>
    <div class="redes">
        <?php if ( ! $telContact == '' || ! $emailContact == '' || ! $skypeSB == '' || ! $facebookSB == '' || ! $twitterSB == '' || ! $googlePlusSB == '' || ! $linkedinSB == '' || ! $githubSB == '' || ! $pinterestSB == '' || ! $behanceSB == '' || ! $snapchatSB == '' || ! $instagramSB == ''): ?>
        <ul>
            <?php if ( ! $telContact == '') : ?>


                <li><a href="tel:<?php echo $telContact; ?>" target="_blank" class="red-icon red-icon-contacto">
                        <span class="sr-only">Teléfono</span>
                    </a>
                </li>

            <?php endif ?>
            <?php if ( ! $emailContact == '') : ?>

                <li><a href="mailto:<?php echo $emailContact; ?>" target="_blank" class="red-icon red-icon-email">
                        <span class="sr-only">Email</span>
                    </a>
                </li>

            <?php endif ?>
            <?php if ( ! $skypeSB == '') : ?>

                <li><a href="callto:<?php echo $skypeSB; ?>" target="_blank" class="red-icon red-icon-skype">
                        <span class="sr-only">Skype</span>
                    </a>
                </li>

            <?php endif ?>
            <?php if ( ! $facebookSB == '') : ?>

                <li><a href="<?php echo $facebookSB; ?>" target="_blank" class="red-icon red-icon-face">
                        <span class="sr-only">Facebook</span>
                    </a>
                </li>

            <?php endif ?>
            <?php if ( ! $twitterSB == '') : ?>

                <li><a href="<?php echo $twitterSB; ?>" target="_blank" class="red-icon red-icon-twitter">
                        <span class="sr-only">Twitter</span>
                    </a>
                </li>

             <?php endif ?>
             <?php if ( ! $googlePlusSB == '') : ?>

                <li><a href="<?php echo $googlePlusSB; ?>" target="_blank" class="red-icon red-icon-plus">
                        <span class="sr-only">Google +</span>
                    </a>
                </li>

             <?php endif ?>
             <?php if ( ! $linkedinSB == '') : ?>

                <li><a href="<?php echo $linkedinSB; ?>" target="_blank" class="red-icon red-icon-linkedin">
                        <span class="sr-only">Linkedin</span>
                    </a>
                </li>

             <?php endif ?>
             <?php if ( ! $githubSB == '') : ?>

                <li><a href="<?php echo $githubSB; ?>" target="_blank" class="red-icon red-icon-github">
                        <span class="sr-only">GitHub</span>
                    </a>
                </li>

            <?php endif ?>
            <?php if ( ! $pinterestSB == '') : ?>

                <li><a href="<?php echo $pinterestSB; ?>" target="_blank" class="red-icon red-icon-pinterest">
                        <span class="sr-only">Pinterest</span>
                    </a>
                </li>

             <?php endif ?>
             <?php if ( ! $behanceSB == '') : ?>

                <li><a href="<?php echo $behanceSB; ?>" target="_blank" class="red-icon red-icon-behance">
                        <span class="sr-only">Behance</span>
                    </a>
                </li>

              <?php endif ?>
              <?php if ( ! $snapchatSB == '') : ?>

                <li><a href="<?php echo $snapchatSB; ?>" target="_blank" class="red-icon red-icon-snapchat">
                        <span class="sr-only">Snapchat</span>
                    </a>
                </li>

              <?php endif ?>
              <?php if ( ! $instagramSB == '') : ?>

                <li><a href="<?php echo $instagramSB; ?>" target="_blank" class="red-icon red-icon-instagram">
                        <span class="sr-only">Instagram</span>
                    </a>
                </li>
             <?php endif ?>
        </ul>
    <?php endif; ?>
        <p>
            Copyright. 2016 LaCueva.tv | <a href="https://www.instagram.com/olueletu/" target="_blank" class="fotografo">Fotografía: Olu Eletu</a>
        </p>
    </div>
</footer>

<!------- fin contenido ------>

<?php wp_footer(); ?>

</body>
</html>