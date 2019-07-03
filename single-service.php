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

<div class="container" style="padding:100px 15px">

    <?php the_content(); ?>
</div>

<?php get_footer(); ?>