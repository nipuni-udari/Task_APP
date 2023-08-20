<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a href="#" class="navbar-brand">Brand</a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="#" class="nav-item nav-link active">Home</a>
                <a href="#" class="nav-item nav-link">Profile</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Messages</a>
                    <div class="dropdown-menu">
                        <a href="#" class="dropdown-item">Inbox</a>
                        <a href="#" class="dropdown-item">Sent</a>
                        <a href="#" class="dropdown-item">Drafts</a>
                    </div>
                </div>
            </div>

            <div class="navbar-nav">
                <a href="#" class="nav-item nav-link">Login</a>
            </div>
        </div>
    </div>
</nav>

<div class = "container">
    <div class ="text-center">
        <h1>Daily Tasks</h1>
        <div class="row">
            <div class ="col-md-12">

                @foreach ( $errors -> all() as $error )
                    <div class="alert alert-danger" role="alert">
                    {{ $error }}
                    </div>

                @endforeach

                <form method="post" action="/SaveTask">
                    {{ csrf_field() }}

                    <input type="text" class="form-control" name="task" placeholder="Enter our task">
                <br>
                <input type="submit" class="btn btn-primary" value="save">
                <input type="button" class="btn btn-warning" value="Clear">

                </form>

                <table class="table table-dark table-striped">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Task</th>
                        <th scope="col">Completed</th>
                        <th scope="col">Action</th>

                        @foreach ($tasks as $task)

                            </tr>
                    </thead>

                            <tr>

                                <td>{{ $task ->id }}</td>
                                <td>{{ $task -> task }}</td>
                                <td>
                                 @if ((  $task -> iscompleted ))
                               <button class="btn btn-success">Completed</button>
                               @else
                               <button class="btn btn-warning">Not Completed</button>
                               @endif
                            </td>

                            <td>

                                @if (!$task->iscompleted)
                                <a href="/markascompleted/{{$task->id}}"  class="btn btn-primary">Mark as completed</a>

                                @else
                                <a href="/markasnotcompleted/{{$task->id}}"  class="btn btn-danger">Mark as not completed</a>

                                @endif

                                <a href="/deletetask/{{$task->id}}" class="btn btn-warning">Delete</a>
                                <a href="/updatetask/{{$task->id}}" class="btn btn-info">Edit</a>
                            </td>

                            </tr>
                        @endforeach
                    </thead>

                  </table>

                </div>
            </div>
        </div>
</div>

</body>
</html>
