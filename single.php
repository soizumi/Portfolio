<?php get_header(); ?>
    <?php while ( have_posts() ) : the_post(); ?>
    <main class="main_subpage post-<?php the_ID(); ?>">
        <h2 class="heading_subpage">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/heading_works.svg" alt="">
        </h2>
        <div class="works_single_info_wrapper">
            <h3 class="works_single_title">
                <?php
                    $array_work_title = get_field('work_title');
                    echo "<img src='".esc_url( $array_work_title["url"] )."' alt=''>";
                ?>
            </h3>
            <?php
            $value_work_view_address = get_field('work_view_address');
            $value_work_type = get_field('work_type');
            $value_work_view_address_designcomp_sp = get_field('work_view_address_designcomp_sp');
            $value_work_view_address_github = get_field('work_view_address_github');
            if ( !empty($value_work_view_address) ): ?>
            <div class="works_single_view_link">
                <span>
                    <?php if ( $value_work_type == "Design comp"): ?>
                        <span>PC :</span>
                        <a class="movable_element" href="<?php echo $value_work_view_address; ?>" target="_blank">view</a>
                    <?php else: ?>
                        <a class="movable_element" href="<?php echo $value_work_view_address; ?>" target="_blank"><?php echo $value_work_view_address; ?></a>
                    <?php endif; ?>
                </span>
                <?php if ( !empty($value_work_view_address_designcomp_sp) ): ?>
                <span>
                    <span>SP :</span>
                    <a class="movable_element" href="<?php echo $value_work_view_address_designcomp_sp; ?>" target="_blank">view</a>
                </span>
                <?php endif; ?>
                <?php if ( !empty($value_work_view_address_github) ): ?>
                <div class="works_single_view_github">
                    <span>Github :</span>
                    <a class="movable_element" href="<?php echo $value_work_view_address_github; ?>" target="_blank"><?php echo $value_work_view_address_github; ?></a>
                </div>
                <?php endif; ?>
            </div>
            <?php endif; ?>
            <div class="works_single_skill"><?php echo get_field('work_skill'); ?></div>
            <p class="works_single_caption"><?php the_content(); ?></p>
            <div class="works_single_period"><?php echo get_field('work_period'); ?></div>
        </div>
           <?php
                function screenshot_div_start(){
                echo "<div class='works_single_screenshot'>";
                }
                function screenshot_div_end(){
                echo "</div>";
                }
                $array_work_screenshot1 = get_field('work_screenshot1');
                if( !empty($array_work_screenshot1) ){
                    screenshot_div_start();
                    echo "<img src='".esc_url( $array_work_screenshot1["url"] )."' alt=''>";
                    screenshot_div_end();
                }
                $array_work_screenshot2 = get_field('work_screenshot2');
                if( !empty($array_work_screenshot2) ){
                    screenshot_div_start();
                    echo "<img src='".esc_url( $array_work_screenshot2["url"] )."' alt=''>";
                    screenshot_div_end();
                }
                $array_work_screenshot3 = get_field('work_screenshot3');
                if( !empty($array_work_screenshot3) ){
                    screenshot_div_start();
                    echo "<img src='".esc_url( $array_work_screenshot3["url"] )."' alt=''>";
                    screenshot_div_end();
                }
                $array_work_screenshot4 = get_field('work_screenshot4');
                if( !empty($array_work_screenshot4) ){
                    screenshot_div_start();
                    echo "<img src='".esc_url( $array_work_screenshot4["url"] )."' alt=''>";
                    screenshot_div_end();
                }
            ?>
            <div class="works_single_pager_wrapper">
                <?php
                    if ( get_next_post() ){
                        $template_directory = esc_url( get_template_directory_uri() );
                       next_post_link('%link', "<img class='works_single_pager_prev movable_element' src='$template_directory/img/arrow_prev.svg'>");
                    }
                    if ( get_previous_post() ){
                        $template_directory = esc_url( get_template_directory_uri() );
                        previous_post_link('%link', "<img class='works_single_pager_next movable_element' src='$template_directory/img/arrow_next.svg'>");
                    }
                ?>
            </div>
    </main>
    <?php endwhile; ?>
<?php get_footer(); ?>