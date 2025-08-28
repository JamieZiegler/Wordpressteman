<?php get_header(); ?>
        <div class="main" role="main">
            <div id="content" role="main">
                <article role="article">
                    <header><h1>Artiklar</h1></header>
                    <?php
                    if ( have_posts() ) : while ( have_posts() ) : the_post();?>
                    <section role="region" aria-label="Huvudinnehåll">
                        <h2><?php the_title(); ?></h2>
                        <?php the_content(); ?>
                    </section>
                    <?php 
                    endwhile; endif;?>
                </article>
            </div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>