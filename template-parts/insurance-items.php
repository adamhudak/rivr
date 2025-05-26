<section class="insurance-group">
    <div class="container">
        <h3>
        Now you know about us, so let's get you covered
        </h3>
        <div class="insurance-group__item-wrap">
            <?php while ( have_rows( 'complete_peace', "11" ) ) : the_row();
                        while ( have_rows( 'add_box', "11" ) ) : the_row(); ?>
            <div class="insurance-group__item">
                <?php if(!empty(get_sub_field('image'))){ ?>
                    <div class="insurance-group__item-img">
                        <img loading="lazy" src="<?php echo get_sub_field('image')["url"]; ?>"
                            alt="<?php echo get_sub_field('image')["alt"]; ?>">
                    </div>
                <?php }?>    
                <?php if(!empty(get_sub_field('title'))){ ?>
                    <h4> <?php echo get_sub_field('title'); ?></h4>
                <?php }?>
                <?php if(!empty(get_sub_field('small_text'))){ ?>
                    <p> <?php echo get_sub_field('small_text'); ?></p>
                <?php }?>
                <?php if(!empty(get_sub_field('button'))){ ?>
                    <a class="main-button" href="<?php echo get_sub_field('button') ['url']; ?>">Read more</a>
                <?php }?>

            </div>
            <?php  endwhile;
                    endwhile; ?>

        </div>
    </div>
</section>