<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package CUBETIQ_Theme_v1
 */

get_header();



?>

<?php the_post(); ?>


<div class="center-text white my-margin-bottom">
    <h2>
        <?php single_post_title(); ?>
    </h2>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb" style="justify-content: center;background-color:white;">
            <li class="breadcrumb-item"><a href="<?php echo(get_home_url())?>">Homepage</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php the_title()?></li>
        </ol>
    </nav>
</div>

<div class="container" style="padding:100px 0">




    <div class="desc" style="padding: 0 60px;text-align:center;">Thank you for your interest in Blockchain service.
        Please contact us using the information
        below. To locate contacts in the Blockchain office closest to you, <a href="#">visit our office
            websites</a>. To get the
        latest updates from Blockchain Consulting, <a href="#">subscribe to a newsletter</a> or <a href="#">connect
            with us on social
            media</a>.
    </div>


    <div class="container">

        <div class="function-card-wrapper" style="display: flex;justify-content: space-evenly">

            <div class="inside-function-card">


                <img src="img/letter-100x100.png" alt="">

                <h3>
                    info@blockcha.in
                </h3>



            </div>




            <div class="inside-function-card">


                <img src="img/globe_location-100x100.png" alt="">

                <h3>
                    SE1 London, UK
                </h3>



            </div>




            <div class="inside-function-card">


                <img src="img/call-100x100.png" alt="">

                <h3>
                    +44 123456789
                </h3>



            </div>


        </div>






    </div>







    <br>









</div>


<iframe
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3909.1783092866494!2d104.90889251929624!3d11.539063461613676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310950e16a8e2f2f%3A0x1949ce63e3fb56bf!2sHome+Gym!5e0!3m2!1sen!2skh!4v1560905124600!5m2!1sen!2skh"
    height="450" frameborder="0" style="border:0;width: 100%;margin:0" allowfullscreen></iframe>










<?php    
    get_footer();
?>