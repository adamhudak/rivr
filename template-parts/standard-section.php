
<?php $standard_section = get_field("standard_section", "25");?>
<section class="standard">
    <div class="container">
        <div class="standard-inner">
            <div class="standard-left">
                <?php if(!empty($standard_section['title'])){ ?>
                <h3> <?php echo $standard_section['title']; ?> </h3>
                <?php }?>
                <?php if(!empty($standard_section['subtitle'])){ ?>
                <p> <?php echo $standard_section['subtitle']; ?> </p>
                <?php }?>
            </div>
            <div class="standard-item__wrap">
                <?php while ( have_rows( 'standard_section', "25" ) ) : the_row();
                        while ( have_rows( 'add_standard', "25" ) ) : the_row(); ?>
                <div class="standard-item">
                    <?php if(!empty(get_sub_field('icon')["url"])){ ?>
                    <div class="standard-item__img">
                        <img loading="lazy" src="<?php echo get_sub_field('icon')["url"]; ?>"
                            alt="<?php echo get_sub_field('icon')["alt"]; ?>">
                    </div>
                    <?php }?>
                    <div class="standard-item__content">
                         <?php if(!empty(get_sub_field('title'))){ ?>
                            <h4> <?php echo get_sub_field('title'); ?></h4>
                        <?php }?>
                        <?php if(!empty(get_sub_field('text'))){ ?>
                            <p class="standard-item__text">
                                <?php the_sub_field('text'); ?>
                            </p>
                        <?php }?>
                    </div>

                </div>
                <?php  endwhile;
                    endwhile; ?>

            </div>
        </div>
    </div>
</section>