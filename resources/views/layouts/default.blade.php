<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
      <title>@yield('title')</title>
      <!-- Favicon -->
       <link rel="shortcut icon" href="{{ asset('images/nustart-fav.png')}}" />
      <!-- font -->
      <link  rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,500,500i,600,700,800,900|Poppins:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dosis:300,400,500,600,700,800">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
      <!-- Plugins -->
      <link rel="stylesheet" type="text/css" href="{{ asset('css/plugins-css.css')}}" />
      <!-- revoluation -->
      <link rel="stylesheet" type="text/css" href="{{ asset('revolution/css/settings.css')}}" media="screen" />
      <link rel="stylesheet" type="text/css" href="{{ asset('revolution/css/rev-slider-arrow.css')}}" media="screen" />
      <!-- Typography -->
      <link rel="stylesheet" type="text/css" href="{{ asset('css/typography.css')}}" />
      <!-- Shortcodes -->
      <link rel="stylesheet" type="text/css" href="{{ asset('css/shortcodes/shortcodes.css')}}" />
      <!-- Style -->
      <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}" />
      <!-- Responsive -->
      <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css')}}" />
   </head>
   <body>
      <div class="wrapper">
         <!--=================================
            preloader -->
         <!--<div id="pre-loader">
            <img src="{{ asset('images/pre-loader/loader-01.svg')}}" alt="">
         </div>-->
         <!--=================================
            preloader -->
         <!--=================================
            header -->
         <header id="header" class="header light fullWidth">
            <div class="head-top hidden-xs">
               <div class="container">
                  <div class="row" style="float:right;">
                      @guest
                          <a class="button x-small head-buton-blue" href="{{ url('/become-a-member') }}">Become a member</a>
                      @endguest
                      @if(auth()->check())
                          <a class="button x-small head-buton-blue" href="{{ route('become-a-member') }}">Become a member</a>
                      @endif
                     <a class="button x-small head-buton-orange" href="{{ route('donate') }}">Donate</a>
                     <!--<input type="text" class="head-search" placeholder="Search"> -->
                      <form class="top-search" action="#" style="line-height:100%;margin:auto;max-width:300px;margin-left:17px;">
                          <button type="submit" ><i class="fa fa-search" style="vertical-align: middle"></i></button>
                          <input type="text" style="line-height:100%" placeholder="Search" name="search">
                      </form>
                  </div>
               </div>
             </div>
            <!--=================================
               mega menu -->
            <div class="menu">
               <!-- menu start -->
               <nav id="menu" class="mega-menu">
                  <!-- menu list items container -->
                  <section class="menu-list-items">
                     <div class="container-fluid">
                        <div class="row">
                           <div class="col-lg-12 col-md-12">
                              <!-- menu logo -->
                              <ul class="menu-logo">
                                 <li>
                                    <a href="{{ url('/') }}"><img id="logo_img" src="{{ asset('images/nu-start-new-logo.png')}}" alt="logo"> </a>
                                 </li>
                              </ul>
                              <!-- menu links -->
                              <div class="menu-bar">
                                 <ul class="menu-links">
                                  <!--<li class="{{ request()->is('/') ? 'active' : '' }}"><a href="{{ url('/') }}">Home</a></li>-->
                                  <li><a href="javascript:void(0)">About Us <i class="fa fa-angle-down fa-indicator"></i></a>
                                    <ul class="drop-down-multilevel">
                                      <!--<li class="{{ request()->is('what-we-do') ? 'active' : '' }}"><a href="{{ route('what-we-do') }}">What We Do</a></li>-->
                                      <li class="{{ request()->is('mission-objectives') ? 'active' : '' }}"><a href="{{ route('mission-objectives') }}">Mission & Objectives</a></li>
                                      <li class="{{ request()->is('staff') ? 'active' : '' }}"><a href="{{ route('staff') }}">Our Team</a></li>
                                      <li class="{{ request()->is('our-impact') ? 'active' : '' }}"><a href="{{url('our-impact')}}">Our Impact </a></li>


                                      {{-- <li class="{{ request()->is('partnerships') ? 'active' : '' }}"><a href="{{route('partnerships')}}">Partnerships</a></li> --}}
                                    </ul>
                                  </li>
                                  <li><a href="/what-we-do">What We Do<i class="fa fa-angle-down fa-indicator"></i></a>
{{--                                  <li class="{{ request()->is('what-we-do') || request()->is('education') || request()->is('training-and-employment') || request()->is('enterprise') || request()->is('mental-health-and-wellbeing') ? 'active' : '' }}"><a href="{{ route('what-we-do') }}">What We Do <i class="fa fa-angle-down fa-indicator"></i></a>--}}
                                    <ul class="drop-down-multilevel">
                                      <li class="{{ request()->is('education') ? 'active' : '' }}"><a href="{{ route('education')}}">Promote Education</a></li>
                                      <li class="{{ request()->is('training-and-employment') ? 'active' : '' }}"><a href="{{ route('training-and-employment') }}">Training & Employment</a></li>
                                      <li class="{{ request()->is('enterprise') ? 'active' : '' }}"><a href="{{ route('enterprise') }}">Business & Enterprise</a></li>
                                      <li class="{{ request()->is('mental-health-and-wellbeing') ? 'active' : '' }}"><a href="{{ route('mental-health-and-wellbeing') }}">Mental health & Wellbeing</a></li>
                                    </ul>
                                  </li>
                                  <li class="{{ request()->is('news') ? 'active' : '' }}"><a href="{{route('news')}}">News & Events</a></li>
                                  <!--<li><a href="javascript:void(0)">projects <i class="fa fa-angle-down fa-indicator"></i></a>
                                    <ul class="drop-down-multilevel">
                                      <li><a href="">substance misuse</a></li>
                                      <li><a href="">youth crime</a></li>
                                    </ul>
                                  </li>-->
                                  <li class="{{ request()->is('creative') || request()->is('counselling') || request()->is('academic') || request()->is('elearning') || request()->is('trade') ? 'active' : '' }}"><a href="javascript:void(0)">Courses <i class="fa fa-angle-down fa-indicator"></i></a>
                                    <ul class="drop-down-multilevel">
                                      <li class="{{ request()->is('counselling') ? 'active' : '' }}" ><a href="{{url('counselling')}}">Counselling</a></li>
                                      <li class="{{ request()->is('creative') ? 'active' : '' }}" ><a href="{{url('creative')}}">Creative</a></li>
                                      <li class="{{ request()->is('academic') ? 'active' : '' }}"><a href="{{url('academic')}}">Academic</a></li>
                                      <!--<li><a href="">creative</a></li>
                                      <li><a href="">women only</a></li>
                                      <li><a href="">music production</a></li>
                                      <li><a href="">film production</a></li>-->
                                      <li class="{{ request()->is('elearning') ? 'active' : '' }}"><a href="{{url('elearning')}}">E-learning</a></li>
                                      <li class="{{ request()->is('trade') ? 'active' : '' }}"><a href="{{url('trade')}}">Learn A Trade</a></li>
                                      <!--<li><a href="">flyers</a></li>-->
                                    </ul>
                                  </li>
                                  <!--<li class="{{ request()->is('/volunteer') ? 'active' : '' }}"><a href="#">Volunteer </a></li>-->
                                  <li><a href="/supports-us">Support Us<i class="fa fa-angle-down fa-indicator"></i></a>
                                    <ul class="drop-down-multilevel">
                                      <li class="{{ request()->is('volunteer') ? 'active' : '' }}"><a href="{{ route('volunteer') }}">Volunteer</a></li>
                                      <li class="{{ request()->is('support-our-work') ? 'active' : '' }}"><a href="{{ route('support-our-work') }}">Support our work</a></li>
                                      <li class="{{ request()->is('fundraise-for-us') ? 'active' : '' }}"><a href="{{ route('fundraise-for-us') }}">Fundraise for us</a></li>
                                      <li class="{{ request()->is('corporate-partnerships') ? 'active' : '' }}"><a href="{{ route('corporate-partnerships') }}">Corporate Partnerships</a></li>
                                    </ul>
                                  </li>
                                  <!--<li><a href="">clients</a></li>-->
                                  <li  class="{{ request()->is('contact-us') ? 'active' : '' }}"><a href="{{url('contact-us')}}">Contact Us</a></li>
                                  <li><a href="javascript:void(0)">Account <i class="fa fa-angle-down fa-indicator"></i></a>
                                     <ul class="drop-down-multilevel">
                                         @if(auth()->check())
                                             <li>
                                                 <a href="/myaccount">My account</a>
                                             </li>
                                             <li>
                                                 <a href="/personal">Complete infos</a>
                                             </li>
                                             <li>
                                                 <a href="/become-a-member">Member</a>
                                             </li>
                                             <li>
                                                 <a href="/edit">My details</a>
                                             </li>
                                             <li>
                                                 <a href="/logout">Log out</a>
                                             </li>
                                         @else
                                             <li>
                                                 <a href="/register">Sign in</a>
                                             </li>
                                             <li>
                                                 <a href="/register">My account</a>
                                             </li>
                                             <li>
                                                 <a href="/register">Complete infos</a>
                                             </li>
                                             <li>
                                                 <a href="/become-a-member">Member</a>
                                             </li>
                                             <li>
                                                 <a href="/register">My details</a>
                                             </li>
                                         @endif


                                     </ul>
                                  </li>
                                 </ul>


                              </div>
                           </div>
                        </div>
                     </div>
                  </section>
               </nav>
               <!-- menu end -->
            </div>
         </header>
         <!--=================================
            header -->
         @yield('page-content')
         <!--=================================
            footer -->
         <!-- <footer class="footer page-section-pt black-bg">
            <div class="container">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="social-icons color-icon text-social social-inline clearfix xs-mb-20 text-center float-none">
                        <ul class="list-inline-item">
                           <li class="social-facebook"><a href="https://www.facebook.com/nustart/">  facebook  </a></li>
                           <li class="social-twitter"><a href="https://twitter.com/Nu_Start">  twitter  </a></li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="footer-widget mt-60 ">
                  <div class="row">
                     <div class="col-lg-12 text-center">
                        <p class="mt-15">
                           Registered in the UK : Company no. 06556836 : Registered Charity no. 1138047 : Nu Start &copy; 2012
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </footer> -->


