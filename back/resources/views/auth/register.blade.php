@extends('layouts.app')

@section('page-title')
  Register
@endsection

@section('content')
<div class="card-body p-0">
  <!-- Nested Row within Card Body -->
  <div class="row">
    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
    <div class="col-lg-7">
      <div class="p-5">
        <div class="text-center">
          <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
        </div>
        @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
        @endif
        <form class="user"  action="{{route('auth.register')}}" method="POST">
          @csrf
          <div class="form-group">
            <input type="text" class="form-control form-control-user" id="company_name" name="company_name"
              placeholder="Company Name" value="{{ old('company_name') }}" required>
          </div>
          <div class="form-group">
            <input type="text" class="form-control form-control-user" id="address" name="address"
              placeholder="Address" value="{{ old('address') }}" required>
          </div>
          <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
              <input type="text" class="form-control form-control-user" id="zip_code" name="zip_code"
                placeholder="Zip Code" value="{{ old('zip_code') }}" required>
            </div>
            <div class="col-sm-6">
              <input type="text" class="form-control form-control-user" id="city" name="city"
                placeholder="City" value="{{ old('city') }}" required>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
              <input type="text" class="form-control form-control-user" id="name" name="name"
                placeholder="Name" value="{{ old('name') }}" required>
            </div>
            <div class="col-sm-6">
              <input type="text" class="form-control form-control-user" id="surname" name="surname"
                placeholder="Surname" value="{{ old('surname') }}" required>
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
              <input type="email" class="form-control form-control-user" id="email" name="email"
                placeholder="Email" value="{{ old('email') }}" required>
            </div>
            <div class="col-sm-6">
              <input type="password" class="form-control form-control-user" id="password" name="password"
                placeholder="Password" value="{{ old('password') }}" required>
            </div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control form-control-user" id="phone" name="phone"
              placeholder="Phone" value="{{ old('phone') }}" required>
          </div>
          <div class="form-group">
            <input type="text" class="form-control form-control-user" id="bank_name" name="bank_name"
              placeholder="Bank Name" value="{{ old('bank_name') }}" required>
          </div>
          <div class="form-group row">
            <div class="col-sm-6 mb-3 mb-sm-0">
              <input type="text" class="form-control form-control-user" id="iban" name="iban"
                placeholder="IBAN" value="{{ old('iban') }}" required>
            </div>
            <div class="col-sm-6">
              <input type="text" class="form-control form-control-user" id="ibic" name="ibic"
                placeholder="IBIC" value="{{ old('ibic') }}" required>
            </div>
          </div>
          <div>
           <input type="checkbox" name="terms" id="terms" onchange="activateButton(this)"
          >  <span style="font-size: 13px;"> I Agree 
         Terms & Coditions </span>
          </div>
          <br>
          <button type="submit" id="submit" class="btn btn-primary btn-user btn-block" disabled onclick="this.disabled=true" ondblclick="this.disabled=true">Register Account</button>
          <hr>
        </form>
        <div class="text-center">
          <a class="small" href="{{route('login')}}">Already have an account? Login!</a>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  function activateButton(element) {
      if (element.checked) {
          document.getElementById("submit").disabled = false;
      } else {
          document.getElementById("submit").disabled = true;
      }
  }
</script>
@endsection