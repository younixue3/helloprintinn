<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PRINT.INN | @yield('title')</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="{{ asset('Materialize/css/materialize.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="{{ asset('Materialize/css/style.css') }}" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="red darken-3" role="navigation">
    <div class="nav-wrapper container">
      <a id="logo-container" href="#" class="brand-logo white-text">PRINT.INN</a>
      <ul class="right hide-on-med-and-down ">
        <li><a class="white-text" href="/">Home</a></li>
        <li><a class="white-text" href="about">About</a></li>
        <li><a class="white-text" href="gallery">Gallery</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a class="black-text" href="/">Home</a></li>
        <li><a class="black-text" href="about">About</a></li>
        <li><a class="black-text" href="gallery">Gallery</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger white-text"><i class="material-icons">menu</i></a>
    </div>
  </nav>