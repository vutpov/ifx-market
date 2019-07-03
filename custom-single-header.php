<?php get_header(); 

    $postType = get_post_type_object(get_post_type($post));

?>



<div class="center-text white my-margin-bottom">
    <h2>
        <?php single_post_title(); 
        
        
        ?>
    </h2>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb" style="justify-content: center;background-color:white;">
            <li class="breadcrumb-item"><a href="<?php echo(get_home_url())?>">Homepage</a></li>
            <li class="breadcrumb-item"><a
                    href="<?php echo get_post_type_archive_link( get_queried_object()->post_type ); ?>">
                    <?php 

                        echo(esc_html($postType->labels->name));

                    ?></a>
            </li>
            <li class="breadcrumb-item active" aria-current="page"><?php single_post_title();?></li>
        </ol>
    </nav>
</div>

<?php the_post(); ?>