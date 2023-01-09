@extends('layouts.default')
@section('title', 'Courses')
@section('page-content')
<section class="blog blog-grid-3-column white-bg page-section-ptb">
  <div class="container">
      <div class="section-title">
          <h1 class="mb-30"style="color:#F6871B;">Creative</h1>

      </div>
    <div class="row">
    <!-- ======================blog========================== -->
     <div class="col-lg-4 col-md-6"id="card">
        <div class="blog-entry mb-50">
          <div class="entry-image clearfix">
              <img class="img-fluid blog-img" src="images/Creative-Media.jpeg" alt="">
          </div>
          <div class="blog-detail">
              <div class="entry-title mb-10">
                  <a href="#"><h2 class="text-orange">Creative Media Production 	</h2></a>
              </div>
              <div class="entry-content">
                  <p>
					This programme has been developed to provide learners with a range of knowledge, understanding Creative Media Production ; you’ll learn about the roles of a director, cinematographer, editor, history and science of still cameras, types of light, types of grips and gears, camera angles and everything that makes one a great cinematographer.
				  </p>
              </div>

              <div class="entry-share clearfix">
                  <div class="entry-button pull-right">
                      <a class="button x-small" href="{{url('creative-media-production')}}">Read More <i class="fa fa-angle-right" aria-hidden="true"></i></a>
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
<!--<section>
    <div class="container mt-40">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-md-3">
                    <div class="course-entry">
                        <div class="course-img">
                            <img class="img-fluid" src="images/Creative-Media.jpeg" alt="">
                        </div>
                        <div class="course-content">
                            <h3>Video Production Level 1</h3>

                        </div>
                        <div class="course-footer">
                            <a class="button arrow pull-left">Apply Online <i class="fa fa-angle-right" aria-hidden="true"></i> </a>
                            <a class="button x-small pull-right">Read More..</a>
                        </div>
                    </div>
                </div>
            </div>.
			<div class="isotope columns-4 popup-gallery" style="position: relative; height: 2995.46px;">
				<div class="grid-item slider full-screen scroll-navigation front-page parallax HTML5" style="position: absolute; left: 0px; top: 0px;">
					<div class="portfolio-item rs-hero">
					  <a href="revslider-fashion14.html" target="_blank" class="d-block">
						<img src="images/Creative-Media.jpeg" alt="">
					  </a>
					</div>
				</div>
			</div>
        </div>
    </div>
</section>-->


@endsection
