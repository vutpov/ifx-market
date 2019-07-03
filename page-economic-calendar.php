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

<div class="container" style="text-align:left">
    <br><br><br>
    <a href="http://www.investing.com" target="_blank"><img
            src="https://i-invdn-com.akamaized.net/logos/investingLogo-137x25.png" alt="investing.com"></a>

    <br>
    <iframe class="eco-calendar"
        src="https://sslecal2.forexprostools.com?ecoDayBackground=%23fafafa&borderColor=%23ba8432&columns=exc_flags,exc_currency,exc_importance,exc_actual,exc_forecast,exc_previous&features=datepicker,timezone,timeselector,filters&countries=25,32,6,37,72,22,17,39,14,10,35,43,56,36,110,11,26,12,4,5&calType=week&timeZone=8&lang=1"
        width="650" height="467" frameborder="0" allowtransparency="true" marginwidth="0" marginheight="0"></iframe>
    <div class="poweredBy" style="font-family: Arial, Helvetica, sans-serif;"><span
            style="font-size: 11px;color: #333333;text-decoration: none;">Real Time Economic Calendar provided by <a
                href="https://www.investing.com/" rel="nofollow" target="_blank"
                style="font-size: 11px;color: #06529D; font-weight: bold;"
                class="underline_link">Investing.com</a>.</span></div> <br><br><br>
</div>



<?php    
    get_footer();
?>