  @extends('layouts.app')
  @section('title', 'edit')
  @section('body')
        <div class="title">
          <p>Edit post</p>
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
          <form action="{{ route('posts.update', $post->id) }}" method="post">
            @csrf
            @method('put')
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Title-less than 30 characters</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" value="{{ $post->title }}">
            </div>
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">Body-less than 140 characters</label>
              <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $post->body }}</textarea>
            </div>
            <div class="create_button">
              <button type="submit" class="btn btn-outline-secondary">Edit</button>
            </div>
          </form>
        </div>
  @endsection