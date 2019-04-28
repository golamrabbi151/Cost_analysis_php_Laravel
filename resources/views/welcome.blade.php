
@include('layouts.header')


    <div class="container" style="height:100vh;">
       
       
        <div class="head_class" style="text-align:center">
            @if(Route::has('login'))
                @auth
                 <button class="btn btn-pink-moon btn-rounded"> <a style="color: #fff" href="{{ url('/home') }}">Home</a></button>
                 <button class=" btn btn-pink-moon btn-rounded"><a style="color: #fff" href="{{url('profile')}}">Profile</a></button>

                @else         
                <button class="btn btn-pink-moon btn-rounded"><a style="color: #fff" href="{{ route('login') }}">SignIn</a></button> <button class=" btn btn-pink-moon btn-rounded"><a style="color: #fff" href="{{ route('register') }}">SignUp</a></button>
                {{--  @endif --}}
                @endauth
                @endif
        </div>
        <div class="body_text">
            <h1>Analysis of your daily cost And Save the Money</h1>
        </div>

        <div class="container">
        <div class="row " style=" text-align: center; padding-top: 65px;">
            <div class="col-md-4  .col-xl-4" > </div>
            <div class="col-md-4  .col-xl-4" style=" text-align:center;">
                {{-- @if(Route::has('login'))
                @auth --}}
                   <a href="{{Route::has('login')?url('/home'):url('login') }}"><button class="btn btn-pink-moon btn-fab">Let's Start</button></a> 
                {{-- @endauth
                @endif --}}
            </div>
            <div class="col-md-4 ">  </div>
        </div>

        </div>


    </div>



@include('layouts.footer')
