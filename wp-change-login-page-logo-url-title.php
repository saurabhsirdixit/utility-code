<?php
/*
 * add this to your themes/child theme functions.php file.
 * change login image.
 * Ex: https://www.evernote.com/shard/s463/sh/cd722dfa-256a-4cd4-838c-fbd2dfb26b27/a4612a2eda4d4e1258b1a939e10a065c
*/
function fn_change_login_image() {
	echo "
	<style>
	body.login #login h1 a {
		background: url('".get_stylesheet_directory_uri()."/images/saurabh-logo.png') no-repeat scroll center top / 75px auto;
	}
	</style>
	";
}
add_action("login_enqueue_scripts", "fn_change_login_image");

/*
 * To change the link values so the logo links to your WordPress site.
*/
function fn_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'fn_login_logo_url' );


/*
 * To change the title of the login page logo url.
*/
function fn_login_logo_url_title() {
    return 'Saurabh Dixit: Personal portfolio website.';
}
add_filter( 'login_headertitle', 'fn_login_logo_url_title' );

?>