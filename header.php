<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bond
 */

?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>BOND</title>
    <meta name="keywords" content="">
    <meta name="">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <link href="img/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <link href="<?php bloginfo("template_directory"); ?>/css/normalize.css" rel="stylesheet">
    <link href="<?php bloginfo("template_directory"); ?>/css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Changa+One|Roboto" rel="stylesheet">
  </head>
  <body>
    <header class="main-header">
      <div class="header-logo container">
        <a class="header-logo-box" href="#">
          <img src="<?php bloginfo("template_directory"); ?>/img/hlogo.png" width="206" height="81" alt="bond">
        </a>
      </div>
      <div class="header-overhead">
        <div class="header-search">
          <input type="text" name="search" value="">
          <button class="header-search-btn" type="button" name="button">search</button>
        </div>
        <div class="header-login">
          <button class="header-login-btn" type="button" name="button">
            <span class="login-btn-icon"></span>log in</button>
        </div>
        <div class="header-menu-toggle">
          <button type="button" name="button">
            <span>menu</span>
          </button>
        </div>
        <nav class="header-nav">
          <ul>
            <li><a href="#">HOME</a></li>
            <li><a href="#">ABOUT US</a></li>
            <li><a href="#">SERVICES</a></li>
            <li><a href="#">PRACTICES</a></li>
            <li><a href="#">BLOG</a></li>
            <li><a href="#">CONTACTS</a></li>
          </ul>
        </nav>
      </div>
    </header>
