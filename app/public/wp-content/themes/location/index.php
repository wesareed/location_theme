<?php 
    echo "<h1>Send me your location.</h1>";

if(have_posts()) {
    while(have_posts()){
        the_post();
        the_title();
        the_content();
        the_date(); 
    }    
}
else {
    echo '404 Page Not Found!';
}
