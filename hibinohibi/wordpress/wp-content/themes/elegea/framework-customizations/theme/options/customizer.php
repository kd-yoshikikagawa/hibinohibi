<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
/**
 * Framework options
 *
 * @var array $options Fill this array with options to generate framework settings form in backend
 */

$options = array(
	fw()->theme->get_options( 'blog' ),
	fw()->theme->get_options( 'portfolio' ),
	fw()->theme->get_options( 'loader' ),
	fw()->theme->get_options( 'social' ),
	fw()->theme->get_options( 'footer' ),
);
