@extends('layouts.default')
@section('title', 'Donation | Nu Start Community Enterprise')
@section('page-content')
<!--=================================Donate -->
<section class="about-05-split split-section gray-bg page-section-ptb">
  <div class="side-background">
    <div class="col-lg-6 img-side img-right">
      <div class="img-holder img-cover" style="background: url(images/donate-image.jpg) no-repeat;">
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-5 sm-mb-30">
        <div class="shop-split-content2 p-tag">
          
          <h2 class="mt-10">Big or small, your support will give young people brighter futures</h2>
          <p>
              It will help fund our engagement programs for young people in the Arts, Mental-Health, Education, Employability, Enterprise and Social Action. Free of charge, we give young people the opportunities to learn crucial life-skills, improve well-being and create lasting relationships.
          </p>
          <p>
              Our work is made possible by your kind donations. Your support allows us to continue to expand our reach and provide services free of charge to individuals in need.
          </p>
          <p>
              Join us in empowering communities and changing lives today.
          </p>
          <p>
              Please help us to continue the successful delivery of our community based initiatives, by making a donation via:
              <br>
              <b>Post</b>
              <br>
              If you want to donate cheque or postal order please send them to:<br>
              NU Start Community Enterprise
            West World<br>
            West Gate<br>
            London W5 1DT

          </p>
          <form action="https://www.paypal.com/donate" method="post" target="_top">
            <input type="hidden" name="hosted_button_id" value="KJ44NVB4NVMMJ" />
            <input type="image" src="https://www.paypalobjects.com/en_US/GB/i/btn/btn_donateCC_LG.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
            <img alt="" border="0" src="https://www.paypal.com/en_GB/i/scr/pixel.gif" width="1" height="1" />
        </form>
        <p>
            <b>Bank Transfers</b><br>
            NU Start Community Enterprise <br>
            A/C No. 43668863<br>
            S/C: 09-06-66

        </p>
          <!--<a class="button mt-20 button  head-buton-orange" href="#"> <i class="fa fa-lock"></i> Donate Now</a>
          <a class="button mt-20 button  head-buton-orange" href="#"> <i class="fa fa-lock"></i> Give Monthly</a>-->
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================Donate -->
@endsection