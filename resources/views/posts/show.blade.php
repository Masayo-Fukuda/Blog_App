  @extends('layouts.app')
  @section('title', 'show')
  @section('body')

    <div class="d-flex justify-content-center">
      <div id="post" class="card border-primary-subtle mb-3" style="max-width: 600px;">
        <div class="card-header bg-transparent border-primary-subtle">User</div>
        <div class="card-body text-primary-emphasis">
            <h5 class="card-title">Title</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat dolores quidem
                repellat sint eaque hic, veniam, quasi fuga eum cum </p>
        </div>
        <div class="card-footer bg-transparent border-primary-subtle">Date</div>
      </div>
    </div>
      

      <div class="buttons">
          <button type="button" class="btn btn-outline-primary border-primary-subtle">Edit</button>
          <button type="button" class="btn btn-outline-danger border-danger-subtle">Delete</button>
      </div>

  @endsection
