@extends('layouts.master')
    @section('title', 'HOME')

        @section('header')
        <h1>Home</h1>
        @stop
        @section('content')

    @include('partials/menu')
<!--Page Header-->
                <!-- Background Area Start -->
        
        <a data-toggle="modal" data-target="#myModal"><img id="" src="assets/images/paytm.png"style="    width: 50px;
    position: fixed;
    top: 400px;
    left: 2px;
    z-index: 999999;
    border: 1px solid #042e6f;
    border-radius: 8px;    width: 40px;     cursor: pointer;"></a>
         <!-- Modal -->
        <div id="myModal" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content" style="    padding: 9px 15px;">
             <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" style="border: 1px solid #16b9ed;font-size: 30px; padding: 5px; opacity:1; color:#16b9ed;">&times;</button>
             </div>
              <div class="modal-body"style="padding:0px;">
                <img src="assets/images/paytm-QR-code.png" class="img-responsive">
              </div>
              <div class="modal-footer">
                
              </div>
            </div>

          </div>
        </div>
        <!-- Modal -->
        <div class="slideout">
           <a href=""><img src="assets/images/watsapp.png" class="fximg"></a>
          <div class="slideout_inner">
            +91-1234567890
          </div>
        </div>
        <div class="slider-two-area">   
            <div class="slider-wrapper">
                <div class="single-slide" style="background-image: url('assets/images/news2.jpg');">
                    <div class="banner-content">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-offset-5 col-md-7 col-sm-offset-0 col-sm-12">
                                    <div class="text-content-wrapper">
                                        <div class="text-content text-center">
                                            <h3 class="title1 pt-65" style="color:#fff;">Favourable Business Practices Sustainable Profits</h3>
                                            
                                            <p style="color:#fff;">We have over 25  year’s of experience in Finance and Business management so we can make your business more successful you can trust us</p>
                                            <div class="banner-readmore">
                                                <a class="button banner-btn" href="#">VIEW SERVICES</a>                 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slide" style="background-image: url('assets/images/slider3.jpg');">
                    <div class="banner-content">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-offset-5 col-md-7 col-sm-offset-0 col-sm-12">
                                    <div class="text-content-wrapper slide-two">
                                        <div class="text-content text-center">
                                            <h3 class="title1 pt-65" style="color:#fff;">Favourable Business Practices Sustainable Profits</h3>
                                            
                                            <p style="color:#fff;">We have over 25  year’s of experience in Finance and Business management so we can make your business more successful you can trust us</p>
                                            <div class="banner-readmore">
                                                <a class="button banner-btn" href="#">VIEW SERVICES</a>                 
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Background Area End -->
        <!-- Question Ask Area Start -->
        <div class="question-ask-area">
            <button class="toggle"><img src="assets/images/ques.png" alt=""></button>
            <div class="question-popoup">
                <h6>Need Any Help?</h6>
                <p>Prestige Research consectetur adipiscing elit, sed do eiud tempor incididnt in the finance sento</p>
                <div class="question-info">
                    <div class="q-image">
                        <img src="assets/images/2-2.jpg" alt="">
                    </div>
                    <div class="q-text">
                        <h5>lorem ipsum</h5>
                        <span>Financial Advisor</span>
                    </div>
                    <div class="q-btn">
                        <a href="#" class="default-button">contact</a>
                    </div>
                </div>
            </div>
        </div>
     
                    <div class="row">
                        <marquee style=" color: #fff; padding: 8px; background-color: #2a2e3c">SEBI Registration NO.INA000003627 Investment in stock and commodity market are subject to market risk. Please do not trade on those tips which are not provided through SMS or messenger.</marquee>
                    </div>
            
        <div class="service-area pt-75 service-style-two">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                        <div class="section-title text-center mb-55">
                            <h2>Our Services</h2>
                            <p>Prestige Research amet sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="single-item">
                            <span class="service-image">
                                <img src="assets/images/plan.png" alt="">
                            </span>
                            <div class="service-text">
                                <h4>MCX GOLD OPTION TIPS</h4>
                                <p>Prestige Research consectetur adipiscing elit, sed do eiusmod tempor incididnt </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-item">
                            <span class="service-image">
                                <img src="assets/images/cash.png" alt="">
                            </span>
                            <div class="service-text">
                                <h4>Stock Cash BTST Tips</h4>
                                <p>Prestige Research consectetur adipiscing elit, sed do eiusmod tempor incididnt </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-item">
                            <span class="service-image">
                                <img src="assets/images/brif.png" alt="">
                            </span>
                            <div class="service-text">
                                <h4>Nifty Option Tips</h4>
                                <p>Prestige Research consectetur adipiscing elit, sed do eiusmod tempor incididnt </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-item">
                            <span class="service-image">
                                <img src="assets/images/hand.png" alt="">
                            </span>
                            <div class="service-text">
                                <h4>Stock Option Platinum Tips</h4>
                                <p>Prestige Research consectetur adipiscing elit, sed do eiusmod tempor incididnt </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-item">
                            <span class="service-image">
                                <img src="assets/images/commo.png" alt="">
                            </span>
                            <div class="service-text">
                                <h4>Inventory Calls</h4>
                                <p>Prestige Research consectetur adipiscing elit, sed do eiusmod tempor incididnt </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-item">
                            <span class="service-image">
                                <img src="assets/images/reti.png" alt="">
                            </span>
                            <div class="service-text">
                                <h4>Stock Future Platinum Tips</h4>
                                <p>Prestige Research consectetur adipiscing elit, sed do eiusmod tempor incididnt </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
       <br><br>
       
        <div class="tracksheet">
            <div class="row">
                <div class="col-sm-5"> 
                </div>
                <div class="col-sm-7 track-content">
                    <h3>Tracksheet and Reports</h3>
                    <p class="track-para">Commodity Trading, Swing Trading, Future Trading and Option Trading in Stock,
                 Commodity &amp; Bullion Market.</p>
                    <div class="tracksheet-block">
                        <div class="block1 wow fadeInUp animated" data-wow-delay="500ms" ""="" style="visibility: visible; animation-delay: 500ms; animation-name: fadeInUp;">
                            <p><img src="assets/images/excel.png"> Agri</p>
                            <p><img src="assets/images/excel.png"> Bullion </p>
                            <p><img src="assets/images/excel.png"> Stock Cash</p>
                            <p><img src="assets/images/excel.png"> Option</p>
                            <p><img src="assets/images/excel.png"> Stock Future</p>
                        </div>
                        <div class="block1 wow fadeInUp animated" data-wow-delay="500ms" ""="" style="visibility: visible; animation-delay: 500ms; animation-name: fadeInUp;">
                            <p><img src="assets/images/excel.png"> Agri</p>
                            <p><img src="assets/images/excel.png"> Bullion </p>
                            <p><img src="assets/images/excel.png"> Stock Cash</p>
                            <p><img src="assets/images/excel.png"> Option</p>
                            <p><img src="assets/images/excel.png"> Stock Future</p>
                        </div>
                        <div class="block1 wow fadeInUp animated" data-wow-delay="500ms" ""="" style="visibility: visible; animation-delay: 500ms; animation-name: fadeInUp;">
                            <p><img src="assets/images/excel.png"> Agri</p>
                            <p><img src="assets/images/excel.png"> Bullion </p>
                            <p><img src="assets/images/excel.png"> Stock Cash</p>
                            <p><img src="assets/images/excel.png"> Option</p>
                            <p><img src="assets/images/excel.png"> Stock Future</p>
                        </div>
                    </div>
                    <div class="main-btn">
                        <a href="#" class="button banner-btn">View All</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- testimonial Carousel End -->
           <div class="advertise-area bg-2 overlay-green advertise-style-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                        <div class="advertise-text text-white text-center">
                            <h2>We Have More Than 1000+ Satisfied Clients</h2>
                            <p>We have over 25  year’s of experience in Finance and Business management so we can make your business more successful you can trust us and we care about it</p>
                            <a href="#" class="default-button btn-white">Get a Quote</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog Area Start -->

         <div class="testmonial-carousel-two bg-light ptb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                        <div class="testmonial-wrapper text-center">
                            <div class="single-testi">
                                <div class="testi-img">
                                    <img src="assets/images/1-1.jpg" alt="">
                                </div>
                                <div class="testi-text">
                                    <p>Prestige Research amet sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris               nisi ut aliquip ex ea commodo consequatuis aute irure</p>
                                    <h5><a href="#">lorem ipsum</a></h5>
                                    <span>CEO &amp; Founder</span>
                                </div>
                            </div>
                            <div class="single-testi">
                                <div class="testi-img">
                                    <img src="assets/images/1-1.jpg" alt="">
                                </div>
                                <div class="testi-text">
                                    <p>Prestige Research amet sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris               nisi ut aliquip ex ea commodo consequatuis aute irure</p>
                                    <h5><a href="#">lorem ipsum</a></h5>
                                    <span>CEO &amp; Founder</span>
                                </div>
                            </div>
                            <div class="single-testi">
                                <div class="testi-img">
                                    <img src="assets/images/1-1.jpg" alt="">
                                </div>
                                <div class="testi-text">
                                    <p>Prestige Research amet sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris               nisi ut aliquip ex ea commodo consequatuis aute irure</p>
                                    <h5><a href="#">lorem ipsum</a></h5>
                                    <span>CEO &amp; Founder</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

           <div class="fun-factor-area bg-3 overlay-green pt-100 fix pb-95">
            <div class="container">
                <div class="fun-custom-row">
                    <div class="fun-custom-column">
                        <div class="single-fun-factor">
                            <div class="text-icon block">
                                <img src="assets/images/cup.png" alt="" class="mr-15">
                                <h2><span class="counter">750</span></h2>
                            </div>
                            <h4>Cup Of Coffee</h4>
                        </div>
                    </div>
                    <div class="fun-custom-column">
                        <div class="single-fun-factor">
                            <div class="text-icon block">
                                <img src="assets/images/check.png" alt="" class="mr-15">
                                <h2><span class="counter">350</span></h2>
                            </div>
                            <h4>Case Complete</h4>
                        </div>
                    </div>
                    <div class="fun-custom-column">
                        <div class="single-fun-factor">
                            <div class="text-icon block">
                                <img src="assets/images/face.png" alt="" class="mr-15">
                                <h2><span class="counter">180</span></h2>
                            </div>
                            <h4>Happy Clients</h4>
                        </div>
                    </div>
                    <div class="fun-custom-column">
                        <div class="single-fun-factor">
                            <div class="text-icon block">
                                <img src="assets/images/teams.png" alt="" class="mr-15">
                                <h2><span class="counter">62</span></h2>
                            </div>
                            <h4>Team Member</h4>
                        </div>
                    </div>
                    <div class="fun-custom-column">
                        <div class="single-fun-factor">
                            <div class="text-icon block">
                                <img src="assets/images/trophy.png" alt="" class="mr-15">
                                <h2><span class="counter">45</span></h2>
                            </div>
                            <h4>Awards Win</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      
   @stop