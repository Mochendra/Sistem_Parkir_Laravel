@include('cdn')
@if (session()->has('loginError'))
<div class="alert alert-danger alert-dismissble fade show" role="alert">
  {{session('loginError')}}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<section class="vh-100" style="background-color: #508bfc;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <h3 class="mb-5">Sign in</h3>
            <form action="/login" method="post">
              @csrf
              <div class="form-outline mb-4">
                <input type="text" id="user_name" name="user_name" class="form-control form-control-lg" required />
                <label class="form-label">Username</label>
              </div>

              <div class="form-outline mb-4">
                <input type="password" id="password" name="password" class="form-control form-control-lg" required />
                <label class="form-label">Password</label>
              </div>

              <!-- Checkbox -->
              <div class="form-check d-flex justify-content-start mb-4">
                <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
                <label class="form-check-label" for="form1Example3"> Remember password </label>
              </div>

              <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
            </form>
            <hr class="my-4">



          </div>
        </div>
      </div>
    </div>
  </div>
</section>