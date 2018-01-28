<?php

/*Customizer Code HERE*/
add_action('customize_register', 'theme_script_customizer');
function theme_script_customizer($wp_customize){
 
$wp_customize->add_section('footer_script_section', array(
  'title'          => 'Add Your Script'
 ));

$wp_customize->add_setting('script_setting', array(
 'default'        => 'Add Your Script',

 ));
$wp_customize->add_control('script_setting', array(
 'label'   => 'Add Your Script',
  'section' => 'footer_script_section',
 'type'    => 'textarea',
));

$wp_customize->add_setting( 'header_checkbox', array(
  'capability' => 'edit_theme_options',
  'sanitize_callback' => 'themeslug_sanitize_checkbox',
) );

$wp_customize->add_control( 'header_checkbox', array(
  'type' => 'checkbox',
  'section' => 'footer_script_section', // Add a default or your own section
  'label' => __( 'Check to add script in header' ),
  
) );

$wp_customize->add_setting( 'footer_checkbox', array(
  'capability' => 'edit_theme_options',
  'sanitize_callback' => 'themeslug_sanitize_checkbox',
) );

$wp_customize->add_control( 'footer_checkbox', array(
  'type' => 'checkbox',
  'section' => 'footer_script_section', // Add a default or your own section
  'label' => __( 'Check to add script in footer' ),
  
) );
function themeslug_sanitize_checkbox( $checked ) {
  // Boolean check.
  return ( ( isset( $checked ) && true == $checked ) ? true : false );
}
}
?>