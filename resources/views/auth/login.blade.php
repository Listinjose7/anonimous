@extends('layouts.app')

@section('content')
<div class="limiter">
        <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
            <div class="wrap-login100">
            
                    <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="wrap-input100 validate-input{{ $errors->has('email') ? ' has-error' : '' }}" data-validate = "Enter Email">
                            

                            
                                <input id="email" type="email" class="input100" name="email" value="{{ old('email') }}" placeholder="email">
                               

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                 <span class="focus-input100" data-placeholder="&#xf207;"></span>
                            
                        </div>

                        <div class="wrap-input100 validate-input{{ $errors->has('password') ? ' has-error' : '' }}">
                            

                            
                                <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                <span class="focus-input100" data-placeholder="&#xf191;"></span>
                            </div>
                       

                        <div class="contact100-form-checkbox">
                            
                                   
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} class="input-checkbox100" id="ckb1">
                                         <label> Remember Me
                                    </label>
                                </div>
                      

                        <!-- <div class="container-login100-form-btn">
                            
                                <button type="submit" class="login100-form-btn">
                                    Login
                                </button>

                                <a class="text-center p-t-90" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div> -->
                            <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Login
                        </button>
                    </div>

                    <div class="text-center p-t-90">
                        <a class="txt1" href="{{ route('password.request') }}">
                            Forgot Password?
                        </a>
                    </div>
                        
                    </form>
                </div>
            </div>
        
    </div>
</div>
<div id="dropDownSelect1"></div>

@endsection
