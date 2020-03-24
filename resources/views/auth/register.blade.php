    @extends('layouts.registerlayout')

    @section('content')

    <div class="container">
        <div class="signup-content">
        <div class="col-6 imageContainer">
            <img src="https://ci4.googleusercontent.com/proxy/Z01XaAAV16XY7-bSjn71K1iwtg6weGM8z-gpKduLZDCEIoYcijykuzuwKxDRJmty0oa6Pi1bVn8mjEvpDTUYsTboeNcloaw=s0-d-e1-ft#http://www.is.com.sa/Portals/0/SMLOG/is_Logo_.png" class="imageContainer" width="400px" id="picture">
        </div>
        <div class="signup-form">
        <h2 class="font-face form-title text-right"> تسجيل الدخول</h2>
            <form method="POST" class="register-form" id="register-form" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                    <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                    {{-- <input type="text" name="name" id="name" placeholder="Your Name" class="text-right"> --}}
                     <input id="name" type="text" class="form-control @error('name') is-invalid @enderror text-right" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="إسم المستخدم" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div> 
                     <div class="form-group">
                        <label for="email"><i class="zmdi zmdi-email"></i></label>  
                        {{-- <input type="email" name="email" id="email" placeholder="Your Email" class="text-right"> --}}
                         <input id="email" type="email" class="form-control @error('email') is-invalid @enderror text-right" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="البريد الإلكتروني">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>
                 <div class="form-group">
                    <label for="pass"><i class="zmdi zmdi-lock"></i></label>  
                    {{-- <input type="password" name="pass" id="pass" placeholder="Password" class="text-right"> --}}
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror text-right" name="password" required autocomplete="new-password" placeholder="الرقم السري"> 

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                </div>
                <div class="form-group">
                    <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label> 
                    {{-- <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password" class="text-right"> --}}
                    <input id="password-confirm" type="password" class="text-right form-control" name="password_confirmation" required autocomplete="new-password" placeholder="تأكيد الرقم السري">
                </div>

                <div class="right floated column">
                    <button type="submit" class="right floated column ui primary button ">
                        {{ __('تسجيل') }}
                    </button>
                    {{-- <input type="submit" class="btn btn-light"> --}}
                    
                </div>
            </form>
        </div>
        
    @endsection