<!--================================= Partnerships -->

<section class="pt-30">
   <div class="container-fluid">

      <div class="col-lg-12 col-md-12">
         <div class="section-title text-center">
            <h2 class="title-effect">Partnerships</h2>
            <p class="">CHECK OUT SOME OF OUR ASSOCIATES.</p>
          </div>

      </div>
      <div class="row">
         <div class="col-lg-12 col-md-12">
           <div class="clients-list  pb-30">
              <div class="owl-carousel" data-nav-dots="false" data-nav-arrow="true" data-items="6" data-md-items="4" data-sm-items="3" data-xs-items="2" data-xx-items="2">
                <div class="item">
                   <img class="img-fluid mx-auto" src="images/partnerships/new-1/Brent logo.png" alt="">
                </div>
                <div class="item">
                   <img class="img-fluid mx-auto" src="images/partnerships/new-1/cropped-abiblue-1.png" alt="">
                </div>
                <div class="item">
                   <img class="img-fluid mx-auto" src="images/partnerships/new-1/Default Logo copy.png" alt="">
                </div>
                <div class="item">
                   <img class="img-fluid mx-auto" src="images/partnerships/new-1/digital-white-background.png" alt="">
                </div>
                <div class="item">
                   <img class="img-fluid mx-auto" src="images/partnerships/new-1/Genesis.png" alt="">
                </div>
                <div class="item">
                   <img class="img-fluid mx-auto" src="images/partnerships/new-1/Lb_ealing_logo.svg.png" alt="">
                </div>
                <div class="item">
                   <img class="img-fluid mx-auto" src="images/partnerships/new-1/LCM Logo copy.png" alt="">
                </div>
                <div class="item">
                  <img class="img-fluid mx-auto" src="images/partnerships/new-1/logo_barnet.jpg" alt="">
               </div>
               <div class="item">
                  <img class="img-fluid mx-auto" src="images/partnerships/new-1/london-borough-of-hounslow.png" alt="">
               </div>
               <div class="item">
                  <img class="img-fluid mx-auto" src="images/partnerships/new-1/OCN-London-Logo.png" alt="">
               </div>
               <div class="item">
                  <img class="img-fluid mx-auto" src="images/partnerships/new-1/The_Prince_s_Trust-Logo.png" alt="">
               </div>
              </div>
           </div>

         </div>
      </div>
   </div>
 </section>


 <!--================================= Partnerships -->

 <!--================================= divider -->
 <!--<section class="action-box black-bg full-width">
   <div class="container">
      <div class="row">
         <div class="col-lg-12 col-md-12">
            <h3><strong> Contact :</strong> Nu Start Team</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            <a class="button button-border white" href="{{url('contact-us')}}">
            <span>Contact Us</span>
            <i class="fa fa-phone"></i>
            </a>
         </div>
      </div>
   </div>
