<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Crios</title>
  <?php wp_head(); ?>
</head>
<body>
  <!-- HEADER START -->
  <header>
    <nav role="navigation">
      <div id="menuToggle">
        <!--
        A fake / hidden checkbox is used as click reciever,
        so you can use the :checked selector on it.
      -->
      <input type="checkbox" />

      <!--
      Some spans to act as a hamburger.

      They are acting like a real hamburger,
      not that McDonalds stuff.
    -->
    <div class="round">


      <span></span>
      <span></span>
      <span></span>
    </div>
    <!--
    Too bad the menu has to be inside of the button
    but hey, it's pure CSS magic.
  -->
  <ul id="cssmenu">
    <li><a href="#top">Home</a></li>
    <li><a href="#box">Boxes</a></li>
    <li><a href="#app">Apps</a></li>
    <li><a href="#guy">Contact</a></li>
  </ul>
</div>
</nav>

<!-- BURGER END -->

    <div class="nav_div">

      <div class="nav_width">
</div>

<div class="logo" id="top">
  <img src="<?php the_field('logo', 101); ?>" alt="oops" width="350">
</div>

    <div class="nav_width">
</div>



</div>



</header>
