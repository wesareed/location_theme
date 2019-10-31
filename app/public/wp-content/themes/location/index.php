<html>
    <head>
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>

        <div class="site container">
            <div id="content" class="site-content">
                <header class="site-header">
                    <h1 class="site-title">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo ('name' ); ?></a>
                    </h1>
                </header>
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
        <aside>
            <?php dynamic_sidebar( 'sidebar' ); ?>
        </aside>
        <footer class="site-footer">
          <p>Made pretty by the Location Theme</p>  
        </footer>
        <?php wp_footer(); ?>   
    </body>
</html>