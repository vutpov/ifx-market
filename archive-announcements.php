<?php get_header(); 
    $query_announce = array(
        'post_type' => 'announcements',
        
    );

    $announce = new WP_Query( $query_announce );

    
?>

<div class="center-text white my-margin-bottom">
    <h2>
        Announcement
    </h2>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb" style="justify-content: center;background-color:white;">
            <li class="breadcrumb-item"><a href="<?php echo(get_home_url())?>">Homepage</a></li>
            <li class="breadcrumb-item active" aria-current="page">Announcement</li>
        </ol>
    </nav>
</div>



<div class="container" style="padding:100px 15px">

    <div class="row">


        <?php
                    
            while ($announce->have_posts()) :  $announce->the_post()
        ?>
        <a href="<?php the_permalink()?>" class="announce">
            <div class="col-12 mission">

                <i class="fas fa-info-circle"></i>

                <h3><?php the_title()?></h3>

                <div class="horizontal-bar"></div>

                <div style="clear:both"></div>

                <div style="text-indent:65px">
                    <?php the_excerpt()?>
                </div>


                <br>

            </div>

        </a>



        <?php
            endwhile;
        ?>


    </div>
</div>

<?php get_footer(); ?>