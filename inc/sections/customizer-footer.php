<?php
/**
 * Marup identity Customizer Seciton
 *
 * @link https://developer.wordpress.org/themes/customize-api/
 *
 * @package Marup
 */

/**
 * Add Section.
 */
$wp_customize->add_section(
	'footer_settings', array(
		'title'     => esc_html__( 'Footer', 'marup' ),
        'priority'  => 130,
	)
);

/**
 * Settings and Controls.
 */
$wp_customize->add_setting(
	'footer_settings', array(
		'default'           => '',
		'transport'         => 'postMessage',
		
	)
);

$wp_customize->add_control(
	'footer_settings', array(
		'type'        => 'textarea',
		'priority'    => 7,
		'section'     => 'footer_settings',
		'label'       => esc_html__( 'Colophon', 'designer' ),
		'description' => esc_html__( 'Add text to be displayed globally in your website footer.', 'designer' ),
	)
);