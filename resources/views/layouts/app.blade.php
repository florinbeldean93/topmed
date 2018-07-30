<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<!--- - - - - - - - - - -  Start of meta    - - - - - - - - - - - - - - - -  -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width; initial-scale=1; maximum-scale=1">
<!--- - - - - - - - - - -  End of styles  - - - - - - - - - - - - - - - - -  -->


<!--- - - - - - - - - - -  Start of styles  - - - - - - - - - - - - - - - -  -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet"  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('css/font.css')}}">
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <!-- End of fonts -->
<!--- - - - - - - - - - -  End of styles  - - - - - - - - - - - - - - - - -  -->


<!-- - - - - - - - - - -   CSRF Token - - - - - - - - -  - - - - - - - - - - -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
<!--- - - - - - - - - - -  End of token - - - - - - - - - - - - - - - - - -  -->

    <title></title>

</head>

<body> 
<!--- - - - - - - - - - -  Start Header - - - - - - - - - - - - - - - - - -  -->
<div id="container1">
    <div class="header">
        <div class="container-wrapper">
            <div class="d-flex justify-content-center py-4">
            <div class="col1">
                <div class="px-3">
                    <h5>C.M TopMed Spital/Policlinica</h5>
                    <pre><img src="{{ asset('Assets/call-answer.svg')}}"> 0265 225 002</pre>
                    <pre><img src="{{ asset('Assets/maps-and-flags.svg')}}"> Tg Mures, Str.Dorobantilor, Nr 1</pre>
                </div>
            </div>
            <div class="col1">
                <div class="px-3"">
                    <h5>C.M TopMed Sighisoara</h5>
                    <pre><img src="{{ asset('Assets/call-answer.svg')}}"> 0365 882 901</pre>
                    <pre><img src="{{ asset('Assets/maps-and-flags.svg')}}"> Sighisoara, Str.Morii Nr.28</pre>
                </div>
            </div>
            <div class="col1">
                <div class="px-3" id="col1">
                    <h5>C.M TopMed Dacia</h5>
                    <pre><img src="{{ asset('Assets/call-answer.svg')}}"> 0365 430 280</pre>
                    <pre><img src="{{ asset('Assets/maps-and-flags.svg')}}"> Tg Mures, Str. Brasovului,Nr 2, Etaj 1</pre>
                </div>
            </div>
            <div class="col1">
                <div class="px-3" id="col1">
                    <h5>C.M. TopMed Reghin</h5>
                    <pre><img src="{{ asset('Assets/call-answer.svg')}}"> 0365 455 767 / 0365 455 768</pre>
                    <pre><img src="{{ asset('Assets/maps-and-flags.svg')}}"> Tg Mures, Str. Brasovului, Nr 2, Etaj 1</pre>
                </div>
            </div>
            <div class="col2">
                <div class="px-3">
                    <pre><img src="{{ asset('Assets/clock1.svg')}}"> L-V  7:00-21:00</pre>
                    <pre>    S      8:00-13:00</pre>
                    <pre><img src="{{ asset('Assets/call-answer.svg')}}"> 0265 - 225 002</pre>
                    <pre><img src="{{ asset('Assets/black-envelope.svg')}}"> office@topmed.ro</pre>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
<!--- - - - - - - - - - -  End of Header  - - - - - - - - - - - - - - - - -  -->

<!--- - - - - - - - - - -  Start Navbar - - - - - - - - - - - - - - - - - -  -->
<div id="navbar0">
<nav class="navbar navbar-expand-lg">
<div class="d-flex justify-content-between">
      <a id ="listitem" class="navbar-brand" href="/"><img src="{{ asset('navbar/topmed.png') }}"></a>
      <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a id ="listitem" class="nav-link text-body " href="/specialitati">Specialitati</a>
          </li>
          <li class="nav-item">
            <a id ="listitem" class="nav-link dropdown-toggle text-body" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Spitale</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="#">TopMed Spital/Policlinica</a>
              <a class="dropdown-item" href="#">TopMed Sighisoara</a>
              <a class="dropdown-item" href="#">TopMed Dacia</a>
              <a class="dropdown-item" href="#">TopMed Reghin</a>
          </li>
          <li class="nav-item">
            <a id ="listitem"  class="nav-link text-body" href="/cercetare">Cercetare</a>
          </li>
          <li class="nav-item">
            <a id ="listitem" class="nav-link text-body" href="/echipamedici">Echipa Medici</a>
          </li>
          <li class="nav-item dropdown">
            <a id ="listitem" class="nav-link dropdown-toggle text-body" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Servicii</a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">>
              <a class="dropdown-item" href="#">Laborator</a>
              <a class="dropdown-item" href="#">Imagistica</a>
              <a class="dropdown-item" href="#">Screening</a>
              <a class="dropdown-item" href="#">Stomatologie</a>
              <a class="dropdown-item" href="#">Fizioterapie</a>
              <a class="dropdown-item" href="#">Carduri</a>
            </div>
          </li>

        </ul>
        <form id = "buton-cauta" class="form-inline ">
          <input class="form-control " type="text" placeholder="" aria-label="Search">
          <button class="btn btn-danger " type="submit">Cauta</button>
        </form>
