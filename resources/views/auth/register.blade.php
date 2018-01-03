
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
    <!--style for register, make a new file later-->

    <style>
    body{
        background-image: url("https://images-na.ssl-images-amazon.com/images/M/MV5BMTczMDcxNDA4MV5BMl5BanBnXkFtZTgwNjY1NTk4NjE@._V1_UY113_CR0,0,76,113_AL_.jpg");
        background-repeat: no-repeat;
       
    
    }

    

    </style>

    <!--Register Form Bulma-->
<body>

    <hr>

    <div class="container is-fluid">

        <div class="columns is-centered">
            <h1 class="title">Moviekyte</h1>
        </div>

        <div class="columns is-centered">
            <h2 class="subtitle">Create New Account</h2>
        </div>
        

        <div class="field">
            <label class="label">Name:</label>
            <div class="control">
                <input class="input" type="text">
            </div>
        </div>

        <div class="field">
            <label class="label">Email:</label>
            <p class="control has-icons-left has-icons-right">
                <input class="input" type="email">
                <span class="icon is-small is-left">
                <i class="fa fa-envelope"></i>
                </span>
                <span class="icon is-small is-right">
                <i class="fa fa-check"></i>
                </span>
            </p>
        </div>

        <div class="field">
            <label class="label">Password:</label>
            <p class="control has-icons-left">
                <input class="input" type="password">
                <span class="icon is-small is-left">
                <i class="fa fa-lock"></i>
                </span>
            </p>
        </div>
        <div class="field">
            <p class="control">
                <button class="button is-success is-fullwidth">
                Submit  
                </button>
            </p>
        </div>

        <div class="columns is-centered">
            <h2 class="subtitle">Already have an Account?
            <a href="#">Sign in</a></h2>
        </div>

    </div>

    <hr>

</body>
</html>
