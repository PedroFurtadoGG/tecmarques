<?php


function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'Translate',
		'id'            => 'translate',
		'before_widget' => '<ul class="list dropdown bc-black shadow c-white" data-atomic="br-b-m ta-c p-y-m" role="menu">',
		'after_widget'  => '</ul>',
		'before_title'  => '',
		'after_title'   => '',
	) );


	register_sidebar( array(
		'name'          => 'Newsllet Bottom',
		'id'            => 'newslleter',
		'before_widget' => '<div class="form-container">',
		'after_widget'  => '</div>',
		'before_title'  => '',
		'after_title'   => '',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );