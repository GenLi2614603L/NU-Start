@extends('layouts.default')
@section('title', 'Home | Nu Start Community Enterprise')
@section('page-content')
<section>
    <style>

        .box2{
            float:right;
            margin-top:3%;
            margin-right: 3%;
        }

        .box1{
            float:left;
            margin: 2% 0% 0% 3%;
        }

        .box1-info{
            float:left;
            margin: 2% 0% 0% 3%;
        }

        .box2 .item{
            display: inline-block;
            width: 15px;
            height: 15px;
            border-top: 2px solid #f6871b;
            border-right: 2px solid #f6871b;
            transform: matrix(0.7071067811865475, 0.7071067811865476, -0.7071067811865476, 0.7071067811865475, 0, 0);
        }

        .container-list{
            width:50%;
            height:50px;
            border-radius: 0.25rem;
            border:1px solid #dee2e6;
            margin-left: 25%;
            margin-top:1.5%;
            vertical-align: center;
        }

        .container-list:hover{
            box-shadow:0 0.5rem 1rem rgb(0 0 0 / 15%);
            transition: all .2s linear;
        }

        @media (max-width: 800px) {
            .box2{
               display:none;
            }

            svg{
                display:none;
            }

            .box1-info{
                display: none;
            }
        }

        @media (max-width: 1000px) {
            .profile{
                display:none;
            }
        }
        h4{
            /*color:#f6871b;*/
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        }
        #account-bg{
            width:100%;height:200px;
            background:url({{ URL::asset('images/account-bg.jpg')}});
            margin:0;
        }

    </style>
    <div class="row align-items-center text-white justify-content-center" id="account-bg">
        <div class="profile col-6 col-lg-auto ">
            <div style="width: 70px; aspect-ratio: 1; border-width: 4px;" class="rounded-circle bg-dark img-thumbnail my-3 my-lg-5 d-flex align-items-center justify-content-center">
                <span class="h1 m-0 p-0">{{ substr($user, 0, 1) }}</span>
            </div>
        </div>
        <div class=" col-18 col-lg-auto pl-0 pl-lg-3" >
            <h2 class="mb-0 pb-0 mt-0 text-white" style="text-align: center;"><span>{{ $user }}</span>'s NU Start</h2>
            <p class="mb-0 pb-0 mt-0 text-white" style="text-align: center">Manage your account, details and courses.</p>
        </div>
    </div>
    <div class="container" style="margin-top: 1%;margin-bottom: 1%">
        <div class="container-list">
            <a href="/news">
                <div class="box1"><svg xmlns="http://www.w3.org/2000/svg"style="width:30px;height:30px" viewBox="0 0 512 512"><path d="M64 112c-8.8 0-16 7.2-16 16v22.1L220.5 291.7c20.7 17 50.4 17 71.1 0L464 150.1V128c0-8.8-7.2-16-16-16H64zM48 212.2V384c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V212.2L322 328.8c-38.4 31.5-93.7 31.5-132 0L48 212.2zM0 128C0 92.7 28.7 64 64 64H448c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V128z"/></svg></div>
                <div class="box1"><h4>News & events</h4></div>
                <div class="box2"><em class="item"></em></div>

            </a>
        </div>

        <div class="container-list">
            <a href="/become-a-member">
                <div class="box1"><svg xmlns="http://www.w3.org/2000/svg"style="width:30px;height:30px" viewBox="0 0 448 512"><path d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0S96 57.3 96 128s57.3 128 128 128zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg></div>
                <div class="box1"><h4>Member</h4></div>
                @if(!($MemberInfos->isEmpty())==1)
                    <div class="box1-info"><svg xmlns="http://www.w3.org/2000/svg" style="width:30px;height:30px;"  fill="green" viewBox="0 0 512 512"><path d="M470.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L192 338.7 425.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/></svg></div>
                @endif
                @if(($MemberInfos->isEmpty())==1)
                    <div class="box1-info"><svg xmlns="http://www.w3.org/2000/svg" style="width:30px;height:30px;"  viewBox="0 0 512 512"><path d="M373.1 24.97C401.2-3.147 446.8-3.147 474.9 24.97L487 37.09C515.1 65.21 515.1 110.8 487 138.9L289.8 336.2C281.1 344.8 270.4 351.1 258.6 354.5L158.6 383.1C150.2 385.5 141.2 383.1 135 376.1C128.9 370.8 126.5 361.8 128.9 353.4L157.5 253.4C160.9 241.6 167.2 230.9 175.8 222.2L373.1 24.97zM440.1 58.91C431.6 49.54 416.4 49.54 407 58.91L377.9 88L424 134.1L453.1 104.1C462.5 95.6 462.5 80.4 453.1 71.03L440.1 58.91zM203.7 266.6L186.9 325.1L245.4 308.3C249.4 307.2 252.9 305.1 255.8 302.2L390.1 168L344 121.9L209.8 256.2C206.9 259.1 204.8 262.6 203.7 266.6zM200 64C213.3 64 224 74.75 224 88C224 101.3 213.3 112 200 112H88C65.91 112 48 129.9 48 152V424C48 446.1 65.91 464 88 464H360C382.1 464 400 446.1 400 424V312C400 298.7 410.7 288 424 288C437.3 288 448 298.7 448 312V424C448 472.6 408.6 512 360 512H88C39.4 512 0 472.6 0 424V152C0 103.4 39.4 64 88 64H200z"/></svg>(Register now)</div>
                @endif
                <div class="box2"><em class="item"></em></div>
            </a>
        </div>
        <div class="container-list">
            <a href="/personal">
                <div class="box1"><svg xmlns="http://www.w3.org/2000/svg"style="width:30px;height:30px"  viewBox="0 0 384 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M192 0c-41.8 0-77.4 26.7-90.5 64H64C28.7 64 0 92.7 0 128V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V128c0-35.3-28.7-64-64-64H282.5C269.4 26.7 233.8 0 192 0zm0 64a32 32 0 1 1 0 64 32 32 0 1 1 0-64zM112 192H272c8.8 0 16 7.2 16 16s-7.2 16-16 16H112c-8.8 0-16-7.2-16-16s7.2-16 16-16z"/></svg></div>
                <div class="box1"><h4>Complete infos</h4></div>
                @if((!$PersonalInfos->isEmpty())==1)
                    <div class="box1-info"><svg xmlns="http://www.w3.org/2000/svg" style="width:30px;height:30px;" fill="green" viewBox="0 0 512 512"><path d="M470.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L192 338.7 425.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/></svg></div>
                @endif
                @if(($PersonalInfos->isEmpty())==1)
                    <div class="box1-info"><svg xmlns="http://www.w3.org/2000/svg" style="width:30px;height:30px;"  viewBox="0 0 512 512"><path d="M373.1 24.97C401.2-3.147 446.8-3.147 474.9 24.97L487 37.09C515.1 65.21 515.1 110.8 487 138.9L289.8 336.2C281.1 344.8 270.4 351.1 258.6 354.5L158.6 383.1C150.2 385.5 141.2 383.1 135 376.1C128.9 370.8 126.5 361.8 128.9 353.4L157.5 253.4C160.9 241.6 167.2 230.9 175.8 222.2L373.1 24.97zM440.1 58.91C431.6 49.54 416.4 49.54 407 58.91L377.9 88L424 134.1L453.1 104.1C462.5 95.6 462.5 80.4 453.1 71.03L440.1 58.91zM203.7 266.6L186.9 325.1L245.4 308.3C249.4 307.2 252.9 305.1 255.8 302.2L390.1 168L344 121.9L209.8 256.2C206.9 259.1 204.8 262.6 203.7 266.6zM200 64C213.3 64 224 74.75 224 88C224 101.3 213.3 112 200 112H88C65.91 112 48 129.9 48 152V424C48 446.1 65.91 464 88 464H360C382.1 464 400 446.1 400 424V312C400 298.7 410.7 288 424 288C437.3 288 448 298.7 448 312V424C448 472.6 408.6 512 360 512H88C39.4 512 0 472.6 0 424V152C0 103.4 39.4 64 88 64H200z"/></svg>(complete now)</div>
                @endif
                <div class="box2"><em class="item"></em></div>
            </a>
        </div>
        <div class="container-list">
             <a href="/edit">
                <div class="box1"><svg xmlns="http://www.w3.org/2000/svg"style="width:30px;height:30px" viewBox="0 0 448 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M144 144v48H304V144c0-44.2-35.8-80-80-80s-80 35.8-80 80zM80 192V144C80 64.5 144.5 0 224 0s144 64.5 144 144v48h16c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V256c0-35.3 28.7-64 64-64H80z"/></svg></div>
                <div class="box1"><h4>My details</h4></div>
                 @if(!($PersonalInfos->isEmpty())==1)
                     <div class="box1-info"><svg xmlns="http://www.w3.org/2000/svg" style="width:30px;height:30px;" fill="green" viewBox="0 0 512 512"><path d="M470.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L192 338.7 425.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/></svg></div>
                 @endif
                 @if(($PersonalInfos->isEmpty())==1)
                     <div class="box1-info"><svg xmlns="http://www.w3.org/2000/svg" style="width:30px;height:30px;"  viewBox="0 0 512 512"><path d="M373.1 24.97C401.2-3.147 446.8-3.147 474.9 24.97L487 37.09C515.1 65.21 515.1 110.8 487 138.9L289.8 336.2C281.1 344.8 270.4 351.1 258.6 354.5L158.6 383.1C150.2 385.5 141.2 383.1 135 376.1C128.9 370.8 126.5 361.8 128.9 353.4L157.5 253.4C160.9 241.6 167.2 230.9 175.8 222.2L373.1 24.97zM440.1 58.91C431.6 49.54 416.4 49.54 407 58.91L377.9 88L424 134.1L453.1 104.1C462.5 95.6 462.5 80.4 453.1 71.03L440.1 58.91zM203.7 266.6L186.9 325.1L245.4 308.3C249.4 307.2 252.9 305.1 255.8 302.2L390.1 168L344 121.9L209.8 256.2C206.9 259.1 204.8 262.6 203.7 266.6zM200 64C213.3 64 224 74.75 224 88C224 101.3 213.3 112 200 112H88C65.91 112 48 129.9 48 152V424C48 446.1 65.91 464 88 464H360C382.1 464 400 446.1 400 424V312C400 298.7 410.7 288 424 288C437.3 288 448 298.7 448 312V424C448 472.6 408.6 512 360 512H88C39.4 512 0 472.6 0 424V152C0 103.4 39.4 64 88 64H200z"/></svg>(No completed)</div>
                 @endif
                <div class="box2"><em class="item"></em></div>
              </a>
        </div>
        <div class="container-list">
            <a href="/counselling">
                <div class="box1"><svg xmlns="http://www.w3.org/2000/svg"style="width:30px;height:30px"  viewBox="0 0 576 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M0 24C0 10.7 10.7 0 24 0H69.5c22 0 41.5 12.8 50.6 32h411c26.3 0 45.5 25 38.6 50.4l-41 152.3c-8.5 31.4-37 53.3-69.5 53.3H170.7l5.4 28.5c2.2 11.3 12.1 19.5 23.6 19.5H488c13.3 0 24 10.7 24 24s-10.7 24-24 24H199.7c-34.6 0-64.3-24.6-70.7-58.5L77.4 54.5c-.7-3.8-4-6.5-7.9-6.5H24C10.7 48 0 37.3 0 24zM128 464a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zm336-48a48 48 0 1 1 0 96 48 48 0 1 1 0-96z"/></svg></div>
                <div class="box1"><h4>My courses</h4></div>
                <div class="box2"><em class="item"></em></div>
            </a>
        </div>

        <div class="container-list">
            <a href="/logout">
                <div class="box1"><svg xmlns="http://www.w3.org/2000/svg" style="width:30px;height:30px" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M160 96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96C43 32 0 75 0 128V384c0 53 43 96 96 96h64c17.7 0 32-14.3 32-32s-14.3-32-32-32H96c-17.7 0-32-14.3-32-32l0-256c0-17.7 14.3-32 32-32h64zM504.5 273.4c4.8-4.5 7.5-10.8 7.5-17.4s-2.7-12.9-7.5-17.4l-144-136c-7-6.6-17.2-8.4-26-4.6s-14.5 12.5-14.5 22v72H192c-17.7 0-32 14.3-32 32l0 64c0 17.7 14.3 32 32 32H320v72c0 9.6 5.7 18.2 14.5 22s19 2 26-4.6l144-136z"/></svg></div>
                <div class="box1"><h4 >Log out</h4></div>
                <div class="box2"><em class="item"></em></div>
            </a>
        </div>
    </div>
    <div>
       <img src="">

    </div>
</section>
@endsection


