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

        .p-form{
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
            margin:auto;
        }

        .p-col-2 {
            -ms-flex: 0 0 16.666667%;
            flex: 0 0 16.666667%;
            max-width: 16.666667%;
        }

        .p-col-3{
            flex:0 0 23%;
            max-width:23%;
            margin-right: 1%;
            margin-left: 1%;
        }

        .p-col-8{
            flex:0 0 40%;
            max-width:40%;
        }

        .p-col-9{
            flex:0 0 75%;
            max-width:75%;
        }

        .p-col-12{
            flex:0 0 100%;
            max-width:100%;
        }

        .label-format{
            display: inline-block;
            font-size: 0.9rem;
            margin-top: 0.5rem;
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
            padding: 0.9rem;
            text-tansfor:uppercase;
            transition:transform 40ms ease-in;
            margin-top: 30px;
            margin-bottom: 20px;
            width:25%;
        }

        #edit-link:hover{
            text-decoration: underline;
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
    <section>
        <div class="row align-items-center text-white justify-content-center" id="account-bg">
            <div class="profile col-18 col-lg-auto pl-0 pl-lg-3">
                <div style="width: 70px; aspect-ratio: 1; border-width: 4px;" class="rounded-circle bg-dark img-thumbnail d-flex align-items-center justify-content-center">
                    <span class="h1 m-0 p-0 ">{{ substr($user, 0, 1) }}</span>
                </div>
            </div>
            <div class="col-18 col-lg-auto pl-0 pl-lg-3" >
                <h2 class="mb-0 pb-0 mt-0 text-white" style="text-align: center;">Information Details</h2>
                <p class="mb-0 pb-0 mt-0 text-white" style="text-align: center">Edit your personal information (please complete infos first).</p>
            </div>
        </div>
        {{--/*section1*/--}}
      <?php foreach($personalInfos as $personalInfo):?>
        <form action="/edit" method="post" class="p-form" id="form3" style="background-color: whitesmoke;margin-top: 1%">
            @csrf
            @method('put')
            <div class="row">
                <div class="col-lg-12 col-sm-12"style="margin-top:20px">
                    <u><h5 class="form-section" style="float:left;text-decoration: underline; margin-right: 20px" >Section 1: Personal Details</h5></u>
{{--                    <div>--}}
{{--                        <a href="/edit"><h5 id="edit-link" style="color:cornflowerblue;">Complete infos</h5></a>--}}
{{--                    </div>--}}
                </div>
                <div class="col-lg-6">
                    <div class="from-group">
                        <div class="row" style="margin-top:20px">
                            <div class="p-col-3">
                                <label class="label-format" for="exampleFirstName">First Name</label>
                            </div>
                            <div class="p-col-9">
                                <input type="text" class="form-control" value="{{ $personalInfo->FirstName }}"name="FirstName" id="exampleFirstName" placeholder="First name">
                                @error('FirstName')
                                <p>{{ $errors->first('FirstName') }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="row"style="margin-top:20px">
                            <div class="p-col-3">
                                <label class="label-format" for="exampleMiddleName">Middle Name</label>
                            </div>
                            <div class="p-col-9">
                                <input type="text" class="form-control" value="{{ $personalInfo->MiddleName }}" name="MiddleName" id="exampleMiddleName" placeholder="Middle name">
                            </div>
                        </div>
                        <div class="row" style="margin-top:20px">
                            <div class="p-col-3">
                                <label class="label-format" for="exampleSurname">Surname</label>
                            </div>
                            <div class="p-col-9">
                                <input type="text" class="form-control" value="{{ $personalInfo->SurName }}" name="SurName" id="exampleSurname" placeholder="Surname">
                                @error('SurName')
                                <p>{{ $errors->first('SurName') }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="row" style="margin-top:20px">
                            <div class="p-col-2">
                                <label style=" margin-top: 0.4rem;font-size: 1rem;margin-left: 5px"> Sex </label>
                            </div>
                            <div class="p-col-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sex" id="exampleRadios" value="Male">
                                    <label class="label-format" for="exampleRadios">
                                        Male
                                    </label>
                                </div>
                            </div>
                            <div class="p-col-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio"  name="sex" id="exampleRadios" value="Female">
                                    <label class="label-format" for="exampleRadios2">
                                        Female
                                    </label>
                                </div>
                                @error('sex')
                                <p>{{ $errors->first('sex') }}</p>
                                @enderror
                            </div>
                            &nbsp;
                        </div>
                        <div class="row" style="margin-top:20px">
                            <div class="p-col-3">
                                <label class="label-format" for="exampleDateOfBirth">Date of Birth</label>
                            </div>
                            <div class="p-col-9">
                                <input type="text" class="form-control"  value="{{ $personalInfo->DateOfBirth }}" name="DateOfBirth" id="exampleDateOfBirth" placeholder="yyyy/mm/dd">
                                @error('DateOfBirth')
                                <p>{{ $errors->first('DateOfBirth') }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="from-group">
                        <div class="row" style="margin-top:20px">
                            <div class="p-col-3">
                                <label class="label-format" for="exampleNationality">Nationality</label>
                            </div>
                            <div class="p-col-9">
                                <input type="text" class="form-control" value="{{ $personalInfo->Nationality }}" name="Nationality" id="exampleNationality" placeholder="Nationality">
                                @error('Nationality')
                                <p>{{ $errors->first('Nationality') }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="row"style="margin-top:20px">
                            <div class="p-col-3">
                                <label class="label-format" for="examplePostCode">Post Code</label>
                            </div>
                            <div class="p-col-9">
                                <input type="text" class="form-control" value="{{ $personalInfo->PostCode }}" name="PostCode" id="examplePostCode" placeholder="Post Code">
                                @error('PostCode')
                                <p>{{ $errors->first('PostCode') }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="row"style="margin-top:20px">
                            <div class="p-col-3">
                                <label class="label-format" for="exampleTelephone">Telephone</label>
                            </div>
                            <div class="p-col-9">
                                <input type="text" class="form-control"  value="{{ $personalInfo->Telephone }}" name="Telephone" id="exampleTelephone" placeholder="Telephone">
                            </div>
                        </div>
                        <div class="row"style="margin-top:20px">
                            <div class="p-col-3">
                                <label class="label-format" for="exampleMobile">Mobile</label>
                            </div>
                            <div class="p-col-9">
                                <input type="text" class="form-control" value="{{ $personalInfo->Mobile }}" name="Mobile" id="exampleMobile" placeholder="Mobile">
                                @error('Mobile')
                                <p>{{ $errors->first('Mobile') }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="row"style="margin-top:20px">
                            <div class="p-col-3">
                                <label class="label-format" for="examplePassport">Passport</label>
                            </div>
                            <div class="p-col-9">
                                <input type="text" class="form-control" value="{{ $personalInfo->Passport }}" name="Passport" id="examplePassport" placeholder="Passport">
                                @error('PostCode')
                                <p>{{ $errors->first('PostCode') }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="from-group">
                        <div class="row" style="margin-top:20px;">
                            <div class="p-col-12">
                                <label style="margin-left:5px" class="label-format" for="examplePermanentAddress">Permanent Address</label>
                                <textarea type="text" class="form-control"  name="PermanentAddress" id="examplePermanentAddress" rows="3"
                                          style="height:75px;">{{ $personalInfo->PermanentAddress }}</textarea>
                                @error('PermanentAddress')
                                <p>{{ $errors->first('PermanentAddress') }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{--/*section2*/--}}
            <div class="row">
                <div class="col-lg-12"style="margin-top:20px">
                    <u><h5 class="form-section">Section 2: Disability Monitoring</h5></u>
                </div>
                <div class="col-lg-12">
                    <div class="from-group">
                        <div class="row" style="margin-top:20px">
                            <div class="p-col-8">
                                <label style=" margin-top: 0.4rem;font-size: 0.9rem;">Do you have any disability? </label>
                            </div>
                            <div class="p-col-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="disable" id="exampleRadios" value="Yes">
                                    <label class="label-format" for="exampleRadios">
                                        Yes
                                    </label>
                                </div>
                            </div>
                            <div class="p-col-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="disable" id="exampleRadios" value="No">
                                    <label class="label-format" for="exampleRadios2">
                                        No
                                    </label>
                                </div>
                                @error('disable')
                                <p>{{ $errors->first('disable') }}</p>
                                @enderror
                            </div>
                            &nbsp;
                        </div>
                        <div class="row" style="margin-top:20px;">
                            <div class="p-col-12">
                                <label style="margin-left:5px" class="label-format" for="exampleDisability">If "Yes" please describe :</label>
                                <textarea type="text" class="form-control"  name="disableStatement" id="exampleDisability" rows="3"
                                          style="height:75px;">{{ $personalInfo->disableStatement }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{--/*section3*/--}}
            <div class="row">
                <div class="col-lg-12"style="margin-top:20px">
                    <u><h5 class="form-section">Section 3: Emergency Contact Details</h5></u>
                </div>
                <div class="col-lg-6">
                    <div class="from-group">
                        <div class="row" style="margin-top:20px">
                            <div class="p-col-3">
                                <label class="label-format" for="exampleFull">Full Name</label>
                            </div>
                            <div class="p-col-9">
                                <input type="text" class="form-control" value="{{ $personalInfo->FullName }}" name="FullName" id="exampleFull" placeholder="Full Name">
                                @error('FullName')
                                <p>{{ $errors->first('FullName') }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="row"style="margin-top:20px">
                            <div class="p-col-3">
                                <label class="label-format" for="exampleRelationship">Relationship</label>
                            </div>
                            <div class="p-col-9">
                                <input type="text" class="form-control" value="{{ $personalInfo->Relationship }}" name="Relationship" id="exampleRelationship" placeholder="Relationship">
                                @error('Relationship')
                                <p>{{ $errors->first('Relationship') }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="row" style="margin-top:20px">
                            <div class="p-col-12">
                                <label style="margin-left:5px" class="label-format" for="exampleAddress">Address :</label>
                                <textarea type="text" class="form-control"  name="Address" id="exampleAddress" rows="3"
                                          style="height:75px;">{{ $personalInfo->Address }}</textarea>
                                @error('Address')
                                <p>{{ $errors->first('Address') }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row" style="margin-top:20px">
                        <div class="p-col-3">
                            <label class="label-format" for="exampleContactNo">Contact No</label>
                        </div>
                        <div class="p-col-9">
                            <input type="text" class="form-control" value="{{ $personalInfo->ContactNo }}" name="ContactNo" id="exampleContactNo" placeholder="Contact No">
                            @error('ContactNo')
                            <p>{{ $errors->first('ContactNo') }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="row" style="margin-top:20px">
                        <div class="p-col-3">
                            <label class="label-format" for="exampleEmailaddress">Email address</label>
                        </div>
                        <div class="p-col-9">
                            <input type="text" class="form-control"  value="{{ $personalInfo->emailAddress }}" name="EmailAddress" id="exampleEmailaddress" placeholder="Email address">
                            @error('EmailAddress')
                            <p>{{ $errors->first('EmailAddress') }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" style="margin-left: 30px"class="p-button">Change</button>
        </form>
    </section>
 <?php endforeach;?>
@endsection
