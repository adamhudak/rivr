<?php 

 /* Template name: About us */

get_header();?>

<?php $main_section = get_field("main_section");?>
<section class="about">
    <div class="container">
        <div class="about-box">
            <?php if(!empty($main_section['main_title'])){ ?>
                <h1> <?php echo $main_section['main_title']; ?> </h1>
            <?php }?>
            <?php if(!empty($main_section['main_text'])){ ?>
                <p> <?php echo $main_section['main_text']; ?> </p>
            <?php }?>
        </div>
    </div>
    <div class="about-inner">
        <?php if(!empty($main_section['image']["url"])){ ?>
            <div class="about-inner__img"> 
                <img loading="lazy" src="<?php echo $main_section['image']["url"]; ?>" alt="<?php echo $main_section['image']["alt"]; ?>">
            </div>
        <?php }?>
        <div class="about-inner__content">
            <div class="about-inner__content-group">
                <?php if(!empty($main_section['secont_title'])){ ?>
                    <h2> <?php echo $main_section['secont_title']; ?> </h2>
                <?php }?>
                <?php if(!empty($main_section['secont_text'])){ ?>
                    <div> <?php echo $main_section['secont_text']; ?> </div>
                <?php }?>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="about-box about-box--second">
            <?php if(!empty($main_section['third_title'])){ ?>
                <h2> <?php echo $main_section['third_title']; ?> </h2>
            <?php }?>
            <?php if(!empty($main_section['third_text'])){ ?>
                <p> <?php echo $main_section['third_text']; ?> </p>
            <?php }?>
        </div>
    </div>
</section>

<?php $values = get_field("values");?>
<section class="values">
    <div class="container">
        <div class="values-inner">
            <?php if(!empty($values['main_title'])){ ?>
                <h3> <?php echo $values['main_title']; ?> </h3>
                <?php }?>
            <div class="values-content">
                <?php if(!empty($values['main_text'])){ ?>
                 <?php echo $values['main_text']; ?> 
                <?php }?>
            </div>
        </div>


    </div>
</section>

<?php get_template_part('template-parts/insurance-items'); ?>

<?php get_template_part('template-parts/how-it-works'); ?>

<div class="info-box__bcg">
    <?php get_template_part('template-parts/get-in-touch'); ?>
</div>



<?php get_footer();?>