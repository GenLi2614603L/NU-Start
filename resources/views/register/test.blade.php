@extends('layouts.default')
@section('title', 'Home | Nu Start Community Enterprise')
@section('page-content')
    <section class="px-6 py-8">
{{--        <main style="margin:auto; border:3px solid;width:50%;padding:10px">--}}
{{--            <h3 class="text-center font-bold text-xl">Register</h3>--}}
{{--            <form action="/register" method="post">--}}
{{--                @csrf--}}
{{--                <div class="mb-6" style="text-align:center;padding:1%">--}}
{{--                    <label for="name" class="block mb-2 font-bold text-ts text-gray-700">--}}
{{--                        name:--}}
{{--                    </label>--}}

{{--                    <input type="text" name="name" id="name" class="border border-gray-400 p-2 w-full">--}}
{{--                </div>--}}

{{--                <div class="mb-6" style="text-align:center;padding:1%">--}}
{{--                    <label for="email" class="block mb-2 font-bold text-ts text-gray-700">--}}
{{--                        Email:--}}
{{--                    </label>--}}

{{--                    <input type="text" name="email" id="email" class="border border-gray-400 p-2 w-full">--}}
{{--                </div>--}}

{{--                <div class="mb-6" style="text-align:center;padding:1%">--}}
{{--                    <label for="password" class="block mb-2 font-bold text-ts text-gray-700">--}}
{{--                        Password:--}}
{{--                    </label>--}}

{{--                    <input type="password" name="password" id="password" class="border border-gray-400 p-2 w-full">--}}
{{--                </div>--}}

{{--                <div>--}}
{{--                    <button type="submit" >--}}
{{--                        submit--}}
{{--                    </button>--}}

{{--                    <button>--}}
{{--                        back--}}
{{--                    </button>--}}
{{--                </div>--}}

{{--            </form>--}}
{{--        </main>--}}
         <form action="/login" method="post" class="r-form" id="form1">
                @csrf
                <h2 class="from_title">Log in</h2>
                <input type="text"  name="email" id="email" placeholder="email" class="input">
                <input type="password" name="password" id="password" placeholder="password" class="input">
                <a href="#" class="link">Forgot password?</a>
                <button type="submit" class="r-button">submit</button>
            </form>

    </section>
@endsection
