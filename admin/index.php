<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <!-- [Head] start -->
  <head>
    <title>Dashboard | Berry Dashboard Template</title>
    <!-- [Meta] -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Berry is trending dashboard template made using Bootstrap 5 design framework. Berry is available in Bootstrap, React, CodeIgniter, Angular,  and .net Technologies.">
    <meta name="keywords" content="Bootstrap admin template, Dashboard UI Kit, Dashboard Template, Backend Panel, react dashboard, angular dashboard">
    <meta name="author" content="codedthemes">

    <?php include 'inc/header.php' ?>
  </head>
  <!-- [Head] end -->
  <!-- [Body] Start -->
  <body>
    <!-- [ Pre-loader ] start -->
<div class="loader-bg">
  <div class="loader-track">
    <div class="loader-fill"></div>
  </div>
</div>
<!-- [ Pre-loader ] End -->

<!-- side-bar -->
 <?php include 'inc/sidebar.php' ?>
<!-- side-bar end -->

  <!-- [ Header Topbar ] start -->
<?php include 'inc/topbar.php'?>
<!-- Topbar End -->

<div class="ms-auto">
  <ul class="list-unstyled">
    <li class="dropdown pc-h-item">
      <a class="pc-head-link head-link-secondary dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#"
        role="button" aria-haspopup="false" aria-expanded="false">
        <i class="ti ti-bell"></i>
      </a>
      <div class="dropdown-menu dropdown-notification dropdown-menu-end pc-h-dropdown">
        <div class="dropdown-header">
          <a href="#!" class="link-primary float-end text-decoration-underline">Mark as all read</a>
          <h5>All Notification <span class="badge bg-warning rounded-pill ms-1">01</span></h5>
        </div>
        <div class="dropdown-header px-0 text-wrap header-notification-scroll position-relative"
          style="max-height: calc(100vh - 215px)">
          <div class="list-group list-group-flush w-100">
            <div class="list-group-item list-group-item-action">
              <div class="d-flex">
                <div class="flex-shrink-0">
                  <div class="user-avtar bg-light-success"><i class="ti ti-building-store"></i></div>
                </div>
                <div class="flex-grow-1 ms-1">
                  <span class="float-end text-muted">3 min ago</span>
                  <h5>Store Verification Done</h5>
                  <p class="text-body fs-6">We have successfully received your request.</p>
                  <div class="badge rounded-pill bg-light-danger">Unread</div>
                </div>
              </div>
            </div>
            <div class="list-group-item list-group-item-action">
              <div class="d-flex">
                <div class="flex-shrink-0">
                  <img src="../assets/dist/assets/images/user/avatar-3.jpg" alt="user-image" class="user-avtar" >
                </div>
                <div class="flex-grow-1 ms-1">
                  <span class="float-end text-muted">10 min ago</span>
                  <h5>Joseph William</h5>
                  <p class="text-body fs-6">It is a long established fact that a reader will be distracted </p>
                  <div class="badge rounded-pill bg-light-success">Confirmation of Account</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="dropdown-divider"></div>
        <div class="text-center py-2">
          <a href="#!" class="link-primary">Mark as all read</a>
        </div>
      </div>
    </li>
    <li class="dropdown pc-h-item header-user-profile">
      <a class="pc-head-link head-link-primary dropdown-toggle arrow-none me-0" data-bs-toggle="dropdown" href="#"
        role="button" aria-haspopup="false" aria-expanded="false">
        <img src="../assets/dist/assets/images/user/avatar-2.jpg" alt="user-image" class="user-avtar" >
        <span>
          <i class="ti ti-settings"></i>
        </span>
      </a>
      <div class="dropdown-menu dropdown-user-profile dropdown-menu-end pc-h-dropdown">
        <div class="dropdown-header">
          <h4>Good Morning, <span class="small text-muted"> John Doe</span></h4>
          <p class="text-muted">Project Admin</p>
          <hr >
          <div class="profile-notification-scroll position-relative" style="max-height: calc(100vh - 280px)">
            <div class="upgradeplan-block bg-light-warning rounded">
              <h4>Explore full code</h4>
              <p class="text-muted">Buy now to get full access of code files</p>
              <a href="https://codedthemes.com/item/berry-bootstrap-5-admin-template/" target="_blank"
                class="btn btn-warning">Buy Now</a>
            </div>
            <hr >
            <a href="../application/account-profile-v1.html" class="dropdown-item">
              <i class="ti ti-settings"></i>
              <span>Account Settings</span>
            </a>
            <a href="../application/social-profile.html" class="dropdown-item">
              <i class="ti ti-user"></i>
              <span>Social Profile</span>
            </a>
            <a href="../pages/login-v1.html" class="dropdown-item">
              <i class="ti ti-logout"></i>
              <span>Logout</span>
            </a>

          </div>
        </div>
      </div>
    </li>
  </ul>
