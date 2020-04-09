<?php get_header(); ?>
    <main class="main_subpage">
        <h2 class="heading_subpage">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/heading_works.svg" alt="">
        </h2>
        <?php if( have_posts() ): ?>
        <ul class="works_list">
            <?php while( have_posts() ):the_post(); ?>
            <li class="works_list_individual">
                <?php
                    $array_address = get_field('work_view_address');
                    if( !empty($array_address) ): ?>
                        <div class="works_list_link_view">
                            <a href="<?php echo get_field('work_view_address'); ?>" target="_blank" class="works_list_link_anchor">
                                <span class="works_list_link_text">view</span>
                            </a>
                        </div>
                        <div class="works_list_link_detail">
                            <a href="<?php the_permalink(); ?>" class="works_list_link_anchor">
                                <span class="works_list_link_text">detail</span>
                            </a>
                        </div>
                <?php else: ?>
                        <div class="works_list_link_detail_only">
                            <a href="<?php the_permalink(); ?>" class="works_list_link_anchor">
                                <span class="works_list_link_text">detail</span>
                            </a>
                        </div>
                <?php endif;?>
                <div class="works_list_link_detail_sp">
                    <a href="<?php the_permalink(); ?>"></a>
                </div>
                <div class="works_info_wrapper">
                        <div class="works_list_title">
                            <?php
                                $array_work_title_white = get_field('work_title_white');
                                echo "<img src='".esc_url( $array_work_title_white["url"] )."' alt=''>";
                            ?>
                        </div>
                        <div class="works_list_type">
                            <?php echo get_field('work_type'); ?>
                        </div>
                </div>
                <?php
                    $array_thumbnail_works = get_field('thumbnail_works');
                    echo "<div class='works_list_thumbnail' style='background:url(".'"'.esc_url( $array_thumbnail_works["url"]).'"'.");background-size: cover;' ></div>" ;
                ?>
            </li>
            <?php endwhile; ?>
        </ul>
        <?php endif; ?>
    </main>
<?php get_footer(); ?>