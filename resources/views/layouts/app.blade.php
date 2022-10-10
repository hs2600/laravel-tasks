<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel Quickstart - Basic</title>

  <!-- Fonts -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

  <!-- Styles -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/css/main.css" rel="stylesheet">
  {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

  <style>
    body {
      font-family: 'Lato';
      padding-top: 75px;
    }

    .fa-btn {
      margin-right: 6px;
    }

    .footer {
      position: absolute;
      width: 100%;
      padding-top: 10px;
      padding-bottom: 20px;
      background: url(/images/pattern.svg) no-repeat;
      background-size: 100%;
      background-color: #04403c;
      color: #FFFFFF;
      font-size: 15px;
    }

    .footer a {
      color: #999;
    }

    ol,
    ul {
      margin-top: 0;
      margin-bottom: 10px;
      margin-left: -40px;
    }

    .btn-info {
      color: #fff;
      background-color: #d42020;
      border-color: #be1d1d;
    }

    .btn-info:hover, .btn-info:focus { background-color: #d47520; border-color: #fff; }

    .product-title {
      font-family: "Times New Roman";
      font-size: 25px;
      margin-bottom: 0px;
      display: inline-block;
      width: 100%;
    }

    .product-description {
      font-family: "Times New Roman";
      font-size: 18px;
    }

    .product-price {
      font-family: "Times New Roman";
      font-size: 20px;
      font-style: italic;
    }

    .header-container {
      background-image: linear-gradient(131deg, #E93046 0%, #E93046 100%) !important;
      margin-top: -20px;
      margin-bottom: 10px;
      background-attachment: fixed;
    }

    .header-container h1 {
      font-family: "Playfair Display,Georgia,Times New Roman,serif";
      font-weight: 800;
      font-size: 50px;
      color: #ffffff !important;
      line-height: 1.5em;
    }

    .header-container h4 {
      color: #ffffff !important;
    }

    .navbar {
      border-width: 0 1px 4px 1px;
      border-color: #e6e6e6;
    }

    .invert_effect {
            filter: invert(100%);
    }
  </style>
</head>

<body id="app-layout">

  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container navbar-container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        <a class="navbar-brand" href="/collections" style="padding: 10px;">
          <img class="invert_effect" src="/assets/images/logo.png" style="width: 75%;">
        </a>

      </div>
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li><a href="/">Home</a></li>
          <li><a href="/collections/">Material</a></li>
          <li><a href="/collections/series/">Series</a></li>
        </ul>
      </div>
    </div>

  </nav>

  @yield('content')


  <footer class="footer">
    <div class="container">

      <div class="d-none d-lg-block" style="height:25px"></div>

      <div class="row">
        <div class="col-sm-1 col-md-1 col-lg-1"></div>

        <div class="col-sm-3 col-md-3 col-lg-3">
          <div class="bs-component">
            COLLECTIONS<br>
            <a href="/collections/ceramic">Ceramic</a><br>
            <a href="/collections/concrete">Concrete</a><br>
            <a href="/collections/glass">Glass</a><br>
            <a href="/collections/ceramic/jonathan adler">Jonathan Adler</a><br>
            <a href="/collections/glass/tommy bahama">Tommy Bahama</a><br>
            <a href="/collections/">All</a><br>
          </div>
        </div>

        <div class="col-sm-3 col-md-3 col-lg-3">
          <div class="bs-component">
            FEATURED<br>
            <a href="/collections/ceramic/shelter island">Shelter Island</a><br>
            <a href="/collections/ceramic/momentum">Momentum</a><br>
            <a href="/collections/ceramic/linen">Linen</a><br>
            <a href="/collections/glass/tommy bahama">Tommy Bahama</a><br>
            <a href="/collections/glass/birdscape">Birdscape</a><br>
            <a href="/collections/series">All</a><br>
          </div>
        </div>

        <div class="col-sm-5 col-md-5 col-lg-5">
          <div class="bs-component">
            NEED ASSISTANCE?<br>
            <a href="mailto:Info@Thousandfold.store">
              Info@LunadaBayTile.com
            </a><br><br>
            <span style="font-size: 25px;">
              <ul>
                <li style="margin-right: 25px; display: inline;">
                  <a href="http://twitter.com/lunadabaytile" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                </li>
                <li style="margin-right: 25px; display: inline;">
                  <a href="http://pinterest.com/lunadabaytile" target="_blank"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                </li>
                <li style="margin-right: 25px; display: inline;">
                  <a href="https://www.instagram.com/lunadabaytile" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </li>
                <li style="margin-right: 25px; display: inline;">
                  <a href="http://houzz.com/lunada-bay-tile" target="_blank"><i class="fa fa-houzz" aria-hidden="true"></i></a>
                </li>
                </li>
                <li style="margin-right: 25px; display: inline;">
                  <a href="http://linkedin.com/company/lunadabaytile" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                </li>
                </li>
                <li style="margin-right: 25px; display: inline;">
                  <a href="http://youtube.com/lunadabaytile" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                </li>

              </ul>
            </span>
          </div>

        </div>
      </div>

      <div class="row">
        <hr style="border: 0.5px solid #ccc;">
        <div class="col-sm-6 col-md-6 col-lg-6">
          <div class="d-lg-block" style="height:40px; font-size: 13px ;">
            © 2022 Lunada Bay Tile. All rights reserved.
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- JavaScripts -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>

</html>