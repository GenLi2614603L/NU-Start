@extends('layouts.default')
@section('title', 'What We Do')
@section('page-content')
    <style>
        .wwd-box{
            border:1px;
            /*background-color: whitesmoke;*/
        }
        .wwd-content{
            position:absolute;
            padding:1%;
            width:100%;
        }

        .wwd-content li{
            /*color:#F6871B;*/
            color:white;
            font-family: "poppins",sans-serif;
            font-size:1.2rem;
            /*text-decoration: underline;*/
            margin-top:1%;

        }

        .wwd-img{
            width:100%;
            padding:1%;
            position:relative;
            opacity: 0.95;
            border-radius: 20px;
        }

        .find-btn:hover{
            text-decoration: underline;
            /*text-decoration-color: white;*/
        }

        .wwd-title{
            margin-top:10%;
            color:#F6871B;
            /*color:white;*/
            margin-left:12%;
            font-size:2.5rem;
        }

        .wwd-list-1{
            margin-top:6%;
            margin-left:5%;
        }

        .wwd-list-2{
            margin-top:6%;
            margin-left:5%;
        }

        .wwd-list-3{
            margin-top:11%;
            margin-left:25%;
        }

        .wwd-list-4{
            margin-top:8%;
            margin-left:5%;
        }

        .wwd-bg{
            padding:10px;
            margin-right:35%;
            background-color: rgb(10 98 146 / 49%);
        }
        .wwd-bg2{
            padding:10px;
            margin-right:30%;
            background-color: rgb(129 95 33 / 49%);
        }
        .wwd-bg3{
            padding:10px;
            margin-right:5%;
            background-color: rgb(129 95 33 / 49%);
        }
        .wwd-bg4{
            padding:10px;
            margin-right:60%;
            background-color: rgb(10 98 146 / 49%);
        }

        @media (max-width:1000px){
            .find-btn{
                display:none
            }

            .wwd-title {
                font-size:2rem;
            }

            .wwd-content li{
                font-size:1rem;
            }

            .wwd-list-3{
                margin-top:11%;
                margin-left:6%;
            }
        }

        @media (max-width:700px){
            .wwd-title {
                font-size:1.5rem;
            }

            .wwd-content li{
                font-size:0.7rem;
            }

            .wwd-list-3{
                margin-left:6%;
            }

            .wwd-bg{
                padding:1px;
            }
            .wwd-bg4{
                padding:1px;
            }
            .wwd-bg2{
                padding:0px;
                margin-right:30%;
            }

            .wwd-bg3{
                padding:0px;
                margin-right:18%;
            }
        }

        @media (max-width:500px){

            .wwd-title {
                font-size:1.2rem;
                margin-top:5%;
                font-weight:0;
            }

            .wwd-content li{
                font-size:0.5rem;
            }

            .wwd-list-1{
                margin-top:3%;
                margin-left:5%;
            }

            .wwd-list-2{
                margin-top:3%;
                margin-left:5%;
            }

            .wwd-list-3{
                margin-top:8%;
                margin-left:5%;
            }

            .wwd-list-4{
                margin-top:3%;
                margin-left:5%;
            }

            .wwd-bg{
                padding:2px;
                margin-right:30%;
            }
            .wwd-bg2{
                padding:2px;
                margin-right:15%;
            }
            .wwd-bg3{
                padding:2px;
                margin-right:20%;
            }
            .wwd-bg4{
                padding:2px;
                margin-right:50%;
            }
        }

        @media (max-width:380px){

            .wwd-title {
                font-size:1rem;
                margin-top:5%;
                font-weight:0;
            }

            .wwd-content li{
                display:none
            }

            .wwd-list-1{
                display:none
            }

            .wwd-list-2{
                display:none
            }

            .wwd-list-3{
                display:none
            }

            .wwd-list-4{
                display:none
            }


        }

    </style>
