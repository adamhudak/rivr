<?php $get_in_touch = get_field("get_in_touch", "11");?>
<div class="info-box ">
    <div class="container">
        <?php if(!empty($get_in_touch['title'])){ ?>
            <h5> <?php echo $get_in_touch['title']; ?> </h5>
        <?php }?>
        <?php if(!empty($get_in_touch['text'])){ ?>
            <p> <?php echo $get_in_touch['text']; ?> </p>
        <?php }?>
        <?php if(!empty($get_in_touch['button']["url"])){ ?>
        <a class="main-button" href="<?php echo $get_in_touch['button']["url"]; ?>">
            <?php echo $get_in_touch['button']["title"]; ?> </a>
        <?php }?>
    </div>
</div>