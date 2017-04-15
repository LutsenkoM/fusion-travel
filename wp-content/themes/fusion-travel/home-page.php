<?php
/* Template name: Home page*/
get_header('custom'); ?>
    <section class="welcome">
        <div class="wrapper">
            <h2 class="title"><?php echo get_theme_mod('welcome-title');?></h2>
            <p class="description"><?php echo get_theme_mod('welcome-description');?></p>
            <ul class="welcome-posts">
                <?php
                $args = array(
                    'post_type' => 'welcome',
                    'posts_per_page' => 100
                );
                $the_query = new WP_Query($args);
                if ($the_query->have_posts()) :?>
                    <?php while ($the_query->have_posts()) : ?>
                        <?php $the_query->the_post(); ?>
                        <li class="welcome-item">
                            <div class="icon"><?php the_post_thumbnail('full') ?></div>
                            <h3 class="item-title"><?php the_title(); ?></h3>
                            <div class="item-text"><?php the_content(); ?></div>
                        </li>
                    <?php endwhile; ?>
                <?php else : //no posts ?>
                <?php endif; wp_reset_postdata(); ?>
            </ul>
        </div>
    </section>
<?php
get_footer();
