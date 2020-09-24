@extends('layouts.app')

@section('page-title')
  SignUp Page
@endsection

@section('content')
<div class="container-fluid bg-image">
  <div class="row">
      <div class="login-wraper">
          <div class="hidden-xs">
              <img src="images/login.jpg" alt="">
          </div>
          <div class="banner-text hidden-xs">
              <div class="line"></div>
              <div class="b-text">
                  Watch <span class="color-active">millions<br> of</span> <span class="color-b1">v</span><span class="color-b2">i</span><span class="color-b3">de</span><span class="color-active">os</span> for free.
              </div>
              <div class="overtext">
                  Over 6000 videos uploaded Daily.
              </div>
          </div>
          <div class="login-window">
              <div class="l-head">
                  Sign Up for Free
              </div>
              <div class="l-form">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                  <form action="{{route('auth.register')}}" method="POST">
                        @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Email</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="sample@gmail.com" value="{{ old('email') }}" name="email">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputPassword1">Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="**********" value="{{ old('password') }}" name="password">
                      </div>
                      <div class="form-group">
                          <label for="exampleInputPassword2">Re-type Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword2" placeholder="**********" value="{{ old('password_confirmation') }}" name="password_confirmation">
                      </div>
                      <div class="row">
                          <div class="col-lg-7"><button type="submit" class="btn btn-cv1">Sign Up</button></div>
                          <div class="hidden-xs">
                              <div class="col-lg-1 ortext">or</div>
                              <div class="col-lg-4 signuptext"><a href="{{route('login')}}">Log In</a></div>
                          </div>
                      </div>
                      <div class="row hidden-xs">
                          <div class="col-lg-12 forgottext">
                              <a href="#">By clicking "Sign Up" I agree to circle's Terms of Service.</a>
                          </div>
                      </div>
                      <div class="visible-xs text-center mt-30">
                          <span class="forgottext"><a href="{{route('login')}}">Already have an account?</a></span>
                          <span class="signuptext"><a href="{{route('login')}}">Login here</a></span>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection