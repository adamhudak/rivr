<?php 

 /* Template name: Domov */

get_header();?>

<?php $hero_section = get_field("hero_section");?>
<section class="hero">
   
    <div class="insurance-inner">
        <div class="insurance-content">
            <div class="hero-box">
                <?php if(!empty($hero_section['title'])){ ?>
                    <h1 class="hero-box__title"> <?php echo $hero_section['title']; ?> </h1>
                <?php }?>
                <?php if(!empty($hero_section['text'])){ ?>
                    <p class="hero-box__text"> <?php echo $hero_section['text']; ?> </p>
                <?php }?>
                <?php if(!empty($hero_section['button'])){ ?>
                    <a class="main-button" href="<?php echo $hero_section['button']["url"]; ?>">
                        <?php echo $hero_section['button']["title"]; ?>
                    </a>
                <?php }?>
            </div>
        </div>
        <?php if(!empty($hero_section['image'])){ ?>
            <div class="insurance-img">
                <img src="<?php echo $hero_section['image']["url"]; ?>" alt="<?php echo $hero_section['image']["alt"]; ?>"></img>
            </div>
        <?php }?>
    </div>
    <div class="hero-paralax">
        <div class="container">
            <div class="hero-paralax__box">
                <?php if(!empty($hero_section['introduction_title'])){ ?>
                    <h2> <?php echo $hero_section['introduction_title']; ?> </h2>
                <?php }?>
                <?php if(!empty($hero_section['introduction_text'])){ ?>
                    <div>
                         <?php echo $hero_section['introduction_text']; ?> 
                    </div>
                <?php }?>
            </div>
        </div>
    </div>
    <div class="parallax-home"></div>
    <div class="parallax-home--mobile"></div>
</section>



<?php $complete_peace = get_field("complete_peace");?>
<section class="insurance">
    <div class="container">
    <?php if(!empty($complete_peace['main_title'])){ ?>
        <h2> <?php echo $complete_peace['main_title']; ?> </h2>
    <?php }?>
    </div>
    <div class="insurance-inner__wrap">
        <?php while ( have_rows( 'complete_peace' ) ) : the_row();
                        while ( have_rows( 'add_box' ) ) : the_row(); ?>
        <div class="insurance-inner">
            <div class="insurance-content">
                <div class="insurance-content__text">
                    <?php if(!empty(get_sub_field('title'))){ ?>
                        <h3> <?php echo get_sub_field('title'); ?></h3>
                    <?php }?>    
                    <?php if(!empty(get_sub_field('small_text'))){ ?>
                        <p class="vision-box__text">
                            <?php echo get_sub_field('small_text'); ?>
                        </p>
                    <?php }?> 
                    <?php if(!empty(get_sub_field('button'))){ ?>
                        <a class="main-button" href="<?php echo get_sub_field('button') ['url']; ?>">Read more</a>
                    <?php }?>

                </div>
            </div>
            <?php if(!empty(get_sub_field('image'))){ ?>
                <div class="insurance-img">
                    <img loading="lazy" src="<?php echo get_sub_field('image')["url"]; ?>" alt="<?php echo get_sub_field('image')["alt"]; ?>">
                </div>
            <?php }?>
        </div>

            <?php  endwhile;
                    endwhile; ?>

 
    </div>
</section>


<?php $our_vision = get_field("our_vision");?>
<section class="vision">
    <div class="container">
        <?php if(!empty($our_vision['main_title'])){ ?>
            <h4> <?php echo $our_vision['main_title']; ?> </h4>
        <?php }?>
        <div class="vision-box__wrap">
            <?php while ( have_rows( 'our_vision' ) ) : the_row();
                        while ( have_rows( 'benefits' ) ) : the_row(); ?>
            <div class="vision-box">
                <?php if(!empty(get_sub_field('icon')["url"])){ ?>
                    <div class="vision-box__img">
                        <img loading="lazy" src="<?php echo get_sub_field('icon')["url"]; ?>"
                            alt="<?php echo get_sub_field('icon')["alt"]; ?>">
                    </div>
                <?php }?>
                <?php if(!empty(get_sub_field('title'))){ ?>
                    <h4> <?php echo get_sub_field('title'); ?></h4>
                <?php }?>
                <?php if(!empty(get_sub_field('text'))){ ?>
                    <p class="vision-box__text">
                        <?php echo get_sub_field('text'); ?>
                    </p>
                <?php }?>

            </div>
            <?php  endwhile;
                    endwhile; ?>
        </div>
        <?php if(!empty($our_vision['button']["url"])){ ?>
            <div class="vision-btn">
                <a class="main-button" href="<?php echo $our_vision['button']["url"]; ?>">
                    <?php echo $our_vision['button']["title"]; ?> </a>
            </div>
        <?php }?>
    </div>
</section>

<?php get_template_part('template-parts/how-it-works'); ?>

<div class="section-image">
    <?php $still_looking_for_answers = get_field("still_looking_for_answers");?>
    <section class="info-box info-box--main">
        <div class="container">
            <?php if(!empty($still_looking_for_answers['title'])){ ?>
                <h5> <?php echo $still_looking_for_answers['title']; ?> </h5>
            <?php }?>
            <?php if(!empty($still_looking_for_answers['text'])){ ?>
                <p> <?php echo $still_looking_for_answers['text']; ?> </p>
            <?php }?>
            <?php if(!empty($still_looking_for_answers['button']["url"])){ ?>
                <a class="main-button" href="<?php echo $still_looking_for_answers['button']["url"]; ?>">
                    <?php echo $still_looking_for_answers['button']["title"]; ?>
                 </a>
            <?php }?>
        </div>
    </section>



    <?php get_template_part('template-parts/get-in-touch'); ?>

</div>




<?php get_footer();?>