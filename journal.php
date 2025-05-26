<?php 

 /* Template name: Journal */

get_header();?>

<div class="journal-bcg">
    <div class="parallax"></div>
    <?php $journal_head = get_field("journal_head");?>
<div class="journal">
    <div class="container">
        <div class="journal-box">
            <?php if(!empty($journal_head['title'])){ ?>
            <h1> <?php echo $journal_head['title']; ?> </h1>
            <?php }?>
            <?php if(!empty($journal_head['subtitle'])){ ?>
            <p> <?php echo $journal_head['subtitle']; ?> </p>
            <?php }?>
        </div>
    </div>
</div>


<div class="blog">
    <div class="container">
        <div class="blog-top">
            <div class="blog-categories">
            <a data-category="all" class="main-button main-button--rounded filter-button">View All</a>
                    <?php
                    $categories = get_categories();
                    foreach ($categories as $category) {
                        echo '<a class="main-button main-button--rounded filter-button" data-category="' . $category->term_id . '">' . $category->name . '</a>';
                    }
                    ?>        
            </div>
        </div>
    <div class="blog__item-wrap">
            <?php          
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => -1, 
                    'order' => 'ASC',
                );
                $query = new WP_Query($args);

                while ($query->have_posts()) : $query->the_post();
                ?>

            <div class="blog-related__item" data-category="<?php echo get_the_category()[0]->term_id; ?>">
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
 
            <button class="main-button load-more"> Load more </button>
        
    </div>
 </div>
 </div>

<?php $jargon_buster = get_field("jargon_buster");?>
<section class="buster">
    <div class="container">
        <div class="buster-box">
            <?php if(!empty($jargon_buster['main_title'])){ ?>
            <h3> <?php echo $jargon_buster['main_title']; ?> </h3>
            <?php }?>
            <?php if(!empty($jargon_buster['main_text'])){ ?>
            <p> <?php echo $jargon_buster['main_text']; ?> </p>
            <?php }?>
        </div>
        <div class="buster-item__wrap">

            <?php while ( have_rows( 'jargon_buster' ) ) : the_row();
                        while ( have_rows( 'add_new_item' ) ) : the_row(); ?>
            <?php if(!empty(get_sub_field('text'))){ ?>
            <div class="buster-item">
                <?php if(!empty(get_sub_field('title'))){ ?>
                    <h4> <?php echo get_sub_field('title'); ?></h4>
                <?php }?>
                <?php if(!empty(get_sub_field('text'))){ ?>
                    <div class="buster-item__content">
                        <?php echo get_sub_field('text'); ?>
                    </div>
                <?php }?>
            </div>
            <?php }?>
            <?php  endwhile;
                    endwhile; ?>

        </div>

    </div>
</section>

<?php get_template_part('template-parts/insurance-items'); ?>

<?php get_template_part('template-parts/how-it-works'); ?>

<div class="info-box__bcg">
    <?php get_template_part('template-parts/get-in-touch'); ?>
</div>


<?php get_footer();?>