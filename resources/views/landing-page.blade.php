<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <title>IPT Systems</title>
    <style>
        body{
            background-color: rgb(18, 19, 18);
            background-image: url('/picture/bg.jpg');

        }
        .container{
            height: 50px;
            width: 10%;
            padding-left: 2%;
            /* margin-right: 100%; */
            /* margin-block-end: 50%; */
        }
        #text{
            text-align: center;
            /* font-family:'Times New Roman', Times, serif; */
            font-size: 30px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" style="margin-left: 20px">IPT</a>
            <ul class="nav justify-content-right" style="margin-left: 80%">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/register')}}">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/login')}}">Login</a>
                </li>
            </ul>
        </div>
    </nav>
    <br>
    <header>
        <div class="page-content mt-5 " id="text">
            <h1>Welcome to my Spotify account.</h1>
            <h2>You can buy album here from your favorite artists.</h2>
        </div>
    </header>
        {{-- <div class="container">
            <div class="card">
                <img src="{{ URL::to ('/picture/spo.jpg') }}" class="rounded">
            </div>
        </div> --}}
    {{-- <footer>
        <div class="page-content mt-5" id="text">
            <h1>Welcome to my Spotify account.</h1>
            <h2>To view my playlists, you can register and then login.</h2>
        </div>
    </footer> --}}

</body

