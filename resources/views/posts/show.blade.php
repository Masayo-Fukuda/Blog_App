<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"></script>
  <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
  <link rel="stylesheet" href="{{ asset('css/posts_show.css') }}">
</head>
<body>
  <header>
    <p>Blog App</p>
  </header>

  <div class="title">
    <p>post</p>
  </div>

  <div class="card border-primary-subtle mb-3" style="max-width: 18rem;">
    <div class="card-header bg-transparent border-primary-subtle">User</div>
    <div class="card-body text-primary-emphasis">
      <h5 class="card-title">Title</h5>
      <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat dolores quidem repellat sint eaque hic, veniam, quasi fuga eum cum </p>
    </div>
    <div class="card-footer bg-transparent border-primary-subtle">Date</div>
  </div>


  <footer>
    <small>Copyright &copy; 2023 Blog App</small>
  </footer>
</body>
</html>