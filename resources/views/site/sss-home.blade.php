<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Hello World</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('site/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('site/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('site/css/elegant-fonts.css') }}">
    <link rel="stylesheet" href="{{ asset('site/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('site/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('site/css/style.css') }}">
  </head>
  <body style="overflow-x:hidden">
    <header class="site-header">
      <div class="nav-bar">
        <div class="container">
          <div class="row">
            <div class="col-12 d-flex flex-wrap justify-content-between align-items-center">
              <div class="site-branding d-flex align-items-center">
                <a class="d-block" href="index-2.html" rel="home">
                  <img class="d-block" src="{{ asset('site/images/logo.jpg') }}" alt="logo">
                </a>
              </div>
              <div class="hamburger-menu d-lg-none">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <div class="row">
      <div class="container">
        <img src="{{ asset('site/images/banner.jpg') }}">
      </div>
    </div>
    <!--banner-->
    <div class="home-page-events" style="padding-bottom:0px">
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-6">
            <div class="upcoming-events">
              <div class="section-heading">
                <h2 class="entry-title">Take the Pledge</h2>
              </div>
              <div class="event-wrap d-flex flex-wrap justify-content-between" style="box-shadow:0px 0px 1px 2px #ccc; padding:50px; text-align:justify; margin-top:50px"> Join us as we commemorate Project Tiger's 50th anniversary and India's efforts to conserve its forests with these unique first-of-a-kind Tiger Anthem Films, composed by Bollywood music director Shantanu Moitra & internationally acclaimed wildlife film-maker Nalla Muthu. Share it with your friends & family for a glimpse into the tiger's world, and spread the message of conservation! 
              <p><b>{{number_format($pledge)}} pepole pledge to unplastic India</b></p>
            </div>
            </div>
          </div>
          <div class="col-12 col-lg-6">
            <div class="featured-cause">
              <div class="section-heading">
                <h2 class="entry-title"> Special Announcement</h2>
              </div>
              <div class="cause-wrap d-flex flex-wrap justify-content-between">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/sCrvaG_aMGI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--banner-->
      <div class="home-page-icon-boxes">
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-6 col-lg-4 mt-4 mt-lg-0">
              <div class="icon-box1 active">
                <figure class="d-flex justify-content-center">
                  <img src="{{ asset('site/images/tiger1.jpg') }}" width="100%" />
                  <img src="{{ asset('site/images/tiger1.jpg') }}" width="100%" />
                </figure>
                <header class="entry-header">
                  <h3 class="entry-title">TIMES TIGER <br>TRUSTEE </h3>
                </header>
                <div class="entry-content">
                  <p>
                    <a href="#" class="btn btn-secondary" style="color:#000; border:1px solid #000" data-toggle="modal" data-target="#myModal">Take a PLEDGE</a>
                    <br>
                    <br>The pledge won’t take more than 20 seconds
                  </p>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mt-4 mt-lg-0">
              <div class="icon-box2 active" style="background-color:#000!important">
                <figure class="d-flex justify-content-center">
                  <img src="{{ asset('site/images/tiger2.jpg') }}" width="100%" />
                  <img src="{{ asset('site/images/tiger2.jpg') }}" width="100%" />
                </figure>
                <header class="entry-header">
                  <h3 class="entry-title">TIMES TIGER <br>AMBASSADOR </h3>
                </header>
                <div class="entry-content">
                  <p>
                    <a a href="#" class="btn btn-secondary" style="color:#ffffff; border:1px solid #fff" data-toggle="modal" data-target="#myModalanthem">Share Tiger Anthem</a>
                    <br>
                    <br>Share on your social media handles and share the URL.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 mt-4 mt-lg-0">
              <div class="icon-box active">
                <figure class="d-flex justify-content-center">
                  <img src="{{ asset('site/images/school-tiger.jpg') }}" height="205" />
                  <img src="{{ asset('site/images/school-tiger.jpg') }}" height="205" />
                </figure>
                <header class="entry-header">
                  <h3 class="entry-title">TIMES TIGER <br>SAVIOUR </h3>
                </header>
                <div class="entry-content">
                  <p>
                    <a href="#" class="btn btn-secondary" style="color:#ffffff; border:1px solid #fff" data-toggle="modal" data-target="#myModalschool">Share Tiger Anthem</a>
                    <br>
                    <small style="font-size:11px">
                      <b>TIMES VERIFIED(FOR SCHOOLS ONLY)</b>
                    </small>
                    <br>Share on your official handles/website Get your school's name included in the TIMES SPECIAL EDITION YEARBOOK to be submitted to Hon'ble PM next month.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="site-footer">
        <div class="footer-bar">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <p class="m-0"> Copyright &copy; <script>
                    document.write(new Date().getFullYear());
                  </script> All rights reserved
              </div>
            </div>
          </div>
        </div>
      </footer>
      <!-- Modal -->
      <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">TIMES TIGER TRUSTEE - Take Pledge </h4>
            </div>
            <div class="modal-body">
              <form action="{{route('certificate')}}" id="formTrustee" method="post">
                @csrf
                <input type="hidden" name="type" value="trustee" />
                <div class="row mb-4">
                  <div class="col">
                    <div class="form-outline">
                      <input type="text"  name="first_name" required class="form-control fname" />
                      <label class="form-label" for="form6Example1">
                        <small>First name</small>
                      </label>
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-outline">
                      <input type="text"  name="last_name"  required class="form-control lname" />
                      <label class="form-label" for="form6Example2">
                        <small>Last name</small>
                      </label>
                    </div>
                  </div>
                </div>
                <!-- Email input -->
                <hr>
                <!-- Submit button -->
                <center>
                  <button type="submit" class="btn btn-primary btnTrustee" style="border:1px solid #666; background-color:#ffff; color:#666">Pledge</button>
                </center>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!--modal 222-->
      <!-- Modal -->
      <div id="myModalanthem" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">TIMES TIGER AMBASSADOR - Tiger Anthem </h4>
            </div>
            <div class="modal-body">
              <iframe width="100%" height="315" src="//www.youtube.com/embed/sCrvaG_aMGI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
              <hr>
              <strong>Share on your social media handles:</strong>
              <br>
              <i class="fa fa-facebook"></i>&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-twitter"></i>&nbsp;&nbsp;&nbsp;&nbsp; <i class="fa fa-linkedin"></i>&nbsp;&nbsp;
            </div>
          </div>
        </div>
      </div>
      <!--modal 333-->
      <div id="myModalschool" class="modal fade" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">TIMES TIGER AMBASSADOR - Tiger Anthem </h4>
            </div>
            <div class="modal-body">
            <form action="{{route('certificate')}}" id="formSaviour" method="post">
                @csrf
                <input type="hidden" name="type" value="saviour" />
                <div class="row mb-4">
                  <div class="col">
                    <div class="form-outline">
                      <input type="text" name="student_name" class="form-control fname"  required />
                      <label class="form-label" for="form6Example1">
                        <small>Student's Name</small>
                      </label>
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-outline">
                      <input type="text" name="school_name" class="form-control lname"  required />
                      <label class="form-label" for="form6Example2">
                        <small>School Name</small>
                      </label>
                    </div>
                  </div>
                </div>
                <!-- Email input -->
                <hr>
                <center>
                  <a href="#">
                    <i class="fa fa-facebook" style="font-size:20px; border:1px solid #ccc; border-radius:50%; padding:10px; text-align:center;  height:35px; width:35px; line-height:15px"></i>
                  </a>&nbsp;&nbsp;&nbsp; <a href="#">
                    <i class="fa fa-twitter" style="font-size:20px; border:1px solid #ccc; border-radius:50%; padding:10px; text-align:center;  height:35px; width:35px; line-height:15px"></i>
                  </a>&nbsp;&nbsp;&nbsp; <a href="#">
                    <i class="fa fa-linkedin" style="font-size:20px; border:1px solid #ccc; border-radius:50%; padding:10px; text-align:center;  height:35px; width:35px; line-height:15px"></i>
                  </a>
                </center>
                <hr>
                <!-- Submit button -->
                <center>
                  <button type="submit" class="btn btn-primary" style="border:1px solid #666; background-color:#ffff; color:#666">Submit</button>
                </center>
              </form>
            </div>
          </div>
        </div>
      </div>
      <style>
       #CertificatePreview .modal-body{max-height: calc(100vh - 200px);overflow-y: auto;}
        </style>
      <div class="modal fade" id="CertificatePreview">
        <div class="modal-dialog modal-dialog-scrollable" style="width:1250px;">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalCenterTitle">Certificate Preview</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary btnCertificateDownlaod">Download</button>
            </div>
          </div>
        </div>
      </div>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <script type='text/javascript' src="{{ asset('site/js/jquery.collapsible.min.js') }}"></script>
      <script type='text/javascript' src="{{ asset('site/js/swiper.min.js') }}"></script>
      <script type='text/javascript' src="{{ asset('site/js/jquery.countdown.min.js') }}"></script>
      <script type='text/javascript' src="{{ asset('site/js/circle-progress.min.js') }}"></script>
      <script type='text/javascript' src="{{ asset('site/js/jquery.countTo.min.js') }}"></script>
      <script type='text/javascript' src="{{ asset('site/js/jquery.barfiller.js') }}"></script>
      <script type='text/javascript' src="{{ asset('site/canvas/html2canvas.js?t='.time()) }}"></script>
      <script type='text/javascript' src="{{ asset('site/canvas/base64js.min.js') }}"></script>
      <script type='text/javascript' src="{{ asset('site/canvas/canvas2image.js') }}"></script>
      <script type='text/javascript' src="{{ asset('site/js/custom.js?t='.time()) }}"></script>
  </body>
</html>