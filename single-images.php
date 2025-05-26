<?php 

 /* Template name: Blog single with images
    Template Post Type: post
 */

 get_header();?>

<section class="blog-detail">
    <div class="container">
        <div class="blog-detail__inner">
            <h1>
                    <?php the_title();?>
            </h1>
        </div>
    </div>
    <div class="blog-detail__thumbnail">
        <div class="blog-detail__inner">
            <div class="blog-detail__inner-img">
                <?php the_post_thumbnail();?>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="blog-detail__inner">


            <?php the_content();?>
            <?php get_template_part('template-parts/share-blog-section'); ?>
        </div>
    </div>
</section>






<?php get_template_part('template-parts/related-posts'); ?>

<?php get_template_part('template-parts/insurance-items'); ?>

<?php get_template_part('template-parts/how-it-works'); ?>

<div class="info-box__bcg">
    <?php get_template_part('template-parts/get-in-touch'); ?>
</div>

<?php get_footer();?>