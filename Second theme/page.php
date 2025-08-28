<?php /* Template Name: Mallsida */ ?>
<?php get_header(); ?>
        <div class="main" role="main">
            <div id="content" role="main">
                <article role="article">
                    <header><h1><?php echo get_the_title(); ?></h1></header>
                    <section role="region" aria-label="Huvudinnehåll">
                        <?php
                        if (have_posts()) : while( have_posts() ) : the_post();
                            get_template_part( 'content', get_post_format() );
                        endwhile; endif;
                        the_content(); ?>
                    </section>
                </article>
            </div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>