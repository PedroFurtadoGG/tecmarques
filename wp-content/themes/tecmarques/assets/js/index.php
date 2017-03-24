<?php

require 'plugins/jsmin.php';

$files_js = array(
	'lib/html5shiv.js',
	'lib/modernizr.custom.js',
	//'lib/jquery-2.1.4.min.js',
	'plugins/mobileMenu.js',
	//'plugins/scrollReveal.js',
	//'plugins/parallax.min.js',
	'plugins/jquery.validate.js',
	'plugins/simpletabs_1.3.js',
	//'plugins/additional-methods.min.js',
	//'plugins/jquery.fileupload.js',
	'plugins/jquery.magnific-popup.min.js',
	//'plugins/image-comparison-slider.js',
	'plugins/slick.min.js',
	'scripts.js'
);

global $js;

foreach ($files_js as $file)
{
	$js .= file_get_contents($file);
}

$js=JSMin::minify($js);

file_put_contents('scripts.min.js', $js);

?>
