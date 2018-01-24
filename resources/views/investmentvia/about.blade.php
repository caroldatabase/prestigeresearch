
@extends('layouts.master')
@section('title', 'HOME')

@section('header')
<h1>Home</h1>
@stop
@section('content')
@include('partials/menu') 
@include('partials/titlebar')

<section id="about" class="padding">
  <div class="container aboutus">
    <div class="row">
      <div class="col-md-7 wow fadeInLeft animated" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInLeft;">
       <h2 class="heading heading_space"><span>Welcome </span>to Prestige Research  <span class="divider-left"></span></h2>
       <h4 class="bottom25">About Us </h4>
       <div class="bottom25">
          
       <p  style="text-align: justify">  <b> Prestige Research </b> is an ISO 9001-2001 registered one of the leading Stock Advisory Firm in Stock and Commodity Market. Our strong hold in providing the most accurate Tips makes us stand apart from our competitors. </p>

      <p  style="text-align: justify">Prestigeresearch is equipped with a team of the best and most experienced professionals who work with full devotion towards benefiting customers and helping them and their capital achieve new heights. Our analysis is solely based on the economic news and deep technical analysis done by our experts. We dedicatedly work for benefit of our personal and commercial trading clients by providing them best tips and information. We Provide all services through SMS and Instant Messenger. Our research is based around our services. </p>

      <p  style="text-align: justify">CapitalLife provide customized services to our clients as per their requirements irrespective of the size and type of their portfolio at very reasonable rates. For us, the first priority is profit of our clients and we achieve this by working constantly for them and their good. Our reliable services and transparent transactions help our clients achieve their stock related targets and stay with us for long time. CapitalLife Market Research is a SEBI Register Firm has been gained a foot strongly among Stock Advisory Companies & investment advisory Companies in India by giving the best research call and heavy one to one follow-ups. Now it has become most desirable Investment Advisory Firm who covers each & every segments of Equity market & Commodity market. We provides recommendations in Cash, F&O, traded in NSE, BSE, & Metal, Base Metal, Agri Commodity traded in MCX, NCDEX Exchange, Currency tips traded in Forex Exchange.</p>

        <p  style="text-align: justify">Our first priority is that each & every traders & investor do trade with confidence; there should not be any fear in their mind about trading. Our highly qualified research team is a treasure house of skills & knowledge who used their knowledge & research.</p>

        <p  style="text-align: justify">We have total customized services which every trader or investor can take advantage. Our areas of expertise are as follow:-</p>
        <p  style="text-align: justify">We Offers Free Trial In All Basic Services.</p>
        <p  style="text-align: justify">
        <ul style="list-style-type:square; margin-left: 30px">
        <li>Stock Tips</li>
        <li>Equity Tips</li>
        <li>Commodity Tips</li>
        <li>MCX Tips</li>
        <li>Ncdex Tips</li>
        <li>Forex Tips</li>
        <li>Premium Tips</li>
        <li>HNI Tips</li>
        <li>Positional Tips</li>
        </ul>
        </p>

        <p  style="text-align: justify">Our Executive gives their intense support & proper guidance to our clients for making huge profit by their trade. We believe that client’s satisfaction is the best reward for any Firm. So we deliver the best services that help our clients to grow their capital. We also provide daily & weekly news letter. You receive all services through SMS & instant messenger. </p> 



       </div>
      </div>
      <div class="col-md-5 wow fadeInRight animated" data-wow-delay="300ms" style="visibility: visible; animation-delay: 300ms; animation-name: fadeInRight;">
        <div class="image"> 
         <img src="{{ asset('storage/assets/images/news3.jpg')}}" alt="Xwin">
        </div>
        <br>
        <div class="image"> 
         <img src="{{ asset('storage/assets/images/news2.jpg')}}" alt="Xwin">
        </div>
      </div>
    </div>
  </div>
</section>
@stop