<?php require_once('custom-single-header.php')?>

<div class="container" style="padding:100px 15px">
    <div class="my-post" style="text-align:center">
        <?php the_post_thumbnail( 'large', ['class' => 'img-fluid'] ); ?>
        <br />
        <br />
        
        
    </div>
    <br>
    <?php the_content(); ?>
</div>

<?php get_footer(); ?>