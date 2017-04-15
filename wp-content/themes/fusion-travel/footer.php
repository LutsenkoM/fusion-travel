</div><!-- .site-content -->
    <footer>
        <div class="wrapper">
            <ul class="footer-list">
                <li class="footer-block">
                    <h3><?php echo get_theme_mod('foot-menu-title'); ?></h3>
                    <?php wp_nav_menu( array('theme_location' => 'footer', 'menu_id' => 'footer-menu', 'menu_class' => 'footer-nav', 'container' => 'ul') ); ?>
                </li>
                <li class="footer-block">
                    <h3><?php echo get_theme_mod('foot-address-title'); ?></h3>
                    <pre class="address"><?php echo get_theme_mod('address'); ?></pre>
                </li>
                <li class="footer-block">
                    <h3><?php echo get_theme_mod('foot-contact-title'); ?></h3>
                    <p class="email"><?php echo get_theme_mod('email'); ?></p>
                    <p class="phone"><?php echo get_theme_mod('phone'); ?></p>
                </li>
                <li class="footer-block">
                    <h3><?php echo get_theme_mod('foot-follow-title'); ?></h3>
                    <?php
                    $social_links_twitter = get_theme_mod('social_links_twitter');
                    $social_links_facebook = get_theme_mod('social_links_facebook');
                    $social_links_instagram = get_theme_mod('social_links_instagram');
                    if( $social_links_facebook || $social_links_twitter || $social_links_instagram  ){ ?>
                        <ul class="social-icons">
                            <?php if($social_links_twitter){ ?>
                                <li><a target="_blank" href="<?php echo esc_url($social_links_twitter) ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <?php } ?>
                            <?php if($social_links_facebook){ ?>
                                <li><a target="_blank" href="<?php echo esc_url($social_links_facebook) ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <?php } ?>
                            <?php if($social_links_instagram){ ?>
                                <li><a target="_blank" href="<?php echo esc_url($social_links_instagram) ?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <?php } ?>
                        </ul>
                    <?php } ?>
                </li>
            </ul>
            <div class="copyright">
                <p><?php echo get_theme_mod('copyright'); ?></p>
            </div>
        </div>
    </footer>
<?php wp_footer(); ?>
</body>
</html>