@extends('layouts.main')

@section('content')
<section class="h-100 gradient-form" style="background-color: #eee;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-6"> <!-- Consistent width with login form -->
          <div class="card rounded-3 text-black">
            <div class="row g-0">
              <div class="col-lg-12"> <!-- Full width for the form -->
                <div class="card-body p-md-5 mx-md-4">

                  <div class="text-center">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp"
                      style="width: 185px;" alt="logo">
                    <h4 class="mt-1 mb-5 pb-1">Create an account</h4>
                  </div>

                  <form>
                    <!-- Name input with the same styling as login form -->
                    <div data-mdb-input-init class="form-outline mb-4">
                      <input type="text" id="form3Example1cg" class="form-control"
                        placeholder="Your Name" style="border-radius: 30px; border: 1px solid #ccc; padding: 10px 15px;" />
                      <label class="form-label" for="form3Example1cg">Your Name</label>
                    </div>

                    <!-- Email input with the same styling as login form -->
                    <div data-mdb-input-init class="form-outline mb-4">
                      <input type="email" id="form3Example3cg" class="form-control"
                        placeholder="Your Email" style="border-radius: 30px; border: 1px solid #ccc; padding: 10px 15px;" />
                      <label class="form-label" for="form3Example3cg">Your Email</label>
                    </div>

                    <!-- Password input with the same styling as login form -->
                    <div data-mdb-input-init class="form-outline mb-4">
                      <input type="password" id="form3Example4cg" class="form-control"
                        placeholder="Password" style="border-radius: 30px; border: 1px solid #ccc; padding: 10px 15px;" />
                      <label class="form-label" for="form3Example4cg">Password</label>
                    </div>

                    <!-- Repeat Password input with the same styling as login form -->
                    <div data-mdb-input-init class="form-outline mb-4">
                      <input type="password" id="form3Example4cdg" class="form-control"
                        placeholder="Repeat your password" style="border-radius: 30px; border: 1px solid #ccc; padding: 10px 15px;" />
                      <label class="form-label" for="form3Example4cdg">Repeat your password</label>
                    </div>

                    <!-- Checkbox for terms and conditions -->
                    <div class="form-check d-flex justify-content-center mb-5">
                      <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" />
                      <label class="form-check-label" for="form2Example3g">
                        I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                      </label>
                    </div>

                    <!-- Register Button with consistent styling -->
                    <div class="text-center pt-1 mb-5 pb-1">
                      <button type="button" data-mdb-button-init data-mdb-ripple-init
                        class="btn btn-primary btn-block fa-lg mb-3"
                        style="background: linear-gradient(to right, #ff416c, #ff4b2b); border: none; border-radius: 30px; padding: 10px 20px;">
                        Register
                      </button>
                    </div>

                    <!-- Login Here Link with consistent styling -->
                    <div class="d-flex align-items-center justify-content-center pb-4">
                      <p class="mb-0 me-2">Already have an account?</p>
                      <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-danger" style="border-radius: 30px;">
                        <a class="text-muted" href="/login">Login Here</a>
                      </button>
                    </div>

                  </form>

                </div>
              </div>
              <!-- Right side content removed -->
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
@endsection
