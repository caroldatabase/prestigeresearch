
  <!-- Header Area Start -->
        <header class="header-two-area">
         
            <div class="header-main bg-green white">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="logo-wrapper">
                                <div class="logo">
                                    <a href="/"><img src="{{url('assets/images/logo.png')}}" alt="PRESTIGE" /></a>
                                </div>
                            </div>
                            <div class="header-main-content">
                                <div class="header-info">
                                    <img src="{{url('assets/images/phone.png')}}" alt="">
                                    <div class="header-info-text">
                                        <h4>+91 9039921988</h4>
                                        <span>We are open 9 am - 7pm</span>
                                    </div>
                                </div>
                                <div class="header-info">
                                    <img src="{{url('assets/images/message.png')}}" alt="">
                                    <div class="header-info-text" style="font-size: 14px">
                                        <h4 style="font-size: 14px">info@prestigeresearch.com</h4>
                                        <span>You can mail us</span>
                                    </div>
                                </div>
                            </div>
                            <div class="quote-btn">
                                <button>FREE TRIAL</button>
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
            <!-- Main Menu Area Start -->
            <div class="mainmenu-area fixed header-sticky hidden-xs">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-xs-12">
                            <div class="main-menu text-center">
                                <nav>
                                    <ul>
                                        <li><a href="{{url('/')}}">HOME</a>
                                             
                                        </li>
                                        <li><a href="{{url('about')}}">ABOUT US</a>
                                            <ul class="submenu">
                                                <li><a href="{{url('about')}}">Company</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{url('services')}}">SERVICES</a>
                                           <!--  <ul class="submenu megamenu">
                                                <li><a href="#">Megamenu List</a>
                                                    <ul>
                                                        <li><a href="#">ABOUT US</a></li> 
                                                        <li><a href="#">About Us 2</a></li>
                                                        <li><a href="#">Service</a></li>
                                                        <li><a href="#">Service 2</a></li>
                                                        <li><a href="#">Single Service</a></li>
                                                    </ul>
                                                </li>
                                               <li><a href="#">Megamenu List</a>
                                                    <ul>
                                                        <li><a href="#">ABOUT US</a></li>
                                                        <li><a href="#">About Us 2</a></li>
                                                        <li><a href="#">Service</a></li>
                                                        <li><a href="#">Service 2</a></li>
                                                        <li><a href="#">Single Service</a></li>
                                                    </ul>
                                                </li>
                                                
                                            </ul> -->
                                        </li>
                                        <li><a href="{{url('payment')}}">PAYMENT</a>
                                            
                                        </li>
                                        <li><a href="{{url('pricing')}}">PRICING</a>
                                            
                                        </li>
                                        <li><a href="{{url('free-trial')}}">FREE TRIAL</a>
                                            
                                        </li>
                                        <li><a href="{{url('blog')}}">BLOG</a></li>
                                        <li><a href="c{{url('contact')}}">CONTACT</a></li>
                                        <li><a href="">MORE</a>
                                            <ul class="submenu">
                                                <li><a href="{{url('faq')}}"> FAQ </a></li>
                                                <li><a href="{{url('career')}}">  Career  </a></li>
                                                <li><a href="{{url('kyc')}}"> KYC </a></li>
                                                <li><a href="{{url('risk-tolrance')}}">  Risk Tolerance  </a></li>
                                                   @foreach($pageMenu as $val)
                                              <li><a href="{!! url('page/'.str_slug($val->title))!!}"><i class="fa fa-right"></i>{!! ucfirst($val->title)!!}</a></li>
                                             @endforeach
                                                
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Main Menu Area Start -->
            <!-- Mobile Menu Area start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul>
                                        <li><a href="{{url('/')}}">HOME</a>
                                            
                                        </li>
                                        <li><a href="{{url('about')}}">ABOUT US</a>
                                            
                                        </li>
                                        <li><a href="{{url('services')}}">SERVICES</a>
                                        </li>
                                        <li><a href="{{url('payment')}}">PAYMENT</a>
                                            
                                        </li>
                                        <li><a href="{{url('pricing')}}">PRICING</a>
                                            
                                        </li>
                                        <li><a href="{{url('free-trial')}}">PACKAGES</a>
                                            
                                        </li>
                                        <li><a href="{{url('blog')}}">BLOG</a></li>
                                        <li><a href="{{url('contact')}}">CONTACT</a></li>
                                        
                                        <li><a href="">MORE</a>
                                            <ul class="submenu">
                                                <li><a href="{{url('faq')}}"> FAQ </a></li>
                                                <li><a href="{{url('career')}}">  Career  </a></li>
                                                <li><a href="{{url('kyc')}}"> KYC </a></li>
                                                <li><a href="{{url('risk-tolrance')}}">  Risk Tolerance  </a></li>
                                                 @foreach($pageMenu as $val)
                                              <li><a href="{!! url('page/'.str_slug($val->title))!!}"><i class="fa fa-right"></i>{!! ucfirst($val->title)!!}</a></li>
                                             @endforeach
 
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>                  
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu Area end --> 
        </header>
        <!-- Header Area End -->
             