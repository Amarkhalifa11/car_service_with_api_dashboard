@include('backend.header')
@include('backend.aside')


<div class="page-wrapper">
    <!-- Header -->
    <header class="main-header " id="header">
        <nav class="navbar navbar-static-top navbar-expand-lg">

            <div class="search-form d-none d-lg-inline-block">

            </div>

            <div class="navbar-right ">
                <ul class="nav navbar-nav">

                    <li class="dropdown user-menu">
                        <button style="color: black" href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                            <span class="d-none d-lg-inline-block">car service</span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-right">

                            <li class="dropdown-footer">
                                <a href="{{ route('logout') }}"> <i class="mdi mdi-logout"></i> Log Out </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>


    </header>


    <div class="content-wrapper">
        <div class="content">


            @yield('content')


        </div>




    </div>

    @include('backend.footer')
