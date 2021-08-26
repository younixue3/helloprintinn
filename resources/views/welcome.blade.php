@extends('template/public/master')
@section('title', 'Home')
@section('content')

<div id="index-banner" class="parallax-container z-depth-5">
      <div class="container">
        <div class="row">
          <div class="col s12 m4 l3 center" style="padding: 0;">
            <img src="{{ asset('img/Logo.png')}}" alt="" style="width:65%;">
          </div>
          <div class="col s12 l3">
            <h2 id="judul" class="header white-text">PRINT.INN</h2>
          </div>
          <div class="col s m8">
            <h5 class="light">Elevate your bussiness through good prints</h5>
          </div>
        </div>
        <div class="center">
          <a href="https://www.instagram.com/helloprintinn/" target="_blank" id="download-button" class="btn-large waves-effect waves-light red darken-2">Order Now</a>
        </div>
      </div>
    <div class="parallax"><img src="{{ asset('img/1.JPG')}}" alt="Unsplashed background img 1"></div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">flash_on</i></h2>
            <h5 class="center">Fast Service</h5>

            <p class="light">Knowing that speed is the key, we always deliver only the best outcome to our consumers on-time.</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">star</i></h2>
            <h5 class="center">Premium Product Quality</h5>

            <p class="light">Adapting to the technology changes, we are commited to use the f nest machines to produce  f rst-rate product quality</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center brown-text"><i class="material-icons">attach_money</i></h2>
            <h5 class="center">Competitive Pricing</h5>

            <p class="light">In order to help our customers to stay on op of today’s competitive marketplace, we provide af ordable and reasonable price for our customers.</p>
          </div>
        </div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper z-depth-5">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col l m11 black-text bold">Elevate your bussiness through good prints</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="{{ asset('img/2.JPG')}}" alt="Unsplashed background img 2"></div>
  </div>

  <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center">
          <h3><i class="mdi-content-send brown-text"></i></h3>
          <h4>Our Partner</h4>
            <img class="col l3 m7 offset-m2" id="partnership" style="margin-top: 20px" width="100%" height="100%" src="{{ asset ('img/google.png')}}">
            <img class="col l3 m7 offset-m2" id="partnership" style="margin-top: 35px" width="100%" height="100%" src="{{ asset ('img/microsoft.png')}}">
            <img class="col l3 m7 offset-m2" id="partnership" style="margin-top: 30px" width="100%" height="100%" src="{{ asset ('img/bukalapak.png')}}">
            <img class="col l3 m7 offset-m2" id="partnership"  width="100%" height="100%" src="{{ asset ('img/gojek.png')}}">
            
        </div>
      </div>

    </div>
  </div>


  <div class="parallax-container valign-wrapper z-depth-5">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col l m11 black-text bold">give creative insights for the customers</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="{{ asset('img/3.JPG')}}" alt="Unsplashed background img 3"></div>
  </div>

  <style>
    #partnership {
        padding-bottom: 10px;
    }
  </style>
@endsection