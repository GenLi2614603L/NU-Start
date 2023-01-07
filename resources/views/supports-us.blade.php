@extends('layouts.default')
@section('title', 'Supports us')
@section('page-content')

    <style>
        .su-content{
            margin-top:2%;
        }

        .su-box{
            width:100%;
            margin:0;
        }

        .su-img{
            position:relative;
            width:50%;
            border-radius: 15px
        }

        .su-info{
            width:46%;
            margin-left:2%;
            margin-right:2%
        }

        .su-title{
            font-size: 1.2rem;
            text-overflow: ellipsis;
            white-space:nowrap;
            overflow: hidden;
        }

        .su-btn{
            text-align: center;
            font-size: 1rem;
        }

        .su-btn-format{
            width:80%;
            padding:0.3rem;
            background-color:#feb300;
            border:0px;
            border-radius: 5px;
        }

        .su-btn-content{
            font-weight: bold;
            color:black;
        }

        .su-btn-content:hover{
            color:black;
            text-decoration: underline !important;
        }

        .sub-context{
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 8;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .line-bottom{
            margin-top:10%;
            border-top:1px solid black;
        }

        .su-box-content{
            font-size:0.9rem;
        }

        @media (max-width:650px) {
            .su-img{
                position:relative;
                width:90%;
                border-radius: 15px;
                margin-left:5%;
                margin-right: 5%;
            }

            .su-info{
                width:90%;
                margin-left:5%;
                margin-right:5%
            }
            .su-content{
                margin-top:10%;
            }
        }

        @media (min-width:750px) and (max-width:1000px) {
            .su-box-content{
                font-size:1rem;
                margin-top:10%;
            }

            .su-title {
                font-size: 1.8rem;
            }
        }

        @media (min-width:1000px) {
            .line-bottom{
                margin-top:5%;
                border-top:1px solid black;
            }
        }

    </style>
    <section class="page-sidebar page-section-ptb">
        <div class="container">
            <div class="row col-lg-12 p-tag">
                <div class="row col-lg-12" style="margin-left:1%">
                    <h1 class="mb-20" style="color:#F6871B;">Support Us</h1>
                    <p>
                        Our supporters are very special to us. It is through your kindness and generosity, that we see young lives changed.
                    </p>
                    <p>
                        Your support and charitable donations are a huge part of making the work we do at NU Start successful, enriching the lives of young people and ensuring lifelong support.
                    </p>
                    <p>
                        There are many different ways to support us through fundraising, volunteering and donations. To find out how you can help, please see below.
                    </p>
                    <p>
                        Help us support our young people across London!
                    </p>
                </div>
            </div>

                <div class="row col-lg-12">
                    <div class="su-content col-lg-6">
                        <div class="row su-box">
                            <img class="su-img" src="images/volunters.png" alt="">
                            <div class="su-info">
                                <a href="/training-and-employment"><h1 class="su-title mb-10">Volunteer</h1></a>
                                <ul class="list-unstyled mb-10" style="height:65%">
                                    <div class="su-box-content">
                                        <li><i class="fa fa-hand-o-right"></i>
                                            Changing the lives of those in need
                                        </li>
                                        <li><i class="fa fa-hand-o-right"></i>
                                            Providing training, e-learning and induction to volunteer
                                        </li>
                                        <li><i class="fa fa-hand-o-right"></i>
                                            Join a unique network of staff and volunteer
                                        </li>
                                        <li><i class="fa fa-hand-o-right"></i>
                                            Offering guardians and supports
                                        </li>
                                    </div>
                                </ul>
                                <div class="su-btn">
                                    <button class="su-btn-format">
                                        <a href="/volunteer" class="su-btn-content">Find out more</a>
                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="su-content col-lg-6">
                        <div class="row su-box">
                            <img class="su-img" src="images/support-our-work.png" alt="">
                            <div class="su-info">
                                <a href="/support-our-work"><h1 class="su-title mb-10">Support our work</h1></a>
                                <ul class="list-unstyled mb-10" style="height:65%;">
                                    <div class="su-box-content">
                                        <li><i class="fa fa-hand-o-right"></i>
                                            This generation of young people are facing unprecedented challenges
                                        </li>
                                        <li><i class="fa fa-hand-o-right"></i>
                                            Help us to continue supporting and training Youth Workers
                                        </li>
                                        <li><i class="fa fa-hand-o-right"></i>
                                            Many ways to make a donation
                                        </li>
                                    </div>
                                </ul>
                                <div class="su-btn">
                                    <button class="su-btn-format">
                                        <a href="/support-our-work" class="su-btn-content">Find out more</a>
                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="su-content col-lg-6">
                        <div class="row su-box">
                            <img class="su-img" src="images/fundraise-for-us.png" alt="">
                            <div class="su-info">
                                <a href="/fundraise-for-us"><h1 class="su-title mb-10">Fundraise for us</h1></a>
                                <ul class="list-unstyled mb-10" style="height:65%">
                                    <div class="su-box-content">
                                        <li><i class="fa fa-hand-o-right"></i>
                                            We are looking for experienced fundraiser
                                        </li>
                                        <li><i class="fa fa-hand-o-right"></i>
                                            You will help create brighter futures for disadvantaged young people
                                        </li>
                                        <li><i class="fa fa-hand-o-right"></i>
                                            Happy to hear your own idea
                                        </li>
                                    </div>
                                </ul>
                                <div class="su-btn">
                                    <button class="su-btn-format">
                                        <a href="/fundraise-for-us" class="su-btn-content">Find out more</a>
                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="su-content col-lg-6">
                        <div class="row su-box">
                            <img class="su-img" src="images/corporate-partners.png" alt="">
                            <div class="su-info">
                                <a href="/training-and-employment"><h1 class="su-title mb-10">Corporate Partnerships</h1></a>
                                <ul class="sub-context list-unstyled mb-10" style="height:65%">
                                    <div class="su-box-content">
                                        <li><i class="fa fa-hand-o-right"></i>
                                            Playing a crucial role in supporting youth across London
                                        </li>
                                        <li><i class="fa fa-hand-o-right"></i>
                                            Bringing benefits to both yours and young people
                                        </li>
                                        <li><i class="fa fa-hand-o-right"></i>
                                            Work together to determine key organisational priorities
                                        </li>
                                        <li><i class="fa fa-hand-o-right"></i>
                                            Work together to change the lives of young Londoners
                                        </li>
                                    </div>
                                </ul>
                                <div class="su-btn">
                                    <button class="su-btn-format">
                                        <a href="/corporate-partnerships" class="su-btn-content">Find out more</a>
                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            <hr class="line-bottom">
        </div>

@endsection
