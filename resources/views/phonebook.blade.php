<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.1/css/bulma.css">
        <!-- Styles -->
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
 @include('nav')
      <div id="app">
  @auth
  <two  ></two>
  <three  ></three>
@else

<div class="tile is-parent">
      <article class="tile is-child notification is-primary">
        <p class="title">Hello ! <a class="button is-primary is-loading is-big">Loading</a> </p>
        <p class="subtitle">Welcome to the Phonebook application</p>
        <div class="content">
         PLease <a href="/login">Login</a> if you have an Account, <br>
         Or you can <a href="/register"> Register</a>, <br>
         So you can access to your Phonebook <br>
         Thank you! <br>  <hr>
         <a class="button is-info is-focused" href="/login">LOGIN</a>
          <a class="button is-primary is-loading is-big">Loading</a>
         <a class="button is-link is-focused" href="/register">REGISTER</a>
        </div>
      </article>
    </div>
  </div>



@endauth

      </div>




      <script src="/js/app.js"></script>

    </body>
</html>
