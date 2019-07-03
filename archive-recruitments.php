<?php get_header(); 
    $query_recruit = array(
        'post_type' => 'recruitments',
        
    );

    $recruit = new WP_Query( $query_recruit );

    
?>

<div class="center-text white my-margin-bottom">
    <h2>
        Recruitments
    </h2>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb" style="justify-content: center;background-color:white;">
            <li class="breadcrumb-item"><a href="index.html">Homepage</a></li>
            <li class="breadcrumb-item active" aria-current="page">Recruitments</li>
        </ol>
    </nav>
</div>



<div class="container" style="padding:100px 15px">

    <div class="row">

    
        <?php
                    
            while ($recruit->have_posts()) : $recruit->the_post()
        ?>

            <div class="col-md-6 mission" style="margin-bottom:50px;">
                <h3><?php the_title()?></h3>

                <div class="horizontal-bar"></div>

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