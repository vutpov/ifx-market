<?php require_once('custom-single-header.php')?>

<div class="container">
    <div class="row">
        <div class="col-md-12 col-lg-8">
            <div class="my-post">
                <?php the_post_thumbnail( 'large', ['class' => 'img-fluid'] ); ?>
                <br />
                <br />
                <?php the_content(); ?>
                <div class="video-desc">
                    <?php the_date(); ?> |
                    <?php the_author();?>
                </div>
                
                <br>
                <br>
            </div>
        </div>

       
    </div>
</div>

<?php get_footer(); ?>