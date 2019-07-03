<?php get_header(); 
    $query_events = array(
        'post_type' => 'events',
        
    );

    $events = new WP_Query( $query_events );

    
?>

<div class="center-text white my-margin-bottom">
    <h2>
        Events
    </h2>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb" style="justify-content: center;background-color:white;">
            <li class="breadcrumb-item"><a href="<?php echo(get_home_url())?>">Homepage</a></li>
            <li class="breadcrumb-item active" aria-current="page">Events</li>
        </ol>
    </nav>
</div>



<div class="container" style="padding:100px 15px">

    <div class="row">

    
        <?php
                    
            while ($events->have_posts()) : $events->the_post()
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