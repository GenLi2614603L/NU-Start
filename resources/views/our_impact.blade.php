@extends('layouts.default')
@section('title', 'Our Impact | Nu Start Community Enterprise')
@section('page-content')
<!--=================================Donate -->
<section class="white-bg page-section-ptb">
    <div class="container">
        <div class="col-md-12 col-lg-12 p-tag">
            <h1 class="mb-30" style="color:#F6871B;">Our Impact</h1>
            <p>We have supported thousands of young people to take part in opportunities that enabled them to gain the skills and experiences to help them succeed.</p>
            <p>Developing and replicating successful, innovative initiatives to engage young people and delivering to a high level, by trained industry professionals, is paramount to us. We want our organisation and its associated initiatives to make a difference, with as wide an impact as possible.</p>
            <p>All across the UK, young people want to progress; have fun and learn; be healthy; be creative; make positive changes; and shape the kind of city they want for the future.</p>
            <h3 class="mb-30 text-orange">We want all young Londoners to:</h3>


                <ul class="list list-unstyled mb-30" style="font-size: 16px;color: #000;">
                   <li> <i class="fa fa-chevron-circle-right"></i> Grow up physically and emotionally strong.</li>
                   <li> <i class="fa fa-chevron-circle-right"></i> Have the skills, knowledge and networks to identify and work towards their career goals.</li>
                   <li> <i class="fa fa-chevron-circle-right"></i> Be inspired and enabled to make a positive contribution to their communities.</li>
                 </ul>

            <p>As we face unprecedented turmoil from a pandemic, we remain committed to proactively removing the social and economic barriers that negatively impact communities across the country.</p>
            <p>Through our initiatives, young people also develop their social and emotional capabilities critical for well-being, and personal development. Over 70% of young people improved their social and emotional capabilities and life skills during our weekly activities.</p>
            <p>All our initiatives are underpinned by a strong focus on education and supporting young people to develop skills needed to succeed in their future careers, providing opportunities for the next generation of leaders.</p>
            <p>Our expertise is to tie in a number of multi-faceted interventions, which work seamlessly together by combining media engagement activities with social learning courses alongside nationally accredited qualifications and added support by delivering counselling and 1-2-1 sessions.</p>
        </div>
    </div>
</section>
<!--=================================Donate -->

<!--=================================counter=======-->
<section class="page-section-ptb text-center">
 <div class="container">
      <h1 class="mb-50 theme-color">Last year, we supported:</h1>
  <div class="row">
       <div class="col-lg-4 col-sm-6 sm-mb-30">
         <div class="counter big-counter text-orange">
          <span class="timer" data-to="356" data-speed="1000">356</span>
          <h3 class="text-orange">Organisation</h3>
        </div>

        </div>
       <div class="col-lg-4 col-sm-6 sm-mb-30">
       <div class="counter big-counter theme-color">
          <span class="timer" data-to="3750" data-speed="1000">3750</span>
          <h3 class="theme-color">Young People</h3>
        </div>
       </div>
       <div class="col-lg-4 col-sm-6 xs-mb-30">
      <div class="counter big-counter text-orange">
          <span class="timer" data-to="152" data-speed="1000">152</span>
          <h3 class="text-orange">Professional</h3>
        </div>
       </div>

    </div>
 </div>
</section>
<!--=================================counter=======-->
@include('layouts.service')
@endsection
