<?php 
/**
 * Header Template
 * 
 * @package Amingoz
 */
?>

<!DOCTYPE html>
<html lang="<?php language_attributes('charset'); ?>">
<head>
    <meta charset="<?php bloginfo(); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

    <header>Header</header>