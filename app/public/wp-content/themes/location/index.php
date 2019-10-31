<html>
    <head>
        <?php wp_head(); ?>
    </head>
</html>

<?php

if(have_posts()) {
    while(have_posts()){
        the_post(); ?>
        <section>
            <h2><?php the_title(); ?></h2>
            <p><?php the_content(); ?></p>
            <i><?php the_date(); ?></i>
        </section>
<?php
    }    
}
else {
    echo '404 Page Not Found!';
}
?>

<footer>
    <?php wp_footer(); ?>
</footer>
