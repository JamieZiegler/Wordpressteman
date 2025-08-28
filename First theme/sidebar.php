        <aside>
                <?php if (is_page('Presentation')) : ?>
                        <section>
                                <h3>Spotify</h3>
                        <hr>
                                <iframe title="En inbäddad spellista med låtar som jag tycker om" src="https://open.spotify.com/embed/playlist/5OvplVUcNoIT0etbG7vnW8?utm_source=generator" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
                                <p>Lyssna gärna på denna spotify-spellista som jag skapat för webbsidan, den innehåller ett gäng av mina favoritlåtar!</p>
                        </section>
                        <section>
                                <!-- Rubrik -->
                                <h3>De senaste blogginläggen:</h3>
                                <hr>
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
                        <?php elseif (is_page('Kontakt')) :  ?>
                                <section> 
                                        <h3>Hitta hit:</h3>
                                        <hr>  
                                        <iframe title="En Google Maps-karta som man kan klicka på för att navigera till vår (i detta fall påhittade) adress." src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7030.834381716168!2d15.612791903457975!3d58.40554691330129!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46596f227cda2ac7%3A0x3333b9b629f2d496!2zTGlua8O2cGluZ3MgVHLDpGRnw6VyZHNmw7ZyZW5pbmc!5e0!3m2!1ssv!2sse!4v1694065133938!5m2!1ssv!2sse" width="350" height="250" allowfullscreen="allowfullscreen"></iframe>
                                        <h3>Direktkontakt:</h3>
                                        <hr>
                                        <form name="direktkontakt" method="post" action="http://localhost/wordpress/tack/">
                                                <label for="fname">Förnamn</label>
                                                <input type="text" id="fname" name="förnamn" placeholder="Ditt förnamn här">
                                                <label for="lname">Efternamn</label>
                                                <input type="text" id="lname" name="efternamn" placeholder="Ditt efternamn här">
                                                <label for="subject">Meddelande</label>
                                                <textarea id="subject" name="ämne" placeholder="Skriv ditt meddelande här.. :)"></textarea>
                                                <input type="submit" value="Skicka">
                                        </form>
                                </section>
                                <section>
                                        <h3>De senaste blogginläggen:</h3>
                                        <hr>
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
                        <?php elseif (is_page('Internets historia och samhällspåverkan')) : ?>
                                <section>
                                        <h3>Mosaic-webbläsaren</h3>
                                        <hr>
                                        <img src="http://localhost/wordpress/wp-content/uploads/2023/09/mosaic.png" width="300" alt="Mosaic-webbläsaren"/>
                                        <p>Webbläsaren som populariserade webben</p>
                                </section>
                                <section>
                                        <h3>Saker du kan göra för att surfa säkert:</h3>
                                        <hr>
                                        <ul>
                                                <li>Skapa starka lösenord, eller använd dig av en lösenordshanterare som genererar och kommer ihåg säkra lösenord åt dig</li>
                                                <li>Håll din dator uppdaterad med de senaste säkerhetsuppdateringarna</li>
                                                <li>Klicka aldrig på sådant som verkar för bra för att vara sant</li>
                                                <li>Installera ett bra antivirusprogram</li>
                                                <li>Lämna aldrig ut kortuppgifter på okrypterade hemsidor</li>
                                                <li>Var försiktig när du ansluter till öppna nätverk, det finns bedragare som döper sina nätverk till t.ex. "SJ" för att sedan registrera allt du gör</li>
                                        </ul>
                                </section>
                                <section>
                                        <h3>Sigma 7</h3>
                                        <hr>
                                        <img src="http://localhost/wordpress/wp-content/uploads/2023/09/sigma7.png" width="300" alt="Den dator som användes för det första meddelandet"/>
                                        <p>Den dator som användes på UCLA för att skicka det första meddelandet mellan två datorer var en Sigma 7, och tog ensam upp ett helt rum</p>
                                </section>
                                <section>
                                        <h3>Genväg till:</h3>
                                        <hr>
                                        <ul>
                                                <li><a href="<?php echo get_permalink(get_page_by_title('kallor')); ?>">Källor</a></li>
                                                <li><a href="<?php echo get_permalink(get_page_by_title('internets_historia_och_samhallspaverkan')); ?>">Internets historia och samhällspåverkan</a></li>
                                                <li><a href="<?php echo get_permalink(get_page_by_title('webbtekniker')); ?>">Webbtekniker</a></li>
                                                <li><a href="<?php echo get_permalink(get_page_by_title('etik_och_integritet_pa_internet')); ?>">Etik och integritet på internet</a></li>
                                        </ul>
                                </section>
                        <?php elseif (is_page('Etik och integritet på internet')) : ?>
                                <section>
                                        <h3>Information om Surfa Lugnt:</h3>
                                        <hr>
                                        <p>Surfa Lugnt drivs idag av Jesper Hultqvist - tidigare webbansvarig för föreningen. 
                                        Föreningen Surfa Lugnt lades ned år 2020, men då hemsidan hade fortsatt hög trafik bestämde sig Jesper år 2022 att återuppliva hemisdan, och fortsätta arbetet med att sprida information till vuxna och barn.</p>
                                </section>
                                <section>
                                        <h3>Visste du att..?</h3>
                                        <hr>
                                        <ul>
                                                <li>77% av förskolebarn använder internet?</li>
                                                <li>54% av barn i lågstadiet har en egen mobiltelefon?</li>
                                                <li>Endast 42% av högstadiebarn har undervisats om säkra lösenord?</li>
                                        </ul>
                                </section>
                                <section>
                                        <h3>Genväg till:</h3>
                                        <hr>
                                        <ul>
                                                <li><a href="<?php echo get_permalink(get_page_by_title('kallor')); ?>">Källor</a></li>
                                                <li><a href="<?php echo get_permalink(get_page_by_title('internets_historia_och_samhallspaverkan')); ?>">Internets historia och samhällspåverkan</a></li>
                                                <li><a href="<?php echo get_permalink(get_page_by_title('webbtekniker')); ?>">Webbtekniker</a></li>
                                                <li><a href="<?php echo get_permalink(get_page_by_title('etik_och_integritet_pa_internet')); ?>">Etik och integritet på internet</a></li>
                                        </ul>
                                </section>
                        <?php elseif (is_page('Webbtekniker')) : ?>
                                <section>
                                        <h3>Wordpress</h3>
                                        <hr>
                                        <a href="https://wordpress.com/go/website-building/wordpress-com-vs-wordpress-org/"><img src="http://localhost/wordpress/wp-content/uploads/2023/09/wordpress.png" width="300" alt="En klickbar bild med wordpress.com och .org"></a>
                                        <p>Läs mer om Wordpress.com vs. Wordpress.org genom att klicka på bilden!</p>
                                </section>
                                <section>
                                        <h3>Genväg till:</h3>
                                        <hr>
                                        <ul>
                                                <li><a href="<?php echo get_permalink(get_page_by_title('kallor')); ?>">Källor</a></li>
                                                <li><a href="<?php echo get_permalink(get_page_by_title('internets_historia_och_samhallspaverkan')); ?>">Internets historia och samhällspåverkan</a></li>
                                                <li><a href="<?php echo get_permalink(get_page_by_title('webbtekniker')); ?>">Webbtekniker</a></li>
                                                <li><a href="<?php echo get_permalink(get_page_by_title('etik_och_integritet_pa_internet')); ?>">Etik och integritet på internet</a></li>
                                        </ul>
                                </section>
                        <?php else :  ?>
                                <section>
                                        <h3>Välkommen till Ziegler Webb!</h3>
                                        <hr>
                                        <p>Ziegler Webb är ett projekt i kursen Webbutveckling 1, september 2023 på Hermods onlinekomvux. Webbsidan representerar vad jag, James, har lärt mig under de fem veckor jag läst kursen. Kul att du ville kika in! </p>
                                </section>
                                <section>
                                        <h3>De senaste blogginläggen:</h3>
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