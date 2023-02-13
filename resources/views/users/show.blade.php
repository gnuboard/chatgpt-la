<!DOCTYPE html>
<html>
<head>
    <title>Show User</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h1>Show User</h1>
        <table class="table">
            <tbody>
                <tr>
                    <td>ID</td>
                    <td>{{ $user->id }}</td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td>{{ $user->name }}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>{{ $user->email }}</td>
                </tr>
                <tr>
                    <td>Created At</td>
                    <td>{{ $user->created_at }}</td>
                </tr>
            </tbody>
        </table>

        <a href="{{ route('users.index') }}" class="btn btn-primary">Back</a>
    </div>
</body>
</html>
