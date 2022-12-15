@extends('layouts.default')
@section('title', 'Home | Nu Start Community Enterprise')
@section('page-content')
    <style>
        @media (min-width: 992px) {
            .col-lg-6 {
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%;
            }
        }

        p{
            color:red;
        }

        .m-form{
            /*border: solid 1px;*/
            display: block;
            width:74%;
            margin:auto;
            min-width: 400px;
            overflow: hidden;
        }

        .form-check {
            position: relative;
            display: block;
            padding-left: 1.25rem;
            margin:0;
        }

        .form-check-input {
            position: absolute;
            margin-top: 0.8rem;
            margin-left: -1.25rem;
        }

        .row{
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-left: 4%;
            margin-top: 1%;
            margin-bottom: 2%;
        }

        .p-col-3{
            flex:0 0 23%;
            max-width:23%;
            margin-right: 1%;
            margin-left: 1%;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
        }

        .p-col-4{
            flex:0 0 33%;
            max-width:33%;
            margin-right: 1%;
            margin-left: 1%;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
        }

        .p-col-8{
            flex:0 0 40%;
            max-width:40%;
            margin-right: 1%;
            margin-left: 1%;
        }

        .p-col-9{
            flex:0 0 75%;
            max-width:75%;
            margin-right: 1%;
            margin-left: 1%;
        }

        .p-col-12{
            flex:0 0 100%;
            max-width:100%;
            margin-right: 1%;
            margin-left: 1%;
        }

        .label-format{
            display: inline-block;
            font-size: 0.9rem;
            margin-top: 0.5rem;
            overflow: hidden;
            white-space:nowrap;
            text-overflow: ellipsis;
        }

        textarea {
            overflow: auto;
            resize: vertical;
        }

        .form-control {
            display: block;
            width: 100%;
            height: calc(1.5em + 0.75rem + 2px);
            padding: 0.375rem 0.75rem;
            font-size: 0.9rem;
            font-weight: 400;
            line-height: 1.5;
            color: #495057;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
            transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
        }

        .p-button{
            background-color: #036295;
            border-radius: 10px;
            border:1px solid #036295;;
            color:white;
            cursor:pointer;
            font-size:0.8rem;
            font-weight: bold;
            letter-spacing: 0.1rem;
            padding: 0.9rem 3rem;
            text-tansfor:uppercase;
            transition:transform 40ms ease-in;
            margin-top: 20%;
            margin-bottom: 20%;
        }

        @media (max-width:950px){
            .label-format{font-size:10px}
        }

        @media (min-width:1000px){
            .label-format{font-size:17px}
        }

        .member-btn{
            display: flex;
            width:100%;
            text-align: center;
            /*height:100px;*/
        }

        .span-btn{
           height:100px;
        }

        .page-n{
           text-align: center;
            line-height:100px;
            margin:0px;
        }

        .signal{
            color:red;
        }

        #account-bg{
            width:100%;height:200px;
            background:url({{ URL::asset('images/account-bg.jpg')}});
            margin:0;
        }
        @media (max-width: 1000px) {
            .profile{
                display:none;
            }
        }
    </style>
    <div class="row align-items-center text-white justify-content-center" id="account-bg">
        <div class="profile col-18 col-lg-auto pl-0 pl-lg-3" id="location-1">
            <div style="width: 70px; aspect-ratio: 1; border-width: 4px;" class="rounded-circle bg-dark img-thumbnail d-flex align-items-center justify-content-center">
                <span class="h1 m-0 p-0 ">{{ substr($user, 0, 1) }}</span>
            </div>
        </div>
        <div class="col-18 col-lg-auto pl-0 pl-lg-3" >
            <h2 class="mb-0 pb-0 mt-0 text-white" style="text-align: center;">Become a member</h2>
            <p class="mb-0 pb-0 mt-0 text-white" style="text-align: center">Please complete your Member information.</p>
        </div>
    </div>
 <form action="/member" method="post" class="m-form" id="form4" style="background-color: whitesmoke;margin-top: 1%">
     @csrf
   <div class="answer_list">
    <div class="topic">
     <div class="row">
         <div class="col-lg-12"style="margin-top:20px;">
             <u><h5 class="form-section" style="float:left;text-decoration: underline; margin-right: 20px;margin-top: 20px">Section 1: Information about your organisation</h5></u>
         </div>

         <div class="col-lg-12" style="margin-top: 1%;">
             <div class="p-col-12">
                 <label class="label-format" for="OrganisationName"><span class="signal">*</span>Organisation Name</label>
             </div>
             <div class="p-col-4">
                 <input type="text" class="form-control" value="{{ old('OrganisationName') }}"name="OrganisationName" id="exampleOrganisationName" placeholder="Organisation Name">
                 @error('OrganisationName')
                 <p>{{ $errors->first('OrganisationName') }}</p>
                 @enderror
             </div>
             <div class="p-col-4">
                 <p style="color:black">Please use your legally registered name.</p>
             </div>
         </div>
         </div>
         <div class="row col-lg-12 col-xs-12" >
             <div class="p-col-4" style="display:inline-block;">
                 <label class="label-format" for="exampleOrganisationEmail"><span class="signal">*</span>Organisation Email</label>
                 <input type="text" class="form-control" value="{{ old('OrganisationEmail') }}" name="OrganisationEmail" id="exampleOrganisationEmail" placeholder="Email address">
                 @error('OrganisationEmail')
                 <p>{{ $errors->first('OrganisationEmail') }}</p>
                 @enderror
                 <br>
                 <p style="color:black">This email address should be a general one that we would be able to publicly share, for example info@member.org</p>
             </div>
             <div class="p-col-4" style="display:inline-block;">
                 <label class="label-format" for="exampleWebsite">Website</label>
                 <input type="text" class="form-control" value="{{ old('Website') }}" name="Website" id="exampleWebsite" placeholder="Website">
                 <br>
                 <p style="color:black">example: https://www.example.com</p>
             </div>
             <div class="p-col-3" style="display:inline-block;">
                 <label class="label-format" for="exampleOrganisationPhone"><span class="signal">*</span>Organisation Phone</label>
                 <input type="text" class="form-control"  value="{{ old('OrganisationPhone') }}" name="OrganisationPhone" id="exampleOrganisationPhone" placeholder="Organisation Phone">
                 @error('OrganisationPhone')
                 <p>{{ $errors->first('OrganisationPhone') }}</p>
                 @enderror
             </div>
         </div>

        <div class="row col-lg-12"style="margin-top:20px;">
            <u><h5 class="form-section" style="float:left;text-decoration: underline; margin-right: 20px;margin-top: 10px" >Section 2: Registered Address</h5></u>
        </div>
        <div class="row col-lg-12">
            <div class="p-col-12">
                <label class="label-format" for="exampleStreetAddress"><span class="signal">*</span>Street Address</label>
             </div>
            <div class="p-col-8">
                <textarea type="text" class="form-control"  name="StreetAddress" id="exampleStreetAddress" rows="1"
                       style="height:75px;"></textarea>
                @error('StreetAddress')
                <p>{{ $errors->first('StreetAddress') }}</p>
                @enderror
            </div>
        </div>
        <div class="row col-lg-12" >
            <div class="p-col-3" style="display:inline-block;">
                <label class="label-format" for="exampleTown"><span class="signal">*</span>Town/city</label>
                <input type="text" class="form-control" value="{{ old('Town') }}" name="Town" id="exampleTown" placeholder="Town/city">
            </div>
            <div class="p-col-3" style="display:inline-block;">
                <label class="label-format" for="examplePostCode"><span class="signal">*</span>Post Code</label>
                <input type="text" class="form-control" value="{{ old('Postcode') }}" name="Postcode" id="examplePostCode" placeholder="Post Code">
                @error('Postcode')
                <p>{{ $errors->first('Postcode') }}</p>
                @enderror
            </div>
        </div>

     <div class="row col-lg-12"style="margin-top:20px;">
         <h5 class="form-section" style="float:left;text-decoration: underline; margin-right: 20px;margin-top: 10px" >Section 3: Primary contact </h5>

     </div>
     <div class="row col-lg-8" style="border:1px solid darkgray">
         <div class="row"style="width:47%">
             <div class="p-col-9">
                 <label class="label-format" for="exampleFirstName"><span class="signal">*</span>First Name</label>
                 <input type="text" class="form-control" value="{{ old('FirstName') }}" name="FirstName" id="exampleFirstName" placeholder="First Name">
                 @error('FirstName')
                 <p>{{ $errors->first('FirstName') }}</p>
                 @enderror
             </div>
             <div class="p-col-9">
                 <label class="label-format" for="examplePhone"><span class="signal">*</span>Phone</label>
                 <input type="text" class="form-control" value="{{ old('Phone') }}" name="Phone" id="examplePhone" placeholder="Phone">
                 @error('Phone')
                 <p>{{ $errors->first('Phone') }}</p>
                 @enderror
             </div>
             <div class="p-col-9">
                 <label class="label-format" for="exampleJob"><span class="signal">*</span>Job title</label>
                 <input type="text" class="form-control"  value="{{ old('Job') }}" name="Job" id="exampleJob" placeholder="Job title">
                 @error('Job')
                 <p>{{ $errors->first('Job') }}</p>
                 @enderror
             </div>
         </div>
         <div class="row" style="width:47%">
                <div class="p-col-9">
                    <label class="label-format" for="exampleLastName"><span class="signal">*</span>Last Name</label>
                    <input type="text" class="form-control" value="{{ old('LastName') }}" name="LastName" id="exampleLastName" placeholder="Last Name">
                    @error('LastName')
                    <p>{{ $errors->first('LastName') }}</p>
                    @enderror
                </div>
             <div class="p-col-9">
                 <label class="label-format" for="exampleEmail"><span class="signal">*</span>Email</label>
                 <input type="text" class="form-control" value="{{ old('Email') }}" name="Email" id="exampleEmail" placeholder="Email">
                 @error('Email')
                 <p>{{ $errors->first('Email') }}</p>
                 @enderror
             </div>
             <div class="p-col-9">
                 <label class="label-format" for="exampleRole"><span class="signal">*</span>General Role/level</label>
                 <select class="form-control" name="Role" id="exampleRole">
                     <option value="Senior Management">Senior Management</option>
                     <option value="PM">Young worker/ practice manager</option>
                     <option value="P">Young worker/ practitioner</option>
                     <option value="Administrator">Administrator</option>
                     <option value="Trustee">Trustee</option>
                     <option value="Other">Other</option>
                 </select>
                 @error('Role')
                 <p>{{ $errors->first('Role') }}</p>
                 @enderror
             </div>
         </div>
         <p style="color:black"><span class="signal">*</span>NU Start take data protection seriously. The data supplied in this form will be used only for the purposes of administering your membership.</p>
     </div>

     <div class="row col-lg-12">
         <h5 class="form-section" style="float:left;text-decoration: underline; margin-right: 20px;margin-top: 10px" >Section 4: Formal information</h5>
     </div>
     <div class="row col-lg-12" >
         <div class="col-xs-4" style="display:inline-block;margin-right:2%">
             <label class="label-format" for="exampleEstablish"><span class="signal">*</span>What year was your organisation established?</label>
             <input type="text" class="form-control" value="{{ old('Establish') }}" name="Establish" id="exampleEstablish" placeholder="Year of established">
             @error('Establish')
             <p>{{ $errors->first('Establish') }}</p>
             @enderror
         </div>
         <div class="col-xs-4" style="display:inline-block;margin-right:2%">
             <label class="label-format" for="exampleCompanyNumber">Company Number (if applicable)</label>
             <input type="text" class="form-control" value="{{ old('CompanyNumber') }}" name="CompanyNumber" id="exampleCompanyNumber" placeholder="Company Number">
         </div>
         <div class="col-xs-4" style="display:inline-block;margin-right:2%">
             <label class="label-format" for="exampleCharityNumber">Charity Number (if applicable)</label>
             <input type="text" class="form-control"  value="{{ old('CharityNumber') }}" name="CharityNumber" id="exampleCharityNumber" placeholder="Charity Number">
         </div>
     </div>
    </div>

