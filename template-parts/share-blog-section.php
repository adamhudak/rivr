<div class="blog-detail__bottom">
    <div class="share">
        <h6>Share</h6>
        <?php $shareTitle = esc_html(get_the_title()); ?>
		<?php $shareUrl = get_permalink(get_the_ID()); ?>
        <ul>
            <li>
                <a class="share-button" href="#" data-copy="<?php echo esc_url($shareUrl); ?>" >
                    <img loading="lazy" src="<?php  echo get_template_directory_uri() . '/imgs/share-icon-dark.svg' ?>" alt="Share icon">
                </a>
            </li>
            <li>
            <a href="https://twitter.com/share?url=<?php echo esc_attr($shareUrl); ?>" target="_blank"  rel="nofollow">
                <img loading="lazy" src="<?php echo get_template_directory_uri() . '/imgs/twitter-icon-dark.svg' ?>"
                        alt="Twitter icon">
            </a>
              
            <li>
            <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php echo esc_attr($shareUrl); ?>&title=<?php echo esc_html($shareTitle); ?>" target="_blank"  rel="nofollow">
                <img loading="lazy" src="<?php echo get_template_directory_uri() . '/imgs/linkedin-icon-dark.svg' ?>"
                        alt="LinkedIn icon">
            </a>
        
                        
            </li>
        </ul>
    </div>
    <div class="date">
        <p>Published on</p>
        <p>
            <?php echo get_the_date('F j, Y');?>
        </p>
    </div>
</div>