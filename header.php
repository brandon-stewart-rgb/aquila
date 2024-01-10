<?php
/**
 * header template.
 *
 * @package Aquila
 */

?>

<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo(); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <title>Aquila</title>
</head>
<body <?php body_class('my-added-class'); ?> >

    <?php wp_body_open(); ?>
    <!--  wp_body_open allows  insert scripts after the body opens -->
       <header>Header</header>