<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h1 class="text-center my-5">Users</h1>
            <a href="{{ route('users.create') }}" class="btn btn-success mb-3">Create User</a>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Created At</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->created_at }}</td>
                            <td>
                                <a href="{{ route('users.show', $user) }}" class="btn btn-info"> Show </a>
                                <a href="{{ route('users.edit', $user) }}" class="btn btn-primary"> Edit </a>
                                <a href="#" class="btn btn-danger" onclick="if(confirm('Are you sure?')){document.getElementById('delete-user-{{$user->id}}').submit()}"> Delete </a>
                                <form id="delete-user-{{$user->id}}" action="{{ route('users.destroy', $user) }}" method="post" style="display:none">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
</html>