<section class="page-sidebar page-section-ptb">
    <div class="container">
      <div class="row">
          <div class="row col-lg-12 p-tag">
              <div class="row col-lg-9" style="margin-left:1%">
                  <h1 class="mb-20" style="color:#F6871B;">What We Do</h1>
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
                    @include('layouts.left_sidebar')
          </div>
          <div class="row wwd-box col-lg-12 p-tag">
                <img class="wwd-img" src="images/what-we-do-index/what-we-do-edu.jpg" alt="">
                <div class="wwd-content col-lg-12 p-tag">
                    <a href="/education"><h1 class="wwd-title mb-20">Education</h1></a>
                            <ul class="wwd-list-1 p-tag list-unstyled">
                                <div class="wwd-bg">
                                    <li><i class="fa fa-hand-o-right"></i>
                                        Specific social and cultural needs of young people
                                    </li>
                                    <li><i class="fa fa-hand-o-right"></i>
                                        Helping disadvantaged young people in the UK
                                    </li>
                                    <li><i class="fa fa-hand-o-right"></i>
                                        Funded educational projects
                                    </li>
                                    <li><i class="fa fa-hand-o-right"></i>
                                        Work with others to drive change that is locally led.
                                    </li>
                                </div>
                            </ul>

                    <a href="/education"><p class="find-btn p-tag" style="margin-left:5%;margin-top:8%;font-size:1.8rem;color:#F6871B;font-weight: bolder">Find out more</p></a>
                </div>
          </div>
          <div class="row wwd-box col-lg-12 p-tag">
              <img class="wwd-img" src="images/what-we-do-index/what-we-do-training.jpg" alt="">
              <div class="wwd-content col-lg-12 p-tag">
                  <div>
                      <a href="/training-and-employment"><h1 class="wwd-title mb-20" style="margin-left: 50%;">Training & Employment</h1></a>
                      <ul class="wwd-list-2 p-tag list-unstyled">
                          <div class="wwd-bg2">
                              <li><i class="fa fa-hand-o-right"></i>
                                  Training the skills to enter the workplace
                              </li>
                              <li><i class="fa fa-hand-o-right"></i>
                                  Providing Employment Training and Skills (ETS) courses with certification
                              </li>
                              <li><i class="fa fa-hand-o-right"></i>
                                  Matching Flexible & Professional initiative
                              </li>
                          </div>
                      </ul>
                  </div>

                  <a href="/training-and-employment"><p class="find-btn p-tag"style="margin-left:5%;margin-top:8%;font-size:1.8rem;color:#F6871B;font-weight: bolder">Find out more</p></a>
              </div>
          </div>
          <div class="row wwd-box col-lg-12 p-tag">
              <img class="wwd-img" src="images/what-we-do-index/what-we-do-enterprise.jpg" alt="">
              <div class="wwd-content col-lg-12 p-tag">
                  <a href="/enterprise"><h1 class="wwd-title mb-20">Enterprise</h1></a>
                  <ul class="wwd-list-3 p-tag list-unstyled">
                      <div class="wwd-bg3">
                          <li><i class="fa fa-hand-o-right"></i>
                              Tailored support, community and partnerships to entrepreneurs
                          </li>
                          <li><i class="fa fa-hand-o-right"></i>
                              Unique approach to entrepreneurship support activities
                          </li>
                          <li><i class="fa fa-hand-o-right"></i>
                              NU Start's enterprise program for business start-ups
                          </li>
                          <li><i class="fa fa-hand-o-right"></i>
                              Support young people to set up student company
                          </li>
                      </div>
                  </ul>
                  <a href="/enterprise"><p class="find-btn p-tag" style="float:right;margin-right:6%;margin-top:2%;font-size:1.8rem;color:#F6871B;font-weight: bolder">Find out more</p></a>
              </div>
          </div>
          <div class="row wwd-box col-lg-12 p-tag">
              <img class="wwd-img" src="images/what-we-do-index/what-we-do-health.jpg" alt="">
              <div class="wwd-content col-lg-12 p-tag">
                  <a href="/mental-health-and-wellbeing"><h1 class="wwd-title mb-20" style="margin-left:5%;">Mental Health and Wellbeing</h1></a>
                      <ul class="wwd-list-4 p-tag list-unstyled">
                          <div class="wwd-bg4">
                              <li><i class="fa fa-hand-o-right"></i>
                                  Lead independent, fulfilling lives
                              </li>
                              <li><i class="fa fa-hand-o-right"></i>
                                  Flexible demand support
                              </li>
                              <li><i class="fa fa-hand-o-right"></i>
                                  Mental health counseling
                              </li>
                              <li><i class="fa fa-hand-o-right"></i>
                                  One-to-one support services
                              </li>
                          </div>
                      </ul>
                  <a href="/mental-health-and-wellbeing"><p class="find-btn p-tag" style="float:right;margin-right:8%;margin-top:6%;font-size:1.8rem;color:#F6871B;font-weight: bolder">Find out more</p></a>
              </div>
          </div>

{{--          <!-- left sidebar -->--}}
{{--          @include('layouts.left_sidebar')--}}
{{--          <!-- left sidebar -->--}}
{{--          <!--==========Service==========-->--}}
{{--          @include('layouts.service')--}}
{{--          <!--==========Service==========-->--}}

      </div>
    </div>
    @include('layouts.service')
  </section>


@endsection
