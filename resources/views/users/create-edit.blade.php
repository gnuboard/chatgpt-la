<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>@isset($user) Edit User @else Create User @endisset</title>
  </head>
  <body>
    <div class="container my-5">
      <h1 class="text-center">@isset($user) Edit User @else Create User @endisset</h1>
      <form action="@isset($user) {{ route('users.update', $user) }} @else {{ route('users.store') }} @endisset" method="post">
        @csrf
        @isset($user) @method('PUT') @endisset
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" id="name" name="name" value="@isset($user) {{ $user->name }} @endif">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" id="email" name="email" value="@isset($user) {{ $user->email }} @endif">
        </div>
        @isset($user) 
        @else
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" name="password" id="password" class="form-control">
        </div>
        @endisset
        <button type="submit" class="btn btn-primary">@isset($user) Update @else Create @endisset</button>
      </form>
    </div>
  </body>
</html>