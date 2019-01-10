
<?php
/*-----------------------------------------------------------------------------------*/
/* hook
/*-----------------------------------------------------------------------------------*/

// Feed

function featured_feed()
{
    include get_parent_theme_file_path('/inc/featured_feed.php');
}
add_action('featured_feed', 'featured_feed');


