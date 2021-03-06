<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Libre Baskerville:100,300,400,700" rel='stylesheet' type='text/css'>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <style>
        body {
            font-family: 'Libre Baskerville';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>

</head>

<body id="app-layout">
    <nav class="navbar navbar-light" style="background-color: #daeff7">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand">ToDo List</a>
            </div>
        </div>
    </nav>
    @yield('content')

</body>

</html>