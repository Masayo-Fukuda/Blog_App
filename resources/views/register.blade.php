  @extends('layouts.app')
  @section('title', 'Register')
  @section('body')
      <div class="title">
          <p>Register</p>
      </div>

      <form class="box" method="POST" action="{{ route('register') }}">
          @csrf
          <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Name</label>
              <input type="text" name="name" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
          </div>
          <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" name="password" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="mb-3">
              <label for="exampleInputPassword2" class="form-label">Confirm Password</label>
              <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword2">
          </div>
          <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
          </div>
          <button type="submit" class="btn btn-outline-secondary">Submit</button>
      </form>
  @endsection
