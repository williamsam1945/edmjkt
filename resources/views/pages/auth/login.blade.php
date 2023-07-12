@extends('layouts.auth')

@section('container')
  <div class="container">
    <section class="vh-100 gradient-custom">
      <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card bg-dark text-white" style="border-radius: 1rem;">
              <div class="card-body p-5 text-center">
                <div class="mb-md-5 mt-md-4 pb-5">

                  <h2 class="fw-bold mb-2 text-uppercase">Welcome to FIN +</h2>
                  <p class="text-white-50 mb-5">Please enter your login and password!</p>

                  @if (session()->has('failed'))
                    <div class="alert alert-danger alert-dismissable fade show">
                      {{ session('failed') }}
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                    </div>
                  @endif

                  <form method="post" action="/login">
                    @csrf
                    <div class="form-outline form-white mb-4">
                      <input type="email" id="typeEmailX" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" placeholder="Email"/>
                      <label class="form-label" for="typeEmailX">Email</label>
                      @error('email')
                      <div class="invalid-feedback">
                        {{  $message }}
                      </div>
                      @enderror
                    </div>
                    <div class="form-outline form-white mb-4">
                      <input type="password" id="typePasswordX" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" placeholder="Password"/>
                      <label class="form-label" for="typePasswordX">Password</label>
                      @error('password')
                      <div class="invalid-feedback">
                        {{  $message }}
                      </div>
                      @enderror
                    </div>
                    <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p>
                    <button class="btn btn-outline-light btn-lg px-5" type="submit">Login</button> 
                  </form>
      
                </div>
                <div>
                  <p class="mb-0">Don't have an account? <a href="#!" class="text-white-50 fw-bold">Sign Up</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection