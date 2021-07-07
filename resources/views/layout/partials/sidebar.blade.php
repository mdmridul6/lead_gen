<div class="main-menu menu-fixed menu-light menu-accordion menu-shadow expanded" data-scroll-to-active="true"
    style="touch-action: none; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
    <div class="navbar-header expanded">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto">
                <a class="navbar-brand" href="http://localhost:8000 ">
                    <span class="brand-logo">
                        <img src="{{ asset('images') }}/svg/logo.svg" alt="" srcset="">
                    </span>
                    <h2 class="brand-text">Vuexy</h2>
                </a>
            </li>
            <li class="nav-item nav-toggle">
                <a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-x d-block d-xl-none text-primary toggle-icon font-medium-4">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-disc d-none d-xl-block collapse-toggle-icon primary font-medium-4">
                        <circle cx="12" cy="12" r="10"></circle>
                        <circle cx="12" cy="12" r="3"></circle>
                    </svg>
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
                    <span class="menu-title text-truncate">Invoice</span>
                </a>
                <ul class="menu-content">
                    <li class="">
                        <a href="http://localhost:8888/app/invoice/list"
                            class="d-flex align-items-center justify-content-evenly" target="_self">
                            <img src="{{ asset('images') }}/svg/circle.svg" class="img-fluid" width="12"
                                height="12">&emsp;
                            <span class="menu-item text-truncate">List</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="http://localhost:8888/app/invoice/preview" class="d-flex align-items-center">
                            <img src="{{ asset('images') }}/svg/circle.svg" class="img-fluid" width="12"
                                height="12">&emsp;
                            <span class="menu-item text-truncate">Preview</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="http://localhost:8888/app/invoice/edit" class="d-flex align-items-center"
                            target="_self">
                            <img src="{{ asset('images') }}/svg/circle.svg" class="img-fluid" width="12"
                                height="12">&emsp;
                            <span class="menu-item text-truncate">Edit</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="http://localhost:8888/app/invoice/add" class="d-flex align-items-center"
                            target="_self">
                            <img src="{{ asset('images') }}/svg/circle.svg" class="img-fluid" width="12"
                                height="12">&emsp;

                            <span class="menu-item text-truncate">Add</span>
                        </a>
                    </li>
                </ul>
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
        </ul>

        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
        </div>
        <div class="ps__rail-y" style="top: 0px; height: 661px; right: 0px;">
            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 250px;"></div>
        </div>
    </div>
</div>
@include('layout.partials.navBar')

