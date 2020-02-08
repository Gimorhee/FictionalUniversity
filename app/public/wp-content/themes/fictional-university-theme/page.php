<?php
    get_header();

    while(have_posts()) {
    the_post(); ?>
        <div class="page-banner">
            <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri("/images/ocean.jpg") ?>;"></div>
            <div class="page-banner__content container container--narrow">
            <h1 class="page-banner__title"><?php the_title(); ?></h1>
            <div class="page-banner__intro">
                <p>** NEED TO REPLACE LATER **</p>
            </div>
            </div>  
        </div>

        <div class="container container--narrow page-section">
            <?php 
                $parent = wp_get_post_parent_ID(get_the_ID());

                if($parent) { ?>
                    <div class="metabox metabox--position-up metabox--with-home-link">
                        <p><a class="metabox__blog-home-link" href="<?php echo the_permalink($parent)?>"><i class="fa fa-home" aria-hidden="true"></i> Back to <?php echo get_the_title($parent)?></a> <span class="metabox__main"><?php the_title(); ?></span></p>
                    </div>
                <?php }
            ?>
            
            <?php 
                if (get_children(get_the_ID()) || $parent) { ?>
                    <div class="page-links">
                        <h2 class="page-links__title"><a href="<?php echo the_permalink($parent); ?>"><?php echo get_the_title($parent); ?></a></h2>
                        <ul class="min-list">
                            <?php 
                                if ($parent) {
                                    $findChildrenOf = $parent;
                                } else {
                                    $findChildrenOf = get_the_ID();
                                }

                                wp_list_pages(array(
                                    "title_li" => Null,
                                    "child_of" => $findChildrenOf,
                                    // Sorting the column orders by the orders defined in the WP admin page
                                    "sort_column" => "menu_order"
                                ));
                            ?>
                        </ul>
                    </div>
                <?php }
            ?>

            <div class="generic-content">
                <?php the_content(); ?>
            </div>
        </div>
    <?php }

    get_footer();
?>