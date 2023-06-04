  @extends('layouts.app')
  @section('title', 'create')
  @section('body')
      <div class="title">
        <p>Create new post</p>
      </div>

      @if ($errors->any())
            <div class="error">
                <p style="font-weight: bold;">EROOR!</p>
                @foreach ($errors->all() as $error)
                    <P>{{ $error }}</P>
                @endforeach
            </div>
      @endif

      <div class="box">
        <form action="{{ route('posts.store') }}" method="post">
          @csrf
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Title-less than 30 characters</label>
            <input name="title" type="text" class="form-control" id="exampleFormControlInput1">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Body-less than 140 characters</label>
            <textarea name="body" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
          <div class="create_button">
            <button type="submit" class="btn btn-outline-secondary">Create</button>
          </div>
        </form>

      </div>

      
  @endsection