<?php
/**
 * Theme header
 * @package sway
 * by KeyDesign
 */

if ( ! defined( 'ABSPATH' ) ) {
  exit; // Exit if accessed directly.
}
?><!DOCTYPE html>
<html <?php language_attributes( 'html' ); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="https://gmpg.org/xfn/11">

        <?php wp_head(); ?>
    </head>
    <body <?php body_class();?>>
        <?php wp_body_open(); ?>
        <?php do_action( 'sway_main_header' ); ?>

        <div id="wrapper" class="<?php echo esc_attr( implode( ' ', (array) apply_filters( 'sway_wrapper_class', array() ) ) ); ?>">
            <?php do_action( 'sway_page_header' ); ?>
