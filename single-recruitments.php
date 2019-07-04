<?php require_once('custom-single-header.php')?>

<div class="container" style="padding:100px 15px">



    <div class="row recruit-exerpt-wrapper">

        <div class="col-md-3 ex-padding">


            <div class="icon">
                <i class="fas fa-briefcase"></i>
            </div>

            <div class="info">
                Department:<br>
                <?php echo get_post_meta($post->ID, 'Department', true); ?></div>
        </div>

        <div class="col-md-3  ex-padding">


            <div class="icon">
                <i class="fas fa-map-marker-alt"></i>
            </div>

            <div class="info">
                Project Location:<br>
                <?php echo get_post_meta($post->ID, 'Location', true); ?>
            </div>


        </div>


        <div class="col-md-3  ex-padding">


            <div class="icon">
                <i class="fas fa-graduation-cap"></i>
            </div>

            <div class="info">
                Education:<br>
                <?php echo get_post_meta($post->ID, 'Education', true); ?>
            </div>


        </div>


        <div class="col-md-3">


            <div class="icon">
                <i class="fas fa-credit-card"></i>
            </div>

            <div class="info">
                Compensation:<br>
                <?php echo get_post_meta($post->ID, 'Compensation', true); ?>
            </div>


        </div>







    </div>





    <br><br>
    <?php the_content(); ?>

    <br>
    <a href="#" class="my-primary-btn">Apply Now</a>
</div>

<?php get_footer(); ?>