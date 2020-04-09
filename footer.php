    <footer>
        <ul class="footer_menu">
            <li class="movable_element"><a href="<?php echo esc_url( get_permalink( get_page_by_path( 'about' )->ID ) ) ; ?>">About</a></li>
            <li class="movable_element"><a href="<?php $cat_works = get_category_by_slug('works'); echo get_category_link( $cat_works->cat_ID); ?>">Works</a></li>
            <li class="movable_element"><a href="<?php echo esc_url( get_permalink( get_page_by_path( 'contact' )->ID ) ) ; ?>">Contact</a></li>
        </ul>
        <div class="copyright">©  Tomo Soizumi All rights reserved.</div>
    </footer>
    <div class="arrow_scroll_top">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 57.98 30.41"><defs></defs><g><polyline points="0.71 29.7 28.99 1.41 57.28 29.7"/></g></svg>
    </div>
    <?php wp_footer(); ?>
</body>
</html>