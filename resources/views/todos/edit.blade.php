<!DOCTYPE HTML>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Todos</title>

  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/css?family=Libre Baskerville:100,300,400,700" rel='stylesheet' type='text/css'>

  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
  <style>
    body {
      font-family: 'Libre Baskerville';
    }
  </style>
</head>

<body>
  <div class="container ">
    <div class=" col-sm-offset-4 col-sm-4">
      <div class="panel panel-info">
        <div class="panel-heading">Update Task</div>
        <div class="panel-body">
          <x-alert />
          <form method="post" action="{{route('todo.update', $todo->id)}}" class="py-5">
            @csrf
            @method('patch')
            <div class="col-sm-9">
              <input type="text" name="title" value="{{$todo->title}}" class="form-control">
            </div>
            <input type="submit" name="Create" value="Update" class="edit btn btn-outline-primary" />
          </form>


        </div>
      </div>
      <a href="{{route('todo.index')}}" class="btn btn-info btn-sm btn-block">Back</a>
    </div>

  </div>
  </div>

</body>

</html>