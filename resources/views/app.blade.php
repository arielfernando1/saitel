<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Saitel OS</title>
</head>
<style>
  .desc {
      padding: 15px;
      text-align: center;
      font-size: 1.5rem;
      font-weight: bold;
      text-decoration: none;
  }
  .icon {
      display: block;
      margin-left: auto;
      margin-right: auto;
  }
  .icon:hover {
      transform: scale(1.1);
  }

</style>

<body>
    <nav class="navbar navbar-light bg-warning" style="padding: 2.5rem; margin-bottom: 2.5rem">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">
            <img src="{{ asset('img/logo.png')}}" alt="" width="350"  class="d-inline-block align-text-top">
          </a>
        </div>
      </nav>
      @yield('content')


      







</body>

</html>
