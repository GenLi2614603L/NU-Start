@extends('layouts.default')
@section('title', 'What We Do')
@section('page-content')
<section class="page-sidebar page-section-ptb">
    <div class="container">
      <div class="row">

         <div class="col-lg-9 col-md-8 page-content p-tag">
           <h1 class="mb-30">What We Do</h1>
           <p>
                We are a charitable organisation that provides opportunities for young people between the ages of 14 to 21, often marginalised young people coming from socio-economically disadvantaged backgrounds.
            </p>
            <p>
                We support, encourage and empower young people and their community to reach and fulfil their potential by tapping into resources that will allow young people to achieve, both economically, physically and educationally.
            </p>
            <p>
                In turn, our work in creating community projects, referring young people into work placements and educational based courses and developing positive role models, will as a consequence, benefit their peers, family and their surrounding community, which will lead to safer neighbourhood's, higher attainment and a better environment to live in.
            </p>
            <p>
                The organisation’s expertise is to tie in a number of multi-faceted interventions, which work seamlessly together by combining media engagement activities with social learning courses alongside nationally accredited qualificationsand added support by delivering counselling and 1-2-1 sessions in areas such as substance misuse, employment support, teenage pregnancy and criminal justice awareness interventions.
            </p>
         </div>
          <!-- left sidebar -->
          @include('layouts.left_sidebar')
          <!-- left sidebar -->
          <!--==========Service==========-->
          @include('layouts.service')
          <!--==========Service==========-->

      </div>
    </div>
  </section>


@endsection
