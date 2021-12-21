<?php 

/*


	<script src="scripts/navbar.js">

	</script>

<script src="scripts/whatsappicon.js">
</script>






*/
function golden_site_files() {

wp_enqueue_script('navbarscript',get_theme_file_uri('scripts/navbar.js'),array('jquery'),'1.0',true);

wp_enqueue_script('whatsappiconscript',get_theme_file_uri('scripts/whatsappicon.js'),null,'1.0',true);

wp_enqueue_style('teststyle',get_theme_file_uri('/styles/teststyle.css'));

wp_enqueue_style('sectionsstyle',get_theme_file_uri('styles/sections.css'));

wp_enqueue_style('footerstyle',get_theme_file_uri('styles/footer.css'));

wp_enqueue_style('badgestyle',get_theme_file_uri('styles/badge.css'));

wp_enqueue_style('whatsappstyle',get_theme_file_uri('styles/whatsapp.css'));

wp_enqueue_style('buttonstyle',get_theme_file_uri('styles/button.css'));



wp_enqueue_style('font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css');

wp_enqueue_style('bootstrap','//cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css');




wp_enqueue_style('googlefonts3','//fonts.googleapis.com/css2?family=Balsamiq+Sans&family=Lobster&family=Meddon&family=Philosopher&family=Roboto:wght@100&family=Salsa&family=Spectral+SC:wght@200&display=swap');

wp_enqueue_style('bootstrap.1','//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css');


if (is_home()) 
	wp_enqueue_style('articlesliststyle',get_theme_file_uri('/styles/articles_grid.css'));
 
if (is_single() ) {

	if (get_post_type() == 'post')
	wp_enqueue_style('singlearticlestyle',get_theme_file_uri('/styles/article.css'));
	if (get_post_type() == 'service')
		{

			wp_enqueue_style('gallerystyle', get_theme_file_uri('/styles/gallery.css'));

			wp_enqueue_script('galleryscript',get_theme_file_uri('scripts/gallery.js'),array('jquery'),'1.0',true);
		}
}



}

add_action('wp_enqueue_scripts','golden_site_files');



function mytheme_post_thumbnails() {
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'mytheme_post_thumbnails' );


add_action( 'wp_ajax_siteWideMessage', 'wpse_sendmail' );
add_action( 'wp_ajax_nopriv_siteWideMessage', 'wpse_sendmail' );



?>
