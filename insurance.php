<?php 

 /* Template name: Insurance page 
 
 */

 get_header();?>

<?php $insurance = get_field("insurance");?>
<section class="insurance-detail insurance-detail__inner">
    <div class="insurance-inner">
        <div class="insurance-content">
            <div class="insurance-detail__box">
                <h1><?php the_title();?></h1>
                    <?php if(!empty($insurance['big_title'])){ ?>
                <h2> <?php echo $insurance['big_title']; ?> </h2>
                <?php }?>

                <?php if(!empty($insurance['main_subtitle'])){ ?>
                    <p> <?php echo $insurance['main_subtitle']; ?> </p>
                <?php }?>
                <?php if(!empty($insurance['main_button']["url"])){ ?>
                    <div class="insurance-btn">
                        <a class="main-button" href="<?php echo $insurance['main_button']["url"]; ?>">
                            <?php echo $insurance['main_button']["title"]; ?> </a>
                    </div>
                <?php }?>
            </div>
        </div>
        <div class="insurance-img">
            <?php the_post_thumbnail();?>
        </div>
    </div>
    <div class="container">
        <?php get_template_part('template-parts/rivr-standard'); ?>
    </div>
    <div class="container">
        <div class="policy">
            <div class="policy-left">
                <?php if(!empty($insurance['main_title'])){ ?>
                    <h3> <?php echo $insurance['main_title']; ?> </h3>
                <?php }?>
                <?php if(!empty($insurance['main_text'])){ ?>
                    <div> <?php echo $insurance['main_text']; ?> </div>
                <?php }?>
                <?php if(!empty($insurance['button']["url"])){ ?>
                <div class="policy-btn">
                    <a class="main-button" href="<?php echo $insurance['button']["url"]; ?>">
                        <?php echo $insurance['button']["title"]; ?> </a>
                </div>
                <?php }?>
            </div>
            <div class="policy-item__wrap">
                <?php while ( have_rows( 'insurance' ) ) : the_row();
                        while ( have_rows( 'policy_item' ) ) : the_row(); ?>
                <div class="policy-item">
                    <?php if(!empty(get_sub_field('add_title'))){ ?>
                        <h5> <?php the_sub_field('add_title'); ?></h5>
                    <?php }?>
                    <?php if(!empty(get_sub_field('add__text'))){ ?>
                        <p>
                            <?php the_sub_field('add__text'); ?>
                        </p>
                    <?php }?>
                </div>
                <?php  endwhile;
                    endwhile; ?>
            </div>
        </div>
    </div>
</section>

<?php $covered_main = get_field("what’s_covered");?>
<section class="covered-main">
    <div class="container">
        <h3>
            What’s covered?
        </h3>
        <div class="covered-main__cat">
            <a data-filter="all" class="main-button main-button--rounded covered-main__cat-btn">View All</a>
            <a data-filter="contents" class="main-button main-button--rounded covered-main__cat-btn">Contents</a>
            <a data-filter="building" class="main-button main-button--rounded covered-main__cat-btn">Building</a>
        </div>
    </div>
    <div class="covered-main__item-wrap slider">
            <?php while ( have_rows( 'what’s_covered',"27" ) ) : the_row();
                        while ( have_rows( 'add_item', "27" ) ) : the_row(); ?>
            <div class="covered-main__item-group" data-category="contents">
                <div class="covered-main__item">
                    <div class="covered-main__item-content">
                        <?php if(!empty(get_sub_field('title'))){ ?>
                            <h4> <?php echo get_sub_field('title'); ?></h4>
                         <?php }?> 
                         <?php if(!empty(get_sub_field('text'))){ ?>
                            <p>
                                <?php echo get_sub_field('text'); ?>
                            </p>
                        <?php }?>     
                    </div>
                    <?php if(!empty(get_sub_field('icon')["url"])){ ?>
                    <div class="covered-main__item-icon">
                        <img src="<?php echo get_sub_field('icon')["url"]; ?>"
                            alt="<?php echo get_sub_field('icon')["alt"]; ?>">
                    </div>
                    <?php }?>
                </div>
            </div>
            <?php  endwhile;
                    endwhile; ?>

            <?php while ( have_rows( 'what’s_covered',"29" ) ) : the_row();
                        while ( have_rows( 'add_item', "29" ) ) : the_row(); ?>
            <div class="covered-main__item-group" data-category="building">
                <div class="covered-main__item">
                    <div class="covered-main__item-content">
                        <?php if(!empty(get_sub_field('title'))){ ?>
                            <h4> <?php echo get_sub_field('title'); ?></h4>
                         <?php }?> 
                         <?php if(!empty(get_sub_field('text'))){ ?>
                            <p>
                                <?php echo get_sub_field('text'); ?>
                            </p>
                        <?php }?>   
                    </div>
                    <?php if(!empty(get_sub_field('icon')["url"])){ ?>
                    <div loading="lazy" class="covered-main__item-icon">
                        <img src="<?php echo get_sub_field('icon')["url"]; ?>"
                            alt="<?php echo get_sub_field('icon')["alt"]; ?>">
                    </div>
                    <?php }?>
                </div>
            </div>
            <?php  endwhile;
                    endwhile; ?>



        </div>
</section>
<?php get_template_part('template-parts/standard-section'); ?>

<?php $covered = get_field("whats_not_covered");?>
<section class="covered">
    <div class="container">
        <div class="covered-inner">
            <?php get_template_part('template-parts/covered-left'); ?>
            <div class="covered-right">
                <div class="covered-right__tab">
                    <a data-box="general" href="">General exclusions</a>
                    <a data-box="contents" href="">Contents exclusions</a>
                    <a data-box="building" href="">Building exclusions</a>
                </div>
                <div class="covered-tab__item-group">
                    <?php get_template_part('template-parts/general-tab'); ?>
                    <?php get_template_part('template-parts/contents-tab'); ?>
                    <?php get_template_part('template-parts/building-tab'); ?>                 
                </div>
            </div>
        </div>
    </div>
</section>



<?php get_template_part('template-parts/how-it-works'); ?>

<?php get_footer();?>