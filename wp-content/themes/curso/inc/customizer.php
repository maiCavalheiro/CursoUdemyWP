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

    //Slide
  $wp_customize ->add_section(
    'sec_slide', array(
      'title' =>'Slide',
      'description' => 'Slide Section'
    )
  );

    //Design 
  $wp_customize -> add_setting(
    'set_slide_option', array(
      'type' => 'theme_mod',
      'default' => '1',
      'sanitize_callback' => 'wpcurso_sanitize_select'
    )
  );

   $wp_customize -> add_control(
    'set_slide_option', array(
      'label' => 'Choose your design type here',
      'description' => 'Choose your design type',
      'section' => 'sec_slide',
      'type' => 'select',
      'choices' => array(
        '1' => 'Design type 1',
        '2' => 'Design type 2',
        '3' => 'Design type 3',
        '4' => 'Design type 4',
      )
    )
  );

   //limit
   $wp_customize -> add_setting(
    'set_slide_limit', array(
      'type' => 'theme_mod',
      'default' => '5',
      'sanitize_callback' => 'absint'
    )
  );

   $wp_customize -> add_control(
    'set_slide_limit', array(
      'label' => 'Number of posts to display',
      'description' => 'Choose the number of posts to be displayed',
      'section' => 'sec_slide',
      'type' => 'number'
    )
  );

}
add_action('customize_register', 'wpcurso_customizer' );

   function wpcurso_sanitize_select( $input, $setting ){
         
            //input must be a slug: lowercase alphanumeric characters, dashes and underscores are allowed only
            $input = sanitize_key($input);
 
            //get the list of possible select options 
            $choices = $setting->manager->get_control( $setting->id )->choices;
                             
            //return input if valid or return default option
            return ( array_key_exists( $input, $choices ) ? $input : $setting->default );                
             
        }