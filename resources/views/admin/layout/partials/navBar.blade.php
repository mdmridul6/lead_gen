<nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow ">
    <div class="navbar-container d-flex content">
    <div class="bookmark-wrapper d-flex align-items-center">
      <ul class="nav navbar-nav d-xl-none">
        <li class="nav-item"><a class="nav-link menu-toggle is-active" href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu ficon"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></a></li>
      </ul>


    </div>
    <ul class="nav navbar-nav align-items-center ml-auto">

      <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-moon ficon"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path></svg></a></li>


    <li class="nav-item dropdown dropdown-user">
      <a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="javascript:void(0);" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <div class="user-nav d-sm-flex d-none">
          <span class="user-name font-weight-bolder">{{auth()->user()->name}}</span>
          <span class="user-status">{{auth()->user()->role}}</span>
        </div>
        <span class="avatar">
          <img class="round" src="http://localhost:8000/images/portrait/small/avatar-s-11.jpg" alt="avatar" height="40" width="40">
          <span class="avatar-status-online"></span>
        </span>
      </a>
      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-user">
        <a class="dropdown-item" href="http://localhost:8888/page/profile">
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user mr-50"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg> Profile
        </a>
        <a class="dropdown-item" href="{{ route('login') }}">
          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-power mr-50"><path d="M18.36 6.64a9 9 0 1 1-12.73 0"></path><line x1="12" y1="2" x2="12" y2="12"></line></svg> Logout
        </a>
      </div>
    </li>
  </ul>
</div>
  </nav>
