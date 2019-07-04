<?php get_header(); 
    $query_news = array(
        'post_type' => 'news',
        
    );

    $news = new WP_Query( $query_news );

    
?>

<div class="center-text white my-margin-bottom">
    <h2>
        News & Updates
    </h2>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb" style="justify-content: center;background-color:white;">
            <li class="breadcrumb-item"><a href="<?php echo(get_home_url())?>">Homepage</a></li>
            <li class="breadcrumb-item active" aria-current="page">News & Update</li>
        </ol>
    </nav>
</div>



<div class="container" style="padding:100px 15px">

    <div class="row">

    
        <?php
                    
            while ($news->have_posts()) : $news->the_post()
        ?>

            <div class="col-md-6 mission" style="margin-bottom:50px;">
                <h3><?php the_title()?></h3>

                <div class="horizontal-bar"></div>

                <img src="<?php echo(get_the_post_thumbnail_url())?>" class="img-fluid" alt="">

                <br><br>
                <?php the_excerpt()?>

                <br>
                <a href="<?php the_permalink()?>" class="my-primary-btn">Read more</a>
            </div>


        <?php
            endwhile;
        ?>


    </div>
</div>

<?php get_footer(); ?>