<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset=<?php echo bloginfo('charset'); ?> />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo bloginfo('name') ?></title>
    <link rel="stylesheet" href="<?php echo bloginfo('stylesheet_url'); ?>" />
    <?php wp_site_icon(); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php wp_head(); ?>
</head>

<body
    <?php body_class() ?>>
    <!-- Navaigation Section -->