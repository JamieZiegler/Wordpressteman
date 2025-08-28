        <aside>
                <?php if (is_page('Presentation')) : ?>
                        <section role="region" aria-label="Länkar till andra delar av webbplatsen">
                                <h4>Läs mitt CV här:</h4>
                                <a href="http://localhost/wordpress/presentation/cv/">CV James Ziegler</a>
                        </section>
                        <section role="region" aria-label="Mina favoritinlägg">
                                <h4>Några av mina favoritinlägg:</h4>
                        <ul>
                                <li><a href="http://localhost/wordpress/2023/12/27/att-gora-en-ufo-film/">Att göra en UFO-rulle</a></li>
                                <li><a href="http://localhost/wordpress/2023/12/27/att-fota-med-mobilkamera/">Att fota med mobilkamera</a></li>
                                <li><a href="http://localhost/wordpress/2023/12/27/att-skapa-min-forsta-webbplats/">Att skapa min första webbplats</a></li>
                        </ul>
                        </section>
                        <?php elseif (is_page('Kontakt')) :  ?>

                                <section role="region" aria-label="Karta och kontaktformulär"> 
                                        <h4>Hitta hit:</h4>
                                        <hr>  
                                        <iframe title="En Google Maps-karta som man kan klicka på för att navigera till vår (i detta fall påhittade) adress." src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7030.834381716168!2d15.612791903457975!3d58.40554691330129!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46596f227cda2ac7%3A0x3333b9b629f2d496!2zTGlua8O2cGluZ3MgVHLDpGRnw6VyZHNmw7ZyZW5pbmc!5e0!3m2!1ssv!2sse!4v1694065133938!5m2!1ssv!2sse" width="350" height="250" allowfullscreen="allowfullscreen"></iframe>
                                        <h4>Direktkontakt:</h4>
                                        <hr>
                                        <form name="direktkontakt" method="post" action="http://localhost/wordpress/tack/">
                                                <label for="fname">Förnamn</label>
                                                <input type="text" id="fname" name="förnamn" pattern="[A-Za-z\-]+" title="Endast stora och små bokstäver, samt bindestreck, tillåtna" placeholder="Ditt förnamn här" required>
                                                <label for="lname">Efternamn</label>
                                                <input type="text" id="lname" name="efternamn" pattern="[A-Za-z\-]+" title="Endast stora och små bokstäver, samt bindestreck, tillåtna" placeholder="Ditt efternamn här" required>
                                                <label for="email">Email-adress</label>
                                                <input type="text" id="email" name="email" pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$" title="Ange en giltig e-postadress" placeholder="Namn@namn.se" required>
                                                <label for="subject">Meddelande</label>
                                                <textarea id="subject" name="ämne" placeholder="Skriv ditt meddelande här.. :)" required></textarea>
                                                <input type="submit" value="Skicka">
                                        </form>
                                </section>
                        <?php elseif (is_page('CV')) : ?>
                                <section role="region" aria-label="länkar till tidigare arbetsplatser">
                                        <h4>Relevanta länkar:</h4>
                                        <ul>
                                                <li><a href="https://www.unf.se/">UNFs webbplats</a></li>
                                                <li><a href="https://deedorebro.se/">Café Deeds webbplats</a></li>
                                                <li><a href="https://orebrostadsmission.se/">Örebro Stadsmissions webbplats</a></li>
                                        </ul>
                                </section>
                        <?php elseif (is_page('Digitalt skapande 1')|| is_page('Digitalt skapande 2')) : ?>
                                <section role="region" aria-label="Länkar till alla gallerier">
                                        <h4>Alla gallerier:</h4>
                                        <ul>
                                                <li><a href="http://localhost/wordpress/galleri/digitalt-skapande-1/">Digitalt skapande 1</a></li>
                                                <li><a href="http://localhost/wordpress/galleri/digitalt-skapande-2/">Digitalt skapande 2</a></li>
                                        </ul>
                                </section>
                        <?php elseif (is_page('Webbutveckling 1')) : ?>
                                <section role="region" aria-label="Länkar till alla tidigare projekt">
                                <h4>Alla projekt:</h4>
                                        <ul>
                                                <li><a href="http://localhost/wordpress/tidigare-projekt/webbutveckling-1/">Webbutveckling 1</a></li>
                                        </ul>
                                </section>
                        <?php elseif (is_home()) : ?>
                                <section role="region" aria-label="Länkar till alla inläggskategorier">
                                        <h4>Kategorier:</h4>
                                        <ul>
                                        <?php
                                        $categories = get_categories();
                                        foreach ($categories as $category) {
                                                ?>
                                                <li><a href="<?php echo get_category_link($category->term_id); ?>"><?php echo $category->name; ?></a></li>
                                                <?php
                                        }
                                        ?>
                                        </ul>
                                </section>
                                <section role="region" aria-label="Länkar till de senaste artiklarna">
                                        <h4>De senaste artiklarna:</h4>
                                        <ul>
                                                <?php
                                                $args = array(
                                                        'post_type' => 'post',
                                                        'posts_per_page' => 5, 
                                                );
                                                $query = new WP_Query($args);
                                                while ($query->have_posts()) {
                                                        $query->the_post();
                                                        ?>
                                                        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                                                        <?php
                                                }
                                                wp_reset_postdata();
                                                ?>
                                        </ul>
                                </section>
                        <?php else :  ?>
                                <section role="region" aria-label="Senaste artiklar">
                                        <h4>De senaste artiklarna:</h4>
                                        <ul>
                                                <?php
                                                $args = array(
                                                        'post_type' => 'post',
                                                        'posts_per_page' => 5, 
                                                );
                                                $query = new WP_Query($args);
                                                while ($query->have_posts()) {
                                                        $query->the_post();
                                                        ?>
                                                        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                                                        <?php
                                                }
                                                wp_reset_postdata();
                                                ?>
                                        </ul>
                                </section>
                <?php endif; ?>
        </aside>