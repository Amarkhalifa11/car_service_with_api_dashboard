<aside class="left-sidebar bg-sidebar">
    <div id="sidebar" class="sidebar sidebar-with-footer">
        <!-- Aplication Brand -->
        <div class="app-brand">
            <a href="{{ route('dashboard') }}">

                <img src="{{ asset('backend/assets/img/user/logo.jpg') }}" alt="">
                <span class="brand-name">Car Service</span>
            </a>
        </div>
        <!-- begin sidebar scrollbar -->
        <div class="sidebar-scrollbar">

            <!-- sidebar menu -->
            <ul class="nav sidebar-inner" id="sidebar-menu">

                <li class="has-sub active ">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                        data-target="#dashboard" aria-expanded="false" aria-controls="dashboard">
                        <span class="nav-text">Admin</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="dashboard" data-parent="#sidebar-menu">
                        <div class="sub-menu">



                            <li class="active">
                                <a class="sidenav-item-link" href="{{ route('dashboard.all_admin') }}">
                                    <span class="nav-text">all admin</span>

                                </a>
                            </li>





                        </div>
                    </ul>
                </li>

                <li class="has-sub active">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                        data-target="#ui-elements" aria-expanded="false" aria-controls="ui-elements">
                        <span class="nav-text">Users</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="ui-elements" data-parent="#sidebar-menu">
                        <div class="sub-menu">


                            <li class="active">
                                <a class="sidenav-item-link" href="{{ route('dashboard.all_users') }}">
                                    <span class="nav-text">all users</span>

                                </a>
                            </li>


                        </div>
                    </ul>
                </li>

                <li class="has-sub active">

                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#charts"
                        aria-expanded="false" aria-controls="charts">
                        {{-- <i class="mdi mdi-chart-pie"></i> --}}
                        <span class="nav-text">Maintenance</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="charts" data-parent="#sidebar-menu">
                        <div class="sub-menu">



                            <li class="active">
                                <a class="sidenav-item-link" href="{{ route('dashboard.Maintenance') }}">
                                    <span class="nav-text">all Maintenance</span>

                                </a>
                            </li>




                        </div>
                    </ul>
                </li>

                
                <li class="has-sub active">

                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#chharts"
                        aria-expanded="false" aria-controls="chharts">
                        {{-- <i class="mdi mdi-chart-pie"></i> --}}
                        <span class="nav-text">Laundry</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="chharts" data-parent="#sidebar-menu">
                        <div class="sub-menu">



                            <li class="active">
                                <a class="sidenav-item-link" href="{{ route('dashboard.Laundry') }}">
                                    <span class="nav-text">all Laundry</span>

                                </a>
                            </li>




                        </div>
                    </ul>
                </li>

                <li class="has-sub active">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                        data-target="#documentatttion" aria-expanded="false" aria-controls="documentation">
                        {{-- <i class="mdi mdi-book-open-page-variant"></i> --}}
                        <span class="nav-text">Orders</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="documentatttion" data-parent="#sidebar-menu">
                        <div class="sub-menu">

                            <li class="active">
                                <a class="sidenav-item-link" href="{{ route('dashboard.all_order') }}">
                                    <span class="nav-text">all orders</span>

                                </a>
                            </li>

                        </div>
                    </ul>
                </li>

                <li class="has-sub active">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                        data-target="#documentattion" aria-expanded="false" aria-controls="documentation">
                        {{-- <i class="mdi mdi-book-open-page-variant"></i> --}}
                        <span class="nav-text">Service</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="documentattion" data-parent="#sidebar-menu">
                        <div class="sub-menu">

                            <li class="active">
                                <a class="sidenav-item-link" href="{{ route('dashboard.all_service') }}">
                                    <span class="nav-text">all service</span>

                                </a>
                            </li>

                        </div>
                    </ul>
                </li>     

                
                <li class="has-sub active">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#pages"
                        aria-expanded="false" aria-controls="pages">
                        {{-- <i class="mdi mdi-image-filter-none"></i> --}}
                        <span class="nav-text">Cars</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="pages" data-parent="#sidebar-menu">
                        <div class="sub-menu">



                            <li class="active">
                                <a class="sidenav-item-link" href="{{ route('dashboard.all_car_show') }}">
                                    <span class="nav-text">All cars</span>

                                </a>
                            </li>

                            <li class="active">
                                <a class="sidenav-item-link" href="{{ route('dashboard.add_car') }}">
                                    <span class="nav-text">Add cars</span>

                                </a>
                            </li>


                        </div>
                    </ul>
                </li>




                <li class="has-sub active">
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse"
                        data-target="#documentation" aria-expanded="false" aria-controls="documentation">
                        {{-- <i class="mdi mdi-book-open-page-variant"></i> --}}
                        <span class="nav-text">Contacts</span> <b class="caret"></b>
                    </a>
                    <ul class="collapse" id="documentation" data-parent="#sidebar-menu">
                        <div class="sub-menu">


                            <li class="active">
                                <a class="sidenav-item-link" href="{{ route('dashboard.all_contact') }}">
                                    <span class="nav-text">all contact</span>

                                </a>
                            </li>

                        </div>
                    </ul>
                </li>

            </ul>

        </div>



    </div>
</aside>
