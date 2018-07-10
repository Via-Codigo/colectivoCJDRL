<?php 
// featured image activation and then sizing

add_action( 'init', 'oniros_image_support' );
function oniros_image_support(){

	

	// Just add an image name, the width, the height, and a boolean that defines if WP should crop the images or not
	// add as many as the project might require
	// smaller images do not get resized, but largeones will get cropped.

	//                name             width height crop?
	add_image_size( 'logos-caja-cuadrada_1x', 318, 128, false);
	add_image_size( 'logos-caja-cuadrada_2x', 636, 256, false);
	add_image_size( 'logos-caja-cuadrada_3x', 954, 384, false);

	add_image_size( 'logos-pequeno-caja-echada_1x', 154, 90, false);
	add_image_size( 'logos-pequeno-caja-echada_2x', 308, 180, false);
	add_image_size( 'logos-pequeno-caja-echada_3x', 462, 270, false);

	add_image_size( 'logos-grande-caja-echada_1x', 250, 187, false);
	add_image_size( 'logos-grande-caja-echada_2x', 500, 374, false);
	add_image_size( 'logos-grande-caja-echada_3x', 750, 561, false);

	add_image_size( 'foto-principal-iniciativa_1x', 360, 270, true);
	add_image_size( 'foto-principal-iniciativa_2x', 720, 540, true);
	add_image_size( 'foto-principal-iniciativa_3x', 1080, 810, true);
}

// Add new image sizes to WP media selector
add_filter('image_size_names_choose', 'new_image_sizes');
 
function new_image_sizes($sizes) {
	$addsizes = array(
		"logos-caja-cuadrada_1x" => 'Logo caja cuadrada página principal y archivo instituciones',
		"logos-pequeno-caja-echada_1x" => 'Logo caja echada página iniciativas',
		"logos-grande-caja-echada_1x" => 'Logo caja echada página singular iniciativa',
		"foto-principal-iniciativa_1x" => 'Foto de la iniciativa',
	);
	$newsizes = array_merge($sizes, $addsizes);
	return $newsizes;
}

// Unregister native WP image sizes, comment those you want to keep
add_filter('intermediate_image_sizes_advanced', 'unset_image_sizes');

function unset_image_sizes( $def_sizes) {
	unset( $def_sizes['thumbnail']); // turn off thumbnail size
	unset( $def_sizes['medium']); // turn off medium size
	unset( $def_sizes['large']); // turn off large size
	unset( $def_sizes['medium_large']);
	return $def_sizes;
}
 


/*
 * this hook will be fired while you uploading a picture
 */
add_filter( 'intermediate_image_sizes', 'limit_image_sizes' );
 



