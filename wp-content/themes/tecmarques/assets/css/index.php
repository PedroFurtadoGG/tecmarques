<?php

require 'plugins/cssmin-v3.0.1-minified.php';

$files_css = array(
	"partials/reset.css",
	"partials/base.css",
	"partials/typography.css",
	"partials/form.css",
	"partials/grid.css",
	"partials/clearfix.css",
	"partials/inputs.css",
	"partials/buttons.css",
	"partials/animation.css",
	"partials/utilities.css",
	"plugins/font-awesome.css",
	//"plugins/modal.css",
	"plugins/slick.css",
	"plugins/simpletabs.css",
	//"plugins/comparison.css",
  "plugins/magnific-popup.css",
	//"plugins/mmenu.css",
	"components/header.css",
	"components/footer.css",
	"components/mobile-menu.css",
	"partials/_screen.css",
	"partials/_theme.css",
	"partials/atomic-css.css",
	"partials/responsive.css"
);

global $css;

foreach ($files_css as $file)
{
	$css .= file_get_contents($file);
}

file_put_contents("style.css", $css);

global $variaveis;
global $valores;

$variaveis   = array(
	'{',
	'}',
	','
);

$valores  = array(
	' {',
	'} ',
	', '
);

$css = CssMin::minify(file_get_contents("style.css"));
$css = str_replace($variaveis, $valores, $css);

file_put_contents("style.min.css", $css);

//header("Content-type: text/css; charset: UTF-8");
//include 'style.min.css';

?>
