@extends('adminlte::master')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/material-design-icons/3.0.1/iconfont/material-icons.min.css"
      integrity="sha256-x8PYmLKD83R9T/sYmJn1j3is/chhJdySyhet/JuHnfY="
      crossorigin="anonymous"
    />
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  @section('adminlte_css')
    @stack('css')
    @yield('css')
@stop
</head>
<body>

  <!-- navbar start -->
  <nav class="navbar navbar-expand-lg navbar-light top-nav shadow-sm bg-dark sticky-top ">
    <div class="container-fluid">
      <a class="navbar-brand text-white" href="/">Cerita rakyat</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto mb-2 mb-lg-0">

        </ul>
        <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
          <li>

          </li>
        </ul>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle p-0 "
                href="#"
                id="navbarDropdown"
                role="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
                style="display: flex; align-items: center;"
              >
                <i class="material-icons icon text-white">
                  person
                </i>
                <span class="text-white">{{Auth::user()->name}}</span>
              </a>
              <div
                class="dropdown-menu dropdown-menu-right"
                aria-labelledby="navbarDropdown">
                <a href="{{route('logoutpenulis')}}" class="btn btn-dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log Out</a>
                <form id="logout-form" action="{{route('logoutpenulis')}}" method="post" style="display: none;">
                    @csrf
                </form>

                <div class="dropdown-divider"></div>
              </div>
            </li>
          </ul>
          </div>
      </div>
    </div>
  </nav>
  <!-- navbar end -->
  <!-- vertical navbar start -->

  <div class="wrapper d-flex shadow-sm bg-dark">
    <div class="sideMenu shadow-sm" style="height:100%">
      <div class="sidebar" style="height:100%">
        <ul class="navbar-nav side-nav">
          <li class="nav-item mb-1 p-4 shadow-sm rounded">
            <div class="btn-group dropright">
              <button type="button" class="btn">
                <a href="home" class="nav-link px-2 {{Request::is('homepenulis') ? 'active' : ''}}">
                  <i class="material-icons icon text-white">
                    dashboard
                  </i>
                  <span class="text-white">Dashboard</span>
                </a>
               </button>
            </div>
          </li>

          <li class="nav-item mb-1 p-4 shadow-sm rounded">
            <div class="btn-group dropright">
              <button type="button" class="btn">
                <a href="{{route('artikel.index')}}" class="nav-link px-2">
                  <i class="material-icons icon text-white">
                    book
                  </i>
                  <span class="text-white">Artikel</span>
                </a>
              </button>
            </div>
          </li>

          <li class="nav-item mb-1 p-4 shadow-sm rounded">
            <div class="btn-group dropright">
              <button type="button" class="btn">
                <a href="{{route('profilepenulis')}}" class="nav-link px-2 {{Request::is('profilepenulis') ? 'active' : ''}}">
                  <i class="material-icons icon text-white">
                    person
                  </i>
                  <span class="text-white">Profile</span>
                </a>
               </button>
            </div>
          </li>



        </ul>
      </div>
    </div>
  <!-- vertical navbar end -->

  <!-- content -->
        @yield('content')
</div>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jQuery-slimScroll/1.3.8/jquery.slimscroll.min.js"
      integrity="sha256-qE/6vdSYzQu9lgosKxhFplETvWvqAAlmAuR+yPh/0SI="
      crossorigin="anonymous">
    </script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   @section('adminlte_js')
   @stack('js')
   @yield('js')
@stop
  </body>
</html>
