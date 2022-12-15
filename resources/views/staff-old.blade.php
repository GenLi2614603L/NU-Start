@extends('layouts.default')
@section('title', 'Staff | NuStart')
@section('page-content')
<section class="page-sidebar page-section-ptb">
    <div class="container">
      <div class="row">
         <div class="col-lg-9 col-md-8 page-content">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                 <div class="section-title text-center">
                     <h2 class="title-effect">Our team</h2>
                   </div>
               </div>
             </div>

             <div class="team-3">
                <div class="row">
                 <div class="col-lg-4 col-sm-6 sm-mb-30">
                    <div class="team team-round full-border">
                           <div class="team-photo">
                             <img class="img-fluid mx-auto" src="images/team/Elly.jpg" alt=""> 
                           </div>    
                           <div class="team-description"> 
                             <div class="team-info"> 
                                  <h5><a href="{{url('staff')}}">Dr. Elly Farmer</a></h5>
                                  {{-- <span>CEO</span> --}}
                             </div>
                             <div class="team-contact">
                               <span class="email"> <a href="mailto:dr.elly.farmer@nustart.org"><i class="fa fa-envelope-o"></i>dr.elly.farmer@nustart.org</a></span>
                             </div>
                              
                            </div>
                        </div>
                  </div> 
                   <div class="col-lg-4 col-sm-6 sm-mb-30">
                      <div class="team team-round full-border">
                           <div class="team-photo">
                             <img class="img-fluid mx-auto" src="images/team/Ola.jpg" alt=""> 
                           </div>    
                           <div class="team-description"> 
                             <div class="team-info"> 
                                  <h5><a href="{{url('staff')}}">Ola Akinlade BA, PG Diploma Psychotherapy, MA</a></h5>
                             </div>
                             <div class="team-contact">
                               <span class="email"> <a href="mailto:ola.akinlade@nustart.org"><i class="fa fa-envelope-o"></i>ola.akinlade@nustart.org</a></span>
                             </div>
                              
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 sm-mb-30">
                       <div class="team team-round full-border">
                            <div class="team-photo">
                              <img class="img-fluid mx-auto" src="images/team/robin.jpg" alt=""> 
                            </div>    
                            <div class="team-description"> 
                              <div class="team-info"> 
                                   <h5><a href="{{url('staff')}}">Robin McGlashan</a></h5>
                              </div>
                              <div class="team-contact">
                                <span class="email"> <a href="mailto:robin.mcglashan@nustart.org"><i class="fa fa-envelope-o"></i>robin.mcglashan@nustart.org</a></span>
                              </div>
                               
                             </div>
                         </div>
                     </div> 
                     <div class="col-lg-4 col-sm-6 sm-mb-30">
                       <div class="team team-round full-border">
                            <div class="team-photo">
                              <img class="img-fluid mx-auto" src="images/team/tony-cealy-1.jpeg" alt=""> 
                            </div>    
                            <div class="team-description"> 
                              <div class="team-info"> 
                                   <h5><a href="{{url('staff')}}">Tony Cealy</a></h5>
                              </div>
                              <div class="team-contact">
                                <span class="email"> <a href="mailto:tony.cealy@nustart.org"><i class="fa fa-envelope-o"></i>tony.cealy@nustart.org</a></span>
                              </div>
                               
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-4 col-sm-6 sm-mb-30">
                       <div class="team team-round full-border">
                            <div class="team-photo">
                              <img class="img-fluid mx-auto" src="images/team/Delroy.jpg" alt=""> 
                            </div>    
                            <div class="team-description"> 
                              <div class="team-info"> 
                                   <h5><a href="{{url('staff')}}">Delroy E. Ettienne BSc (Hons)</a></h5>
                              </div>
                              <div class="team-contact">
                                <span class="email"> <a href="mailto:delroy.ettienne@nustart.org"><i class="fa fa-envelope-o"></i>delroy.ettienne@nustart.org</a></span>
                              </div>
                               
                             </div>
                         </div>
                     </div>
                   </div>
                 </div>
                 <!-- Service-->
                @include('layouts.service')
                <!-- Service-->
         </div> 
         
         <!-- left sidebar -->
         @include('layouts.left_sidebar')
         <!-- left sidebar -->
      </div>
    </div>
  </section>

@endsection