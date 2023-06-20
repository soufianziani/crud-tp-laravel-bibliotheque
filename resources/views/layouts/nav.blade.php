<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
   <title>@yield('title')</title>
</head>
<body>
   <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="/livres">Bibliotheque</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active"  href="/livres">Livers list </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="/create">Create Livre</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="{{route('auteurs')}}">Auteurs list</a>
            </li>
            
            
          </ul>
        </div>
      </div>
    </nav>
   
    @yield('create')
    @yield('list-table')
    @yield('edit-table')
    @yield('list-auteurs')
</body>
</html>