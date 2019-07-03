<?php get_header(); 
    $query_team = array(
        'post_type' => 'team',
        
    );

    $team = new WP_Query( $query_team );

    
?>

<div class="center-text white my-margin-bottom">
    <h2>
        Management Team
    </h2>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb" style="justify-content: center;background-color:white;">
            <li class="breadcrumb-item"><a href="<?php echo(get_home_url())?>">Homepage</a></li>
            <li class="breadcrumb-item active" aria-current="page">Management Team</li>
        </ol>
    </nav>
</div>



<div class="container" style="padding:100px 15px">

    <div class="row">


        <?php
            
            while ($team->have_posts()) :  $team->the_post()
        ?>
        
            <div class="col-lg-3">


                <img src="<?php echo(get_the_post_thumbnail_url())?>" alt="" class="img-fluid">

                <br><br>
                <a href="<?php the_permalink()?>" class="team">
                    <h3><?php the_title()?></h3>

                    
                </a>

                <?php echo((get_post_meta(get_the_ID(), 'position')[0]))?>

                <br><br>

                <div>
                    <?php echo apply_filters('the_content', substr(get_the_content(), 0, 50) ); ?>
                </div>


                

                <a href="<?php the_permalink()?>" class="my-primary-btn team">View Profile</a>
            </div>

        



        <?php
            endwhile;
        ?>


    </div>
</div>

<?php get_footer(); ?>