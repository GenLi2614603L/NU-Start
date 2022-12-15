@extends('layouts.default')
@section('title', 'E-Learning')
@section('page-content')
<!--=================================
 Coming Soon-->

 <section class="white-bg page-section-ptb">
    <div class="container">
      <div class="row justify-content-center">
         <div class="col-lg-8">
         <div class="section-title text-center">
            <h6>We are</h6>
            <h2 class="title-effect">Coming soon</h2>
            <p>We are currently working on a website and won't take long. Don't forget to check out our Social updates.</p>
          </div>
          </div>
          </div>
          <div class="row">
            <div class="col-lg-12 text-center">
              <div class="countdown large">
               <span class="theme-color days">00</span>
                 <p class="days_ref">days</p>
              </div>
             <div class="countdown large">
                <span class="theme-color hours">00</span>
                <p class="hours_ref">hours</p>
             </div>
             <div class="countdown large">  
                <span class="theme-color minutes">00</span>
                <p class="minutes_ref">minutes</p>
               </div>
               <div class="countdown large">
                <span class="theme-color seconds">00</span>
                <p class="seconds_ref">seconds</p>
           </div>
            <div class="coming-soon-form contact-form text-center clearfix mt-30">
               <a href="{{url('contact-us')}}" class="button button-border">Contact us</a>
           </div>
         </div>
        </div>
    </div>
   </section>
  
  <!--=================================
   Coming Soon-->
   
@endsection