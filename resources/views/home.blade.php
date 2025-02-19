<!DOCTYPE html>
<html lang="en">

<head>

  <!-- Title -->
  <title>Christian E Y Resume</title>

  <!-- Required Meta Tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Personal Portfolio HTML Template based on Bootstrap by Erilisdesign">
  <meta name="author" content="Erilisdesign.com">

  <!-- Base CSS -->
  <link rel="stylesheet" href="/vendor/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="/css/utilities.css">

  <link rel="stylesheet" href="/css/custom.css">

  <!-- Libs CSS -->
  <link rel="stylesheet" href="/vendor/slick/slick.min.css" type="text/css">
  <link rel="stylesheet" href="/vendor/vegas/vegas.min.css" type="text/css">
  <link rel="stylesheet" href="/vendor/featherlight/featherlight.min.css" type="text/css">
  <link rel="stylesheet" href="/vendor/featherlight/featherlight.gallery.min.css" type="text/css">
  <link rel="stylesheet" href="/vendor/fontawesome/css/all.min.css" type="text/css">
  <link rel="stylesheet" href="/vendor/themify-icons/css/themify-icons.css" type="text/css">

  <!-- Fonts -->
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Roboto:wght@300;400;500;700&display=swap"
    rel="stylesheet">

</head>

<body>

  <div id="preloader" class="preloader">
    <div class="loader-status">
      <div class="spinner"></div>
    </div>
  </div>

  <div class="site-container">

    <div id="top"></div>

    <!-- Mobile logo -->
    <a href="#" class="mobile-logo mobile-logo-light bg-dark">
      @foreach ($data as $datas)
        <span>{{ $datas->firstname }}</span>
      @endforeach

    </a>

    <!-- Navigation toggle -->
    <button type="button" id="navigation-toggle" class="nav-toggle nav-toggle-light bg-dark">
      <span></span>
    </button>

    <!-- Site header -->
    <header class="site-header site-header-light bg-dark">
      <div class="header-inner">
        <div class="header-brand">
          <!-- Logo -->
          <a href="#" class="logo">
            @foreach ($data as $datas)
              <span>{{ $datas->firstname . ' ' . $datas->lastname }}</span>
              <span class="title-letter text-white opacity-10">{{ $datas->initial }}</span>
            @endforeach
          </a>
        </div>
        <div class="nav-divider mb-8"></div>
        <nav class="site-nav">
          <ul id="navigation">
            <li>
              <a href="#home" class="scrollto">Home</a>
            </li>
            <li>
              <a href="#about" class="scrollto">About</a>
            </li>
            <li>
              <a href="#skills" class="scrollto">Skills</a>
            </li>
            {{-- <li>
              <a href="#portfolio" class="scrollto">Portfolio</a>
            </li> --}}
            <li>
              <a href="#experience" class="scrollto">Experiences</a>
            </li>
            <li>
              <a href="#contact" class="scrollto">Contact</a>
            </li>
          </ul>
        </nav>
        <div class="nav-divider my-8"></div>
        <nav>
          <ul class="list-inline text-center">
            <li class="list-inline-item">
              <a class="btn btn-sm btn-icon btn-outline-white border-0 rounded-circle" href="#">
                <span class="btn-icon-inner fab fa-facebook-f"></span>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn btn-sm btn-icon btn-outline-white border-0 rounded-circle" href="#">
                <span class="btn-icon-inner fab fa-instagram"></span>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn btn-sm btn-icon btn-outline-white border-0 rounded-circle" href="#">
                <span class="btn-icon-inner fab fa-twitter"></span>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn btn-sm btn-icon btn-outline-white border-0 rounded-circle" href="#">
                <span class="btn-icon-inner fab fa-pinterest"></span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </header>

    <!-- Header overlay -->
    <div class="header-overlay">
      <div class="overlay-inner bg-dark opacity-80"></div>
    </div>

    <!-- Back to top button -->
    <button type="button" id="backtotop" class="btn btn-primary btn-icon">
      <span class="btn-icon-inner fas fa-angle-up"></span>
    </button>

    <!-- Page wrapper -->
    <div class="page-wrapper">
      <div id="page-cover" class="page-cover">
        <div class="page-cover-wrapper-fixed">
          <div class="page-cover-bg bg-primary"></div>
          <div class="page-cover-wrap">

            <section id="home" class="d-flex min-vh-100">
              @foreach ($data as $datas)
                <div class="container align-self-center text-white text-center">
                  <div class="avatar avatar-xxl mb-6">
                    <div class="avatar-shape avatar-shape-rounded bg-white mt-n2 mb-n2 mr-n2"></div>
                    <img src="{{ 'demo/images/' . $datas->picturepath }}" alt=""
                      class="avatar-img rounded-circle shadow-light">
                  </div>
                  <h1 class="mb-2 mb-lg-3">{{ $datas->firstname . ' ' . $datas->lastname }}</h1>
                  <p class="lead mb-0">{{ $datas->jobposition }}</p>
                  <span class="cover-letter letter-xl">{{ $datas->initial }}</span>
              @endforeach
          </div>
          </section>

        </div>
      </div>
    </div><!--end .page-cover -->

    <div class="page-content">

      <section id="about">
        <div class="container">
          <div class="section-title h2 text-center mb-8">
            @foreach ($data as $datas)
              <h2 class="mb-0">About Me</h2>
              <span class="title-letter">{{ $datas->initial }}</span>
          </div>
          <div class="row">
            <div class="col-md-6 col-lg-4 d-none d-lg-block">
              <img class="img-fluid w-100 rounded" src="{{ 'demo/images/' . $datas->picturepath }}" alt="">
            </div>
            <div class="col-lg-8">
              <h3>{{ $datas->firstname . ' ' . $datas->lastname }}</h3>
              <p class="lead"></p>{{ $datas->jobposition }}
              @endforeach

              @foreach ($dataprofile as $dataprofiles)
                <p class="mb-5">{{ $dataprofiles->description }}</p>
                <div class="row mb-8">
                  <div class="col-md-6 mb-5 mb-md-0">
                    <h4 class="mb-4">Education</h4>
                    @for ($i = 1; $i <= 5; $i++)
                      @if ($dataprofiles->{'pendidikan' . $i})
                        <!-- Hanya tampilkan jika ada pendidikan -->
                        <p class="h5">
                          {{ $dataprofiles->{'pendidikan' . $i} . ' ' . $dataprofiles->{'jurusan' . $i} }}
                        </p>
                        <p>
                          {{ $dataprofiles->{'lokasipendidikan' . $i} . ' ' . ',' . ' ' . $dataprofiles->{'tahunlulus' . $i} }}
                        </p>
                      @endif
                    @endfor

                  </div>
              @endforeach
            </div>
            <a href="#" class="btn btn-primary">Download CV</a>
            {{-- <a href="#contact" class="btn btn-light scrollto">Send Message</a> --}}
          </div>
        </div>
    </div>
    </section>


    {{-- section skills start --}}
    <section id="skills" class="bg-light">
      <div class="container">
        <div class="row mb-8">
          <div class="col-lg-10 col-xl-8 mx-lg-auto text-center">
            <div class="section-title h2 mb-3">
              <h2 class="mb-0">Skills</h2>
              <span class="title-letter">S</span>
            </div>
            {{-- <p>Fusce massa dolor, mattis sed ultrices ut, placerat ut leo. Donec sed fringilla lectus, non vulputate
              orci. Integer id libero euismod, interdum ligula vel, porttitor magna. Sed euismod maximus finibus.</p> --}}
          </div>
        </div>
        @foreach ($dataskill as $dataskills)
          <div class="row">
            <div class="col-md-12 mb-4 mb-md-0">
              <p class="h6 mb-1">{{ $dataskills->skill }}</p>
              <div class="progress mb-6 rounded-0" style="height:5px">
                <div class="progress-bar" role="progressbar" style="{{ 'width:' . $dataskills->percentage . '%' }}"
                  aria-valuenow="{{ $dataskills->percentage }}" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </section>
    {{-- section skills end --}}

    {{-- section experience start --}}
    <section id="experience" class="pb-0">
      <div class="container">
        <div class="section-title h2 text-center mb-8">
          <h2 class="mb-0">Experience</h2>
          <span class="title-letter">E</span>
        </div>
      @foreach ( $dataexperience as $dataexperiences )
        <div class="row">
          <div class="col-lg-4 mb-1 mb-lg-0">
            <p class="h5 mb-0">{{ $dataexperiences->experience }}</p>
            <p class="opacity-75">{{ $dataexperiences->company . ', ' . $dataexperiences->startyear .  ' - ' . $dataexperiences->endyear }}</p>
          </div>
          <div class="col-lg-8">
            <p>{{ $dataexperiences->description }}</p>
          </div>
        </div>

        <hr />
      @endforeach

      
      </div>
    </section>
    {{-- section experience end --}}

    {{-- section services start --}}
    {{-- <section id="services" class="pb-0">
      <div class="container">
        <div class="row mb-8">
          <div class="col-lg-10 col-xl-8 mx-lg-auto text-center">
            <div class="section-title h2 mb-3">
              <h2 class="mb-0">Services</h2>
              <span class="title-letter">S</span>
            </div>
            <p>Fusce massa dolor, mattis sed ultrices ut, placerat ut leo. Donec sed fringilla lectus, non vulputate
              orci. Integer id libero euismod, interdum ligula vel, porttitor magna. Sed euismod maximus finibus.</p>
          </div>
        </div>
        <div class="row my-n2 mx-sm-n2">
          <div class="col-md-6 col-xl-4 py-2 px-md-2">
            <div class="feature-block feature-boxed feature-decorated">
              <div class="feature-icon text-primary mb-3">
                <div>
                  <i class="ti-timer"></i>
                </div>
              </div>
              <h3 class="h4 mb-2">Launch Quickly</h3>
              <p>Quisque ultrices non velit sit amet consectetur. Cras turpis dolor, facilisis a nibh non, ullamcorper
                facilisis mauris. Nulla rutrum arcu sed ligula malesuada, quis condimentum eros sollicitudin.</p>
            </div>
          </div>

          <div class="col-md-6 col-xl-4 py-2 px-md-2">
            <div class="feature-block feature-boxed feature-decorated">
              <div class="feature-icon text-primary mb-3">
                <div>
                  <i class="ti-brush-alt"></i>
                </div>
              </div>
              <h3 class="h4 mb-2">Stylish Design</h3>
              <p>Quisque ultrices non velit sit amet consectetur. Cras turpis dolor, facilisis a nibh non, ullamcorper
                facilisis mauris. Nulla rutrum arcu sed ligula malesuada, quis condimentum eros sollicitudin.</p>
            </div>
          </div>

          <div class="col-md-6 col-xl-4 py-2 px-md-2">
            <div class="feature-block feature-boxed feature-decorated">
              <div class="feature-icon text-primary mb-3">
                <div>
                  <i class="ti-book"></i>
                </div>
              </div>
              <h3 class="h4 mb-2">Well Documented</h3>
              <p>Quisque ultrices non velit sit amet consectetur. Cras turpis dolor, facilisis a nibh non, ullamcorper
                facilisis mauris. Nulla rutrum arcu sed ligula malesuada, quis condimentum eros sollicitudin.</p>
            </div>
          </div>

          <div class="col-md-6 col-xl-4 py-2 px-md-2">
            <div class="feature-block feature-boxed feature-decorated">
              <div class="feature-icon text-primary mb-3">
                <div>
                  <i class="ti-layers"></i>
                </div>
              </div>
              <h3 class="h4 mb-2">Multiple Styles</h3>
              <p>Quisque ultrices non velit sit amet consectetur. Cras turpis dolor, facilisis a nibh non, ullamcorper
                facilisis mauris. Nulla rutrum arcu sed ligula malesuada, quis condimentum eros sollicitudin.</p>
            </div>
          </div>

          <div class="col-md-6 col-xl-4 py-2 px-md-2">
            <div class="feature-block feature-boxed feature-decorated">
              <div class="feature-icon text-primary mb-3">
                <div>
                  <i class="ti-settings"></i>
                </div>
              </div>
              <h3 class="h4 mb-2">Fully Customizable</h3>
              <p>Quisque ultrices non velit sit amet consectetur. Cras turpis dolor, facilisis a nibh non, ullamcorper
                facilisis mauris. Nulla rutrum arcu sed ligula malesuada, quis condimentum eros sollicitudin.</p>
            </div>
          </div>

          <div class="col-md-6 col-xl-4 py-2 px-md-2">
            <div class="feature-block feature-boxed feature-decorated">
              <div class="feature-icon text-primary mb-3">
                <div>
                  <i class="ti-headphone-alt"></i>
                </div>
              </div>
              <h3 class="h4 mb-2">Friendly Support</h3>
              <p>Quisque ultrices non velit sit amet consectetur. Cras turpis dolor, facilisis a nibh non, ullamcorper
                facilisis mauris. Nulla rutrum arcu sed ligula malesuada, quis condimentum eros sollicitudin.</p>
            </div>
          </div>
        </div>
      </div>
    </section> --}}
    {{-- section services end --}}

    {{-- section portofolio start --}}
    {{-- <section id="portfolio">
      <div class="container">
        <div class="row mb-8">
          <div class="col-lg-10 col-xl-8 mx-lg-auto text-center">
            <div class="section-title h2 mb-3">
              <h2 class="mb-0">Portfolio</h2>
              <span class="title-letter">P</span>
            </div>
            <nav class="portfolio-filter isotope-filter">
              <ul class="justify-content-center">
                <li><a href="#" class="active" data-filter="*">All</a></li>
                <li><a href="#" data-filter=".web">Web</a></li>
                <li><a href="#" data-filter=".brand">Brand</a></li>
                <li><a href="#" data-filter=".design">Design</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="portfolio-container isotope-container row my-n2 mx-sm-n2">
          <div class="isotope-item col-sm-6 col-lg-4 py-2 px-sm-2 web">
            <div class="portfolio-item details-inside">
              <a href="portfolio-single-1.html">
                <div class="item-media">
                  <img src="demo/images/portfolio/project-1.jpg" alt="">
                </div>
                <div class="item-overlay bg-dark"></div>
                <div class="item-details">
                  <h4 class="h5">Love</h4>
                  <p class="font-italic">Web</p>
                </div>
              </a>
            </div>
          </div>

          <div class="isotope-item col-sm-6 col-lg-4 py-2 px-sm-2 brand">
            <div class="portfolio-item details-inside">
              <a href="portfolio-single-2.html">
                <div class="item-media">
                  <img src="demo/images/portfolio/project-2.jpg" alt="">
                </div>
                <div class="item-overlay bg-dark"></div>
                <div class="item-details">
                  <h4 class="h5">Beautiful Girl - Gallery</h4>
                  <p class="font-italic">Brand</p>
                </div>
              </a>
            </div>
          </div>

          <div class="isotope-item col-sm-6 col-lg-4 py-2 px-sm-2 web">
            <div class="portfolio-item details-inside">
              <a href="portfolio-single-3.html">
                <div class="item-media">
                  <img src="demo/images/portfolio/project-3.jpg" alt="">
                </div>
                <div class="item-overlay bg-dark"></div>
                <div class="item-details text-white">
                  <h4 class="h5">Future City - Youtube Iframe</h4>
                  <p class="font-italic">Web</p>
                </div>
              </a>
            </div>
          </div>

          <div class="isotope-item col-sm-6 col-lg-4 py-2 px-sm-2 design">
            <div class="portfolio-item details-inside">
              <a href="portfolio-single-2.html">
                <div class="item-media">
                  <img src="demo/images/portfolio/project-4.jpg" alt="">
                </div>
                <div class="item-overlay bg-dark"></div>
                <div class="item-details text-white">
                  <h4 class="h5">Golden Gate Bridge</h4>
                  <p class="font-italic">Design</p>
                </div>
              </a>
            </div>
          </div>

          <div class="isotope-item col-sm-6 col-lg-4 py-2 px-sm-2 web">
            <div class="portfolio-item details-inside">
              <a href="portfolio-single-1.html">
                <div class="item-media">
                  <img src="demo/images/portfolio/project-9.jpg" alt="">
                </div>
                <div class="item-overlay bg-dark"></div>
                <div class="item-details text-white">
                  <h4 class="h5">Beach</h4>
                  <p class="font-italic">Web</p>
                </div>
              </a>
            </div>
          </div>

          <div class="isotope-item col-sm-6 col-lg-4 py-2 px-sm-2 web">
            <div class="portfolio-item details-inside">
              <a href="portfolio-single-3.html">
                <div class="item-media">
                  <img src="demo/images/portfolio/project-6.jpg" alt="">
                </div>
                <div class="item-overlay bg-dark"></div>
                <div class="item-details text-white">
                  <h4 class="h5">Mountains</h4>
                  <p class="font-italic">Web</p>
                </div>
              </a>
            </div>
          </div>

          <div class="isotope-item col-sm-6 col-lg-4 py-2 px-sm-2 web">
            <div class="portfolio-item details-inside">
              <a href="portfolio-single-1.html">
                <div class="item-media">
                  <img src="demo/images/portfolio/project-10.jpg" alt="">
                </div>
                <div class="item-overlay bg-dark"></div>
                <div class="item-details text-white">
                  <h4 class="h5">Adventure</h4>
                  <p class="font-italic">Web</p>
                </div>
              </a>
            </div>
          </div>

          <div class="isotope-item col-sm-6 col-lg-4 py-2 px-sm-2 web">
            <div class="portfolio-item details-inside">
              <a href="portfolio-single-2.html">
                <div class="item-media">
                  <img src="demo/images/portfolio/project-11.jpg" alt="">
                </div>
                <div class="item-overlay bg-dark"></div>
                <div class="item-details text-white">
                  <h4 class="h5">Waterfall</h4>
                  <p class="font-italic">Web</p>
                </div>
              </a>
            </div>
          </div>

          <div class="isotope-item col-sm-6 col-lg-4 py-2 px-sm-2 web">
            <div class="portfolio-item details-inside">
              <a href="portfolio-single-1.html">
                <div class="item-media">
                  <img src="demo/images/portfolio/project-5.jpg" alt="">
                </div>
                <div class="item-overlay bg-dark"></div>
                <div class="item-details text-white">
                  <h4 class="h5">Sea</h4>
                  <p class="font-italic">Web</p>
                </div>
              </a>
            </div>
          </div>
        </div><!-- .portfolio-container end -->
      </div>
    </section> --}}
    {{-- section portofolio end --}}

    {{-- <section>
      <div class="overlay">
        <div class="overlay-inner bg-image-holder bg-cover bg-center">
          <img src="demo/images/image-5.jpg" alt="background">
        </div>
        <div class="overlay-inner bg-dark opacity-70"></div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-11 col-xl-10 mx-lg-auto text-center text-white">
            <div class="slider dots-light dots-outside" data-slick='{"dots":true,"arrows":false}'>
              <div>
                <div class="icon icon-5x mb-8">
                  <i class="fa fa-quote-right"></i>
                </div>
                <blockquote>
                  <p class="mb-5">Nulla consequat nulla vitae enim venenatis, vel vulputate mi commodo. Pellentesque
                    consequat at justo quis vulputate. Maecenas elementum metus eu maximus auctor. Morbi ultrices quam
                    rhoncus purus bibendum ornare. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                    dolore eu fugiat nulla pariatur. </p>
                  <footer class="d-flex justify-content-center align-items-center w-lg-50 mx-auto text-left">
                    <div class="avatar">
                      <img src="demo/images/avatar_small.jpg" alt=""
                        class="avatar-img rounded-circle shadow-dark">
                    </div>
                    <div class="ml-5">
                      <h4 class="h6 mb-0">Jessica Nelson</h4>
                      <small class="d-block">Director Business Planning, Amazon</small>
                    </div>
                  </footer>
                </blockquote>
              </div>

              <div>
                <div class="icon icon-5x mb-8">
                  <i class="fa fa-quote-right"></i>
                </div>
                <blockquote>
                  <p class="mb-5">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                    dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                    officia deserunt mollit anim id est laborum.</p>
                  <footer class="d-flex justify-content-center align-items-center w-lg-50 mx-auto text-left">
                    <div class="avatar">
                      <img src="demo/images/avatar_small.jpg" alt=""
                        class="avatar-img rounded-circle shadow-dark">
                    </div>
                    <div class="ml-5">
                      <h4 class="h6 mb-0">Jessica Nelson</h4>
                      <small class="d-block">Director Business Planning, Amazon</small>
                    </div>
                  </footer>
                </blockquote>
              </div>

              <div>
                <div class="icon icon-5x mb-8">
                  <i class="fa fa-quote-right"></i>
                </div>
                <blockquote>
                  <p class="mb-5">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                    dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                    officia deserunt mollit anim id est laborum.</p>
                  <footer class="d-flex justify-content-center align-items-center w-lg-50 mx-auto text-left">
                    <div class="avatar">
                      <img src="demo/images/avatar_small.jpg" alt=""
                        class="avatar-img rounded-circle shadow-dark">
                    </div>
                    <div class="ml-5">
                      <h4 class="h6 mb-0">Jessica Nelson</h4>
                      <small class="d-block">Director Business Planning, Amazon</small>
                    </div>
                  </footer>
                </blockquote>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> --}}

    {{-- <section id="news" class="pb-0">
      <div class="container">
        <div class="section-title h2 text-center mb-8">
          <h2 class="mb-0">Latest News</h2>
          <span class="title-letter">L</span>
        </div>
        <div class="row">
          <div class="col-sm-6 col-md-4 mb-4 mb-md-0">
            <article class="news-block border-0">
              <div class="news-body p-0">
                <div class="mb-4">
                  <img class="img-fluid w-100 rounded" src="demo/images/blog/blog-1.jpg" alt="">
                </div>
                <small class="d-block mb-1">May 27, 2019</small>
                <h2 class="h4 mb-1">
                  <a href="single-article.html">Building an enduring online audience</a>
                </h2>
                <p>Quisque ultrices non velit sit amet consectetur. Cras turpis dolor, facilisis a nibh non, ullamcorper
                  facilisis mauris. Nulla rutrum arcu.</p>
              </div>
            </article>
          </div>

          <div class="col-sm-6 col-md-4 mb-4 mb-md-0">
            <article class="news-block border-0">
              <div class="news-body p-0">
                <div class="mb-4">
                  <img class="img-fluid w-100 rounded" src="demo/images/blog/blog-2.jpg" alt="">
                </div>
                <small class="d-block mb-1">May 20, 2019</small>
                <h2 class="h4 mb-1">
                  <a href="single-article.html">Building a site for your small business</a>
                </h2>
                <p>Quisque ultrices non velit sit amet consectetur. Cras turpis dolor, facilisis a nibh non, ullamcorper
                  facilisis mauris. Nulla rutrum arcu.</p>
              </div>
            </article>
          </div>

          <div class="col-sm-6 col-md-4">
            <article class="news-block border-0">
              <div class="news-body p-0">
                <div class="mb-4">
                  <img class="img-fluid w-100 rounded" src="demo/images/blog/blog-3.jpg" alt="">
                </div>
                <small class="d-block mb-1">May 13, 2019</small>
                <h2 class="h4 mb-1">
                  <a href="single-article.html">A day in the life of a fitness blogger</a>
                </h2>
                <p>Quisque ultrices non velit sit amet consectetur. Cras turpis dolor, facilisis a nibh non, ullamcorper
                  facilisis mauris. Nulla rutrum arcu.</p>
              </div>
            </article>
          </div>
        </div>
      </div>
    </section> --}}

    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-10 mx-lg-auto">
            <div class="row mb-8">
              <div class="col-lg-8 mx-lg-auto text-center">
                <div class="section-title h2 mb-3">
                  <h2 class="mb-0">Contact</h2>
                  <span class="title-letter">C</span>
                </div>
                <p>Want to say hello? Want to know more about me? Give me a message or drop me an email and I will get back
                  to you as soon as I can.</p>
              </div>
            </div>
          @foreach ($data as $datas)
            <div class="row mb-8">
              <div class="col-md-4 mb-5 mb-md-0">
                <div class="feature-block">
                  <div class="feature-icon text-primary mb-4">
                    <div class="mx-auto">
                      <i class="ti-mobile"></i>
                    </div>
                  </div>
                  <p class="text-center"><a href="{{ 'https://wa.me/'.$datas->phonenumber }}"
                    class="text-dark">{{ $datas->phonenumber }}</a><br />
                </p>
                  
                </div>
              </div>

              <div class="col-md-4 mb-5 mb-md-0">
                <div class="feature-block">
                  <div class="feature-icon text-primary mb-4">
                    <div class="mx-auto">
                      <i class="ti-location-pin"></i>
                    </div>
                  </div>
                  <p class="text-center">{{ $datas->address }}</p>
                </div>
              </div>
           
              <div class="col-md-4">
                <div class="feature-block">
                  <div class="feature-icon text-primary mb-4">
                    <div class="mx-auto">
                      <i class="ti-email"></i>
                    </div>
                  </div>
                  <p class="text-center"><a href="{{ 'mailto:' . $datas->email }}"
                      class="text-dark">{{ $datas->email }}</a><br />
                  </p>
                </div>
              </div>
            </div>
          @endforeach
            {{-- <div class="contact-form">
              <form class="mb-0" id="cf" name="cf" action="include/sendemail.php" method="post"
                autocomplete="off">
                <div class="form-row">
                  <div class="form-process"></div>

                  <div class="col-12 col-md-6">
                    <div class="form-group error-text-white">
                      <input type="text" id="cf-name" name="cf-name" placeholder="Enter your name"
                        class="form-control required">
                    </div>
                  </div>

                  <div class="col-12 col-md-6">
                    <div class="form-group error-text-white">
                      <input type="email" id="cf-email" name="cf-email" placeholder="Enter your email address"
                        class="form-control required">
                    </div>
                  </div>

                  <div class="col-12">
                    <div class="form-group error-text-white">
                      <input type="text" id="cf-subject" name="cf-subject" placeholder="Subject (Optional)"
                        class="form-control">
                    </div>
                  </div>

                  <div class="col-12 mb-4">
                    <div class="form-group error-text-white">
                      <textarea name="cf-message" id="cf-message" placeholder="Here goes your message" class="form-control required"
                        rows="7"></textarea>
                    </div>
                  </div>

                  <div class="col-12 d-none">
                    <input type="text" id="cf-botcheck" name="cf-botcheck" value=""
                      class="form-control" />
                  </div>

                  <div class="col-12 text-center">
                    <button class="btn btn-primary" type="submit" id="cf-submit" name="cf-submit">Send
                      Message</button>
                  </div>
                </div>
              </form>
              <div class="contact-form-result text-center"></div> --}}
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Site footer -->
    <footer class="site-footer bg-light">
      <div class="container">
        <nav class="mb-3">
          <ul class="list-inline text-center">
            <li class="list-inline-item">
              <a class="btn btn-sm btn-icon btn-outline-dark border-0 rounded-circle" href="#">
                <span class="btn-icon-inner fab fa-facebook-f"></span>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn btn-sm btn-icon btn-outline-dark border-0 rounded-circle" href="#">
                <span class="btn-icon-inner fab fa-instagram"></span>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn btn-sm btn-icon btn-outline-dark border-0 rounded-circle" href="#">
                <span class="btn-icon-inner fab fa-twitter"></span>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn btn-sm btn-icon btn-outline-dark border-0 rounded-circle" href="#">
                <span class="btn-icon-inner fab fa-pinterest"></span>
              </a>
            </li>
          </ul>
        </nav>
        <p class="text-center">© 2025 Kurisu.id - All Rights Reserved</p>
      </div>
    </footer>

  </div><!--end .page-content -->
  </div><!-- end .page-wrapper -->

  </div>

  <!-- Libs JS -->
  <script src="/vendor/jquery/dist/jquery.min.js"></script>
  <script src="/vendor/popper.js/dist/popper.min.js"></script>
  <script src="/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
  <script src="/vendor/jquery-form/dist/jquery.form.min.js"></script>
  <script src="/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="/vendor/isotope/dist/isotope.pkgd.min.js"></script>
  <script src="/vendor/featherlight/jquery.detect_swipe.js"></script>
  <script src="/vendor/featherlight/featherlight.min.js"></script>
  <script src="/vendor/featherlight/featherlight.gallery.min.js"></script>
  <script src="/vendor/slick/slick.min.js"></script>
  <script src="/vendor/vegas/vegas.min.js"></script>
  <script src="/vendor/typed.js/typed.min.js"></script>
  <script src="/vendor/granim.js/dist/granim.min.js"></script>

  <!-- Theme JS -->
  <script src="/js/main.js"></script>

</body>

</html>
