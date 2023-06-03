  @extends('layouts.app')
  @section('title', 'Login')
  @section('body')
      <div class="title">
          <p>Login</p>
      </div>

      <div class="py-5">

        @if ($errors->any())
            <div class="error">
                <p style="font-weight: bold;">EROOR!</p>
                @foreach ($errors->all() as $error)
                    <P>{{ $error }}</P>
                @endforeach
            </div>
        @endif

        <form class="box" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-outline-secondary">Submit</button>
        </form>

      </div>

  @endsection
