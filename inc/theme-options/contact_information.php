<?php
// File: inc/acf/options/theme-options/contact_information.php
use StoutLogic\AcfBuilder\FieldsBuilder;

$contact_info = new FieldsBuilder('contact_information');

$contact_info
  ->addRepeater('social_links', [
    'label'        => 'Social Media Links',
    'instructions' => 'Add links to your social media accounts.',
    'min'          => 1,
    'layout'       => 'block',
  ])
  ->addText('label', [
    'label'        => 'Label',
    'instructions' => 'Provide a label for the social media link (e.g., Facebook, Twitter).',
    'required'     => 0,
  ])
  ->addUrl('url', [
    'label'        => 'URL',
    'instructions' => 'Provide the URL for the social media account.',
    'required'     => 1,
  ])
  ->addSelect('icon', [
    'label'       => 'Icon',
    'instructions' => 'Select a Font Awesome icon.',
    'choices'      => [
      'fa-facebook' => 'Facebook',
      'fa-twitter'  => 'Twitter',
      'fa-linkedin' => 'LinkedIn',
      'fa-instagram' => 'Instagram',
      'fa-youtube'  => 'YouTube',
    ],
  ])
  ->endRepeater();

return $contact_info;
