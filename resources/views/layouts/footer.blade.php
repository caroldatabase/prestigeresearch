     <!-- Blog Area End -->
        <!--Start of Client area-->
        <div class="client-area ptb-40 bg-light">
            <div class="container">
                  <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                        <div class="section-title text-center mb-55">
                            <h2>Current Market Update</h2>
                          
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="client-carousel">
                        <div class="col-xs-12">
                            <div class="single-client block">
                                <a href="#" class="block">
                                    <span class="p-images"><img src="{{url('assets/images/nse.jpg')}}" alt=""></span>
                                    <span class="s-images"><img src="{{url('assets/images/nse.jpg')}}" alt=""></span>
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="single-client block">
                                <a href="#" class="block">
                                    <span class="p-images"><img src="{{url('assets/images/marketwatch.jpg')}}" alt=""></span>
                                    <span class="s-images"><img src="{{url('assets/images/marketwatch.jpg')}}" alt=""></span>
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="single-client block">
                                <a href="#" class="block">
                                    <span class="p-images"><img src="{{url('assets/images/investing.jpg')}}" alt=""></span>
                                    <span class="s-images"><img src="{{url('assets/images/investing.jpg')}}" alt=""></span>
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="single-client block">
                                <a href="#" class="block">
                                    <span class="p-images"><img src="{{url('assets/images/moneycontrol.jpg')}}" alt=""></span>
                                    <span class="s-images"><img src="{{url('assets/images/moneycontrol.jpg')}}" alt=""></span>
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-12">
                            <div class="single-client block">
                                <a href="#" class="block">
                                    <span class="p-images"><img src="{{url('assets/images/mcx.jpg')}}" alt=""></span>
                                    <span class="s-images"><img src="{{url('assets/images/mcx.jpg')}}" alt=""></span>
                                </a>
                            </div>
                        </div>
                        
                    </div>  
                </div>
            </div>
        </div>
        <!--End of Client area-->                
       <!--Start of Footer Widget-area-->
        <div class="footer-widget-area bg-4 overlay-green pt-110 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <div class="single-footer-widget">
                            <div class="footer-logo">
                                <a href=""><img src="{{url('assets/images/logo.png')}}" alt="Prestige Research"></a>
                            </div>
                            <p>Welcome to Prestige Research , We have been known for serving our customers with atmost care and dedication. Our motto has been always aligned with "Delivering Quality Services" and "Customer Satisfaction".</p>
                          
                            <!-- mailchimp-alerts Start -->
                            <div class="mailchimp-alerts text-centre fix text-small">
                                <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                            </div>
                            <!-- mailchimp-alerts end -->
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <div class="single-footer-widget">
                            <h3>POPULAR POST</h3>
                            <div class="footer-widget-content">
                                <h5>Duplex Villa Design</h5>
                                <span>Lorem ipsum dolor sit amet, tur<br>acinglit sed do eius </span>
                            </div>
                            <div class="footer-widget-content">
                                <h5>Real Estate Fest</h5>
                                <span>Lorem ipsum dolor sit amet, tur<br>acinglit sed do eius </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 hidden-md hidden-sm col-xs-12">
                        <div class="single-footer-widget">
                            <h3>QUICK LINK</h3>
                            <ul class="footer-list">
                                <li><a href="{{url('/')}}">Home</a></li>
                                <li><a href="{{url('free-trial')}}">Free Trial</a></li>
                                <li><a href="{{url('blog')}}">Blog</a></li>
                                <li><a href="{{url('contact')}}">  Ccontact Us  </a></li>
                                <li><a href="{{url('kyc')}}"> KYC </a></li>
                                <li><a href="{{url('risk-tolrance')}}">  Risk Tolerance  </a></li>
                                 @foreach($pageMenu as $val)
                                <li><a href="{!! url('page/'.str_slug($val->title))!!}"><i class="fa fa-right"></i>{!! ucfirst($val->title)!!}</a>
                                </li>
                                 @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <div class="single-footer-widget">
                            <h3>CONTACT US</h3>
                            <div class="footer-contact-info">
                                <img src="{{url('assets/images/f-map.png')}}" alt="">
                                <span class="block">{{$company_address}}</span>
                            </div>
                            <div class="footer-contact-info">
                                <img src="{{url('assets/images/f-phone.png')}}" alt="">
                                <span class="block">Telephone : +91 9039921988<br>
                                Telephone : +91 9039921988</span>
                            </div>
                            <div class="footer-contact-info">
                                <img src="{{url('assets/images/f-globe.png')}}" alt="">
                                <span class="block">Email : info@prestigeresearch.in<br>
                                Web : www.prestigeresearch.in</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End of Footer Widget-area-->
        <!-- Start of Footer area -->
        <footer class="footer-area  text-center ptb-30">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer-text">
                            <span class="block" style="color:#000;font-family: sans-serif;">Copyright&copy; 2018  PrestigeResearch. All rights reserved.</span>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h2 class="modal-title" id="exampleModalLabel">2 Days Free Trial</h2>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true" style="
    position: absolute;
    top: 10px;
">&times;</span>
        </button>
      </div>
      <div class="modal-body"> 

        <div class="banner-right col-md-12 col-sm-12 jw-animate-gen animated fadeInRight" data-gen-offset="90%" data-gen="fadeInRight">
            <form method="post" action="{{url('freeTrial')}}">

                <input type="text" placeholder="Enter Name" name="name" required="" autofocus="true"> 

                <input type="number" placeholder="Enter 10 Digit Phone Number" name="phone" required="" maxlength="10" size="10" min="999999999">

                <input type="submit" class="submit trai-btn" value="Start My Free Trial Now!">

            </form> 

            </div>
             
        </form>
      </div>
      
    </div>
  </div>
</div>
        <!-- End of Footer area -->
        
        <!-- All js here -->
        <script src="{{url('assets/js/jquery-1.12.4.min.js')}}"></script>
        <script src="{{url('assets/js/bootstrap.min.js')}}"></script>
        <script src="{{url('assets/js/owl.carousel.min.js')}}"></script>
        <script src="{{url('assets/js/ajax-mail.js')}}"></script>
        <script src="{{url('assets/js/jquery.ajaxchimp.min.js')}}"></script>
        <script src="{{url('assets/js/jquery.magnific-popup.js')}}"></script>
        <script src="{{url('assets/js/counterup.js')}}"></script>  
        <script src="{{url('assets/js/plugins.js')}}"></script>
        <script src="{{url('assets/js/canvasjs.min.js"><')}}</script>
        <script src="{{url('assets/js/canvas-active.js')}}"></script>  
        <script src="{{url('assets/js/main.js')}}"></script>
         <script src="{{url('assets/js/modernizr-2.8.3.min.js')}}"></script>
         
        
    </body>
</html>
