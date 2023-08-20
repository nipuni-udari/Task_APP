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
    <div class="container">
        <br>
        <form action="/updatetasks" method="post">
            {{ csrf_field() }}
            <input type="text" class="form-control" name="task" value="{{ $taskdata->task }}"/>
            <input type="hidden" name="task" value="{{ $taskdata->id}}"/>
            <br>
            <input type="submit" class="btn btn-primary" value="Update"/>
            &nbsp;
            <input type="button" class="btn btn-danger" value="Cancel"/>
        </form>
</body>
</html>
