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

<div class="container">
    <br>
    <?php the_content(); ?>
    <br>

</div>



<?php    
    get_footer();
?>