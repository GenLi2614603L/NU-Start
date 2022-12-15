@extends('layouts.default')
@section('title', 'Support Our Work')
@section('page-content')
<!--=================================Welcome to Nu Start --> 
<section class="white-bg page-section-ptb">
   <div class="container">
      <div class="row">
         <div class="col-lg-6 p-tag">
            <div class="section-title">
               <h1 class="mb-30">Support Our Work</h1>
              
            </div>
            <p>This generation of young people face unprecedented challenges: pandemic-related mental health issues, underfunded youth centres and high youth unemployment. Alongside this, London still hosts the highest rate of child poverty in the UK. By choosing to support NU Start, you will help thousands of young people across the capital access vital support through their youth clubs and other community spaces – places where they feel safe, and choose to go.</p>
            <p>Your donations help sustain our life-changing programmes, allow us to continue supporting and training Youth Workers, and more.</p>
            <p>There are plenty of ways to get involved, whether you want to make a donation today, or independently raise money with your school, friends, or family…  Fancy a challenge? We’ve got events for that too!</p>
           
         </div>
         <div class="col-lg-6 sm-mt-50">
            <img class="img-fluid mx-auto" src="images/support-our-work.png" alt="">
         </div>
         <!--==========Service==========-->
            @include('layouts.service')
            <!--==========Service==========-->
      </div>
   </div>
</section>
<!--=================================Welcome to Nu Start --> 
@endsection