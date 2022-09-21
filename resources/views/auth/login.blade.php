@extends('layouts.app')

@section('content')

{{-- vh-100 d-flex --}}
<section class="d-flex vh-100" style="background-color: #050a30">
    <div class="container my-auto h-custom">
      {{-- justify-content-center align-items-center h-100 --}}
      <div class="row d-flex">
        <div class="col-4 col-s-4 mx-auto d-flex justify-content-center align-items-center">
          <img src="/img/va_logo.png"
            class="img-fluid mx-auto" id="va-img">
        </div>
        <div class="col-4 col-s-4 mx-auto">
          <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
              <p class="lead fw-normal mb-0 me-3 text-white">Sign in with</p>
              <button type="button" class="btn btn-primary btn-floating mx-1">
                <i class="fab fa-facebook-f"></i>
              </button>
  
              <button type="button" class="btn btn-primary btn-floating mx-1">
                <i class="fa fa-google"></i>
              </button>
  
              <button type="button" class="btn btn-primary btn-floating mx-1">
                <i class="fab fa-linkedin-in"></i>
              </button>
            </div>
  
            <div class="divider d-flex align-items-center my-4">
              <p class="text-center fw-bold mx-3 mb-0 text-white">Or</p>
            </div>
  
            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="email" id="form3Example3" name="lemail" class="form-control"
                placeholder="Enter a valid email address"/>
              <label class="form-label text-white" for="form3Example3">Email address</label>
            </div>
  
            <!-- Password input -->
            <div class="form-outline mb-3">
              <input type="password" id="form3Example4" name="lpassword" class="form-control"
                placeholder="Enter password" />
              <label class="form-label text-white" for="form3Example4">Password</label>
            </div>
  
            <div class="d-flex justify-content-between align-items-center">
              <!-- Checkbox -->
              <div class="form-check mb-0">
                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                <label class="form-check-label text-white" for="form2Example3">
                  Remember me
                </label>
              </div>              
              @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
              @endif
            </div>
  
            <div class="text-center text-lg-start mt-4 pt-2">
              <button type="submit" class="btn btn-primary btn-lg"
                style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>

                @if (Route::has('register'))
                <p class="small fw-bold mt-2 pt-1 mb-0 text-white">Don't have an account? <a href="{{ route('register') }}"
                    class="link-danger">Register</a></p>      
                @endif
              
            </div>
  
          </form>
        </div>
      </div>
    </div>

  </section>
    
@endsection