@extends('layouts.default')
@section('title', 'Counselling')
@section('page-content')
<section class="service white-bg mt-80 sm-mt-40">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-title text-center">
                        <h2 class="title-effect">Counselling Services</h2>
                    </div>
                </div>
            </div>
        </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <img src="images/counselling.png" class="img-fluid full-width mt-10">
            </div>
        </div>
    </div>
</section>


<section class="page-section-ptb data-table">
    <div class="container">
      <div class="row">
       <div class="col-lg-12 col-md-12">
{{--        <h1 class="mb-30">Counselling Services </h1>--}}
        <h6>THE SERVICES THAT ARE ON OFFER AND THAT CAN BE DELIVERED INCLUDE THE FOLLOWING:</h6>
        <br>
           <div class="counselling-table">
               <div class="counselling-con">
                   <p style="font-size:20px;margin:0px; font-weight: bolder">1-2-1 Substance Misuse (SM) counselling</p>
                   <p style="font-size:15px;margin-bottom:0.5%">Trainer: Author</p>
                   <p style="font-size:15px;font-weight: bold;margin-bottom:0.5%">6 months at 10 hours per week</p>
                   <p class="contentService" style="font-size:15px;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp:2;-webkit-box-orient: vertical;overflow: hidden;">
                       Substance Misuse (SM)<br>
                       Working in a psycho-social model using CBT techniques, harm minimisation and M.I.<br>
                       <br>
                       Conflict Resolution<br>
                       Looking at issues to dissolve disharmony and discord with relationships both professional and persona.<br>
                       <br>
                       Self-Harm <br>
                       Supporting individuals and staff on understanding and dealing with issues of self-harm.<br>
                       <br>
                       Anger Management<br>
                       Looking at issues of controlling temper, managing anger and rationale behaviour patterns.
                   </p>
                   <label class="openBtn" style="color: rgb(0, 86, 210);font-weight: bolder">Show more</label>

                   <ul class="list list list-unstyled mb-30">
                       <li><i class="fa fa-dot-circle-o"></i> Awareness of SM</li>
                       <li><i class="fa fa-dot-circle-o"></i> Reduction in SM</li>
                       <li><i class="fa fa-dot-circle-o"></i> Develop coping strategies</li>
                   </ul>
                   <p class="counselling-link" style="font-size:18px;color: rgb(0, 86, 210);font-weight: bolder;margin:0px;";>Go to counselling</p>
               </div>
               <img src="images/conselling-eflyer.jpg" class="counselling-img">
           </div>

           <div class="counselling-table">
               <div class="counselling-con">
                    <p style="font-size:20px;margin:0px; font-weight: bolder">Group Therapy counselling</p>
                    <p style="font-size:15px;margin-bottom:0.5%">Trainer: Author</p>
                    <p style="font-size:15px;font-weight: bold;margin-bottom:0.5%">6 months at 10 hours per week</p>
                    <p class="contentService" style="font-size:15px;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp:2;-webkit-box-orient: vertical;overflow: hidden;">Using group dynamics within social psychology.</p>
                    <label class="openBtn" style="color: rgb(0, 86, 210);font-weight: bolder">Show more</label>

                    <ul class="list list list-unstyled mb-30">
                        <li><i class="fa fa-dot-circle-o"></i> Awareness of SM</li>
                        <li><i class="fa fa-dot-circle-o"></i> Reduction in SM</li>
                        <li><i class="fa fa-dot-circle-o"></i> Develop coping strategies</li>
                    </ul>
                    <p class="counselling-link" style="font-size:18px;color: rgb(0, 86, 210);font-weight: bolder;margin-top:0px;";>Go to counselling</p>
               </div>
               <img src="images/film-flyer.png" class="counselling-img">

           </div>

           <div class="counselling-table">
               <div class="counselling-con">
                    <p style="font-size:20px;margin:0px; font-weight: bolder">Conflict Resolution</p>
                    <p style="font-size:15px;margin-bottom:0.5%">Trainer: Author</p>
                    <p style="font-size:15px;font-weight: bold;margin-bottom:0.5%">6 months at 10 hours per week</p>
                    <p class="contentService" style="font-size:15px;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp:2;-webkit-box-orient: vertical;overflow: hidden;">Looking at issues to dissolve disharmony and discord with relationships both professional and personal</p>
                   <label class="openBtn" style="color: rgb(0, 86, 210);font-weight: bolder">Show more</label>
                    <ul class="list list list-unstyled mb-30">
                        <li><i class="fa fa-dot-circle-o"></i> Awareness of SM</li>
                        <li><i class="fa fa-dot-circle-o"></i> Reduction in SM</li>
                        <li><i class="fa fa-dot-circle-o"></i> Understanding of self and others</li>
                    </ul>
                    <p class="counselling-link" style="font-size:18px;color: rgb(0, 86, 210);font-weight: bolder;margin-top:0px;";>Go to counselling</p>
               </div>
               <img src="images/film-flyer.png" class="counselling-img">
           </div>

           <div class="counselling-table">
               <div class="counselling-con">
                    <p style="font-size:20px;margin:0px; font-weight: bolder">Working with Self-Harm</p>
                    <p style="font-size:15px;margin-bottom:0.5%">Trainer: Author</p>
                    <p style="font-size:15px;font-weight: bold;margin-bottom:0.5%">6 months at 10 hours per week</p>
                    <p class="contentService" style="font-size:15px;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp:2;-webkit-box-orient: vertical;overflow: hidden;">Support individuals and staff on understanding and dealing with issues of self-harm</p>
                   <label class="openBtn" style="color: rgb(0, 86, 210);font-weight: bolder">Show more</label>
                    <ul class="list list list-unstyled mb-30">
                        <li><i class="fa fa-dot-circle-o"></i> Learn new techniques on managing self – harming behaviour</li>
                        <li><i class="fa fa-dot-circle-o"></i> Identify signs and symptoms</li>
                        <li><i class="fa fa-dot-circle-o"></i> Develop skills on support and interventions</li>
                    </ul>
                    <p class="counselling-link" style="font-size:18px;color: rgb(0, 86, 210);font-weight: bolder;margin-top:0px;";>Go to counselling</p>
               </div>
               <img src="images/film-flyer.png" class="counselling-img">
           </div>

           <div class="counselling-table">
               <div class="counselling-con">
                    <p style="font-size:20px;margin:0px; font-weight: bolder">Anger Management</p>
                    <p style="font-size:15px;margin-bottom:0.5%">Trainer: Author</p>
                    <p style="font-size:15px;font-weight: bold;margin-bottom:0.5%">6 months at 10 hours per week</p>
                    <p class="contentService" style="font-size:15px;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp:2;-webkit-box-orient: vertical;overflow: hidden;">Looking at issues of controlling temper, managing anger and rationale behaviour patterns</p>
                   <label class="openBtn" style="color: rgb(0, 86, 210);font-weight: bolder">Show more</label>
                    <ul class="list list list-unstyled mb-30">
                        <li><i class="fa fa-dot-circle-o"></i> Management of feelings and anger</li>
                        <li><i class="fa fa-dot-circle-o"></i> Understanding thought process</li>
                        <li><i class="fa fa-dot-circle-o"></i> Positive reactions and behaviour</li>
                    </ul>
                    <p class="counselling-link" style="font-size:18px;color: rgb(0, 86, 210);font-weight: bolder;margin-top:0px;";>Go to counselling</p>
               </div>
               <img src="images/film-flyer.png" class="counselling-img">
           </div>

           <div class="counselling-table">
               <div class="counselling-con">
                    <p style="font-size:20px;margin:0px; font-weight: bolder">Peer Leadership</p>
                    <p style="font-size:15px;margin-bottom:0.5%">Trainer: Author</p>
                    <p style="font-size:15px;font-weight: bold;margin-bottom:0.5%">6 months at 10 hours per week</p>
                    <p class="contentService" style="font-size:15px;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp:2;-webkit-box-orient: vertical;overflow: hidden;">Screening and assessment to identify young people that can act as peer mentors and support the 'NU Start Street Team'.</p>
                   <label class="openBtn" style="color: rgb(0, 86, 210);font-weight: bolder">Show more</label>
                    <ul class="list list list-unstyled mb-30">
                        <li><i class="fa fa-dot-circle-o"></i> Recognized peer leader</li>
                        <li><i class="fa fa-dot-circle-o"></i> Supporting the management of a Nu Start department</li>
                        <li><i class="fa fa-dot-circle-o"></i> Positive reactions and behaviour</li>
                    </ul>
                    <p class="counselling-link" style="font-size:18px;color: rgb(0, 86, 210);font-weight: bolder;margin-top:0px;";>Go to counselling</p>
               </div>
               <img src="images/film-flyer.png" class="counselling-img">
           </div>

           <div class="counselling-table">
               <div class="counselling-con">
                    <p style="font-size:20px;margin:0px; font-weight: bolder">Criminal Justice</p>
                    <p style="font-size:15px;margin-bottom:0.5%">Trainer: Author</p>
                    <p style="font-size:15px;font-weight: bold;margin-bottom:0.5%">6 months at 10 hours per week</p>
                    <p class="contentService" style="font-size:15px;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp:2;-webkit-box-orient: vertical;overflow: hidden;">These courses provide education to professionals and individuals on the arrangements of the judicial system, access to support services and interventions.</p>
                   <label class="openBtn" style="color: rgb(0, 86, 210);font-weight: bolder">Show more</label>
                    <ul class="list list list-unstyled mb-30">
                        <li><i class="fa fa-dot-circle-o"></i> Awareness of the criminal justice system</li>
                        <li><i class="fa fa-dot-circle-o"></i> Understanding the workings of the system</li>
                        <li><i class="fa fa-dot-circle-o"></i> Awareness of the law</li>
                    </ul>
                    <p class="counselling-link" style="font-size:18px;color: rgb(0, 86, 210);font-weight: bolder;margin-top:0px;";>Go to counselling</p>
               </div>
               <img src="images/film-flyer.png" class="counselling-img">
           </div>

           <div class="counselling-table">
               <div class="counselling-con">
                    <p style="font-size:20px;margin:0px; font-weight: bolder">Emotional Intelligence</p>
                    <p style="font-size:15px;margin-bottom:0.5%">Trainer: Author</p>
                    <p style="font-size:15px;font-weight: bold;margin-bottom:0.5%">6 months at 10 hours per week</p>
                    <p class="contentService" style="font-size:15px;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp:2;-webkit-box-orient: vertical;overflow: hidden;">Self awareness, Managing feelings, Personal Decision making, Handling Stress, Empathy, Communications, Self-disclosure, Insight, Self-acceptance, Personal responsibility, Assertiveness, Group Dynamics and Conflict resolution.</p>
                   <label class="openBtn" style="color: rgb(0, 86, 210);font-weight: bolder">Show more</label>
                    <ul class="list list list-unstyled mb-30">
                        <li><i class="fa fa-dot-circle-o"></i> Increased confidence</li>
                        <li><i class="fa fa-dot-circle-o"></i> Better decision making skills</li>
                        <li><i class="fa fa-dot-circle-o"></i> Higher self-esteem</li>
                        <li><i class="fa fa-dot-circle-o"></i> Learning how to handle responsibility</li>
                    </ul>
                    <p class="counselling-link" style="font-size:18px;color: rgb(0, 86, 210);font-weight: bolder;margin-top:0px;";>Go to counselling</p>

               </div>
               <img src="images/film-flyer.png" class="counselling-img">
           </div>

           <div class="counselling-link" id="ViewContent" style="border-top: 1px solid #e1e1e1;">
               <p style="font-size:18px;color: rgb(0, 86, 210);font-weight: bolder;margin-top: 20px">View more counselling services(5)</p>
           </div>

           <br>
           <p style="font-size:15px;margin-bottom:0.5%">All prices are subject to quotation of work requested which includes:</p>
           <ul class="list list list-unstyled mb-30">
               <li><i class="fa fa-hand-o-right"></i> 1 – 2 – 1’s</li>
               <li><i class="fa fa-hand-o-right"></i> Workshops / Groups</li>
               <li><i class="fa fa-hand-o-right"></i>  OCN Accredited Training Courses</li>
           </ul>
           <p style="font-size:15px;margin-bottom:0.5%">Expert counselling and tailored intervention packages to guide and support young people, utilising the best therapeutic approach to build mental health resilience. Our innovative approach uses multifaceted interventions,  combining talk therapy, creative resources and activities to help improve and sustain mental wellness.</p>
           <li>Drug/Alcohol Addiction</li>
           <li>Anxiety</li>
           <li>Depression</li>
           <li>Criminal issues</li>
           <li>Family issues</li>
           <li>Bereavement</li>
           <li>Relationship therapy</li>
       </div>

        </div>

     </div>
  </section>

    <script>
        let content = document.getElementsByClassName("counselling-table")
        function show(){
            for(let i=0;i<content.length;i++){
                if(i>2){
                    content[i].style.display="none"
                }
            }
        }
        show()

        let contentService = document.getElementsByClassName("contentService")
        let openBtn = document.getElementsByClassName("openBtn")
        function showContent() {
            for (let i = 0; i < contentService.length; i++) {
                if(contentService[i].scrollHeight==contentService[i].clientHeight){
                    openBtn[i].style.visibility="hidden"
                }else{
                    openBtn[i].style.visibility="visible"
                }
            }
        }
        showContent()

        function showBtn(){
            for(let i=0;i<openBtn.length;i++){
                openBtn[i].addEventListener('click',function(){
                    if(openBtn[i].innerText ==="Show more"){
                        contentService[i].style.display = ""
                        openBtn[i].innerText = "Show less"
                    }else {
                        contentService[i].style = "font-size:15px;text-overflow: ellipsis;display: -webkit-box;-webkit-line-clamp:2;-webkit-box-orient: vertical;overflow: hidden;"
                        openBtn[i].innerText = "Show more"
                    }
                })
            }
        }
        showBtn()

        let btn = document.getElementById("ViewContent")
        btn.addEventListener('click',function(){
            for(let i=3;i<content.length;i++) {
                content[i].style.display = ""
            }
            showContent()
            btn.style.display="none"
        })
    </script>
@endsection
