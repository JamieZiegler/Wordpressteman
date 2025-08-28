<?php get_header(); ?>
        <div class="main">
            <div id="content">
                <article>
                    <header><h1>Blogg</h1></header>
                    <?php
                    if ( have_posts() ) : while ( have_posts() ) : the_post();?>
                    <section>
                        <h2><?php the_title(); ?></h2>
                        <?php the_content(); ?>
                        <div id="print">
                        <a href="javascript:void(0);" onclick="window.print();" class="print-link"><img src="http://localhost/wordpress/wp-content/uploads/2023/09/print.png" width="20" alt="Utskriftsikon"> Skriv ut</a>
                        </div>
                    </section>
                    <?php 
                    endwhile; endif;?>
                </article>
            </div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>