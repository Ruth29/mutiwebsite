<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Muti Furniture - Handmade Pieces from Uganda</title>

  <!--SEO Meta Tags-->
  <meta name="description" content="Muti Furniture" />
  <meta name="keywords" content="shop, furniture, modern, minimalist style, responsive, online store, business, mobile, blog, bootstrap, html5, css3, jquery, js, gallery, slider, touch, creative, clean" />
  <meta name="author" content="Rokaux" />

  <!--Mobile Specific Meta Tag-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

  <!--Favicon-->
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
  <link rel="icon" href="favicon.ico" type="image/x-icon">


  <!-- Google Material Icons -->
  <link href="assets/css/vendor/material-icons.min.css" rel="stylesheet" media="screen">

  <!-- Brand Icons -->
  <link href="assets/css/vendor/socicon.min.css" rel="stylesheet" media="screen">

  <!-- Bootstrap -->
  <link href="assets/css/vendor/bootstrap.min.css" rel="stylesheet" media="screen">

  <!-- Theme Styles -->
  <link href="assets/css/theme.min.css" rel="stylesheet" media="screen">
  <link href="assets/css/custom.css" rel="stylesheet" media="screen">
  <?php echo $map['js']; ?>
  <!-- Page Preloading -->
  <script src="assets/js/vendor/page-preloading.js"></script>

  <!-- Modernizr -->
  <script src="assets/js/vendor/modernizr.custom.js"></script>

</head>

<!-- Body -->
<!-- Adding/Removing class ".page-preloading" is enabling/disabling background smooth page transition effect and spinner. Make sure you also added/removed link to page-preloading.js script in the <head> of the document. -->
<body class="page-preloading">
  <!-- Page Pre-Loader -->
  <div class="page-preloader">
    <div class="preloader">
      <img src="assets/img/preloader.gif" alt="Preloader">
    </div>
  </div><!-- .page-preloader -->

  <!-- Page Wrapper -->
  <div class="page-wrapper">

    <header class="navbar navbar-sticky">

      <!-- Site Logo -->
      <a href="<?php echo base_url('/') ?>" class="site-logo visible-desktop"><img src="assets/img/Muti-images/logocolorweb.png">
        </a>
      <!-- <a href="index.html" class="site-logo visible-desktop">
        <span>[</span> M
        <span class="text-gray">/</span>
        STORE <span>]</span>
      </a> --><!-- site-logo.visible-desktop -->
      <a href="<?php echo base_url('/')?>" class="site-logo visible-mobile">
        <span>[</span> Muti <span>]</span>
      </a><!-- site-logo.visible-mobile -->
      <!-- Toolbar -->
      <div class="toolbar">
        <div class="inner">
          <div class="toolbar-toggle hidden-xs">
            <span class="custom-padding">For a quote, call us at</span>           
          </div>
          <div class="toolbar-button hidden-xs">
            <i class="material-icons phone"></i>
          <span class="text-gray custom-padding">+256 775680435</span>
          </div>
        </div><!-- .inner -->
      </div><!-- .toolbar -->
    </header><!-- .navbar.navbar-sticky -->