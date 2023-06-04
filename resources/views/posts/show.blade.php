  @extends('layouts.app')
  @section('title', 'show')
  @section('body')

    <div class="d-flex justify-content-center">
      <div id="post" class="card border-primary-subtle mb-3" style="max-width: 600px;">
        <div class="card-header bg-transparent border-primary-subtle">{{ $post->user->name }}</div>
        <div class="card-body text-primary-emphasis">
            <h5 class="card-title">{{ $post->title }}</h5>
            <p class="card-text">{{ $post->body }}</p>
        </div>
        <div class="card-footer bg-transparent border-primary-subtle">{{ $post->created_at }}</div>
      </div>
    </div>
      

      <div class="buttons">
          <button type="button" class="btn btn-outline-primary border-primary-subtle" onclick="location.href='{{ route('posts.edit', $post->id) }}'">Edit</button>
          <form action="{{ route('posts.destroy', $post->id) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-outline-danger border-danger-subtle" onclick="confirm('Sure?')">Delete</button>
          </form>
      </div>

  @endsection
