  @extends('layouts.app')
  @section('title', 'posts')
  @section('body')

    <div class="title">
        <p>Everyone's Posts</p>
        <button type="button" class="btn btn-outline-secondary border-secondary-subtle" onclick="location.href='{{ route('posts.create') }}'">Create Post</button>
    </div>

    
      <div class="py-5">
        @foreach ($posts as $post)
          <div class="d-flex justify-content-center">
            <div id="posts" class="card border-primary-subtle mb-3" style="max-width: 600px;" onclick="location.href='{{ route('posts.show', $post->id) }}'">
              <div class="card-header bg-transparent border-primary-subtle">{{ $post->user->name }}</div>
              <div class="card-body text-primary-emphasis">
                  <h5 class="card-title">{{ $post->title }}</h5>
                  <p class="card-text">{{ $post->body }}</p>
              </div>
              <div class="card-footer bg-transparent border-primary-subtle">{{ $post->created_at }}
              </div>
            </div>
          </div>
        @endforeach
      </div>
    
  @endsection
