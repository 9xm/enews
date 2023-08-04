<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <!--meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.112.5"-->
    <title>{{$site['title']}}</title>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <link href="{{asset('css/style.css?t='.time())}}" rel="stylesheet">

    <script src="{{asset('js/jquery-3.7.0.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <style>
      .blog-post .vr{ width: 8px; height:2em; position: absolute; left:0px; opacity: 1;}
      .blog-post:nth-of-type(4n+1) .blog-h3 span, .blog-post:nth-of-type(4n+1) .vr{color:#FB9716}
      .blog-post:nth-of-type(4n+2)  .blog-h3 span, .blog-post:nth-of-type(4n+2) .vr{color:#3873AF}
      .blog-post:nth-of-type(4n+3)  .blog-h3 span,  .blog-post:nth-of-type(4n+3) .vr{color:#E7B9A2}
      .blog-post:nth-of-type(4n+4)  .blog-h3 span, .blog-post:nth-of-type(4n+41) .vr{color:#9DC09E}

      </style>
  </head>
<body class="{{$site['bodyClass']}}">   
<nav class="navbar navbar-expand-md fixed-top lh-1 py-3 bg-body-tertiary border-bottom">
  <div class="container">
    <a class="navbar-brand" href="{{url('/')}}">eNews7</a>
    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse" id="navbarCollapse" style="">
      <!--form class="d-flex me-auto" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form-->
      <div class="me-auto"></div>
      <ul class="navbar-nav  mb-2 mb-md-0">
        <li class="nav-item">
          <a class="nav-link active" href="{{url('/')}}">
            <svg class="bi mx-auto" width="24" height="18"><use xlink:href="#svg-home"></use></svg> 
            Home
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <svg class="bi mx-auto" width="24" height="18"><use xlink:href="#svg-tranding"></use></svg> 
            Tranding
          </a>
        </li>
        @auth
        <li class="nav-item">
          <a href="{{route('admin.dashboard')}}" class="nav-link">
            <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
              Dashboard
          </a>
        </li>
        <li class="nav-item">
    			<form method="POST" action="{{ route('logout') }}">
              @csrf
              <a href="{{route('logout')}}" onclick="event.preventDefault(); this.closest('form').submit();" class="nav-link"><svg class="bi mx-auto" width="24" height="18"><use xlink:href="#people-circle"></use></svg>  Logout</a>
          </form>
        </li>
         @else
         <li class="nav-item">
          <a  href="{{route('login')}}" class="nav-link"> 
              <svg class="bi mx-auto" width="24" height="18"><use xlink:href="#people-circle"></use></svg> 
              Login
            </a>         
         </li>
         @endif
      </ul>
      
    </div>
  </div>
</nav>

<!--div class="container">
  

  <div class="nav-scroller py-1 mb-3 border-bottom">
    <nav class="nav nav-underline justify-content-between">
      <a class="nav-item nav-link link-body-emphasis active" href="#">World</a>
      <a class="nav-item nav-link link-body-emphasis" href="#">U.S.</a>
      <a class="nav-item nav-link link-body-emphasis" href="#">Technology</a>
      <a class="nav-item nav-link link-body-emphasis" href="#">Design</a>
      <a class="nav-item nav-link link-body-emphasis" href="#">Culture</a>
      <a class="nav-item nav-link link-body-emphasis" href="#">Business</a>
      <a class="nav-item nav-link link-body-emphasis" href="#">Politics</a>
      <a class="nav-item nav-link link-body-emphasis" href="#">Opinion</a>
      <a class="nav-item nav-link link-body-emphasis" href="#">Science</a>
      <a class="nav-item nav-link link-body-emphasis" href="#">Health</a>
      <a class="nav-item nav-link link-body-emphasis" href="#">Style</a>
      <a class="nav-item nav-link link-body-emphasis" href="#">Travel</a>
    </nav>
  </div>
</div-->

<main class="container">
  <!--div class="p-4 mb-4 rounded text-body-emphasis bg-body-tertiary rounded" id="enews7-ads-main">
    <div class="col-lg-12 px-0">
      <svg width="728" height="90" xmlns="http://www.w3.org/2000/svg" role="img" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">728x90</text></svg>
    </div>
  </div-->

  <div class="row g-5">
    <div class="col-md-3">
      <div class="position-sticky" style="top: 3rem;">
        @include('site.side-menu', [])
        <div class="p-4 mb-3 bg-body-tertiary rounded">
            <ul class="footer-nav flex ">
              <li><a href="#" title="Terms of Use">Advertise with Us </a></li>
              <li><a href="#" title="Terms of Use">Terms of Use </a></li>
              <li><a href="#" title="Cookie Policy">Cookie Policy</a></li>
              <li><a href="#" title="Privacy Policy">Privacy Policy</a></li>
            </ul>
            <div class="copy">© 2022 - {{date('Y')}} eNews7</div>
        </div>  
      </div>
    </div>
    <div class="col-md-6 bg-body-tertiary rounded">
        @yield('content')
    </div>

    <div class="col-md-3">
      <div class="position-sticky" style="top: 3rem;">
        <div class="p-4 bg-body-tertiary rounded" id="enews7-ads-right-sideabr">
          <svg width="300" height="600" xmlns="http://www.w3.org/2000/svg" role="img"  preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%" fill="#eceeef" dy=".3em">300x600</text></svg>
        </div>
      </div>
    </div>
  </div>

</main>
@include('site.svg', [])

    </body>
</html>
