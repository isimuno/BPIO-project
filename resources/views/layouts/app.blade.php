
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet"> 
    <title> Pensioner application !</title>
  </head>
  <body style = "font-family: 'Merriweather', serif; text-align: center;">
  <img src="https://www.moj-posao.net/images/projects/diversity/veleuciliste_velika_gorica.jpg" alt="logo" style="display: block;margin-left: auto;margin-right: auto;width: 30%;">
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav" style ="margin-left: 275px; margin-right: 275px;">
            <ul class="navbar-nav">
                <li>
                <a class="navbar-brand" href="/">VVG</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/documents">Documents <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/pensioners">Pensioners</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/pension_types">Pension Types</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/places">Places</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/municipalities">Municipalities</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/counties">Counties</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container pt-3">
        @yield('content')
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <footer style ="position: fixed; bottom:0px; left: 0; margin-bottom:0px; width:100%; background-color: #424242; color: white; text-align: center; font-size:20px;">&copy; Ivan Šimunović</footer>
  </body>
</html>