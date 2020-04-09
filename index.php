<?php get_header(); ?>
    <main class="main_toppage">
        <div class="main_visual">
            <h1 class="main_visual_title"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/main_visual_title.svg" alt=""></h1>
            <h2 class="main_visual_title2">Portfolio</h2>
        </div>
        <?php if( have_posts() ): ?>
        <div class="top_slider_wrapper">
            <ul class="top_slider slider">
                <?php while( have_posts() ):the_post(); ?>
                <li>
                    <div class="slider_blankspace"></div>
                    <h3 class="top_slider_work_title">
                        <?php
                            $array_work_title = get_field('work_title');
                            echo "<img src='".esc_url( $array_work_title["url"] )."' alt=''>";
                        ?>
                    </h3>
                    <div class="top_slider_visual_wrapper">
                        <?php
                        $array_address = get_field('work_view_address');
                        if( !empty($array_address) ): ?>
                            <div class="top_slider_view"><a href="<?php echo get_field('work_view_address'); ?>" target="_blank"><span class="slider_link">view</span></a></div>
                            <div class="top_slider_detail"><a href="<?php the_permalink(); ?>"><span class="slider_link">detail</span></a></div>
                            <div class="top_slider_detail_sp"><a href="<?php the_permalink(); ?>"></a></div>
                        <?php else: ?>
                            <div class="top_slider_detail_only"><a href="<?php the_permalink(); ?>"><span class="slider_link">detail</span></a></div>
                        <?php endif; ?>
                        <?php
                            $array_thumbnail_top = get_field('thumbnail_top');
                            echo "<div class='top_slider_visual' style='background:url(".'"'.esc_url( $array_thumbnail_top["url"] ).'"'.");background-size: cover;' ></div>" ;
                            echo "<div class='top_slider_type'>".get_field('work_type')."</div>";
                        ?>
                    </div>
                </li>
                <?php endwhile; ?>
            </ul>
            <div class="top_slider_pager">
            </div>
            <div class="button_slide button_top movable_element">
                <a href="<?php $cat_works = get_category_by_slug('works'); echo get_category_link( $cat_works->cat_ID); ?>" class="button_content_wrapper">
                    <div>view list<span class="button_arrow"></span></div>
                </a>
            </div>
        </div>
        <?php endif; ?>
    </main>
<?php get_footer(); ?>