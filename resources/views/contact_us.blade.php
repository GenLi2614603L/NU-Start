@extends('layouts.default')
@section('title', 'Contact us')
@section('page-content')
<!--=================================
 contact-->

 <section class="theme-bg contact-2 clearfix o-hidden">

   <div class="container">
       <div class="container-fluid pos-r">
           <div class="row">
               <div class="col-lg-6 map-side g-map1 map-right" id="map1" data-type='black'>
                   <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2480.261040773131!2d-0.3026412847972646!3d51.56344791442546!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487613ceb4f74c7f%3A0xb35bd8201056b8c9!2sCourtenay%20Rd%2C%20East%20Ln%2C%20Wembley%20HA9%207ND%2C%20UK!5e0!3m2!1sen!2sin!4v1649083770310!5m2!1sen!2sin" width="690" height="630" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>-->
                   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2482.007126852463!2d-0.30080248467162135!3d51.53142911676773!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761216e869753f%3A0x80f82c4a338cb85!2sWest%20World!5e0!3m2!1sen!2suk!4v1655229159378!5m2!1sen!2suk" width="690" height="440" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
               </div>
           </div>
       </div>
   <div class="row">
       <div class="col-lg-5">
       <div class="contact-3-info page-section-ptb text-white">
        <div class="clearfix">
        <h6 class="text-white">Our Offices</h6>
            <h2 class="text-white">Contact Info</h2>
            <p class="mb-50 text-white">Nu Start Community Enterprise supports, encourages and empowers young people and their community to reach and fulfil their potential by tapping into resources that will allow young people to achieve, both economically, physically and educationally.</p>

            <ul class="addresss-info list-unstyled">
             <li><i class="ti-map-alt"></i> <p>West World, West Gate, London, W5 1DT</p> </li>
             <!--<li><i class="ti-mobile"></i>Phone: 08703832151</li>-->
             <li><i class="ti-email"></i> info@nustart.org</li>
             <!--<li><i class="fa fa-skype"></i>Skype. nustart.org</li>-->
           </ul>
           <!--<div class="social-icons social-border rounded color-hover mt-50">
                 <ul>
                   <li class="social-facebook"><a href="https://www.facebook.com/nustart/"  target="_blank"><i class="fa fa-facebook"></i></a></li>
                   <li class="social-twitter"><a href="https://twitter.com/Nu_Start" target="_blank"><i class="fa fa-twitter"></i></a></li>
                   {{-- <li class="social-dribbble"><a href="#"><i class="fa fa-dribbble"></i> </a></li>
                   <li class="social-vimeo"><a href="#"><i class="fa fa-vimeo"></i> </a></li>
                   <li class="social-pinterest"><a href="#"><i class="fa fa-pinterest-p"></i> </a></li>
                   <li class="social-behance"><a href="#"><i class="fa fa-behance"></i> </a></li> --}}
                   <li class="social-linkedin"><a href="https://www.linkedin.com/company/nu-start-community-enterprise/" target="_blank"><i class="fa fa-linkedin"></i> </a></li>
                 </ul>
              </div>-->
                <div class="social-links color-hover mt-50">
                   <ul class="list-inline mt-5">
                     <li class="list-inline-item"><a href="https://www.facebook.com/nustart/"><i class="fa fa-facebook social-icon" aria-hidden="true"></i></a></li>
                     <li class="list-inline-item"><a href="https://twitter.com/Nu_Start"><i class="fa fa-twitter social-icon" aria-hidden="true"></i></a></li>
                     <li class="list-inline-item"><a href="https://www.linkedin.com/company/nu-start-community-enterprise/"><i class="fa fa-linkedin social-icon" aria-hidden="true"></i></a></li>
                     <li class="list-inline-item"><a href="https://www.instagram.com/nustartcommunity/"><i class="fa fa-instagram social-icon" aria-hidden="true"></i></a></li>
                     <li class="list-inline-item"><a href="https://www.tiktok.com/@nustartcommunity"><i class="fab fa-tiktok social-icon"></i></a></li>
                   </ul>
                </div>
             </div>
          </div>
       </div>
      </div>
     </div>
 </section>

 <section class="page-section-ptb contact-2">
   <div class="container">
   <div class="row justify-content-center text-center mb-50">
   <div class="col-md-8">
       <div class="section-title">
       <h6>let's work together</h6>
        <h2 class="title-effect">Get in touch with us.</h2>
        </div>
    </div>
    </div>
   <div class="row">
   <div class="col-lg-12">
     <div id="formmessage">Success/Error Message Goes Here</div>
     @if(session()->has('success'))
      <p class="alert alert-success">
        {{session()->get('success')}}
      </p>
     @endif
      <form role="form" method="post" action="{{url('contactForm')}}">
        @csrf
       <div class="contact-form clearfix">
         <div class="section-field">
           <input id="name" type="text" placeholder="Name*" class="form-control"  name="name">
            @if($errors->has('name'))
                <span class="error">{{ $errors->first('name')}}</span>
            @endif
          </div>
          <div class="section-field">
            <input type="email" placeholder="Email*" class="form-control" name="email">
            @if($errors->has('email'))
                <span class="error">{{ $errors->first('email')}}</span>
            @endif
           </div>
          <div class="section-field">
             <input type="text" placeholder="Phone*" class="form-control" name="phone">
            @if($errors->has('phone'))
                <span class="error">{{ $errors->first('phone')}}</span>
            @endif
           </div>
          <div class="section-field textarea">
            <textarea class="input-message form-control" placeholder="Comment*"  rows="7" name="message"></textarea>
           </div>
             <!-- Google reCaptch-->
             <!-- <div class="g-recaptcha section-field clearfix" data-sitekey="[Add your site key]"></div> -->
             <div class="section-field submit-button">
                 <input type="hidden" name="action" value="sendEmail"/>
                <button type="submit" value="Send" class="button"><span> Send message </span> <i class="fa fa-paper-plane"></i></button>
            </div>
           </div>
         </form>
        {{-- <div id="ajaxloader" style="display:none"><img class="mx-auto mt-30 mb-30 d-block" src="images/pre-loader/loader-02.svg" alt=""></div> --}}
       </div>
      </div>
     </div>
 </section>

 <!--=================================
  contact-->
@endsection
<style>
    .error{
        color:red;
    }
</style>
