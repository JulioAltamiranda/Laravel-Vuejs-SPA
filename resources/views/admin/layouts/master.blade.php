<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     @include('admin.layouts.includes.styles')
    <title>Dashboard</title>
  </head>
  <body>
    <!-- Load -->
    <div class="load-container">
        <div class="load">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- End Load -->

    <!--Wrapper -->
    <div class="wrapper">

       <!-- Sidebar -->
        @include('admin.layouts.includes.sidebar')
        <!-- End Sidebar -->

        <!-- Main -->
        <div class="main overflow-hidden">
            <div class="topbar">
                <i  class="fas fa-bars bar-btn"></i>
                <div class="user-profile">
                    <img src="/assets/images/05.jpg" class="img-fluid rounded-circle" alt="" style="width: 40px;">
                    <div class="card mr-2">
                        <div class="card-header d-flex align-items-center justify-content-center py-2">
                            <h6 class="card-title ">{{auth()->user()->name}}</h6>
                        </div>
                        <div class="card-body">
                            <ul>
                                <li><span class="fas fa-user"></span><a href="{{route('admin.users.edit',auth()->user())}}">Profile</a></li>
                                <li>
                                    <form action="{{route('logout')}}" method="post">
                                         @csrf
                                        <button><span class="fas fa-sign-out-alt"></span>Sign out</button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid mt-4 ">
                <div class="row">
                    <!--Content-->
                    @yield('content')
                </div>
            </div>
        </div>
        <!-- End Main -->
    </div>
    
    <!-- End Wrapper -->
    
    <!-- Scripts -->
    @include('admin.layouts.includes.scripts')
  </body>
</html>