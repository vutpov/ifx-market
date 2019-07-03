<?php require_once('custom-single-header.php')?>

<div class="container" style="padding:100px 15px">
    <img src="<?php echo(get_the_post_thumbnail_url())?>" alt="" class="img-fluid"  style="width:300px">
    <br><br><br>
    <?php the_content(); ?>
</div>

<?php get_footer(); ?>