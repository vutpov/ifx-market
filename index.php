<?php get_header(); ?>

<div class="center-text white my-margin-bottom">
    <h2>
        <?php single_post_title(); ?>
    </h2>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb" style="justify-content: center;background-color:white;">
            <li class="breadcrumb-item"><a href="index.html">Homepage</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php single_post_title();?></li>
        </ol>
    </nav>
</div>

<?php the_post(); ?>

<div class="container" style="padding:100px 0">
    <div class="row">
        <div class="col-md-12 col-lg-8">
            <div class="my-post">
                <?php the_post_thumbnail( 'large', ['class' => 'img-fluid'] ); ?>
                <br />
                <br />
                <?php the_content(); ?>
                <div class="video-desc">
                    <?php the_date(); ?>
                    <div class="share-list">
                        <a href="#" class="circle-share"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="circle-share"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="circle-share"><i class="fab fa-google-plus-g"></i></a>
                        <a href="#" class="circle-share"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <a href="#" class="tag">Capabilities</a>
                <a href="#" class="tag">Case Study</a>
                <br>
                <br>
            </div>
        </div>

        
    </div>
</div>

<?php get_footer(); ?>