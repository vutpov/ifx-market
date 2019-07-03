<?php

    $query_services = array(
        'post_type' => 'service',
        'posts_per_page' => 6,
    );

   

    $query_news_updates = array(
        'post_type' => 'news',
        'posts_per_page' => 3,
    );


    $services = new WP_Query( $query_services );

    $news_updates = new WP_Query( $query_news_updates );

?>

<footer class="ifx-markets-footer">
    <div class="container">
        <div class="row  social-icon-list">
            <div class="col-lg-3 social-list">
                <?php the_custom_logo(); ?>
                <br />
                <br />
                <span class="footer-desc">
                    We help resolve complex issues and identify opportunities across
                </span>
                <br />

                <div class="divider"></div>
                <div class="ruler"></div>

                <div class="row social-icon-list">
                    <a href="#" class="social align-icon">
                        <i class="fab fa-twitter social-icon"></i>
                    </a>
                    <a href="#" class="social align-icon">
                        <i class="fab fa-google-plus-g social-icon"></i>
                    </a>

                    <a href="#" class="social align-icon">
                        <i class="fab fa-facebook-f social-icon"></i>
                    </a>

                    <a href="#" class="social align-icon">
                        <i class="fab fa-pinterest-p social-icon"></i>
                    </a>

                    <a href="#" class="social align-icon">
                        <i class="fab fa-instagram social-icon"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-3">
                <span class="paragraph-title">Our Services</span>
                <div style="height:25px;"></div>
                <ul style="padding:0;">

                    <?php 
                                while ($services->have_posts()) : $services->the_post()
                            
                            ?>

                    <li class="clear-style-type">
                        <a href="<?php the_permalink()?>" class="footer-services"><?php the_title()?></a>
                    </li>

                    <div class="footer-service-divider"></div>
                    <?php 
                                endwhile
                            ?>


                </ul>
            </div>

            <div class="col-lg-3">
                <span class="paragraph-title">Latest News</span>
                <div style="height:25px;"></div>
                <ul style="padding:0;">

                    <?php
                            while($news_updates->have_posts()) : $news_updates->the_post();
                        ?>

                    <li class="clear-style-type">
                        <a href="<?php the_permalink()?>" class="footer-services"><?php the_title()?></a>
                    </li>

                    <span class="footer-date"><?php echo(get_the_date( 'F-d-Y' ));?></span>
                    <div class="divider"></div>
                    <div class="ruler"></div>

                    <?php endwhile;?>


                </ul>
            </div>

            <div class="col-lg-3">
                <span class="paragraph-title">Need Help?</span>

                <div style="height:25px;"></div>

                <div class="contact-footer">
                    <div class="btn-contact-wrapper">
                        <i class="fas fa-phone-alt white-fore btn-contact-footer"></i>
                    </div>

                    <span class="contact-footer-title">Address</span><br />
                    <span class="footer-desc">Leathermarket court 53, London, United Kingdom</span>
                </div>

                <div class="divider"></div>

                <div class="contact-footer">
                    <div class="btn-contact-wrapper">
                        <i class="fas fa-globe white-fore btn-contact-footer"></i>
                    </div>

                    <span class="contact-footer-title">Call Us</span><br />
                    <span class="footer-desc">+44-123-4567-89 <br />
                        +44-123-4567-87</span>
                </div>
            </div>
        </div>
    </div>
</footer>

<div style="background-color:#2C2523;margin-bottom: 30px">
    <div class="container under-footer">
        Copyright © <?php echo date('Y'); ?> <a href="cubetiqs.com">CUBETIQS Solution</a>
    </div>
</div>

<div class="container-fluid marquee-placement" style="z-index: 999; color:red;position:fixed;bottom:0">
    <div class="marquee">Brodcasting here...</div>
</div>

<script src="<?php echo get_template_directory_uri(); ?>/lib/js/jquery-3.3.1.slim.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/lib/js/popper.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/lib/js/bootstrap.min.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/lib/js/all.min.js"></script>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo get_template_directory_uri(); ?>/lib/js/bootstrap-3.min.js"></script>

<!-- Bootstrap Dropdown Hover JS -->
<script src="<?php echo get_template_directory_uri(); ?>/lib/js/bootstrap-dropdownhover.min.js"></script>

<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/lib/slick/slick.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/lib/js/jquery.marquee.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/lib/js/jquery.pause.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/lib/js/script.js"></script>

<script>
    $(function () {
        $(".marquee").marquee({
            pauseOnHover: true,
            duration: 20000
        });
    });
</script>

<?php wp_footer(); ?>
</body>

</html>