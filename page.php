<?php get_header(); ?>
    <?php while ( have_posts() ) : the_post(); ?>
            <main class="main_subpage post-<?php the_ID(); ?>">
               <?php the_content() ?>
            </main>
    <?php endwhile ?>
<?php get_footer(); ?>