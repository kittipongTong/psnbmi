

@extends('include.inc-css')
<div class="py-1 bg-black top">
  <div class="container">
    <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
      <div class="col-lg-12 d-block">
        <div class="row d-flex">
          <div class="col-md pr-4 d-flex topper align-items-center">
            <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
            <span class="text">+  02-5903000 (กรมควบคุมโรค) </span>
          </div>
          <div class="col-md pr-4 d-flex topper align-items-center">
            <div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
            <span class="text">+ 02-590-3093 (ศูนย์สารสนเทศ)</span>
          </div>
          <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right justify-content-end">
             <span class="text">atsadang.c@ddc.mail.go.th</span>
             

            <!-- <p class="mb-0 register-link"><span>Open hours:</span> <span>Monday - Sunday</span> <span>8:00AM - 9:00PM</span></p> -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
  <div class="container">
    <a class="navbar-brand" href="#">ระบบเก็บข้อมูลบุคลากรศูนย์สารสนเทศ Data Personnel information</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="oi oi-menu"></span>
    </button>

    <div class="collapse navbar-collapse" id="ftco-nav">
      <ul class="navbar-nav ml-auto">
        <li class="navbar-brand active"><a href="{{ url('/home') }}" class="nav-link">หน้าหลัก</a></li>
        <li class="navbar-brand"><a href="{{ route('login') }}" class="nav-link">ล็อกอิน</a></li>
        <li class="navbar-brand"><a href="{{ route('register') }}" class="nav-link">สมัครสมาชิก</a></li>
      </ul>
    </div>
  </div>
</nav>
<!-- END nav -->

<section class="home-slider owl-carousel js-fullheight">
  <div class="slider-item js-fullheight" style="background-image: url(feliciano/images/info-นโยบายรมว_ver16.png);">
    <div class="overlay"></div>
    <div class="container">
      <div class="row slider-text js-fullheight justify-content-center align-items-center" data-scrollax-parent="true">

        <div class="col-md-12 col-sm-12 text-center ftco-animate">
          <!-- <span class="subheading"> ระบบเก็บข้อมูลบุคลากรศูนย์สารสนเทศ </span> -->
          <!-- <h1 class="mb-4">Best Restaurant</h1> -->
        </div>

      </div>
    </div>
  </div>

  <div class="slider-item js-fullheight" style="background-image: url(feliciano/images/1512889829.jpg);">
    <div class="overlay"></div>
    <div class="container">
      <div class="row slider-text js-fullheight justify-content-center align-items-center" data-scrollax-parent="true">

        <div class="col-md-12 col-sm-12 text-center ftco-animate">
          <!-- <span class="subheading"> ระบบเก็บข้อมูลบุคลากรศูนย์สารสนเทศ </span> -->
          <!-- <h1 class="mb-4">Nutritious &amp; Tasty</h1> -->
        </div>

      </div>
    </div>
  </div>

  <div class="slider-item js-fullheight" style="background-image: url(feliciano/images/1512889829.jpg);">
    <div class="overlay"></div>
    <div class="container">
      <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

        <div class="col-md-12 col-sm-12 text-center ftco-animate">
          <!-- <span class="subheading">ระบบเก็บข้อมูลบุคลากรศูนย์สารสนเทศ </span> -->
          <!-- <h1 class="mb-4">Delicious Specialties</h1> -->
        </div>

      </div>
    </div>
  </div>

  <div class="slider-item js-fullheight" style="background-image: url(feliciano/images/1512889829.jpg);">
    <div class="overlay"></div>
    <div class="container">
      <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

        <div class="col-md-12 col-sm-12 text-center ftco-animate">
           <!-- <span class="subheading">ระบบเก็บข้อมูลบุคลากรศูนย์สารสนเทศ </span> -->
        <!--  <h1 class="mb-4">Delicious Specialties</h1> -->
        </div>

      </div>
    </div>
  </div>
</section>
@extends('include.inc-sc')