</section>
 <!--================================= divider -->



  <!--=================================
  client -->
  <!--<section class="pt-30">
   <div class="container">
      <div class="col-lg-12 col-md-12">
         <div class="section-title text-center">
            <h2 class="title-effect">Clients</h2>
            <p class="">SOME OF OUR HAPPY CLIENTS..</p>
          </div>

      </div>
      <div class="row">
         <div class="col-lg-12 col-md-12">
           <div class="clients-list grayscale pb-30">
              <div class="owl-carousel" data-nav-dots="false" data-items="6" data-md-items="4" data-sm-items="3" data-xs-items="2" data-xx-items="2">
                <div class="item">
                   <img class="img-fluid mx-auto" src="images/clients/barnet-council.jpg" alt="">
                </div>
                <div class="item">
                   <img class="img-fluid mx-auto" src="images/clients/Hounslow-Council.jpg" alt="">
                </div>
                <div class="item">
                   <img class="img-fluid mx-auto" src="images/clients/Genesis-housing.jpg" alt="">
                </div>
                <div class="item">
                   <img class="img-fluid mx-auto" src="images/clients/Lemuel-Findlay-Supplementary-School.jpg" alt="">
                </div>
                <div class="item">
                   <img class="img-fluid mx-auto" src="images/clients/African-Families-Support-Services.jpg" alt="">
                </div>
                <div class="item">
                   <img class="img-fluid mx-auto" src="images/clients/Village-School.jpg" alt="">
                </div>
                <div class="item">
                   <img class="img-fluid mx-auto" src="images/clients/Barnet-Youth-and-Connexions.jpg" alt="">
                </div>
                <div class="item">
                  <img class="img-fluid mx-auto" src="images/clients/Stadium-housing.jpg" alt="">
               </div>
               <div class="item">
                  <img class="img-fluid mx-auto" src="images/clients/Brent-council.jpg" alt="">
               </div>

              </div>
           </div>
           <div class="divider"></div>
         </div>
      </div>
   </div>
 </section>
  <!--=================================
  client -->
         <footer class="footer page-section-pt black-bg">
          <div class="container">
            <div class="row">
                <div class="col-lg-2 col-sm-6 sm-mb-30">
                <div class="footer-useful-link footer-hedding">
                  <h6 class="text-white mb-30 mt-10 text-uppercase">Navigation</h6>
                  <ul>
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li><a href="{{url('what-we-do')}}">About Us</a></li>
                    <li><a href="{{url('news')}}">News & Events</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-2 col-sm-6 sm-mb-30">
                <div class="footer-useful-link footer-hedding">
                  <h6 class="text-white mb-30 mt-10 text-uppercase">Useful Link</h6>
                  <ul>
                    <li><a href="{{url('creative')}}">Creative</a></li>
                    <li><a href="{{url('contact-us')}}">Contact Us</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-lg-4 col-sm-6 xs-mb-30">
              <h6 class="text-white mb-30 mt-10 text-uppercase">Contact Us</h6>
              <ul class="addresss-info">
                  <li><i class="fa fa-map-marker"></i> <p>West World, West Gate, London, W5 1DT</p> </li>
                  <!--<li><i class="fa fa-phone"></i> <a href="tel:08703832151"> <span>08703832151 </span> </a> </li>-->
                  <li><i class="fa fa-envelope-o"></i>info@nustart.org</li>
                  <!--<li><i class="fa fa-skype"></i>Skype: nustart.org</li>-->
                </ul>
              </div>
              <div class="col-lg-4 col-sm-6">
                <h6 class="text-white mb-30 mt-10 text-uppercase">Subscribe to Our Newsletter</h6>
                  <p class="mb-30">Sign Up to our Newsletter to get the latest news and offers.</p>
                  <div class="footer-Newsletter">
                    <div id="mc_embed_signup_scroll">
                      <form action="php/mailchimp-action.php" method="POST" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate">
                      <div id="msg"> </div>
                        <div id="mc_embed_signup_scroll_2">
                          <input id="mce-EMAIL" class="form-control" type="text" placeholder="Email address" name="email1" value="">
                        </div>
                        <div id="mce-responses" class="clear">
                          <div class="response" id="mce-error-response" style="display:none"></div>
                          <div class="response" id="mce-success-response" style="display:none"></div>
                          </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                          <div style="position: absolute; left: -5000px;" aria-hidden="true">
                              <input type="text" name="b_b7ef45306f8b17781aa5ae58a_6b09f39a55" tabindex="-1" value="">
                          </div>
                          <div class="clear">
                            <button type="submit" name="submitbtn" id="mc-embedded-subscribe" class="button button-border mt-20 form-button">  Get notified </button>
                          </div>
                        </form>
                      </div>
                      </div>
                  </div>
                </div>
                <div class="footer-widget mt-20">
                  <div class="row">
                    <div class="col-lg-8 col-md-8">
                    <p class="mt-15"> Registered in the UK : Company no. 06556836 | Registered Charity no. 1138047  </p>
                    <p>Developed by Gen Li & Vannam</p>
                    </div>
                    <div class="col-lg-4 col-md-4 text-left text-md-right">
                    <!--  <div class="social-icons color-hover mt-10">
                      <ul>
                        <li class="social-facebook"><a href="https://www.facebook.com/nustart/"><i class="fa fa-facebook"></i></a></li>
                        <li class="social-twitter"><a href="https://twitter.com/Nu_Start"><i class="fa fa-twitter"></i></a></li>
                      </ul>
                    </div>-->
                        <div class="social-links">
                           <ul class="list-inline mt-5">
                             <li class="list-inline-item"><a href="https://www.facebook.com/nustart/"><i class="fa fa-facebook social-icon" aria-hidden="true"></i></a></li>
                             <li class="list-inline-item"><a href="https://twitter.com/Nu_Start"><i class="fa fa-twitter social-icon" aria-hidden="true"></i></a></li>
                             <li class="list-inline-item"><a href="https://www.instagram.com/nustartcommunity/"><i class="fa fa-instagram social-icon" aria-hidden="true"></i></a></li>
                             <li class="list-inline-item"><a href="https://www.linkedin.com/company/nu-start-community-enterprise/"><i class="fa fa-linkedin social-icon" aria-hidden="true"></i></a></li>
                             <li class="list-inline-item">
							 	<a href="https://www.tiktok.com/@nustartcommunity">
									<!--<img src="https://cdn-icons-png.flaticon.com/512/1946/1946552.png" class="social-icon fa-tiktok1">-->
									<i class="fab fa-tiktok social-icon"></i>
									<!--<div class="social-icon tiktoklogo">
										<i class="fab fa-tiktok"></i>
										<i class="fab fa-tiktok"></i>
									</div>-->
								</a>
							</li>
                           </ul>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
          </footer>
         <!--=================================
            footer -->
      </div>
      <div id="back-to-top"><a class="top arrow" href="#top"><i class="fa fa-angle-up"></i> <span>TOP</span></a></div>
      <!--=================================
         jquery -->
      <!-- jquery -->
      <script src="{{ asset('js/jquery-3.3.1.min.js')}}"></script>
      <!-- plugins-jquery -->
      <script src="{{ asset('js/plugins-jquery.js')}}"></script>
      <!-- plugin_path -->
      <script>var plugin_path = 'js/';</script>
      <!-- custom -->
      <script src="{{ asset('js/custom.js')}}"></script>

      <!-- REVOLUTION JS FILES -->
