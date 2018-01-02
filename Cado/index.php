<?php get_header(); ?>

<div id="content">

    <div id="homepage">

        <?php
        $counter = 0;
        $loop = new WP_Query(array(
            'post_type' => 'home',
            'posts_per_page' => -1,
            'orderby' => 'meta_value_num',
            'order' => 'ASC',
            'meta_key' => 'home_order',
            'meta_query' => array(
                array(
                    'key' => 'home_style',
                    'value' => 0,
                    'type' => 'NUMERIC'
                )
            ),
        ));
        while($loop->have_posts()) : $loop->the_post(); 
        if($counter % 2 == 0):
        ?>
        <div id="homepageleft">
        <?php else: ?>
        <div id="homepageright">
        <?php endif; ?>
            <div class="featured">
                <div class="tieude"><?php the_title(); ?></div>
                <?php
                $cat_ID = get_post_meta(get_the_ID(), "home_cat", true);
                $loop2 = new WP_Query(array(
                    'post_type' => 'post',
                    'posts_per_page' => -1,
                    'cat' => $cat_ID,
                ));
                while($loop2->have_posts()) : $loop2->the_post(); 
                ?>
                <a href="<?php the_permalink(); ?>" rel="bookmark">
                    <img style="float:left;margin:0px 10px 0px 0px;"  src="<?php bloginfo('stylesheet_directory'); ?>/images/thumbnail.png" alt="<?php the_title(); ?>" />
                </a>
                <b><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></b>
                <p><?php the_excerpt(); ?></p>
                <div style="border-bottom:1px dotted #94B1DF; margin-bottom:10px; padding:0px 0px 10px 0px; clear:both;"></div>
                <?php endwhile; ?>
                <div style="float:right"><b><a href="<?php echo get_category_link($cat_ID); ?>" rel="bookmark">Các tin khác...</a></b></div>
            </div>
        </div>
        <?php $counter++;
        endwhile; ?>
        <?php 
        // Restore original Query & Post Data
        wp_reset_query();
        wp_reset_postdata();
        ?>

        <?php
        $loop3 = new WP_Query(array(
            'post_type' => 'home',
            'posts_per_page' => -1,
            'orderby' => 'meta_value_num',
            'order' => 'ASC',
            'meta_key' => 'home_order',
            'meta_query' => array(
                array(
                    'key' => 'home_style',
                    'value' => 1,
                    'type' => 'NUMERIC'
                )
            ),
        ));
        while($loop3->have_posts()) : $loop3->the_post(); 
        ?>
        <div id="homepagebottom">
            <div class="hpbottom">
                <div class="tieude"><?php the_title(); ?></div>
                <?php
                $cat_ID = get_post_meta(get_the_ID(), "home_cat", true);
                $loop4 = new WP_Query(array(
                    'post_type' => 'post',
                    'posts_per_page' => -1,
                    'cat' => $cat_ID,
                ));
                while($loop4->have_posts()) : $loop4->the_post(); 
                ?>
                <b><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></b>
                <p><?php the_excerpt(); ?></p>
                <div style="border-bottom:1px dotted #2255AA; margin-bottom:10px; padding:0px 0px 10px 0px; clear:both;"></div>
                <?php endwhile; ?>
                <div style="float:right">
                    <b><a href="<?php echo get_category_link($cat_ID); ?>" rel="bookmark">Ðọc các bài khác...</a></b>
                </div>
            </div>
        </div>
        <?php endwhile; ?>
        <?php 
        // Restore original Query & Post Data
        wp_reset_query();
        wp_reset_postdata();
        ?>

    </div>
        
    ﻿<!-- begin sidebar -->

    <?php get_sidebar(); ?>

    <!-- end sidebar -->		
</div>

<?php get_footer(); ?>