@extends('layouts.default')
@section('title', 'Education')
@section('page-content')
<!--=================================Welcome to Nu Start -->
<section class="white-bg page-section-ptb">
   <div class="container">
      <div class="row">
         <div class="col-lg-6 p-tag">
            <div class="section-title">
               <h1 class="mb-30">Education</h1>
            </div>
            <p>
                An education that opens young minds to a world of possibilities is a fundamental human right. For more than 10 years, NU Start and our Education and Youth Development division have gathered the expertise and supportive evidence to develop academic initiatives that address the specific social and cultural needs of young people. We provide intellectually stimulating and character-building educational opportunities not always found in the classroom.
            </p>
            <p>
                Every young person deserves the best start in life – regardless of background or where they reside. We work with teachers, schools, and other organisations, helping disadvantaged young people in the UK to fulfil their true potential.
            </p>
            <p>
                We fund dozens of educational projects all aimed at improving outcomes for the most disadvantaged and levelling the playing field for all young people.
            </p>
            <p>
                We back great ideas in the classroom and work with others in the areas of greatest need to drive change that is locally led.
            </p>
        </div>
         <div class="col-lg-6 sm-mt-50">
            <img class="img-fluid mx-auto" src="images/education.jpg" alt="">
         </div>
          <div class="row page-section-ptb">
              <div class="col-lg-12 col-md-12" style="padding:1%">
                  <div>
                      @include('layouts.service')
                  </div>
              </div>
          </div>
         <!--==========Service==========-->
            <!--==========Service==========-->
      </div>
   </div>
</section>
<!--=================================Welcome to Nu Start -->
@endsection
