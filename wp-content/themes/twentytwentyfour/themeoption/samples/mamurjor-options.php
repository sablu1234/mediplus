<?php if ( ! defined( 'ABSPATH' )  ) { die; } // Cannot access directly.

//
// Set a unique slug-like ID
//
$prefix = 'my_slug';

//
// Create options
//
CSF::createOptions( $prefix, array(
  'menu_title' => 'Mamurjor Theme Options',
  'menu_slug'  => 'csf-demo',
) );

//
// Create a section
//
CSF::createSection( $prefix, array(
  'title'  => 'Footer Settings Options',
  'icon'   => 'fa fa-space-shuttle',
  'fields' => array(

    //
    // A text field
    //
    array(
      'id'    => 'opt-text',
      'type'  => 'text',
      'title' => 'Copy Right',
    ),

    array(
      'id'    => 'opt-textarea',
      'type'  => 'textarea',
      'title' => 'Textarea',
      'help'  => 'The help text of the field.',
    ),

    
    array(
      'id'    => 'logo',
      'type'  => 'upload',
      'title' => 'Select Logo',
    ),

    array(
      'id'    => 'set-logo',
      'type'  => 'media',
      'title' => 'Set Logo',
    ),

    array(
      'id'    => 'opt-media-3',
      'type'  => 'media',
      'title' => 'Media without url',
      'url'   => false,
      'library' => 'image',
    ),
    
    array(
      'id'     => 'addmore',
      'type'   => 'repeater',
      'title'  => 'Repeater',
      'fields' => array(
        array(
          'id'    => 'social',
          'type'  => 'text',
          'title' => 'Set social icon'
        ),

        array(
          'id'    => 'social_link',
          'type'  => 'text',
          'title' => 'Set social Link'
        ),
      ),
    ),



  )
) );


//
// Field: button_set
//
CSF::createSection( $prefix, array(
  'parent'      => 'additional_fields',
  'title'       => 'Button Set',
  'icon'        => 'fas fa-ellipsis-h',
  'description' => 'Visit documentation for more details on this field: <a href="http://codestarframework.com/documentation/#/fields?id=button-set" target="_blank">Field: button_set</a>',
  'fields'      => array(

    array(
      'id'         => 'opt-button-set-1',
      'type'       => 'button_set',
      'title'      => 'Button Set',
      'options'    => array(
        'enabled'  => 'Enabled',
        'disabled' => 'Disabled',
      ),
    ),

    array(
      'id'         => 'opt-button-set-2',
      'type'       => 'button_set',
      'title'      => 'Button Set with default',
      'options'    => array(
        'enabled'  => 'Enabled',
        ''         => 'Default',
        'disabled' => 'Disabled',
      ),
    ),

    array(
      'id'           => 'opt-button-set-3',
      'type'         => 'button_set',
      'title'        => 'Button Set',
      'options'      => array(
        'activate'   => 'Activate',
        'deactivate' => 'Deactivate',
      ),
      'default'      => 'activate',
    ),

    array(
      'id'      => 'opt-button-set-4',
      'type'    => 'button_set',
      'title'   => 'Button Set',
      'options' => array(
        'on'    => 'ON',
        'off'   => 'OFF',
      ),
      'default' => 'on',
    ),

    array(
      'id'       => 'opt-button-set-5',
      'type'     => 'button_set',
      'title'    => 'Button Set with multiple choice',
      'multiple' => true,
      'options'  => array(
        'opt-1'  => 'Option 1',
        'opt-2'  => 'Option 2',
        'opt-3'  => 'Option 3',
        'opt-4'  => 'Option 4',
        'opt-5'  => 'Option 5',
      ),
    ),

    array(
      'id'       => 'opt-button-set-6',
      'type'     => 'button_set',
      'title'    => 'Button Set with multiple choice and default',
      'multiple' => true,
      'options'  => array(
        'opt-1'  => 'Option 1',
        'opt-2'  => 'Option 2',
        'opt-3'  => 'Option 3',
        'opt-4'  => 'Option 4',
        'opt-5'  => 'Option 5',
      ),
      'default'  => array( 'opt-2', 'opt-4' )
    ),

    array(
      'id'      => 'opt-button-set-7',
      'type'    => 'button_set',
      'title'   => 'Button Set with categories',
      'options' => 'categories',
    ),

    array(
      'id'      => 'opt-button-set-8',
      'type'    => 'button_set',
      'title'   => 'Button Set with tags',
      'options' => 'tags',
    ),

  )
) );


//
// Others
//
CSF::createSection( $prefix, array(
  'title'       => 'Others',
  'icon'        => 'fas fa-bolt',
  'description' => 'Visit documentation for more details: <a href="http://codestarframework.com/documentation/#/fields?id=others" target="_blank">Others</a>',
  'fields'      => array(

    array(
      'type'    => 'heading',
      'content' => 'This is a heading field',
    ),

    array(
      'type'    => 'subheading',
      'content' => 'This is a subheading field',
    ),

    array(
      'type'    => 'content',
      'content' => 'This is a content field',
    ),

    array(
      'type'    => 'submessage',
      'style'   => 'success',
      'content' => 'This is a <strong>submessage</strong> field. And using style <strong>success</strong>',
    ),

    array(
      'type'    => 'content',
      'content' => 'This is a content field',
    ),

    array(
      'type'    => 'submessage',
      'style'   => 'info',
      'content' => 'This is a <strong>submessage</strong> field. And using style <strong>info</strong>',
    ),

    array(
      'type'    => 'submessage',
      'style'   => 'warning',
      'content' => 'This is a <strong>submessage</strong> field. And using style <strong>warning</strong>',
    ),

    array(
      'type'    => 'submessage',
      'style'   => 'danger',
      'content' => 'This is a <strong>submessage</strong> field. And using style <strong>danger</strong>',
    ),

    array(
      'type'    => 'notice',
      'style'   => 'success',
      'content' => 'This is a <strong>notice</strong> field. And using style <strong>success</strong>',
    ),

    array(
      'type'    => 'notice',
      'style'   => 'info',
      'content' => 'This is a <strong>notice</strong> field. And using style <strong>info</strong>',
    ),

    array(
      'type'    => 'notice',
      'style'   => 'warning',
      'content' => 'This is a <strong>notice</strong> field. And using style <strong>warning</strong>',
    ),

    array(
      'type'    => 'notice',
      'style'   => 'danger',
      'content' => 'This is a <strong>notice</strong> field. And using style <strong>danger</strong>',
    ),

    array(
      'type'    => 'content',
      'content' => 'This is a <strong>content</strong> field. You can write some contents here.',
    ),

  )
) );
