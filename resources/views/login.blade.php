@extends('customer.layouts.main')

@section('content')

<section class="h-100 gradient-form" style="background-color: #eee;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-6"> <!-- Ubah col-xl-10 menjadi col-xl-6 -->
          <div class="card rounded-3 text-black">
            <div class="row g-0">
              <div class="col-lg-12"> <!-- Ubah col-lg-6 menjadi col-lg-12 -->
                <div class="card-body p-md-5 mx-md-4">

                  <div class="text-center">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp"
                      style="width: 185px;" alt="logo">
                    {{-- <h4 class="mt-1 mb-5 pb-1">We are The Lotus Team</h4> --}}
                  </div>

                  <form>
                    <p>Please login to your account</p>

                    <div data-mdb-input-init class="form-outline mb-4">
                      <input type="email" id="form2Example11" class="form-control"
                        placeholder="Email Address" style="border-radius: 30px; border: 1px solid #ccc; padding: 10px 15px;" />
                      <label class="form-label" for="form2Example11">Username</label>
                    </div>

                    <div data-mdb-input-init class="form-outline mb-4">
                      <input type="password" id="form2Example22" class="form-control" style="border-radius: 30px; border: 1px solid #ccc; padding: 10px 15px;" />
                      <label class="form-label" for="form2Example22">Password</label>
                    </div>

                    <div class="text-center pt-1 mb-5 pb-1">
                      <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block fa-lg mb-3" type="button" style="background: linear-gradient(to right, #ff416c, #ff4b2b); border: none; border-radius: 30px; padding: 10px 20px;">Log
                        in</button>
                      <a class="text-muted" href="#!">Forgot password?</a>
                    </div>

                    <div class="d-flex align-items-center justify-content-center pb-4">
                      <p class="mb-0 me-2">Don't have an account?</p>
                      <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-danger" style="border-radius: 30px;">
                        <a class="text-muted" href="/register">Create New</a>
                      </button>
                    </div>

                  </form>

                </div>
              </div>
              <!-- Bagian kanan dihapus -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



@endsection
