<?php $covered = get_field("whats_not_covered");?>
<div class="covered-left">
    <div class="covered-lef__top">
        <?php if(!empty($covered['title'])){ ?>
            <h3> <?php echo $covered['title']; ?> </h3>
        <?php }?>
            <?php if(!empty($covered['subtitle'])){ ?>
        <p> <?php echo $covered['subtitle']; ?> </p>
        <?php }?>
    </div>
    <div class="covered-left__download">
        <h5>
            An in-depth document of what is (and isn’t) covered
        </h5>
        <?php while ( have_rows( 'whats_not_covered' ) ) : the_row();
                            while ( have_rows( 'add_document' ) ) : the_row(); ?>

        <?php if(!empty(get_sub_field('file')["url"])){ ?>

        <a target="_blank" href="<?php echo get_sub_field('file')["url"]; ?>">
            <img loading="lazy"
                src="<?php echo get_template_directory_uri() . '/imgs/download-icon.svg' ?>"><?php echo get_sub_field('file')["title"]; ?>
        </a>

        <?php }?>
        <?php  endwhile;
                        endwhile; ?>
    </div>
</div>