{{--       second page--}}
    <div class="topic"style="margin-top:40px;">
     <div class="row col-lg-12">
         <h5 class="form-section" style="float:left;text-decoration: underline; margin-right: 20px;margin-top: 10px" >Section 5: Your work with young people</h5>
     </div>
     <div class="row col-lg-12" >
         <div class="p-col-9" style="display:inline-block;">
             <label class="label-format" for="exampleGroup"style="margin: 0px">How much of your work is directly supporting young people under 25?</label>
             <p style="color:black">We define ‘direct’ as face-to-face or in person delivery with young people.</p>
             <select class="form-control" name="Group" id="exampleGroup">
                 <option value="first">All of our work directly supports young people</option>
                 <option value="second">Most of our work directly supports young people, or at least over a third of it.</option>
                 <option value="third">A third of other work, or less</option>
             </select>
         </div>
         <div class="row p-col-9" style="display:inline-block;">
             <label class="label-format" for="exampleWorkWith">How many unique children and young people did you work with in London during your last financial year?</label>
             <input type="text" class="form-control" value="{{ old('WorkWith') }}" name="WorkWith" id="exampleWorkWith" placeholder="0">
         </div>
     </div>

     <div class="row col-lg-12">
         <h5 class="form-section" style="float:left;text-decoration: underline; margin-right: 20px;margin-top: 10px" >Section 6: Are you a specialist organisation?</h5>
     </div>
     <div class="row col-lg-12" >
         <div class="p-col-9">
             <label  for="exampleSpecialistService" style=" margin-top: 0.4rem;font-size: 1rem;"><span class="signal">*</span>Does your organisation provide niche or specialist services to a targeted group?</label>
         </div>
         <div class="p-col-3"style="margin-left: 2%">
             <div class="form-check" >
                 <input class="form-check-input" type="radio" name="SpecialistService" id="exampleSpecialistService" value="Yes">
                 <label class="label-format" for="exampleRadios">
                     Yes
                 </label>
             </div>
         </div>
         <div class="p-col-3">
             <div class="form-check">
                 <input class="form-check-input" type="radio"  name="SpecialistService" id="exampleSpecialistService" value="No">
                 <label class="label-format" for="exampleRadios2">
                     No
                 </label>
             </div>
         </div>
         @error('SpecialistService')
         <p>{{ $errors->first('SpecialistService') }}</p>
         @enderror

         <div class="p-col-12">
             <label for="exampleMotivation" style="margin-top: 0.4rem;font-size: 1rem;"><span class="signal">*</span>What is your main motivation for being a member of NU Start?</label>
         </div>
         <div class="p-col-9"style="margin-left: 2%">
             <div class="form-check" >
                 <input class="form-check-input" type="radio" name="Motivation" id="exampleMotivation" value="first">
                 <label class="label-format" for="exampleMotivation">
                         To improve the quality of my youth provision
                 </label>
             </div>
         </div>
         <div class="p-col-9"style="margin-left: 2%">
             <div class="form-check">
                 <input class="form-check-input" type="radio"  name="Motivation" id="exampleMotivation" value="second">
                 <label class="label-format" for="exampleMotivation">
                         To improve my funding and fundraising
                 </label>
             </div>
         </div>
         <div class="p-col-9"style="margin-left: 2%">
             <div class="form-check">
                 <input class="form-check-input" type="radio"  name="Motivation" id="exampleMotivation" value="third">
                 <label class="label-format" for="exampleMotivation">
                         To improve my policies, compliance and governance
                 </label>
             </div>
         </div>
         <div class="p-col-9"style="margin-left: 2%">
             <div class="form-check">
                 <input class="form-check-input" type="radio"  name="Motivation" id="exampleMotivation" value="fourth">
                 <label class="label-format" for="exampleMotivation">
                         To connect with other youth organisations
                 </label>
             </div>
         </div>
         @error('Motivation')
         <p>{{ $errors->first('Motivation') }}</p>
         @enderror
     </div>

     <div class="row col-lg-12">
         <div class="p-col-12">
             <label class="label-format" for="exampleComment">Do you have any additional needs, thoughts or comments to share?</label>
         </div>
         <div class="p-col-9">
                <textarea type="text" class="form-control"  name="Comment" id="exampleComment" rows="1"
                          style="height:75px;"></textarea>
         </div>
     </div>

     <div class="row col-lg-12">
         <h5 class="form-section" style="float:left;text-decoration: underline; margin-right: 20px;margin-top: 10px" >Section 7: Confirmation?</h5>
     </div>
     <div class="row col-lg-12">
         <div class="p-col-12">
             <label class="label-format" for="examplePerson"><span class="signal">*</span>Please tell us the name of the person submitting this form.</label>
         </div>
         <div class="p-col-9">
             <input type="text" class="form-control" value="{{ old('Person') }}" name="Person" id="examplePerson" placeholder="Name">
             @error('Person')
             <p>{{ $errors->first('Person') }}</p>
             @enderror
         </div>
     </div>
    </div>
   </div>
     <hr style="margin-top:4%;margin-left:30%;margin-right:30%;width:40%; text-align:center;border-width:1px;border-style: solid;display: flex;">
     <div class="text-white justify-content-center member-btn">
         <span class="span-btn"><h5 class="page-n">Page 1/2 </h5></span>
         <span class="span-btn"><h5 class="page-n">Page 2/2 </h5></span>
         <span class="span-btn"style="margin-left:1%">
            <p class="p-button prev" onclick="prev()">Back</p>
         </span>
         <span class="span-btn" style="margin-left:1%">
            <p class="p-button next" onclick="next()">Next</p>
         </span>
         <span style="height:100px;">
             @if(!($MemberInfos->isEmpty())==1)
                 <button class="p-button sub" style="margin-top:15%;color:gray" disabled="disabled">Submitted</button>
             @else
            <button class="p-button sub" type="submit" style="margin-top:18%">Submit</button>
             @endif
         </span>
     </div>
     <hr>

     </form>
 </form>

 </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
<script>
    var p = document.getElementsByClassName("prev");
    var n = document.getElementsByClassName("next");
    var s = document.getElementsByClassName("sub");
    var t = document.querySelectorAll(".topic");
    var page = document.querySelectorAll(".page-n");
    $(p).hide();
    $(s).hide();
    $(n).show();
    $(t[1]).hide();
    $(page[1]).hide();

    function prev(){
        $(t[0]).show();
        $(t[1]).hide();
        $(p).hide();
        $(s).hide();
        $(n).show();
        $(page[1]).hide();
        $(page[0]).show();
        document.getElementById("location-1").scrollIntoView();
    }

    function next(){
        $(t[0]).hide();
        $(t[1]).show();
        $(p).show();
        $(s).show();
        $(n).hide();
        $(page[0]).hide();
        $(page[1]).show();
        document.getElementById("location-1").scrollIntoView();

    }
</script>

@endsection
