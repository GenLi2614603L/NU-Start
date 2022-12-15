@extends('layouts.default')
@section('title', 'Fundraise for us')
@section('page-content')
<!--=================================Welcome to Nu Start --> 
<section class="white-bg page-section-ptb">
   <div class="container">
      <div class="row">
         <div class="col-lg-6 p-tag">
            <div class="section-title">
               <h1 class="mb-30">Fundraise for us</h1>
              
            </div>
            <p>Whether you’re an experienced fundraiser or you’re looking for a new challenge, there is always something for you!</p>
            <p>
                Why NU Start? London hosts the highest rates of child poverty, child obesity and youth unemployment in the UK. Simply, no child should face these struggles.
            </p>
            <p>
                Take a look at some of the fantastic ways that you can get involved.
            </p>
            <p>
                And remember, big or small, every fundraiser you lead will help create brighter futures for disadvantaged young people in London.
            </p>
            <p>Every young person deserves the chance to be the best they can be.</p>
            <p>Got your own ideas? We’d love to support you! <br>Email our Fundraising Manager, <a href="mailto:nicole.reyes@nustart.org">nicole.reyes@nustart.org</a> 
</p>
         </div>
         <div class="col-lg-6 sm-mt-50">
            <img class="img-fluid mx-auto" src="images/fundraise-for-us.png" alt="">
         </div>
         <!--==========Service==========-->
            @include('layouts.service')
            <!--==========Service==========-->
      </div>
   </div>
</section>
<!--=================================Welcome to Nu Start --> 
@endsection