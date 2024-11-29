<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
    <!--plugins-->
    <link href="{{ asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
    <!-- loader-->
    <link href="{{ asset('assets/css/pace.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('assets/js/pace.min.js') }}"></script>
    <!-- Bootstrap CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap-extended.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet">
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/dark-theme.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/semi-dark.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/header-colors.css') }}" />
    <title>Rocker - Bootstrap 5 Admin Dashboard Template</title>
</head>

<body>
    <header>
        <div class="topbar d-flex align-items-center">
            <nav class="navbar navbar-expand gap-3">
                <div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
                </div>

                  <div class="position-relative search-bar d-lg-block d-none" data-bs-toggle="modal" data-bs-target="#SearchModal">
                    <input class="form-control px-5" disabled type="search" placeholder="Search">
                    <span class="position-absolute top-50 search-show ms-3 translate-middle-y start-0 top-50 fs-5"><i class='bx bx-search'></i></span>
                  </div>


                  <div class="top-menu ms-auto">
                    <ul class="navbar-nav align-items-center gap-1">
                        <li class="nav-item mobile-search-icon d-flex d-lg-none" data-bs-toggle="modal" data-bs-target="#SearchModal">
                            <a class="nav-link" href="avascript:;"><i class='bx bx-search'></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown dropdown-laungauge d-none d-sm-flex">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="avascript:;" data-bs-toggle="dropdown"><img src="assets/images/county/02.png" width="22" alt="">
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="assets/images/county/01.png" width="20" alt=""><span class="ms-2">English</span></a>
                                </li>
                                <li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="assets/images/county/02.png" width="20" alt=""><span class="ms-2">Catalan</span></a>
                                </li>
                                <li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="assets/images/county/03.png" width="20" alt=""><span class="ms-2">French</span></a>
                                </li>
                                <li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="assets/images/county/04.png" width="20" alt=""><span class="ms-2">Belize</span></a>
                                </li>
                                <li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="assets/images/county/05.png" width="20" alt=""><span class="ms-2">Colombia</span></a>
                                </li>
                                <li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="assets/images/county/06.png" width="20" alt=""><span class="ms-2">Spanish</span></a>
                                </li>
                                <li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="assets/images/county/07.png" width="20" alt=""><span class="ms-2">Georgian</span></a>
                                </li>
                                <li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="assets/images/county/08.png" width="20" alt=""><span class="ms-2">Hindi</span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dark-mode d-none d-sm-flex">
                            <a class="nav-link dark-mode-icon" href="javascript:;"><i class='bx bx-moon'></i>
                            </a>
                        </li>

                        <li class="nav-item dropdown dropdown-app">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown" href="javascript:;"><i class='bx bx-grid-alt'></i></a>
                            <div class="dropdown-menu dropdown-menu-end p-0">
                                <div class="app-container p-2 my-2">
                                  <div class="row gx-0 gy-2 row-cols-3 justify-content-center p-2">
                                     <div class="col">
                                      <a href="javascript:;">
                                        <div class="app-box text-center">
                                          <div class="app-icon">
                                              <img src="assets/images/app/slack.png" width="30" alt="">
                                          </div>
                                          <div class="app-name">
                                              <p class="mb-0 mt-1">Slack</p>
                                          </div>
                                          </div>
                                        </a>
                                     </div>
                                     <div class="col">
                                      <a href="javascript:;">
                                        <div class="app-box text-center">
                                          <div class="app-icon">
                                              <img src="assets/images/app/behance.png" width="30" alt="">
                                          </div>
                                          <div class="app-name">
                                              <p class="mb-0 mt-1">Behance</p>
                                          </div>
                                          </div>
                                      </a>
                                     </div>
                                     <div class="col">
                                      <a href="javascript:;">
                                        <div class="app-box text-center">
                                          <div class="app-icon">
                                            <img src="assets/images/app/google-drive.png" width="30" alt="">
                                          </div>
                                          <div class="app-name">
                                              <p class="mb-0 mt-1">Dribble</p>
                                          </div>
                                          </div>
                                        </a>
                                     </div>
                                     <div class="col">
                                      <a href="javascript:;">
                                        <div class="app-box text-center">
                                          <div class="app-icon">
                                              <img src="assets/images/app/outlook.png" width="30" alt="">
                                          </div>
                                          <div class="app-name">
                                              <p class="mb-0 mt-1">Outlook</p>
                                          </div>
                                          </div>
                                        </a>
                                     </div>
                                     <div class="col">
                                      <a href="javascript:;">
                                        <div class="app-box text-center">
                                          <div class="app-icon">
                                              <img src="assets/images/app/github.png" width="30" alt="">
                                          </div>
                                          <div class="app-name">
                                              <p class="mb-0 mt-1">GitHub</p>
                                          </div>
                                          </div>
                                        </a>
                                     </div>
                                     <div class="col">
                                      <a href="javascript:;">
                                        <div class="app-box text-center">
                                          <div class="app-icon">
                                              <img src="assets/images/app/stack-overflow.png" width="30" alt="">
                                          </div>
                                          <div class="app-name">
                                              <p class="mb-0 mt-1">Stack</p>
                                          </div>
                                          </div>
                                        </a>
                                     </div>
                                     <div class="col">
                                      <a href="javascript:;">
                                        <div class="app-box text-center">
                                          <div class="app-icon">
                                              <img src="assets/images/app/figma.png" width="30" alt="">
                                          </div>
                                          <div class="app-name">
                                              <p class="mb-0 mt-1">Stack</p>
                                          </div>
                                          </div>
                                        </a>
                                     </div>
                                     <div class="col">
                                      <a href="javascript:;">
                                        <div class="app-box text-center">
                                          <div class="app-icon">
                                              <img src="assets/images/app/twitter.png" width="30" alt="">
                                          </div>
                                          <div class="app-name">
                                              <p class="mb-0 mt-1">Twitter</p>
                                          </div>
                                          </div>
                                        </a>
                                     </div>
                                     <div class="col">
                                      <a href="javascript:;">
                                        <div class="app-box text-center">
                                          <div class="app-icon">
                                              <img src="assets/images/app/google-calendar.png" width="30" alt="">
                                          </div>
                                          <div class="app-name">
                                              <p class="mb-0 mt-1">Calendar</p>
                                          </div>
                                          </div>
                                        </a>
                                     </div>
                                     <div class="col">
                                      <a href="javascript:;">
                                        <div class="app-box text-center">
                                          <div class="app-icon">
                                              <img src="assets/images/app/spotify.png" width="30" alt="">
                                          </div>
                                          <div class="app-name">
                                              <p class="mb-0 mt-1">Spotify</p>
                                          </div>
                                          </div>
                                        </a>
                                     </div>
                                     <div class="col">
                                      <a href="javascript:;">
                                        <div class="app-box text-center">
                                          <div class="app-icon">
                                              <img src="assets/images/app/google-photos.png" width="30" alt="">
                                          </div>
                                          <div class="app-name">
                                              <p class="mb-0 mt-1">Photos</p>
                                          </div>
                                          </div>
                                        </a>
                                     </div>
                                     <div class="col">
                                      <a href="javascript:;">
                                        <div class="app-box text-center">
                                          <div class="app-icon">
                                              <img src="assets/images/app/pinterest.png" width="30" alt="">
                                          </div>
                                          <div class="app-name">
                                              <p class="mb-0 mt-1">Photos</p>
                                          </div>
                                          </div>
                                        </a>
                                     </div>
                                     <div class="col">
                                      <a href="javascript:;">
                                        <div class="app-box text-center">
                                          <div class="app-icon">
                                              <img src="assets/images/app/linkedin.png" width="30" alt="">
                                          </div>
                                          <div class="app-name">
                                              <p class="mb-0 mt-1">linkedin</p>
                                          </div>
                                          </div>
                                        </a>
                                     </div>
                                     <div class="col">
                                      <a href="javascript:;">
                                        <div class="app-box text-center">
                                          <div class="app-icon">
                                              <img src="assets/images/app/dribble.png" width="30" alt="">
                                          </div>
                                          <div class="app-name">
                                              <p class="mb-0 mt-1">Dribble</p>
                                          </div>
                                          </div>
                                        </a>
                                     </div>
                                     <div class="col">
                                      <a href="javascript:;">
                                        <div class="app-box text-center">
                                          <div class="app-icon">
                                              <img src="assets/images/app/youtube.png" width="30" alt="">
                                          </div>
                                          <div class="app-name">
                                              <p class="mb-0 mt-1">YouTube</p>
                                          </div>
                                          </div>
                                        </a>
                                     </div>
                                     <div class="col">
                                      <a href="javascript:;">
                                        <div class="app-box text-center">
                                          <div class="app-icon">
                                              <img src="assets/images/app/google.png" width="30" alt="">
                                          </div>
                                          <div class="app-name">
                                              <p class="mb-0 mt-1">News</p>
                                          </div>
                                          </div>
                                        </a>
                                     </div>
                                     <div class="col">
                                      <a href="javascript:;">
                                        <div class="app-box text-center">
                                          <div class="app-icon">
                                              <img src="assets/images/app/envato.png" width="30" alt="">
                                          </div>
                                          <div class="app-name">
                                              <p class="mb-0 mt-1">Envato</p>
                                          </div>
                                          </div>
                                        </a>
                                     </div>
                                     <div class="col">
                                      <a href="javascript:;">
                                        <div class="app-box text-center">
                                          <div class="app-icon">
                                              <img src="assets/images/app/safari.png" width="30" alt="">
                                          </div>
                                          <div class="app-name">
                                              <p class="mb-0 mt-1">Safari</p>
                                          </div>
                                          </div>
                                        </a>
                                     </div>

                                  </div><!--end row-->

                                </div>
                            </div>
                        </li>

                        <li class="nav-item dropdown dropdown-large">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" data-bs-toggle="dropdown"><span class="alert-count">7</span>
                                <i class='bx bx-bell'></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="javascript:;">
                                    <div class="msg-header">
                                        <p class="msg-header-title">Notifications</p>
                                        <p class="msg-header-badge">8 New</p>
                                    </div>
                                </a>
                                <div class="header-notifications-list">
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="user-online">
                                                <img src="assets/images/avatars/avatar-1.png" class="msg-avatar" alt="user avatar">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">Daisy Anderson<span class="msg-time float-end">5 sec
                                            ago</span></h6>
                                                <p class="msg-info">The standard chunk of lorem</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="notify bg-light-danger text-danger">dc
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">New Orders <span class="msg-time float-end">2 min
                                            ago</span></h6>
                                                <p class="msg-info">You have recived new orders</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="user-online">
                                                <img src="assets/images/avatars/avatar-2.png" class="msg-avatar" alt="user avatar">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">Althea Cabardo <span class="msg-time float-end">14
                                            sec ago</span></h6>
                                                <p class="msg-info">Many desktop publishing packages</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="notify bg-light-success text-success">
                                                <img src="assets/images/app/outlook.png" width="25" alt="user avatar">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">Account Created<span class="msg-time float-end">28 min
                                            ago</span></h6>
                                                <p class="msg-info">Successfully created new email</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="notify bg-light-info text-info">Ss
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">New Product Approved <span
                                            class="msg-time float-end">2 hrs ago</span></h6>
                                                <p class="msg-info">Your new product has approved</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="user-online">
                                                <img src="assets/images/avatars/avatar-4.png" class="msg-avatar" alt="user avatar">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">Katherine Pechon <span class="msg-time float-end">15
                                            min ago</span></h6>
                                                <p class="msg-info">Making this the first true generator</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="notify bg-light-success text-success"><i class='bx bx-check-square'></i>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">Your item is shipped <span class="msg-time float-end">5 hrs
                                            ago</span></h6>
                                                <p class="msg-info">Successfully shipped your item</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="notify bg-light-primary">
                                                <img src="assets/images/app/github.png" width="25" alt="user avatar">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">New 24 authors<span class="msg-time float-end">1 day
                                            ago</span></h6>
                                                <p class="msg-info">24 new authors joined last week</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="user-online">
                                                <img src="assets/images/avatars/avatar-8.png" class="msg-avatar" alt="user avatar">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">Peter Costanzo <span class="msg-time float-end">6 hrs
                                            ago</span></h6>
                                                <p class="msg-info">It was popularised in the 1960s</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <a href="javascript:;">
                                    <div class="text-center msg-footer">
                                        <button class="btn btn-primary w-100">View All Notifications</button>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li class="nav-item dropdown dropdown-large">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span class="alert-count">8</span>
                                <i class='bx bx-shopping-bag'></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="javascript:;">
                                    <div class="msg-header">
                                        <p class="msg-header-title">My Cart</p>
                                        <p class="msg-header-badge">10 Items</p>
                                    </div>
                                </a>
                                <div class="header-message-list">
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="position-relative">
                                                <div class="cart-product rounded-circle bg-light">
                                                    <img src="assets/images/products/11.png" class="" alt="product image">
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
                                                <p class="cart-product-price mb-0">1 X $29.00</p>
                                            </div>
                                            <div class="">
                                                <p class="cart-price mb-0">$250</p>
                                            </div>
                                            <div class="cart-product-cancel"><i class="bx bx-x"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="position-relative">
                                                <div class="cart-product rounded-circle bg-light">
                                                    <img src="assets/images/products/02.png" class="" alt="product image">
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
                                                <p class="cart-product-price mb-0">1 X $29.00</p>
                                            </div>
                                            <div class="">
                                                <p class="cart-price mb-0">$250</p>
                                            </div>
                                            <div class="cart-product-cancel"><i class="bx bx-x"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="position-relative">
                                                <div class="cart-product rounded-circle bg-light">
                                                    <img src="assets/images/products/03.png" class="" alt="product image">
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
                                                <p class="cart-product-price mb-0">1 X $29.00</p>
                                            </div>
                                            <div class="">
                                                <p class="cart-price mb-0">$250</p>
                                            </div>
                                            <div class="cart-product-cancel"><i class="bx bx-x"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="position-relative">
                                                <div class="cart-product rounded-circle bg-light">
                                                    <img src="assets/images/products/04.png" class="" alt="product image">
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
                                                <p class="cart-product-price mb-0">1 X $29.00</p>
                                            </div>
                                            <div class="">
                                                <p class="cart-price mb-0">$250</p>
                                            </div>
                                            <div class="cart-product-cancel"><i class="bx bx-x"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="position-relative">
                                                <div class="cart-product rounded-circle bg-light">
                                                    <img src="assets/images/products/05.png" class="" alt="product image">
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
                                                <p class="cart-product-price mb-0">1 X $29.00</p>
                                            </div>
                                            <div class="">
                                                <p class="cart-price mb-0">$250</p>
                                            </div>
                                            <div class="cart-product-cancel"><i class="bx bx-x"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="position-relative">
                                                <div class="cart-product rounded-circle bg-light">
                                                    <img src="assets/images/products/06.png" class="" alt="product image">
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
                                                <p class="cart-product-price mb-0">1 X $29.00</p>
                                            </div>
                                            <div class="">
                                                <p class="cart-price mb-0">$250</p>
                                            </div>
                                            <div class="cart-product-cancel"><i class="bx bx-x"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="position-relative">
                                                <div class="cart-product rounded-circle bg-light">
                                                    <img src="assets/images/products/07.png" class="" alt="product image">
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
                                                <p class="cart-product-price mb-0">1 X $29.00</p>
                                            </div>
                                            <div class="">
                                                <p class="cart-price mb-0">$250</p>
                                            </div>
                                            <div class="cart-product-cancel"><i class="bx bx-x"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="position-relative">
                                                <div class="cart-product rounded-circle bg-light">
                                                    <img src="assets/images/products/08.png" class="" alt="product image">
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
                                                <p class="cart-product-price mb-0">1 X $29.00</p>
                                            </div>
                                            <div class="">
                                                <p class="cart-price mb-0">$250</p>
                                            </div>
                                            <div class="cart-product-cancel"><i class="bx bx-x"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="position-relative">
                                                <div class="cart-product rounded-circle bg-light">
                                                    <img src="assets/images/products/09.png" class="" alt="product image">
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
                                                <p class="cart-product-price mb-0">1 X $29.00</p>
                                            </div>
                                            <div class="">
                                                <p class="cart-price mb-0">$250</p>
                                            </div>
                                            <div class="cart-product-cancel"><i class="bx bx-x"></i>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <a href="javascript:;">
                                    <div class="text-center msg-footer">
                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                            <h5 class="mb-0">Total</h5>
                                            <h5 class="mb-0 ms-auto">$489.00</h5>
                                        </div>
                                        <button class="btn btn-primary w-100">Checkout</button>
                                    </div>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="user-box dropdown px-3">
                    <a class="d-flex align-items-center nav-link dropdown-toggle gap-3 dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="assets/images/avatars/avatar-2.png" class="user-img" alt="user avatar">
                        <div class="user-info">
                            <p class="user-name mb-0">Pauline Seitz</p>
                            <p class="designattion mb-0">Web Designer</p>
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i class="bx bx-user fs-5"></i><span>Profile</span></a>
                        </li>
                        <li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i class="bx bx-cog fs-5"></i><span>Settings</span></a>
                        </li>
                        <li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i class="bx bx-home-circle fs-5"></i><span>Dashboard</span></a>
                        </li>
                        <li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i class="bx bx-dollar-circle fs-5"></i><span>Earnings</span></a>
                        </li>
                        <li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i class="bx bx-download fs-5"></i><span>Downloads</span></a>
                        </li>
                        <li>
                            <div class="dropdown-divider mb-0"></div>
                        </li>
                        <li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i class="bx bx-log-out-circle"></i><span>Logout</span></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>


    <div class="row">
        <div class="col-xl-6 mx-auto">

            <div class="card">
                <div class="card-body p-4">
                    <h5 class="mb-4">Vertical Form</h5>
                    <div class="card-body p-4">
                        <h5 class="mb-4">Vertical Form</h5>

                        <!-- Display Success Message -->
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <!-- Display Error Message -->
                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif

                        <!-- Display Validation Errors -->
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    <form class="row g-3" method="POST" action="{{ route('registeration_account') }}">
                        @csrf
                        <div class="col-md-6">
                            <label for="input1" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="input1" placeholder="First Name" name="first_name">
                        </div>
                        <div class="col-md-6">
                            <label for="input2" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="input2" placeholder="Last Name" name="last_name">
                        </div>
                        <div class="col-md-12">
                            <label for="input3" class="form-label">Phone</label>
                            <input type="text" class="form-control" id="input3" placeholder="Phone" name="phone">
                        </div>
                        <div class="col-md-12">
                            <label for="input4" class="form-label">Email</label>
                            <input type="email" class="form-control" id="input4" placeholder="Email" name="email">
                        </div>
                        <div class="col-md-12">
                            <label for="input5" class="form-label">Password</label>
                            <input type="password" class="form-control" id="input5" placeholder="Password" name="password">
                        </div>
                        <div class="col-md-12">
                            <label for="input5" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="input5" placeholder="Password" name="password_confirmation">
                        </div>
                        <div class="col-md-12">
                            <label for="input6" class="form-label">DOB</label>
                            <div class="mb-3">
                                <label class="form-label">Pick a Date</label>
                                <input type="date" class="form-control datepicker" name="dob"/>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="input7" class="form-label">Country</label>
                            <select id="input7" class="form-select" name="country">
                                <option selected>Choose...</option>
                                <option>Tunisie</option>
                                <option>Italy</option>
                                <option>USA</option>
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label for="input8" class="form-label">City</label>
                            <input type="text" class="form-control" id="input8" placeholder="City"  name="city">
                        </div>
                        <div class="col-md-2">
                            <label for="input10" class="form-label">Zip</label>
                            <input type="text" class="form-control" id="input10" placeholder="Zip" name="zip">
                        </div>
                        <div class="col-md-12">
                            <label for="input11" class="form-label">Address</label>
                            <textarea class="form-control" id="input11" placeholder="Address ..." rows="3" name="address"></textarea>
                        </div>
                        <div class="col-md-12">
                            <div class="d-md-flex d-grid align-items-center gap-3">
                                <button type="submit" class="btn btn-primary px-4">Submit</button>
                                <button type="button" class="btn btn-light px-4">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <!--plugins-->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('assets/plugins/chartjs/js/chart.js') }}"></script>
    <script src="{{ asset('assets/js/index.js') }}"></script>
    <!--app JS-->
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script>
        new PerfectScrollbar(".app-container")
    </script>
</body>
