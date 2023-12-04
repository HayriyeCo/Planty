<?php

add_action('wp_enqueue_scripts','theme_enqueue_styles');
function theme_enqueue_styles()

{
     wp_enqueue_style('parent-style', get_template_directory_uri(). '/style.css');
     wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/style.css', array(), filemtime(get_stylesheet_directory() . '/style.css'));
    
}

function planty_admin_lien_nav($items,$args)
{
    
    if (is_user_logged_in() && $args->menu=='nav' )
    {
        $items .='<li class="menu-item menu-item-type-post_type menu-item-object-page parent hfe-creative-menu"><a class="hfe-menu-item" href= "'. get_admin_url() .'">Admin</a></li>';
    }
    return $items;
}
add_filter('wp_nav_menu_items', 'planty_admin_lien_nav',10,2);

?>
