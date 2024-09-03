<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Responsive Bootstrap 5 admin dashboard template & web App ui kit.">
  <meta name="keyword" content="LUNO, Bootstrap 5, ReactJs, Angular, Laravel, VueJs, ASP .Net, Admin Dashboard, Admin Theme, HRMS, Projects, Hospital Admin, CRM Admin, Events, Fitness, Music, Inventory, Job Portal">
  <link rel="icon" href="../assets/img/favicon.ico" type="image/x-icon"> <!-- Favicon-->
  <title>ADMIN</title>
  <!-- Application vendor css url -->
  <!-- project css file  -->
  <link rel="stylesheet" href="{{ asset('assets/css/luno-style.css') }}">
  <link rel="stylesheet" href="https://cdn.datatables.net/2.0.2/css/dataTables.dataTables.css" />
  <!-- Jquery Core Js -->
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="{{ asset('/assets/js/plugins.js') }}"></script>
  <script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>
  <!-- do not use in project -->
  <style>
    .app-demo {
      position: relative;
      overflow: hidden;
    }

    .app-demo .card-overlay {
      position: absolute;
      top: -60px;
      left: -60px;
      width: 60px;
      height: 60px;
      border-radius: 50%;
      background: var(--secondary-color);
      -webkit-transform: scale(1);
      transform: scale(1);
      -webkit-transition: all .5s;
      transition: all .5s;
      z-index: 1;
    }

    .app-demo:hover .card-overlay {
      -webkit-transform: scale(35);
      transform: scale(35);
    }

    .app-demo:hover .demo-text {
      opacity: 1;
      transform: translateY(0);
    }

    .app-demo .demo-text {
      transition: all .3s;
      transition-delay: .1s;
      transform: translateY(20px);
      display: flex;
      flex-direction: column;
      position: absolute;
      z-index: 2;
      text-align: center;
      justify-content: center;
      width: calc(100% - 1rem);
      height: calc(100% - 1rem);
      align-items: center;
      color: #fff;
      opacity: 0;
    }
  </style>
</head>