<ul class="navbar-nav mr-right">
          <li class="nav-item">
            <a id ="listitem" class="nav-link text-body" href="#">EN</a>
          </li>
          <li class="nav-item">
            <a id="lang" class="nav-link text-body" href="#">RO</a>
          </li>
          </ul>
      </div>
    </nav>
</div>
</div>
<!--- - - - - - - - - - -  End of Navbar  - - - - - - - - - - - - - - - - -  -->

    <div class="container-fluid py-4">
            @yield('content')
    </div> 




<!--- - - - - - - - - - -  Start Footer - - - - - - - - - - - - - - - - - -  -->
<div class="footer">
<div id="container2">
    <div class="container-wrap">
        <div class="d-flex justify-content-center py-5">
            <div class="col3">
                <div class="px-5">
                    <p><img src="{{ asset('Assets/placeholder.svg')}}"></p>
                    <p>Str. Dorobantilor. Nr1</p>
                    <p>Tg Mures, Romania</p>
                </div>
            </div>
            <div class="col3">
                <div class="px-5">
                    <p><img src="{{ asset('Assets/phone-call.svg')}}"></p>
                    <p>Fix: 0265 - 225 002</p>
                    <p>Fax: 0265 - 210 342</p>
                </div>
            </div>
            <div class="col3">
                <div class="px-5">
                    <p><img src="{{ asset('Assets/mail.svg')}}"></p>
                    <p>office@topmed.ro</p>
                    <p>pacient@topmed.ro</p>
                </div>
            </div>
            <div class="col3">
                <div class="px-5">
                    <p><img src="{{ asset('Assets/clock.svg')}}"></p>
                    <p>Luni - Vineri 7 - 21</p>
                    <p>Sambata 8 - 13</p>
                </div>
            </div>
        </div>
    <div class="container d-flex justify-content-between py-6">
        <ul class="nav flex-column flex-sm-row">
            <li class="hyper-links">
                <a class="nav-link" href="linkrequired">Despre noi</a>
            </li>
            <li class="hyper-links">
                <a class="nav-link" href="linkrequire">Specialitati</a>
            </li>
            <li class="hyper-links">
                <a class="nav-link" href="linkrequired">Spital</a>
            </li>
            <li class="hyper-links">
                <a class="nav-link" href="linkrequired">Cercetare</a>
            </li>
            <li class="hyper-links">
                <a class="nav-link" href="linkrequire">Laborator</a>
            </li>
            <li class="hyper-links">
                <a class="nav-link" href="linkrequire">Imagistica</a>
            </li>
            <li class="hyper-links">
                <a class="nav-link" href="linkrequire">Screenig</a>
            </li>
            <li class="hyper-links">
                <a class="nav-link" href="linkrequire">Stomatologie</a>
            </li>
            <li class="hyper-links">
                <a class="nav-link" href="linkrequire">Fizioterapie</a>
            </li>
            <li class="hyper-links">
                <a class="nav-link" href="linkrequire">Carduri</a>
            </li>
            <li class="hyper-links">
                <a class="nav-link" href="linkrequire">Contact</a>
            </li>
        </ul>
    </div>
    <div class="spacer"></div>
    </div>
    </div>
</div>
</div>
<div id="container3">
<div class="footer">
<div class="container-fluid py-7">
        <div class="d-flex justify-content-center py-8">
        <p>© Copyright 2018. All Rights Reserved | Powered by Box Net Solutions</p>
        </div>
</div>
</div>
</div>
<!--- - - - - - - - - - -  End of footer  - - - - - - - - - - - - - - - - -  -->


<!--- - - - - - - - - - -  Start of scripts - - - - - - - - - - - - - - - -  -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
<!--- - - - - - - - - - -  End of scripts - - - - - - - - - - - - - - - - -  -->
</body>
</html>