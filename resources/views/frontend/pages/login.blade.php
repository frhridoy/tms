

@extends('frontend.master')


@section('content')
<form action="{{route('tourist.do.login')}}" method="post">
    @csrf
<section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card bg-dark mt-5 text-white" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">

              <div class="mb-md-5 mt-md-4 pb-5">

                <h2 class="fw-bold mb-2 text-white text-uppercase">Login</h2>
                <p class="text-white-50 mb-5">Please Enter Your Email and Password!</p>

                <div class="form-outline text-left form-white mb-4">
                    <label class="form-label" for="typeEmailX">Email</label>
                  <input type="email" id="typeEmailX" name="email" class="form-control form-control-lg" />
                </div>

                <div class="form-outline text-left form-white mb-4">
                    <label class="form-label" for="typePasswordX">Password</label>
                  <input type="password" id="typePasswordX" name="password" class="form-control form-control-lg" />
                </div>
                <button class="btn btn-outline-light btn-lg px-5" type="submit">Submit</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</form>
@endsection