<section class="blog-related">
    <div class="container">
        <h5>
            Related articles
        </h5>
        <div class="blog-related__item-wrap">
            <?php
            
                $current_post_categories = wp_get_post_categories(get_the_ID(), array('fields' => 'ids'));
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 3, // Set this to a reasonable number or use pagination
                    'post__not_in' => array(get_the_ID()), // Exclude the current post
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'category',
                            'field' => 'term_id',
                            'terms' => $current_post_categories,
                        ),
                    ),
                    'order' => 'ASC',
                );
                $query = new WP_Query($args);

                while ($query->have_posts()) : $query->the_post();
                ?>


            <div class="blog-related__item">
                <a href="<?php the_permalink();?>" class="blog-related__item-link">
                    <div class="blog-related__item-top">
                        <div class="blog-related__item-img">
                            <?php  the_post_thumbnail();?>
                        </div>
                        <div class="blog-related__item-cat">
                            <?php the_category();?>
                        </div>
                    </div>
                    <div class="blog-related__item-content">
                        <h6>
                            <?php the_title();?>
                        </h6>
                        <p>
                            <?php the_excerpt();?>
                        </p>
                    </div>
                </a>
            </div>

            <?php

                endwhile;

            ?>
            <?php wp_reset_postdata() ?>
        </div>
        <div class="blog-related__btn">
            <a href="" class="main-button"> Load more </a>
        </div>
    </div>
</section>