<body class="layout-1" data-luno="theme-blue">
  <!-- start: sidebar -->
  <div class="sidebar p-2 py-md-3 @@cardClass">
    <div class="container-fluid">
      <!-- sidebar: title-->
      <div class="title-text d-flex align-items-center mb-4 mt-1">
        <h4 class="sidebar-title mb-0 flex-grow-1"><span> Admin</span></h4>
      </div>
      <!-- sidebar: menu list -->
      <div class="main-menu flex-grow-1">
        <ul class="menu-list">
          <li>
            <a class="m-link" href="/account">
              <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" viewBox="0 0 16 16">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M2 1C1.46957 1 0.960859 1.21071 0.585786 1.58579C0.210714 1.96086 0 2.46957 0 3L0 13C0 13.5304 0.210714 14.0391 0.585786 14.4142C0.960859 14.7893 1.46957 15 2 15H14C14.5304 15 15.0391 14.7893 15.4142 14.4142C15.7893 14.0391 16 13.5304 16 13V3C16 2.46957 15.7893 1.96086 15.4142 1.58579C15.0391 1.21071 14.5304 1 14 1H2ZM1 3C1 2.73478 1.10536 2.48043 1.29289 2.29289C1.48043 2.10536 1.73478 2 2 2H14C14.2652 2 14.5196 2.10536 14.7071 2.29289C14.8946 2.48043 15 2.73478 15 3V13C15 13.2652 14.8946 13.5196 14.7071 13.7071C14.5196 13.8946 14.2652 14 14 14H2C1.73478 14 1.48043 13.8946 1.29289 13.7071C1.10536 13.5196 1 13.2652 1 13V3ZM2 5.5C2 5.36739 2.05268 5.24021 2.14645 5.14645C2.24021 5.05268 2.36739 5 2.5 5H6C6.13261 5 6.25979 5.05268 6.35355 5.14645C6.44732 5.24021 6.5 5.36739 6.5 5.5C6.5 5.63261 6.44732 5.75979 6.35355 5.85355C6.25979 5.94732 6.13261 6 6 6H2.5C2.36739 6 2.24021 5.94732 2.14645 5.85355C2.05268 5.75979 2 5.63261 2 5.5ZM2 8.5C2 8.36739 2.05268 8.24021 2.14645 8.14645C2.24021 8.05268 2.36739 8 2.5 8H6C6.13261 8 6.25979 8.05268 6.35355 8.14645C6.44732 8.24021 6.5 8.36739 6.5 8.5C6.5 8.63261 6.44732 8.75979 6.35355 8.85355C6.25979 8.94732 6.13261 9 6 9H2.5C2.36739 9 2.24021 8.94732 2.14645 8.85355C2.05268 8.75979 2 8.63261 2 8.5ZM2 10.5C2 10.3674 2.05268 10.2402 2.14645 10.1464C2.24021 10.0527 2.36739 10 2.5 10H6C6.13261 10 6.25979 10.0527 6.35355 10.1464C6.44732 10.2402 6.5 10.3674 6.5 10.5C6.5 10.6326 6.44732 10.7598 6.35355 10.8536C6.25979 10.9473 6.13261 11 6 11H2.5C2.36739 11 2.24021 10.9473 2.14645 10.8536C2.05268 10.7598 2 10.6326 2 10.5Z" />
                <path class="fill-secondary" d="M8.5 11C8.5 11 8 11 8 10.5C8 10 8.5 8.5 11 8.5C13.5 8.5 14 10 14 10.5C14 11 13.5 11 13.5 11H8.5ZM11 8C11.3978 8 11.7794 7.84196 12.0607 7.56066C12.342 7.27936 12.5 6.89782 12.5 6.5C12.5 6.10218 12.342 5.72064 12.0607 5.43934C11.7794 5.15804 11.3978 5 11 5C10.6022 5 10.2206 5.15804 9.93934 5.43934C9.65804 5.72064 9.5 6.10218 9.5 6.5C9.5 6.89782 9.65804 7.27936 9.93934 7.56066C10.2206 7.84196 10.6022 8 11 8V8Z" />
              </svg>
              <span class="ms-2">Account</span>
            </a>
            <!-- Menu: Sub menu ul -->
          </li>
        </ul>
      </div>
      <!-- sidebar: footer link -->
      <!-- sidebar: footer link -->
      <ul class="menu-list nav navbar-nav flex-row text-center menu-footer-link">
        <li class="nav-item flex-fill p-2">
          <a class="d-inline-block w-100 color-400" href="/logout" title="sign-out">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" viewBox="0 0 16 16">
              <path d="M7.5 1v7h1V1h-1z" />
              <path class="fill-secondary" d="M3 8.812a4.999 4.999 0 0 1 2.578-4.375l-.485-.874A6 6 0 1 0 11 3.616l-.501.865A5 5 0 1 1 3 8.812z" />
            </svg>
          </a>
        </li>
      </ul>
    </div>
  </div>
  <!-- start: body area -->
  <div class="wrapper">
    <!-- start: page header -->
    <header class="page-header sticky-top px-xl-4 px-sm-2 px-0 py-lg-2 py-1">
      <div class="container-fluid">
        <nav class="navbar">
          <!-- start: toggle btn -->
          <div class="d-flex">
            <button type="button" class="btn btn-link d-none d-xl-block sidebar-mini-btn p-0 text-primary">
              <span class="hamburger-icon">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
              </span>
            </button>
            <button type="button" class="btn btn-link d-block d-xl-none menu-toggle p-0 text-primary">
              <span class="hamburger-icon">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
              </span>
            </button>
          </div>
          <!-- start: link -->
          <ul class="header-right justify-content-end d-flex align-items-center mb-0">
            <!-- start: User dropdown-menu -->
            <li>
               <img class="avatar img-thumbnail rounded-circle shadow" src="../assets/img/profile_av.png" alt="">
            </li>
            <li>
                <span class="ms-2">{{(Auth::check()) ? auth()->user()->name:''}}</span>
            </li>
            <!-- start: Settings toggle modal -->
          </ul>
        </nav>
      </div>
    </header>
    <!-- start: page body -->
    <div class="page-toolbar px-xl-4 px-sm-2 px-0 py-3">
        <div class="container-fluid">
            <div class="row g-3 mb-3 align-items-center" id="judulHidden">
                <div class="col">
                    @yield('judul')
                </div>
            </div>
            <div class="row align-items-center">
                @yield('body')
            </div>
        </div>
    </div>
  </div>

  <!-- Jquery Page Js -->
  <!-- Jquery Page Js -->
  <script src="{{asset('assets/js/bundle/sweetalert2.bundle.js')}}"></script>
  <script src="{{ asset('assets/js/theme.js') }}"></script>
  <!-- Plugin Js -->
  <!-- Vendor Script -->
</body>

</html>
