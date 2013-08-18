<?php
/*
 * docMe Beta v0.1
 * Renaud Tertrais
 * www.emaj.fr
 *
 */

// CONSTANTS
define( 'DOC_SIDEBAR' 	, true );
define( 'DOC_HOME' 		, 'home.php' );
define( 'DOC_TITLE' 	, 'docMe Beta v0.1' );

// CONFIG
/* organize you doc here
 * allowed filds :
 * @key (string) 'title'  	: title of section (not necessary)
 * @key (array) 'doc'	  	: array of string (path of files)
 * @key (array) 'children' 	: need more deep ? (title required)
 */
$doc = array(
	array(
		'title' => 'docMe',
		'doc' 	=> array(
			'doc.functions.php'
		)
	),array(
		'title' => 'Example',
		'doc' 	=> array(
			'example.php'
		)
	)
);



?>