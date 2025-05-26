<?php $insurance = get_field("insurance", "25");?>
<?php if(!empty($insurance['insurance_standard_title'])){ ?>
    <p class="insurance-standard__title"> <?php echo $insurance['insurance_standard_title']; ?> </p>
<?php }?>
<div class="insurance-standard__wrap">
    <?php while ( have_rows( 'insurance', "25" ) ) : the_row();
                        while ( have_rows( 'insurance_standard' ) ) : the_row(); ?>
    <div class="insurance-standard">
        <?php if(!empty(get_sub_field('icon')["url"])){ ?>
            <div class="sinsurance-standard__img">
                <img loading="lazy" src="<?php echo get_sub_field('icon')["url"]; ?>" alt="<?php echo get_sub_field('icon')["alt"]; ?>">
            </div>
        <?php }?>
        <div class="insurance-standard__content">
            <?php if(!empty(get_sub_field('title'))){ ?>
                <h4> <?php echo get_sub_field('title'); ?></h4>
            <?php }?>   
            <?php if(!empty(get_sub_field('text'))){ ?> 
                <p>
                    <?php echo get_sub_field('text'); ?>
                </p>
            <?php }?>
        </div>

    </div>
    <?php  endwhile;
                    endwhile; ?>
</div>