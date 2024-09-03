<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Responsive Bootstrap 5 admin dashboard template & web App ui kit.">
  <meta name="keyword" content="LUNO, Bootstrap 5, ReactJs, Angular, Laravel, VueJs, ASP .Net, Admin Dashboard, Admin Theme, HRMS, Projects, Hospital Admin, CRM Admin, Events, Fitness, Music, Inventory, Job Portal">
  <link rel="icon" href="./assets/img/favicon.ico" type="image/x-icon"> <!-- Favicon-->
  <title>ADMIN</title>
  <!-- Application vendor css url -->
  <!-- project css file  -->
  <link rel="stylesheet" href="./assets/css/luno-style.css">
  <!-- Jquery Core Js -->
  <script src="./assets/js/plugins.js"></script>
</head>

<body id="layout-1" data-luno="theme-blue">
  <!-- start: body area -->
  <div class="wrapper">
    <!-- Sign In version 1 -->
    <!-- Body: Body -->
    <div class="body d-flex p-0 p-xl-5">
      <div class="container-fluid">
        <div class="row g-0 justify-content-center">
          <div class="col-xl-4 col-lg-5 col-md-7 col-sm-8">
            <!-- Form -->
            <form action="/login" class="row g-1 rounded-3 p-lg-5 p-4" method="post">
                @csrf
              <div class="col-12 text-center mb-5">
                <h1>Sign in</h1>
              </div>
              @if($errorMessage)
                <div class="alert alert-danger col-12 text-center">{{ $errorMessage }}</div>
              @endif
              <div class="col-6">
                <div class="form-floating">
                  <input type="email" class="form-control" placeholder="name@example.com" name="email" required>
                  <label>Email address</label>
                </div>
              </div>
              <div class="col-6">
                <div class="form-floating">
                  <input type="password" class="form-control" placeholder="Password" name="password" required>
                  <label>Password</label>
                </div>
              </div>
              <div class="col-12 text-center mt-4 d-grid">
                <button class="btn btn-lg bg-primary-gradient lift text-uppercase" title="" name="submit" type="submit">SIGN IN</button>
              </div>
            </form>
            <!-- End Form -->
          </div>
        </div> <!-- End Row -->
      </div>
    </div>
  </div>

  <!-- Jquery Page Js -->
  <!-- Jquery Page Js -->
  <script src="./assets/js/theme.js"></script>
  <!-- Plugin Js -->
  <!-- Vendor Script -->
</body>

</html>
