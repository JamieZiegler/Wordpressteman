<?php /* Template Name: Mallsida */ ?>
<?php get_header(); ?>
        <div class="main">   
            <div id="content">
                <article>
                    <header><h1><?php echo get_the_title(); ?></h1></header>
                    <section>
                        <?php
                        if (have_posts()) : while( have_posts() ) : the_post();
                            get_template_part( 'content', get_post_format() );
                        endwhile; endif;
                        the_content(); ?>
                            <div id="print">
                                <a href="javascript:void(0);" onclick="window.print();" class="print-link"><img src="http://localhost/wordpress/wp-content/uploads/2023/09/print.png" width="20" alt="Utskriftsikon"> Skriv ut</a>
                            </div>
                    </section>
                </article>
            </div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>