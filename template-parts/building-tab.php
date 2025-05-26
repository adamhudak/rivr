<div class="covered-tab__item-wrap" data-content="building">
    <?php while ( have_rows( 'whats_not_covered', "29" ) ) : the_row();
                        while ( have_rows( 'tab', "29" ) ) : the_row(); ?>
    <div class="covered-tab__item">
        <?php if(!empty(get_sub_field('title'))){ ?>
        <h4> <?php echo get_sub_field('title'); ?></h4>
        <?php }?>
        <?php if(!empty(get_sub_field('text'))){ ?>
        <div>
            <?php echo get_sub_field('text'); ?>
        </div>
        <?php }?>
    </div>
    <?php  endwhile;
                        endwhile; ?>
</div>