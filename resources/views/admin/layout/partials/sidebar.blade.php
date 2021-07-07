<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow expanded" data-scroll-to-active="true"
    style="touch-action: none; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
    <div class="navbar-header expanded">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto">
                <a class="navbar-brand" href="http://localhost:8000 ">
{{--                    <span class="brand-logo">--}}
{{--                        <img src="{{ asset('images') }}/svg/logo.svg" alt="" srcset="">--}}
{{--                    </span>--}}
                    <h2 class="brand-text">Lead Gen</h2>
                </a>
            </li>
            <li class="nav-item nav-toggle">
                <a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse">
                    <i data-feather='disc'></i>
                </a>
            </li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content ps ps--active-y" style="height: 659.6px;">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">


            <li class="nav-item sidebar-group-active open">
                <a href="javascript:void(0)" class="d-flex align-items-center" target="_self">
                    <img src="{{ asset('images') }}/svg/home.svg" class="img-fluid" alt="" srcset="">&emsp;
                    <span class="menu-title text-truncate">Dashboards</span>
                </a>
            </li>




            <li class="nav-item has-sub">
                <a href="javascript:void(0)" class="d-flex align-items-center" target="_self">
                    <img src="{{ asset('images') }}/svg/invoice.svg" class="img-fluid" alt="" srcset="">&emsp;
                    <span class="menu-title text-truncate">Project</span>
                </a>
                <ul class="menu-content">
                    <li class="">
                        <a href="{{route('project.index')}}"
                            class="d-flex align-items-center justify-content-evenly" target="_self">
                            <img src="{{ asset('images') }}/svg/circle.svg" class="img-fluid" width="12"
                                height="12">&emsp;
                            <span class="menu-item text-truncate">List</span>
                        </a>
                    </li>

                </ul>
            </li>
            <li class="nav-item has-sub">
                <a href="javascript:void(0)" class="d-flex align-items-center" target="_self">
                    <img src="{{ asset('images') }}/svg/invoice.svg" class="img-fluid" alt="" srcset="">&emsp;
                    <span class="menu-title text-truncate">Leads</span>
                </a>
                <ul class="menu-content">
                    <li class="">
                        <a href="{{route('leads.index')}}"
                            class="d-flex align-items-center justify-content-evenly" target="_self">
                            <img src="{{ asset('images') }}/svg/circle.svg" class="img-fluid" width="12"
                                height="12">&emsp;
                            <span class="menu-item text-truncate">List</span>
                        </a>
                    </li>

                </ul>
            </li>
        </ul>
        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
        </div>
        <div class="ps__rail-y" style="top: 0px; height: 661px; right: 0px;">
            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 250px;"></div>
        </div>
    </div>
</div>
