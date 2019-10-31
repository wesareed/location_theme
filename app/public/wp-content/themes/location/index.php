<html>
    <head>
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>

        <div class="site container">
            <div id="content" class="site-content">
                <main class="site-main">
                    <?php
                        if(have_posts()) {
                            while(have_posts()){
                                the_post(); ?>
                                <section <?php post_class(); ?>>
                                    <header>
                                        <h2><?php the_title(); ?></h2>
                                        <p class="byline">
                                            by <?php the_author(); ?> on <?php the_date(); ?>
                                        </p>
                                    </header>
                                    <p><?php the_content(); ?></p>
                                    <footer>
                                        <a href="<?php the_permalink(); ?>">&infin;</a>
                                    </footer>
                                </section>
                        <?php
                            }    
                        }
                        else { ?> 
                            <section>
                                <header>
                                <?php echo '404 Page Not Found!'; ?>
                                </header>
                            </section>
                        <?php    
                        }
                    ?>   
                </main>
            </div>
        </div>
        <footer>
          <p>Made pretty by the Location Theme</p>  
        </footer>
        <?php wp_footer(); ?>   
    </body>
</html>