<script src="{{ asset('revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{ asset('revolution/js/jquery.themepunch.revolution.min.js')}}"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script src="{{ asset('revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script src="{{ asset('revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script src="{{ asset('revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script src="{{ asset('revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{ asset('revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script src="{{ asset('revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script src="{{ asset('revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script src="{{ asset('revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{ asset('revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
<script src="{{ asset('revolution/js/revolution.addon.typewriter.min.js')}}"></script>

<!--social icon-->
<style>
    .fa,
    .fas {
      font-family: 'FontAwesome';
    }

    .social-icon {
      color: #1a1a1a;
      background: #fff;
      font-size: 1em;
      border-radius: 0%;
      line-height: 2.2em;
      width: 2.1em;
      height: 2.1em;
      text-align: center;
      display: inline-block;
    }

    li:hover {
      transform: translateY(-4px);
      transition: 0.3s;
    }

    /* This is to center the icons on JSFiddle only. Don't use this code */
    .social-links {
      margin: 0 auto;
      /*padding: 3rem 0;*/
    }
    .fa-tiktok1 {
        color: #1a1a1a;
        background: #fff;
        width: 100%;
        padding: 5px;
    }


	.fa-tiktok {
	  color: #111111;

	  /*filter: drop-shadow(2px 0px 0px #FD3E3E) drop-shadow(-2px -2px 0px #4DE8F4);*/
	}
	.fa-tiktok:before{content:"\e07b"}
</style>

<!--social icon-->

<!--top search input-->
<style>
    .top-search button{
        height: 39px;
        width: 40px;
        border: 2px #036295 solid;
        border-right: none;
        background: transparent;
    }
    .top-search input{
        height: 39px;
        margin-left: -5px;
        border: 2px #036295 solid;
        border-left: none;
        position: relative;
        top: 0.7px;
    }
</style>
<!--top search input-->

<!-- revolution custom -->
<script src="{{ asset('revolution/js/revolution-custom.js')}}"></script>

<!-- custom -->
<script src="{{ asset('js/custom.js')}}"></script>



<script type="text/javascript">
                  var revapi84,
                tpj=jQuery;
            tpj(document).ready(function() {
        if(tpj("#rev_slider_84_1").revolution == undefined){
          revslider_showDoubleJqueryError("#rev_slider_84_1");
        }else{
          revapi84 = tpj("#rev_slider_84_1").show().revolution({
            sliderType:"standard",
            //jsFileLocation:"//localhost/revslider-standalone/revslider/public/assets/js/",
            sliderLayout:"fullscreen",
            dottedOverlay:"none",
            delay:4000,
            navigation: {
              keyboardNavigation:"off",
              keyboard_direction: "horizontal",
              mouseScrollNavigation:"off",
                             mouseScrollReverse:"default",
              onHoverStop:"off",
              touch:{
                touchenabled:"on",
                touchOnDesktop:"off",
                swipe_threshold: 75,
                swipe_min_touches: 1,
                swipe_direction: "horizontal",
                drag_block_vertical: false
              }
              ,
              arrows: {
                style:"uranus",
                enable:true,
                hide_onmobile:true,
                hide_under:768,
                hide_onleave:false,
                tmp:'',
                left: {
                  h_align:"left",
                  v_align:"center",
                  h_offset:20,
                                    v_offset:0
                },
                right: {
                  h_align:"right",
                  v_align:"center",
                  h_offset:20,
                                    v_offset:0
                }
              }
            },
            responsiveLevels:[1240,1024,778,480],
            visibilityLevels:[1240,1024,778,480],
            gridwidth:[1240,1024,778,480],
            gridheight:[868,768,960,600],
            lazyType:"none",
            shadow:0,
            spinner:"off",
            stopLoop:"on",
            stopAfterLoops:0,
            stopAtSlide:1,
            shuffle:"off",
            autoHeight:"off",
            fullScreenAutoWidth:"off",
            fullScreenAlignForce:"off",
            fullScreenOffsetContainer: "",
            fullScreenOffset: "60px",
            disableProgressBar:"on",
            hideThumbsOnMobile:"off",
            hideSliderAtLimit:0,
            hideCaptionAtLimit:0,
            hideAllCaptionAtLilmit:0,
            debugMode:false,
            fallbacks: {
              simplifyAll:"off",
              nextSlideOnWindowFocus:"off",
              disableFocusListener:false,
            }
          });
        }

                RsTypewriterAddOn(tpj, revapi84);
      }); /*ready*/
    </script>
   </body>
</html>
