<?php $how_it_works = get_field("how_it_works", "11");?>

<section class="steps">
    <div class="container">
        <div class="steps-inner">
            <div class="steps-box">
                <?php if(!empty($how_it_works['title'])){ ?>
                    <h3> <?php echo $how_it_works['title']; ?> </h3>
                <?php }?>
                <?php if(!empty($how_it_works['text'])){ ?>
                    <p> <?php echo $how_it_works['text']; ?> </p>
                <?php }?>
                <?php if(!empty($how_it_works['button']["url"])){ ?>
                <a class="main-button" href="<?php echo $how_it_works['button']["url"]; ?>">
                    <?php echo $how_it_works['button']["title"]; ?> </a>
                <?php }?>
            </div>
            <div class="steps-item__wrap" >
            <?php $i = 1; ?>
                <?php while ( have_rows( 'how_it_works', "11" ) ) : the_row();
                        while ( have_rows( 'steps' ) ) : the_row(); ?>
                <div class="steps-item" data-step="<?php echo $i++;?>">
                    <?php if(!empty(get_sub_field('icon')["url"])){ ?>
                        <div class="steps-item__img">
                            <img loading="lazy" src="<?php echo get_sub_field('icon')["url"]; ?>"
                                alt="<?php echo get_sub_field('icon')["alt"]; ?>">
                        </div>
                    <?php }?>
                    <div class="steps-item__content">
                        <?php if(!empty(get_sub_field('title'))){ ?>
                            <h4> <?php echo get_sub_field('title'); ?></h4>
                        <?php }?>
                        <?php if(!empty(get_sub_field('text'))){ ?>
                            <div>
                                <?php echo get_sub_field('text'); ?>
                            </div>
                        <?php }?>
                    </div>
                </div>
                <?php  endwhile;
                    endwhile; ?>
            </div>
            <?php if(!empty($how_it_works['button']["url"])){ ?>
                <div class="main-button--mobile">
                <a class="main-button" href="<?php echo $how_it_works['button']["url"]; ?>">
                    <?php echo $how_it_works['button']["title"]; ?> </a>
                </div>
           
            <?php }?>
        </div>
    </div>
</section>