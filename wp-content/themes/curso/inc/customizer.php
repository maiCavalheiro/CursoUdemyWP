<?php
function wpcurso_customizer( $wp_customize){
  //copyright

  $wp_customize ->add_section(
    'sec_copyright', array(
      'title' =>'Copyright',
      'description' => 'Copyright Section'
    )
  );
  $wp_customize -> add_setting(
    'set_copyright', array(
      'type' => 'theme_mod',
      'default' => 'Copyright X - All rights reserved',
      'sanitize_callback' => 'wp_filter_nohtml_kses'
    )
  );

  $wp_customize -> add_control(
    'set_copyright', array(
      'label' => 'Copyright',
      'description' => 'Choose whether to show the Services section or not',
      'section' => 'sec_copyright',
      'type' => 'text'
    )
  );

  //Map
  $wp_customize ->add_section(
    'sec_map', array(
      'title' =>'Map',
      'description' => 'Map Section'
    )
  );

// Map API Key
  $wp_customize -> add_setting(
    'set_map_apikey', array(
      'type' => 'theme_mod',
      'default' => '',
      'sanitize_callback' => 'wp_filter_nohtml_kses'
    )
  );

  $wp_customize -> add_control(
    'set_map_apikey', array(
      'label' => 'API Key',
      'description' => 'Get your map <a target ="_blank" href ="https://developers.google.com/maps/documentation/embed/get-api-key"> here </a>',
      'section' => 'sec_map',
      'type' => 'text'
    )
  );

  //Address
  $wp_customize -> add_setting(
    'set_map_address', array(
      'type' => 'theme_mod',
      'default' => '',
      'sanitize_callback' => 'esc_textarea'
    )
  );

  $wp_customize -> add_control(
    'set_map_address', array(
      'label' => 'Type your address here',
      'description' => 'No especial characters allowed',
      'section' => 'sec_map',
      'type' => 'textarea'
    )
  );

}
add_action('customize_register', 'wpcurso_customizer' );
