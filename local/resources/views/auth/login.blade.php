@extends('layouts.app')

@section('contents')


<div id="sweetlogin">
  <!-- Signin account!  -->
  <form method="POST" action="{{ route('login') }}" class="form-signin">
     @csrf
    <h1> Sign in</h1>
    <!-- <div class="social-login">
      <button class="btn facebook-btn social-btn" type="button"><span><i class="fab fa-facebook-f"></i> Sign in with Facebook</span> </button>
      <button class="btn google-btn social-btn" type="button"><span><i class="fab fa-google-plus-g"></i> Sign in with Google+</span> </button>
    </div>
    <p style="text-align:center"> OR </p> -->
    <div class="input-area">
    <div class="input-container">
      <i class="fa fa-user icon"></i>
	  <input id="email" type="email" class="input-field @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email" autofocus>
    </div>
    @error('email')
   <span class="invalid-feedback" role="alert">
     <strong>{{ $message }}</strong>
   </span>
   @enderror
   </div>
  <div class="input-area">
    <div class="input-container">
      <i class="fa fa-key icon"></i>
       <input id="password" type="password" class="input-field @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">
    </div>
  </div>
    @error('password')
			<span class="invalid-feedback" role="alert">
				<strong>{{ $message }}</strong>
			</span>
		@enderror
    <button class="btn btn-success " type="submit" style="background:#30467d"><i class="fas fa-sign-in-alt"></i> Sign in</button>
    <a href="#" id="forgot_pswd">Forgot password?</a>
    <a href="#" id="btn-signup">Sign up</a>
    <br>
    <br>
  </form>

  <!-- forget password -->
    <form method="POST" action="{{ route('password.email') }}"  class="form-reset">
        @csrf
    <div class="input-area">
    <div class="input-container">
      <input id="email" type="email" class="input-field @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
    </div>
    @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    </div>
    <button class="btn btn-primary btn-block" type="submit">Reset Password</button>
    <a href="#" id="cancel_reset"><i class="fas fa-angle-left"></i> Back</a>
  </form>



  <!-- Sign up new account!  -->
  <form method="POST" action="{{ route('register') }}" class="form-signup">
        @csrf
    <h1> Sign up</h1>
    <!-- <div class="social-login">
      <button class="btn facebook-btn social-btn" type="button"><span><i class="fab fa-facebook-f"></i> Sign up with Facebook</span> </button>
    </div>
    <div class="social-login">
      <button class="btn google-btn social-btn" type="button"><span><i class="fab fa-google-plus-g"></i> Sign up with Google+</span> </button>
    </div>
    <p style="text-align:center">OR</p> -->
    <div class="input-area">
    <div class="input-container">
      <i class="fa fa-user icon"></i>
      <input id="name" type="text" class="input-field @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="Name" required autocomplete="name" autofocus>
    </div>
      @error('name')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
    </div>
    <div class="input-area">
    <div class="input-container">
      <i class="fa fa-envelope icon"></i>
      <input id="email" type="email" class="input-field @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email">
    </div>
      @error('email')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
    </div>
<div class="input-area">
    <div class="input-container">
      <i class="fa fa-key icon"></i>
      <input id="password" type="password" class="input-field @error('password') is-invalid @enderror" name="password" placeholder="Type password" required autocomplete="new-password">
    </div>
    @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
    </div>
<div class="input-area">
    <div class="input-container">
      <i class="fa fa-key icon"></i>
          <input id="password-confirm" type="password" class="input-field" name="password_confirmation" placeholder="Confirm password" required autocomplete="new-password">
    </div>
    </div>
    <button class="btn btn-primary btn-block" type="submit"><i class="fas fa-user-plus"></i> Sign Up</button>
    <a href="#" id="cancel_signup"><i class="fas fa-angle-left"></i> Back</a>
  </form>
</div>


@endsection