</div> </div>
</header>
<!-- [ Header ] end -->



    <!-- [ Main Content ] start -->
    <div class="pc-container">
      <div class="pc-content">
        <!-- [ Main Content ] start -->
        <div class="row">
          <!-- [ sample-page ] start -->
          <div class="col-xl-4 col-md-6">
            <div class="card bg-secondary-dark dashnum-card text-white overflow-hidden">
              <span class="round small"></span>
              <span class="round big"></span>
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <div class="avtar avtar-lg">
                      <i class="text-white ti ti-credit-card"></i>
                    </div>
                  </div>
                  <div class="col-auto">
                    <div class="btn-group">
                      <a
                        href="#"
                        class="avtar bg-secondary dropdown-toggle arrow-none"
                        data-bs-toggle="dropdown"
                        aria-expanded="false"
                      >
                        <i class="ti ti-dots"></i>
                      </a>
                      <ul class="dropdown-menu dropdown-menu-end">
                        <li><button class="dropdown-item">Import Card</button></li>
                        <li><button class="dropdown-item">Export</button></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <span class="text-white d-block f-34 f-w-500 my-2">1350 <i class="ti ti-arrow-up-right-circle opacity-50"></i></span>
                <p class="mb-0 opacity-50">Total Pending Orders</p>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-md-6">
            <div class="card bg-primary-dark dashnum-card text-white overflow-hidden">
              <span class="round small"></span>
              <span class="round big"></span>
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <div class="avtar avtar-lg">
                      <i class="text-white ti ti-credit-card"></i>
                    </div>
                  </div>
                  <div class="col-auto">
                    <ul class="nav nav-pills justify-content-end mb-0" id="chart-tab-tab" role="tablist">
                      <li class="nav-item" role="presentation">
                        <button
                          class="nav-link text-white active"
                          id="chart-tab-home-tab"
                          data-bs-toggle="pill"
                          data-bs-target="#chart-tab-home"
                          role="tab"
                          aria-controls="chart-tab-home"
                          aria-selected="true"
                          >Month</button
                        >
                      </li>
                      <li class="nav-item" role="presentation">
                        <button
                          class="nav-link text-white"
                          id="chart-tab-profile-tab"
                          data-bs-toggle="pill"
                          data-bs-target="#chart-tab-profile"
                          role="tab"
                          aria-controls="chart-tab-profile"
                          aria-selected="false"
                          >Year</button
                        >
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="tab-content" id="chart-tab-tabContent">
                  <div class="tab-pane show active" id="chart-tab-home" role="tabpanel" aria-labelledby="chart-tab-home-tab" tabindex="0">
                    <div class="row">
                      <div class="col-6">
                        <span class="text-white d-block f-34 f-w-500 my-2">$1305 <i class="ti ti-arrow-up-right-circle opacity-50"></i></span>
                        <p class="mb-0 opacity-50">Total Earning</p>
                      </div>
                      <div class="col-6">
                        <div id="tab-chart-1"></div>
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane" id="chart-tab-profile" role="tabpanel" aria-labelledby="chart-tab-profile-tab" tabindex="0">
                    <div class="row">
                      <div class="col-6">
                        <span class="text-white d-block f-34 f-w-500 my-2">$29961 <i class="ti ti-arrow-down-right-circle opacity-50"></i></span>
                        <p class="mb-0 opacity-50">C/W Last Year</p>
                      </div>
                      <div class="col-6">
                        <div id="tab-chart-2"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-md-12">
            <div class="card bg-primary-dark dashnum-card dashnum-card-small text-white overflow-hidden">
              <span class="round bg-primary small"></span>
              <span class="round bg-primary big"></span>
              <div class="card-body p-3">
                <div class="d-flex align-items-center">
                  <div class="avtar avtar-lg">
                    <i class="text-white ti ti-credit-card"></i>
                  </div>
                  <div class="ms-2">
                    <h4 class="text-white mb-1">$203k <i class="ti ti-arrow-up-right-circle opacity-50"></i></h4>
                    <p class="mb-0 opacity-50 text-sm">Net Profit</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card dashnum-card dashnum-card-small overflow-hidden">
              <span class="round bg-warning small"></span>
              <span class="round bg-warning big"></span>
              <div class="card-body p-3">
                <div class="d-flex align-items-center">
                  <div class="avtar avtar-lg bg-light-warning">
                    <i class="text-warning ti ti-credit-card"></i>
                  </div>
                  <div class="ms-2">
                    <h4 class="mb-1">$550K <i class="ti ti-arrow-up-right-circle opacity-50"></i></h4>
                    <p class="mb-0 opacity-50 text-sm">Total Revenue</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-8 col-md-12">
            <div class="card">
              <div class="card-body">
                <div class="row mb-3 align-items-center">
                  <div class="col">
                    <small>Total Growth</small>
                    <h3>$2,324.00</h3>
                  </div>
                  <div class="col-auto">
                    <select class="form-select p-r-35">
                      <option>Today</option>
                      <option selected>This Month</option>
                      <option>This Year</option>
                    </select>
                  </div>
                </div>
                <div id="growthchart"></div>
              </div>
            </div>
          </div>
          <div class="col-xl-4 col-md-12">
            <div class="card">
              <div class="card-body">
                <div class="row mb-3 align-items-center">
                  <div class="col">
                    <h4>Popular Stocks</h4>
                  </div>
                  <div class="col-auto"> </div>
                </div>
                <div class="rounded bg-light-secondary overflow-hidden mb-3">
                  <div class="px-3 pt-3">
                    <div class="row mb-1 align-items-start">
                      <div class="col">
                        <h5 class="text-secondary mb-0">Bajaj Finery</h5>
                        <small class="text-muted">10% Profit</small>
                      </div>
                      <div class="col-auto">
                        <h4 class="mb-0">$1839.00</h4>
                      </div>
                    </div>
                  </div>
                  <div id="bajajchart"></div>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item px-0">
                    <div class="row align-items-start">
                      <div class="col">
                        <h5 class="mb-0">Bajaj Finery</h5>
                        <small class="text-success">10% Profit</small>
                      </div>
                      <div class="col-auto">
                        <h4 class="mb-0"
                          >$1839.00<span class="ms-2 align-top avtar avtar-xxs bg-light-success"
                            ><i class="ti ti-chevron-up text-success"></i></span
                        ></h4>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item px-0">
                    <div class="row align-items-start">
                      <div class="col">
                        <h5 class="mb-0">TTML</h5>
                        <small class="text-danger">10% Profit</small>
                      </div>
                      <div class="col-auto">
                        <h4 class="mb-0"
                          >$100.00<span class="ms-2 align-top avtar avtar-xxs bg-light-danger"
                            ><i class="ti ti-chevron-down text-danger"></i></span
                        ></h4>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item px-0">
                    <div class="row align-items-start">
                      <div class="col">
                        <h5 class="mb-0">Reliance</h5>
                        <small class="text-success">10% Profit</small>
                      </div>
                      <div class="col-auto">
                        <h4 class="mb-0"
                          >$200.00<span class="ms-2 align-top avtar avtar-xxs bg-light-success"
                            ><i class="ti ti-chevron-up text-success"></i></span
                        ></h4>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item px-0">
                    <div class="row align-items-start">
                      <div class="col">
                        <h5 class="mb-0">TTML</h5>
                        <small class="text-danger">10% Profit</small>
                      </div>
                      <div class="col-auto">
                        <h4 class="mb-0"
                          >$189.00<span class="ms-2 align-top avtar avtar-xxs bg-light-danger"
                            ><i class="ti ti-chevron-down text-danger"></i></span
                        ></h4>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item px-0">
                    <div class="row align-items-start">
                      <div class="col">
                        <h5 class="mb-0">Stolon</h5>
                        <small class="text-danger">10% Profit</small>
                      </div>
                      <div class="col-auto">
                        <h4 class="mb-0"
                          >$189.00<span class="ms-2 align-top avtar avtar-xxs bg-light-danger"
                            ><i class="ti ti-chevron-down text-danger"></i></span
                        ></h4>
                      </div>
                    </div>
                  </li>
                </ul>
                <div class="text-center">
                  <a href="#!" class="b-b-primary text-primary">View all <i class="ti ti-chevron-right"></i></a>
                </div>
              </div>
            </div>
          </div>
          <!-- [ sample-page ] end -->
        </div>
        <!-- [ Main Content ] end -->
      </div>
    </div>
    <!-- [ Main Content ] end -->
    <?php include 'inc/footer-js.php' ?>
  </body>
  <!-- [Body] end -->
</html>
