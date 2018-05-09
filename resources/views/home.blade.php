@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="../../../../favicon.ico">


    <!-- Bootstrap core CSS -->
    <link href="../../../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>

  <body>
    

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-3 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              

            <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="users"></span>
                  Profils
                </a>
              </li>

              @if(Auth::user()->role == 'skolens')
            <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="book"></span>
                  Priekšmeti
                </a>
              </li>
            
            @endif

              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file"></span>
                  Nodarbība
                </a>
              </li>

              @if(Auth::user()->role == 'skolotajs')
            <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="users"></span>
                  Skolēnu saraksts
                </a>
              </li>
            
            @endif

                @if(Auth::user()->role == 'skolotajs')
            <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Mācību materiāli
                </a>
              </li>
            
            @endif

              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="check-square"></span>
                  Apmeklējums
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="award"></span>
                  Progress
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="activity"></span>
                  Diagnoze
                </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="mail"></span>
                  Pasts
                </a>
              </li>
            

           
        </ul>


            

        <main role="main" class="col-md-12 ml-sm-auto col-lg-10 pt-3 px-4">
          
          </div>

          <canvas class="my-4" id="myChart" width="900" height="380"></canvas>

        
        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

   
    </script>
  </body>
</html>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection