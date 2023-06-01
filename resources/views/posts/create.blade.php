  @extends('layouts.app')
  @section('title', 'create')
  @section('body')
      <div class="title">
        <p>Create new post</p>
      </div>

      <div class="box">
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Title</label>
          <input type="text" class="form-control" id="exampleFormControlInput1">
        </div>
        <div class="mb-3">
          <label for="exampleFormControlTextarea1" class="form-label">Body</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
      </div>

      <div class="create_button">
        <button type="button" class="btn btn-outline-secondary">Create</button>
      </div>
  @endsection