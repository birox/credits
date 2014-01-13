<?php
#
# Documentator Credits plugin
# Use of hooks: footer_right
#

//Start js register
function credits_js($scripts) {
	
	$plugin_url = plugin_url(__FILE__);
	
	$scripts[] = array(
		$plugin_url . DIRECTORY_SEPARATOR . 'assets' . DIRECTORY_SEPARATOR . 'scripts.js'
	);
	return $scripts;
	
}
hook('js', null, 'credits_js');
//End js register

//Start css register
function credits_css($styles) {
	
	$plugin_url = plugin_url(__FILE__);
	
	$styles[] = array(
		$plugin_url . DIRECTORY_SEPARATOR . 'assets' . DIRECTORY_SEPARATOR . 'style.css'
	);
	return $styles;
	
}
hook('css', null, 'credits_css');
//End css register

//Start language folder
function credits_translate($translate) {
	
	$plugin_path = plugin_path(__FILE__);
	
	$translate[] = $plugin_path. DIRECTORY_SEPARATOR . 'translate';
	return $translate;
	
}
hook('translate', null, 'credits_translate');
//End language folder

//clear footer_right hook
hook('footer_right', null, false);
//Start new content to footer_right hook
function credits_output() {
	
	printf(
		'<a href="%s">%s</a> | <a href="%s">%s</a>',
		get_path(). DIRECTORY_SEPARATOR . 'terms',
		_t('Terms and Conditions'),
		get_path(). DIRECTORY_SEPARATOR . 'privacy',
		_t('Privacy Policy')
	);
	
}
hook('footer_right', null, 'credits_output');
//End new content to footer_right hook

//Start Register pages links
function credits_pages($pages) {
	
	$pages[] = array(
		'terms',
		'privacy'
	);
	return $pages;
	
}
hook('pages_url', null, 'credits_pages');
//End Register pages links

//Start Output terms page
function credits_terms_page() {
	
	include(plugin_path(__FILE__). DIRECTORY_SEPARATOR .'views'. DIRECTORY_SEPARATOR .'terms.php');
	
}
hook('page_terms', null, 'credits_terms_page');
//End Output terms page

//Start Output privacy page
function credits_privacy_page() {
	
	include(plugin_path(__FILE__). DIRECTORY_SEPARATOR .'views'. DIRECTORY_SEPARATOR .'privacy.php');
	
}
hook('page_privacy', null, 'credits_privacy_page');
//End Output privacy page



































