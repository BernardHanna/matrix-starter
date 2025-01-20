<?php

use StoutLogic\AcfBuilder\FieldsBuilder;

// Define the Content Block layout
$content_014 = new FieldsBuilder('content_014', [
  'label' => 'Content 014',
]);
$content_014
  ->addSelect('content_014_heading_tag', [
    'label' => 'Heading Tag',
    'choices' => [
      'h1' => 'H1',
      'h2' => 'H2',
      'h3' => 'H3',
      'h4' => 'H4',
      'h5' => 'H5',
      'h6' => 'H6',
    ],
    'default_value' => 'h2',
  ])
  ->addText('content_014_heading_text', [
    'label' => 'Heading Text',
    'placeholder' => 'Enter heading text here...',
    'default_value' => 'Content 014',
  ])
  ->addColorPicker('content_014_heading_color', [
    'label' => 'Heading Text Color',
    'default_value' => '#000000',
  ])
  ->addColorPicker('content_014_subheading_color', [
    'label' => 'Subheading Text Color',
    'default_value' => '#000000',
  ])
  ->addColorPicker('content_014_paragraph_color', [
    'label' => 'Paragraph Text Color',
    'default_value' => '#000000',
  ])
  ->addColorPicker('content_014_underline_color', [
    'label' => 'Underline Color',
    'default_value' => '#fb6407', // Secondary color
  ])
  ->addColorPicker('content_014_button_color', [
    'label' => 'Button Background Color',
    'default_value' => '#fb6407', // Secondary color
  ])
  ->addColorPicker('content_014_button_hover_color', [
    'label' => 'Button Hover Color',
    'default_value' => '#ff8539', // Primary light color
  ])
  ->addColorPicker('content_014_button_text_color', [
    'label' => 'Button Text Color',
    'default_value' => '#FFFFFF', // White
  ])
  ->addColorPicker('content_014_button_text_hover_color', [
    'label' => 'Button Text Hover Color',
    'default_value' => '#FFFFFF', // White
  ])
  ->addColorPicker('content_014_background_color', [
    'label' => 'Background Color',
    'default_value' => '#ffffff',
  ])
  ->addTrueFalse('content_014_button_icon_toggle', [
    'label' => 'Enable SVG Icon',
    'default_value' => 1, // Enabled by default
    'ui' => 1,
  ])
  ->addWysiwyg('content_014_subheading_text', [
    'label' => 'Subheading Text',
    'tabs' => 'all',
    'toolbar' => 'basic',
    'media_upload' => 0,
    'default_value' => '<p>See whose services we help to deliver to you every day</p>',
  ])
  ->addWysiwyg('content_014_paragraph_text', [
    'label' => 'Paragraph Text',
    'tabs' => 'all',
    'toolbar' => 'full',
    'media_upload' => 0,
    'default_value' => '<p>Lorem ipsum dolor sit amet consectetur. Tristique purus sed diam ac. Ac nullam egestas maecenas interdum imperdiet tincidunt. Tortor egestas et ac faucibus risus. Placerat amet egestas congue molestie dolor gravida.<br>
    Interdum pulvinar fermentum mauris nec lacus et. Nunc malesuada rutrum tincidunt nec euismod ultrices eleifend in sodales. Elit scelerisque.</p>',
  ])
  ->addLink('content_014_button_link', [
    'label' => 'Button Link',
    'return_format' => 'array',
    'default_value' => [
      'url' => home_url('/'),
      'title' => 'Discover our API',
      'target' => '_self',
    ],
  ]);

return $content_014;
