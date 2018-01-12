
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
    <script src="https://use.fontawesome.com/08e7939fc8.js"></script>
</head>
    <!--style for register, make a new file later-->

    <style>
    
    html { height: 100%; }

body{
    line-height: 3.5;
    background-image: url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSvp8GMRz-lSUgR0EfVlXq4lbz9nn7IOZIsj8RY7ATjK2i-aj5XwA);
    background-repeat: no-repeat;
    background-size: cover;
    background-color: none;
    background-position: center top;
}

    div.columns.is-centered{
        margin-top: 15px;
    }

    .img_logo{
        width: 450px;
        height: 150px;
        
    }

    
    

    

    </style>

    <!--Register Form Bulma-->
<body>

    <div class="container has-text-centered ">

        <div class="column is-fluid ">
            <img class="img_logo"src="../../../images/moviekyte_logo.png" alt="">
        

            <div class="column is-fluid">
                <h2 class="subtitle">Sign in</h2>
            </div>


        
        <div class="columns is-centered">
            <div class="column is-half">
                <div class="field">
                    <p class="control has-icons-left has-icons-right">
                        <input class="input" type="email" placeholder="Email">
                        <span class="icon is-small is-left">
                        <i class="fa fa-envelope"></i>
                        </span>
                        <span class="icon is-small is-right">
                        <i class="fa fa-check"></i>
                        </span>
                    </p>
                </div>

                <div class="field"> 
                    <p class="control has-icons-left">
                        <input class="input" type="password" placeholder="Password">
                        <span class="icon is-small is-left">
                        <i class="fa fa-lock"></i>
                        </span>
                    </p>
                </div>

                <div class="field">
                    <p class="control">
                        <button class="button is-success is-fullwidth">
                        Login 
                        </button>
                    </p>
                </div>

                <div class="columns is-centered">
                    <h2 class="subtitle"><a href="/login">Forgot Your Password?</a></h2>
                </div>
            </div>
        </div>

    </div>

 

</body>
</html>
