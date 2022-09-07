@extends('layouts.app')

@section('content')

<div class="container-fluid vh-100">

    <div class="row">

      <div class="col-6 col-s-12 d-flex" id="plogoregister">
        <div class="row justify-content-center my-auto mx-auto">
          <div class="col-12 col-sm-12 text-center my-5">
            <img src="/img/va_logo_w.png"
              class="img-fluid">
          </div>
        </div>
      </div>

      <div class="col-6 col-s-12 d-flex justify-content-center text-white vh-100" id="registerform">        

          <div class="col-6 col-s-6 mx-auto my-auto">
            <h2 class="text-center">Register</h2>

            <form action="{{ route('register') }}" method="post">
              @csrf
              <div class="form-outline form-white my-4 ">
                <input type="text"  class="form-control @error('name') is-invalid @enderror" name="name"/>
                @error('name')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                <label class="form-label">Name</label>
            </div>
    
            <div class="form-outline form-white mb-3">
                <input type="email" id="typeEmailX" name="email" class="form-control" />
                <label class="form-label" for="typeEmailX">Email</label>
                @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
            </div>
    
              <div class="form-outline form-white mb-3">
                <input type="password" id="typePasswordX" name="password"  class="form-control" />
                <label class="form-label" for="typePasswordX">Password</label>
                @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
              </div>
    
              <div class="form-outline form-white mb-3">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                <label class="form-label" for="typePasswordX">Confirm Password</label>
              </div>
    
              <div class="row justify-content-center">
                <div class="col-9 col-s-9 text-center">
                  <button class="btn btn-outline-light mx-auto px-5" type="submit">Register</button>
                </div>
                @if (Route::has('login'))
                <div class="row">
                  <div class="col-12 col-s-12">
                    <p class="small fw-bold mt-1 pt-1 mb-0 text-white">
                      You already have an account? <a href="{{ route('login') }}"class="link-danger">Login</a>
                    </p>
                  </div>
                </div>
                @endif
              </div>

            </form>

          </div>

      </div>

  </div>
</div>


@endsection
