  @extends('layouts.app')
  @section('title', 'posts')
  @section('body')

      <div class="title">
          <p>Everyone's Posts</p>
          <button type="button" class="btn btn-outline-secondary border-secondary-subtle" onclick="location.href='{{ route('posts.create') }}'">Create Post</button>
      </div>

    @foreach ($posts as $post)
      <div class="py-5">

        <div class="d-flex justify-content-center">
          <div id="post" class="card border-primary-subtle mb-3" style="max-width: 600px;">
            <div class="card-header bg-transparent border-primary-subtle">{{ $post->user }}</div>
            <div class="card-body text-primary-emphasis">
                <h5 class="card-title">{{ $post->title }}</h5>
                <p class="card-text">{{ $post->body }}</p>
            </div>
            <div class="card-footer bg-transparent border-primary-subtle">{{ $post->date }}
            </div>
        </div>
        </div>

      </div>
    @endforeach
  @endsection
