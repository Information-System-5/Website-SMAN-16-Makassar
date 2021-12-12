<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="{{URL::asset('/dist/css/login.css') }}" type="text/css">

    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/54218bd639.js" crossorigin="anonymous"></script>
</head>
<body>
  <div class="wrapper-login mx-auto">
    <div class="login-title">
        <div class="title-img">
          <img src="../dist/img/login.png" alt="Scout group" />
        </div>
        <div class="title-text">
          <h1>PARAGA</h1>
          <h1>SCOUT</h1>
        </div>
        <div class="login-transparent-bg"></div>
      </div>

      <div class="login-info">
        <h1>Login</h1>
        <form method="post" action="/login">
          @csrf
          <div class="login-input">
            <input type="text" placeholder="username" name="name"/>
            <input type="password" placeholder="Password" name="password" />
          </div>
          @if(session('message'))
            <div class="alert alert-danger" role="alert">
              {{session('message')}}
            </div>
          @endif
          <div class="button">
            <button type="submit" class="btn btn-warning">Login</button>
          </div>
        </form>
      </div>
  </div>
</body>
</html>