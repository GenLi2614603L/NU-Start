@extends('layouts.default')
@section('title', 'What We Do')
@section('page-content')
    <style>
        .wwd-box{
            width:96%;
            margin-left:2%;
            margin-right: 2%;
        }
        .wwd-content{
            position:absolute;
            padding:1%;
            width:100%;
        }

        .wwd-info{
            position:absolute;
            background-color: rgb(5 23 26 / 49%);
            width:45%;
            height:100%;
            padding:1%;
            border-radius: 20px;
            font-family: "poppins",sans-serif;
            font-size:1.2rem;
        }

        .wwd-list-box{
            height:60%;
            margin-left:3%;
            margin-right:3%;
        }
        .wwd-bg{
            font-size:1.2rem;
            color:white;
        }
        .wwd-title{
            color:#F6871B;
            margin-left:5%;
            font-size:2.5rem;
            height:20%;
            margin-top:8%;
            margin-bottom: 0px;
        }


        .find-btn{
            height:20%;
            font-size:1.8rem;
            color:#F6871B;
            font-weight: bolder;
            margin-left:5%;
            margin-bottom:0px;
        }

        .wwd-img{
            width:100%;
            /*padding:1%;*/
            position:relative;
            opacity: 0.95;
            border-radius: 20px;
        }

        .find-btn:hover{
            text-decoration: underline;
        }

        @media (min-width:660px) and (max-width:1000px) {
            .wwd-title{;
                font-size:1.6rem;
                line-height:28px;
            }

            .wwd-bg{
                font-size:0.9rem;
            }

            .find-btn{
                font-size:1.2rem;
            }
        }

        @media (max-width:660px) {
            .wwd-title{;
                font-size:1.2rem;
                line-height:20px;
            }

            .wwd-bg{
                font-size:0.6rem;
            }

            .find-btn{
                font-size:1rem;
            }
        }

        @media (max-width:450px) {
            .wwd-title{;
                font-size:0.9rem;
                line-height:12px;
            }

            .wwd-bg{
                font-size:0.45rem;
            }

            .find-btn{
                font-size:0.7rem;
            }
        }

        @media (max-width:350px) {
            .wwd-title{;
                font-size:1.1rem;

            }
            .wwd-bg{
                display:none;
            }

            .find-btn{
                display:none;
            }
            .wwd-info {
                background-color:transparent;
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

          <div class="row col-lg-12"style="margin-top:2%">
                  <div class="row wwd-box">
                      <img class="wwd-img" src="images/what-we-do-index/what-we-do-edu.jpg" alt="" style="width:100%">
                      <div class="wwd-info" >
                          <a href="/education"><h1 class="wwd-title">Education</h1></a>
                          <ul class="wwd-list-box p-tag list-unstyled">
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
                          <a href="/education"><p class="find-btn">Find out more</p></a>
                      </div>

                  </div>
              </div>
          <br>

           <div class="row col-lg-12"style="margin-top:2%">
              <div class="row wwd-box">
                  <img class="wwd-img" src="images/what-we-do-index/what-we-do-training.jpg" alt="" style="width:100%">
                  <div class="wwd-info" >
                      <a href="/education"><h1 class="wwd-title">Training & Employment</h1></a>
                      <ul class="wwd-list-box p-tag list-unstyled">
                          <div class="wwd-bg">
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
                      <a href="/training-and-employmen"><p class="find-btn">Find out more</p></a>
                  </div>

              </div>
          </div>


          <div class="row col-lg-12"style="margin-top:2%">
              <div class="row wwd-box">
                  <img class="wwd-img" src="images/what-we-do-index/what-we-do-enterprise.jpg" alt="" style="width:100%">
                  <div class="wwd-info" >
                      <a href="/education"><h1 class="wwd-title">Business and Enterprise</h1></a>
                      <ul class="wwd-list-box p-tag list-unstyled">
                          <div class="wwd-bg">
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
                      <a href="/enterprise"><p class="find-btn">Find out more</p></a>
                  </div>

              </div>
          </div>

          <div class="row col-lg-12" style="margin-top:2%">
              <div class="row wwd-box">
                  <img class="wwd-img" src="images/what-we-do-index/what-we-do-health.jpg" alt="" style="width:100%">
                  <div class="wwd-info" >
                      <a href="/education"><h1 class="wwd-title">Mental Health and Wellbeing</h1></a>
                      <ul class="wwd-list-box p-tag list-unstyled">
                          <div class="wwd-bg">
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
                      <a href="/enterprise"><p class="find-btn">Find out more</p></a>
                  </div>

              </div>
          </div>

      </div>
    </div>
    @include('layouts.service')
  </section>


@endsection
