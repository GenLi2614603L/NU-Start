@extends('layouts.default')
@section('title', 'Academic')
@section('page-content')
<!--=================================
 service -->

 <section class="blog blog-grid-3-column white-bg page-section-ptb">
  <div class="container">
    <div class="row">
    <!-- ======================blog========================== -->
     <div class="col-lg-4 col-md-6"id="card">
        <div class="blog-entry mb-50">
          <div class="entry-image clearfix">
              <img class="img-fluid blog-img" src="images/employability.png" style="height:250px" alt="">
          </div>
          <div class="blog-detail">
              <div class="entry-title mb-10">
{{--                  <a href="{{ url('the-employability-workplace-skills-programme')}}">--}}</a>
                      <h2 class="text-orange">The Employability & Workplace Skills Programme</h2>
              </div>
              <div class="entry-meta mb-10">
                  <ul>
                      <!--<li> <i class="fa fa-folder-open-o"></i> <a href="#"> Design,</a> <a href="#"> HTML5 </a> </li>-->
                      <!--<li><a href="#"><i class="fa fa-comment-o"></i> 5</a></li>
                      <li><a href="{{url('the-employability-workplace-skills-programme')}}"><i class="fa fa-calendar-o"></i> 12 May 2022</a></li>-->
                  </ul>
              </div>
              <div class="entry-content">
                  <p>The Employability and Workplace Skills Programme has been developed to provide learners with a range of knowledge, understanding, personal skills and attributes essential for successful performance in working life.</p>
              </div>
              <div class="entry-share clearfix">
                  <div class="entry-button pull-right">
                      <a class="button x-small" href="{{ url('the-employability-workplace-skills-programme')}}">Read More<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                  </div>

              </div>
          </div>
      </div>
      </div>
<!-- ======================blog========================== -->

    <!-- ======================blog========================== -->
     <div class="col-lg-4 col-md-6"id="card">
        <div class="blog-entry mb-50">
          <div class="entry-image clearfix">
              <img class="img-fluid blog-img" src="images/16_18_t3_topic_index_1200_720.jpeg" style="height:250px" alt="">
          </div>
          <div class="blog-detail">
              <div class="entry-title mb-10">
{{--                  <a href="{{url('business-and-enterprise-skills-programme')}}">--}}</a>
                      <h2 class="text-orange">Business and Enterprise Skills Programme</h2>
              </div>
              <div class="entry-meta mb-10">
                  <ul>
                      <!--<li> <i class="fa fa-folder-open-o"></i> <a href="#"> Design,</a> <a href="#"> HTML5 </a> </li>-->
                      <!--<li><a href="#"><i class="fa fa-comment-o"></i> 5</a></li>
                      <li><a href="{{url('the-money-management-programme')}}"><i class="fa fa-calendar-o"></i> 12 May 2022</a></li>-->
                  </ul>
              </div>
              <div class="entry-content">
                  <p>The Business and Enterprise Skills Programme has been developed to provide learners with an introduction to business and enterprise that includes a vocational and project-based element. The programme will appeal to learners who wish to pursue a career in the business and enterprise sector or progress onto further study. </p>
              </div>
              <div class="entry-share clearfix">
                  <div class="entry-button pull-right">
                      <a class="button x-small" href="{{url('business-and-enterprise-skills-programme')}}">Read More<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                  </div>
              </div>
          </div>
      </div>
      </div>
<!-- ======================blog========================== -->

 </div>

<!-- ================================================ -->
  </div>
 </section>


 <!--=================================academic -->
@endsection
