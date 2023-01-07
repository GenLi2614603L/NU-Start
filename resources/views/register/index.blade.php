@extends('layouts.default')
@section('title', 'Home | Nu Start Community Enterprise')
@section('page-content')
    <style>

        section{
            background-color: whitesmoke;
            align-items:center;
            padding:5%;
        }

        .r-container{
            background-color: whitesmoke;
            border-radius:0.7rem;
            box-shadow:0 0.0rem 1.7rem rgba(0,0,0,0);
            height:450px;
            max-width:758px;
            overflow:hidden;
            width:100%;
            position:relative;
        }


        .container_from{
            height:100%;
            position:absolute;
            top:0;
            transition: all 1.5s ease-in-out;
        }

        .container--signin{
            left:0;
            width:50%;
            z-index:2;
        }

        .r-container.right-panel-active .container--signin{
            transform: translateX(100%);
        }

        .container--signup{
            left:0;
            opacity:0;
            width:50%;
            z-index:1;
        }

        .r-container.right-panel-active .container--signup{
            animation: show 1.5s;
            opacity: 1;
            transform: translateX(100%);
            z-index:5;
        }

        .container_overlay{
            background-color: whitesmoke;
            height:100%;
            left:50%;
            overflow:hidden;
            position:absolute;
            top:0;
            transition: transform 1.5s ease-in-out;
            width:50%;
            z-index: 100;
        }

        .r-container.right-panel-active .container_overlay{
            transform: translateX(-100%);
        }

        .overlay{
            background:url({{asset('images/registration.png')}})no-repeat fixed center;
            height:100%;
            left:-100%;
            position:relative;
            transform: translateX(0);
            transition: transform 1.5s ease-in-out;
            width:200%;
        }

        .r-container.right-panel-active .overlay{
            transform: translateX(50%);
        }

        .overlay_panel{
            align-items: center;
            display:flex;
            flex-direction: column;
            height:100%;
            justify-content: center;
            position: absolute;
            text-align: center;
            top:0;
            transform:translateX(0);
            transition: transform 0.6s ease-in-out;
            width:50%;
        }

        .overlay--left{
            transform: translateX(-20%);
        }

        .r-container.right-panel-active .overlay--left{
            transform: translateX(0);
        }

        .overlay--right{
            right:0;
            transform: translateX(0);
        }

        .r-container.right-panel-active .overlay--right{
            transform: translateX(20%);
        }

        .r-button{
            background-color: #036295;
            border-radius: 20px;
            border:1px solid #036295;;
            color:white;
            cursor:pointer;
            font-size:0.8rem;
            font-weight: bold;
            letter-spacing: 0.1rem;
            padding: 0.9rem 4rem;
            text-tansfor:uppercase;
            transition:transform 40ms ease-in;
            margin-top: 10px;
        }

        @media (max-width: 500px) {
            .r-button{
                background-color: #036295;
                border-radius: 20px;
                border:1px solid #036295;;
                color:white;
                cursor:pointer;
                font-size:0.8rem;
                font-weight: bold;
                letter-spacing: 0.1rem;
                padding: 0.9rem 0.7rem;
                text-tansfor:uppercase;
                transition:transform 40ms ease-in;
                margin-top: 10px;
            }
        }

        .form > .r-button{
            margin-top:1.5rem;
        }

        .r-button:active{
            transform: scale(0.95);
        }

        .r-button:focus{
            outline:none;
        }

        .r-form{
            background-color: #f6871b;
            display:flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding:0 3rem;
            height:100%;
            text-align: center;
        }

        .input{
            background-color: white;
            border:none;
            padding:0.9rem 0.9rem;
            margin:0.5rem 0;
            width:100%;
        }

        .from_title{
            font-family: 'Poppins', sans-serif;
            font-weight: 300;
            margin-bottom:10px;

        }
        .link{
            color:gray;
            font-size: 0.9rem;
            margin:1.5rem 0;
            text-decoration: none;
        }


    </style>
    <section>
        <div class="container r-container right-panel-active">
            <div class="container_from container--signup">
                <form action="/register" method="post" class="r-form" id="form1">
                    @csrf
                    <h2 class="from_title">Sign Up</h2>
                    <input type="text"  name="name" id="name" placeholder="name" class="input">
                    @error('name')
                    <p>{{ $message }}</p>
                    @enderror
                    <input type="email" name="email" id="email" value="{{ old('email') }}" placeholder="email" class="input">
                    @error('email')
                    <p>{{ $message }}</p>
                    @enderror
                    <input type="password" name="password" id="password" placeholder="password" class="input">
                    @error('password')
                    <p>{{ $message }}</p>
                    @enderror
                    <button type="submit" class="r-button">submit</button>
                </form>
            </div>

            <div class="container_from container--signin">
                <form action="/login" method="post" class="r-form" id="form2">
                    @csrf
                    <h2 class="from_title">Log in</h2>
                    <input type="text"  name="email" id="email" placeholder="email" class="input">
                    <input type="password" name="password" id="password" placeholder="password" class="input">
                    <a href="#" class="link">Forgot password?</a>
                    <button type="submit" class="r-button">submit</button>
                </form>
            </div>

            <div class="container_overlay">
                <div class="overlay">
                    <div class="overlay_panel overlay--left">
                        <button class="r-button" id="signin">Already have an account</button>
                    </div>

                    <div class="overlay_panel overlay--right">
                        <button class="r-button"id="signup">Register now</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        let signinbtn = document.getElementById("signin")
        let signupbtn = document.getElementById("signup")
        let form1 = document.getElementById("form1")
        let form2 = document.getElementById("form2")
        let container = document.querySelector(".r-container")

        signinbtn.addEventListener("click",function(){
            container.classList.remove("right-panel-active")
        })

        signupbtn.addEventListener("click",function(){
            container.classList.add("right-panel-active")
        })

    </script>

@endsection


