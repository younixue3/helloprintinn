@extends('template/public/master')
@section('title', 'About')
@section('content')

<div id="index-banner" class="parallax-container z-depth-5">
  <div class="container">
    <h1 class="header white-text" id="font-judul">PRINT.INN</h1>
    <h5 class="header col l m light" id="font-sub-judul">Elevate your bussiness through good prints</h5>
    <div class="row right">
      <div class="col">
        <div class="card z-depth-5">
          <div class="card-image">
            <img src="{{ asset ('img/2.JPG')}}">
          </div>
        </div>
      </div>
    </div>
  </div>
        
    <div class="parallax"><img src="{{ asset('img/about.jpg')}}" alt="Unsplashed background img 1"></div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col hide-on-small-only m3 l3">
        <ul class="section table-of-contents" id="font">
          <li><a href="#introduction">Introduction</a></li>
          <li><a href="#structure">Vision</a></li>
          <li><a href="#initialization">Mission</a></li>
        </ul>
      </div>
      <div class="col s12 m9 l12">
        <div id="introduction" class="section scrollspy">
          <p>TO BE THE PROMINENT
            LOCAL AND INTERNATIONAL
            PACKAGING & PRINTING
            COMPANY THAT ADVANCE
            INTECHNOLOGY CHANGES
            TO SUPPORT VARIOUS
            CLIENT'S NEEDS</p>
        </div>  
        <div class="row">
          <div class="col m12 l12">
            <div class="container z-depth-2">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.687709282709!2d117.15434541475337!3d-0.4636093996617577!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df679525eb7d3b1%3A0x42c5f38ef09cac4f!2sPrint%20Inn!5e0!3m2!1sid!2sid!4v1598599161007!5m2!1sid!2sid" width="100%" height="457" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
              </div>
            </div>
          </div>
        </div>
        <div id="structure" class="section scrollspy">
          <p>PT. DUALARAS BERSINAR GEMILANG is a leading packaging and printing company in Indonesia since 2020 Dedicated to use only finest equipments and having
            WORKING PROCESS high quality human resources, we become expert in
            File Preparation delivering (or providing) creative visual, flawless
            Printing Process printing result, and attractive packaging to our
            Finishingcustomers. We also give creative insights for the
            customers that help to reach their goals and to
            perform over-delivering results.</p>
        </div>
        
      </div>
    </div>

  <div class="container">
    <div class="section">
      <div id="initialization" class="section scrollspy">
        <p><b>On-time delivery service</b>
          Knowing that speed is the key, we always deliver
          only the best outcome to our consumers on-time.
          <b>Product Quality</b>
          Adapting to the technology changes, we are
          commited to use the f nest machines to produce
          f rst-rate product quality.
          <b>Competitive Pricing</b>
          In order to help our customers to stay on op of
          today’s competitive marketplace, we provide
          af ordable and reasonable price for our customers.</p>
      </div>
      <div class="row">
        <div class="col m6 l6 offset-l3">
          <div class="card z-depth-2">
            <div class="card-image hoverable">
              
            </div>
          </div>
        </div>
      </div>
      </div>

    </div>
  </div>

  <style>
    #index-banner-about {
      height: 130vh;
    }

    #font {
      font-size: 25px;
    }

    /* #font-judul {
      font-size: 100px;
    } */

    #font-sub-judul {
      font-size: 30px;
    }

    #size-icon {
      font-size: 35px;
    }

  </style>
@endsection