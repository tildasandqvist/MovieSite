<?php
add_theme_support('post-thumbnails');                //Den gör så man kan lägga till bilder i Wordpress

add_theme_support('menus');                          // Lägger till en meny i Wordpress


if( function_exists('acf_add_options_page') ) {  //Option page, gör så jag kan ändra Header och footer.
	
	acf_add_options_page('Header & Footer');
}
?>