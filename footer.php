<footer class="footer">
    <div class="container-fluid">
        <div class="footer-top">
        <div class="footer-inner">
            <div class="footer-item">
                <h5>Company</h5>
                <?php
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'company_menu',
                                    'menu_id'        => 'company_menu',
                                    'menu_class' 		 => 'menu company_menu'
                                )
                            );
                        ?>
            </div>
            <div class="footer-item">
                <h5>Products</h5>
                <?php
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'products_menu',
                                    'menu_id'        => 'products_menu',
                                    'menu_class' 		 => 'menu products_menu'
                                )
                            );
                        ?>
            </div>
            <div class="footer-item">
                <h5>Contact</h5>
                    <?php
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'contact_menu',
                                    'menu_id'        => 'contact-menu',
                                    'menu_class' 		 => 'menu contact-menu'
                                )
                            );
                        ?>
            </div>
         </div>
         <div class="footer-item">
            <h6>
                Follow us
            </h6>
            <ul class="footer-social">
                     <?php if(!empty(get_field('linkedin','option')["url"])){ ?>
                        <li> 
                            <a target="_blank" href="<?php echo get_field('linkedin', 'option')['url'];?>"> <img loading="lazy" src="<?php echo get_template_directory_uri() . '/imgs/linkedin-icon.svg' ?>" alt="LinkedIn icon"> </a> 
                        </li>
                    <?php }?>
                    <?php if(!empty(get_field('twitter','option')["url"])){ ?>
                        <li>
                            <a  target="_blank" href="<?php echo get_field('twitter', 'option')['url'];?>"><img loading="lazy" src="<?php echo get_template_directory_uri() . '/imgs/twitter-icon.svg' ?>" alt="Twitter icon">  </a>
                        </li>
                    <?php }?>
                    <?php if(!empty(get_field('instagram','option')["url"])){ ?>
                        <li>
                            <a  target="_blank" href="<?php echo get_field('instagram', 'option')['url'];?>"><img loading="lazy"  src="<?php echo get_template_directory_uri() . '/imgs/instagram-icon.svg' ?>" alt="Instagram icon">  </a>
                        </li>
                    <?php }?>
                    
                </ul>
         </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="footer-inner">
            <div class="footer-item footer-item--privacy">
                <?php if(!empty(get_field('copyright', "option"))){ ?>
                    <p class="copyright"> <?php echo get_field('copyright', 'option');?>  </p>
                <?php }?>    
                <?php
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'privacy_menu',
                                    'menu_id'        => 'privacy_menu',
                                    'menu_class' 		 => 'menu privacy_menu'
                                )
                            );
                        ?>
            </div>
            <?php if(!empty(get_field('logo', "option"))){ ?>
                <div class="footer-item">
                    <a href="<?php echo get_home_url(); ?>"><img  loading="lazy" src="<?php echo get_field('logo', 'option')['url'];?>" alt="<?php echo get_field('logo', 'option')['alt'];?>"> </a>
                </div>
            <?php }?>
        </div>
       
    </div>
</footer>


<?php wp_footer(); ?>


</body>
</html>
