<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
    <!--plugins-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
    <!-- loader-->
    <link href="assets/css/pace.min.css" rel="stylesheet" />
    <script src="assets/js/pace.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap-extended.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="assets/css/app.css" rel="stylesheet">
    <link href="assets/css/icons.css" rel="stylesheet">
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="assets/css/dark-theme.css" />
    <link rel="stylesheet" href="assets/css/semi-dark.css" />
    <link rel="stylesheet" href="assets/css/header-colors.css" />
    <title>Rocker - Bootstrap 5 Admin Dashboard Template</title>
</head>

<body>
    <!--wrapper-->
    <div class="wrapper">
        <!--sidebar wrapper -->
        <div class="sidebar-wrapper" data-simplebar="true">
            <div class="sidebar-header">
                <div>
                    <img src="assets/images/comptabilite.png" class="logo-icon" alt="logo icon">
                </div>
                <div>
                    <h4 class="logo-text">Perso finance</h4>
                </div>
                <div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
                </div>
            </div>
            <!--navigation-->
            <ul class="metismenu" id="menu">
                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class="fa-solid fa-piggy-bank"></i></div>
                        <div class="menu-title">Accounts</div>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('get_create_account') }}">
                                <i class='bx bx-radio-circle'></i>Add Account
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('get-accounts') }}">
                                <i class='bx bx-radio-circle'></i>Get Account
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('get-accounts') }}">
                                <i class='bx bx-radio-circle'></i>Update Account
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class="fa-solid fa-piggy-bank"></i></div>
                        <div class="menu-title">Categories</div>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('categories.create') }}">
                                <i class='bx bx-radio-circle'></i>Add Category
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('categories.index') }}">
                                <i class='bx bx-radio-circle'></i>View categories
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class="fa-solid fa-piggy-bank"></i></div>
                        <div class="menu-title">My stats</div>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('stats.view') }}">
                                <i class='bx bx-radio-circle'></i>View stats
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class="fa-solid fa-piggy-bank"></i></div>
                        <div class="menu-title">Transactions</div>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('transactions.create') }}">
                                <i class='bx bx-radio-circle'></i>Add Transactions
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('transactions.index') }}">
                                <i class='bx bx-radio-circle'></i>View Transactions
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class="fa-solid fa-piggy-bank"></i></div>
                        <div class="menu-title">Budgets</div>
                    </a>
                    <ul>
                        <li>
                            <a href="{{ route('budgets.create') }}">
                                <i class='bx bx-radio-circle'></i>Add budget
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('budgets.index') }}">
                                <i class='bx bx-radio-circle'></i>View budget
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-label">Pages</li>
                <!-- Additional sections for transactions, budget, reports can be added here -->
            </ul>

            <!--end navigation-->
        </div>
        <!--end sidebar wrapper -->
        <!--start header -->
        <header>
            <div class="topbar d-flex align-items-center">
                <nav class="navbar navbar-expand gap-3">
                    <div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
                    </div>
                    <div class="top-menu ms-auto">
                        <ul class="navbar-nav align-items-center gap-1">
                            <li class="nav-item mobile-search-icon d-flex d-lg-none" data-bs-toggle="modal"
                                data-bs-target="#SearchModal">
                                <a class="nav-link" href="avascript:;"><i class='bx bx-search'></i>
                                </a>
                            </li>

                            <li class="nav-item dropdown dropdown-laungauge d-none d-sm-flex">
                                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="avascript:;"
                                    data-bs-toggle="dropdown"><img src="assets/images/county/02.png" width="22"
                                        alt="">
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item d-flex align-items-center py-2"
                                            href="javascript:;"><img src="assets/images/county/01.png" width="20"
                                                alt=""><span class="ms-2">English</span></a>
                                    </li>
                                    <li><a class="dropdown-item d-flex align-items-center py-2"
                                            href="javascript:;"><img src="assets/images/county/02.png" width="20"
                                                alt=""><span class="ms-2">Catalan</span></a>
                                    </li>
                                    <li><a class="dropdown-item d-flex align-items-center py-2"
                                            href="javascript:;"><img src="assets/images/county/03.png" width="20"
                                                alt=""><span class="ms-2">French</span></a>
                                    </li>
                                    <li><a class="dropdown-item d-flex align-items-center py-2"
                                            href="javascript:;"><img src="assets/images/county/04.png" width="20"
                                                alt=""><span class="ms-2">Belize</span></a>
                                    </li>
                                    <li><a class="dropdown-item d-flex align-items-center py-2"
                                            href="javascript:;"><img src="assets/images/county/05.png" width="20"
                                                alt=""><span class="ms-2">Colombia</span></a>
                                    </li>
                                    <li><a class="dropdown-item d-flex align-items-center py-2"
                                            href="javascript:;"><img src="assets/images/county/06.png" width="20"
                                                alt=""><span class="ms-2">Spanish</span></a>
                                    </li>
                                    <li><a class="dropdown-item d-flex align-items-center py-2"
                                            href="javascript:;"><img src="assets/images/county/07.png" width="20"
                                                alt=""><span class="ms-2">Georgian</span></a>
                                    </li>
                                    <li><a class="dropdown-item d-flex align-items-center py-2"
                                            href="javascript:;"><img src="assets/images/county/08.png" width="20"
                                                alt=""><span class="ms-2">Hindi</span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dark-mode d-none d-sm-flex">
                                <a class="nav-link dark-mode-icon" href="javascript:;"><i class='bx bx-moon'></i>
                                </a>
                            </li>

                            <li class="nav-item dropdown dropdown-app">
                                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown"
                                    href="javascript:;"><i class='bx bx-grid-alt'></i></a>
                                <div class="dropdown-menu dropdown-menu-end p-0">
                                    <div class="app-container p-2 my-2">
                                        <div class="row gx-0 gy-2 row-cols-3 justify-content-center p-2">
                                            <div class="col">
                                                <a href="javascript:;">
                                                    <div class="app-box text-center">
                                                        <div class="app-icon">
                                                            <img src="assets/images/app/slack.png" width="30"
                                                                alt="">
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
                                                            <img src="assets/images/app/behance.png" width="30"
                                                                alt="">
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
                                                            <img src="assets/images/app/google-drive.png"
                                                                width="30" alt="">
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
                                                            <img src="assets/images/app/outlook.png" width="30"
                                                                alt="">
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
                                                            <img src="assets/images/app/github.png" width="30"
                                                                alt="">
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
                                                            <img src="assets/images/app/stack-overflow.png"
                                                                width="30" alt="">
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
                                                            <img src="assets/images/app/figma.png" width="30"
                                                                alt="">
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
                                                            <img src="assets/images/app/twitter.png" width="30"
                                                                alt="">
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
                                                            <img src="assets/images/app/google-calendar.png"
                                                                width="30" alt="">
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
                                                            <img src="assets/images/app/spotify.png" width="30"
                                                                alt="">
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
                                                            <img src="assets/images/app/google-photos.png"
                                                                width="30" alt="">
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
                                                            <img src="assets/images/app/pinterest.png" width="30"
                                                                alt="">
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
                                                            <img src="assets/images/app/linkedin.png" width="30"
                                                                alt="">
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
                                                            <img src="assets/images/app/dribble.png" width="30"
                                                                alt="">
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
                                                            <img src="assets/images/app/youtube.png" width="30"
                                                                alt="">
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
                                                            <img src="assets/images/app/google.png" width="30"
                                                                alt="">
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
                                                            <img src="assets/images/app/envato.png" width="30"
                                                                alt="">
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
                                                            <img src="assets/images/app/safari.png" width="30"
                                                                alt="">
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
                                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative"
                                    href="#" data-bs-toggle="dropdown"><span class="alert-count">7</span>
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
                                                    <img src="assets/images/avatars/avatar-1.png" class="msg-avatar"
                                                        alt="user avatar">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">Daisy Anderson<span
                                                            class="msg-time float-end">5 sec
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
                                                    <h6 class="msg-name">New Orders <span class="msg-time float-end">2
                                                            min
                                                            ago</span></h6>
                                                    <p class="msg-info">You have recived new orders</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="user-online">
                                                    <img src="assets/images/avatars/avatar-2.png" class="msg-avatar"
                                                        alt="user avatar">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">Althea Cabardo <span
                                                            class="msg-time float-end">14
                                                            sec ago</span></h6>
                                                    <p class="msg-info">Many desktop publishing packages</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="notify bg-light-success text-success">
                                                    <img src="assets/images/app/outlook.png" width="25"
                                                        alt="user avatar">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">Account Created<span
                                                            class="msg-time float-end">28 min
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
                                                    <img src="assets/images/avatars/avatar-4.png" class="msg-avatar"
                                                        alt="user avatar">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">Katherine Pechon <span
                                                            class="msg-time float-end">15
                                                            min ago</span></h6>
                                                    <p class="msg-info">Making this the first true generator</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="notify bg-light-success text-success"><i
                                                        class='bx bx-check-square'></i>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">Your item is shipped <span
                                                            class="msg-time float-end">5 hrs
                                                            ago</span></h6>
                                                    <p class="msg-info">Successfully shipped your item</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="notify bg-light-primary">
                                                    <img src="assets/images/app/github.png" width="25"
                                                        alt="user avatar">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">New 24 authors<span
                                                            class="msg-time float-end">1 day
                                                            ago</span></h6>
                                                    <p class="msg-info">24 new authors joined last week</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="dropdown-item" href="javascript:;">
                                            <div class="d-flex align-items-center">
                                                <div class="user-online">
                                                    <img src="assets/images/avatars/avatar-8.png" class="msg-avatar"
                                                        alt="user avatar">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="msg-name">Peter Costanzo <span
                                                            class="msg-time float-end">6 hrs
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
                                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative"
                                    href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="alert-count">8</span>
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
                                                        <img src="assets/images/products/11.png" class=""
                                                            alt="product image">
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
                                                        <img src="assets/images/products/02.png" class=""
                                                            alt="product image">
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
                                                        <img src="assets/images/products/03.png" class=""
                                                            alt="product image">
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
                                                        <img src="assets/images/products/04.png" class=""
                                                            alt="product image">
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
                                                        <img src="assets/images/products/05.png" class=""
                                                            alt="product image">
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
                                                        <img src="assets/images/products/06.png" class=""
                                                            alt="product image">
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
                                                        <img src="assets/images/products/07.png" class=""
                                                            alt="product image">
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
                                                        <img src="assets/images/products/08.png" class=""
                                                            alt="product image">
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
                                                        <img src="assets/images/products/09.png" class=""
                                                            alt="product image">
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
                        <a class="d-flex align-items-center nav-link dropdown-toggle gap-3 dropdown-toggle-nocaret"
                            href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="{{ auth()->user()->profile_picture ? asset('storage/profile_pictures/' . auth()->user()->profile_picture) : asset('assets/images/avatars/avatar-2.png') }}"
                                class="user-img" alt="user avatar">
                        </a>
                        <div class="user-info">
                            @if (isset($usr))
                                <p>{{ $usr->name }}</p>
                            @else
                                <p>No user is currently connected.</p>
                            @endif
                        </div>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                        class="bx bx-user fs-5"></i><span>Profile</span></a>
                            </li>
                            <li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                        class="bx bx-cog fs-5"></i><span>Settings</span></a>
                            </li>
                            <li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                        class="bx bx-home-circle fs-5"></i><span>Dashboard</span></a>
                            </li>
                            <li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                        class="bx bx-dollar-circle fs-5"></i><span>Earnings</span></a>
                            </li>
                            <li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                        class="bx bx-download fs-5"></i><span>Downloads</span></a>
                            </li>
                            <li>
                                <div class="dropdown-divider mb-0"></div>
                            </li>
                            <li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                        class="bx bx-log-out-circle"></i><span>Logout</span></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <!--end header -->
        <!--start page wrapper -->
        <div class="page-wrapper">
            <div class="page-content">
                <!--breadcrumb-->
                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3">User Profile</div>
                    <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">User Profilep</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!--end breadcrumb-->
                <div class="container">
                    <div class="main-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex flex-column align-items-center text-center">
                                            <img src="{{ auth()->user()->profile_picture ? asset('storage/' . auth()->user()->profile_picture) : asset('assets/images/avatars/avatar-2.png') }}"
                                                alt="Admin" class="bg-primary" width="300" height="300">
                                        </div>
                                        <hr class="my-4" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="card">
                                    <div class="card-body">

                                        <form class="row g-3" method="POST" action="{{ route('update_account', $usr->id) }}" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT') <!-- Add the PUT method for updates -->
                                            <div class="col-md-6">
                                                <label for="input1" class="form-label">First Name</label>
                                                <input type="text" class="form-control" id="input1" placeholder="First Name" name="name" value="{{ old('name', $usr->name) }}">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="input2" class="form-label">Last Name</label>
                                                <input type="text" class="form-control" id="input2" placeholder="Last Name" name="last_name" value="{{ old('last_name', $usr->last_name) }}">
                                            </div>
                                            <div class="col-md-12">
                                                <label for="input3" class="form-label">Phone</label>
                                                <input type="text" class="form-control" id="input3" placeholder="Phone" name="phone" value="{{ old('phone', $usr->phone) }}">
                                            </div>
                                            <div class="col-md-12">
                                                <label for="input4" class="form-label">Email</label>
                                                <input type="email" class="form-control" id="input4" placeholder="Email" name="email" value="{{ old('email', $usr->email) }}">
                                            </div>
                                            <div class="col-md-12">
                                                <label for="input6" class="form-label">Date of Birth</label>
                                                <input type="date" class="form-control datepicker" name="dob" value="{{ old('dob', $usr->dob) }}">
                                            </div>
                                            <div class="col-md-12">
                                                <label for="input7" class="form-label">Country</label>
                                                <select id="input7" class="form-select" name="country">
                                                    <option selected>Choose...</option>
                                                    <option value="Tunisie" {{ $usr->country == 'Tunisie' ? 'selected' : '' }}>Tunisie</option>
                                                    <option value="Italy" {{ $usr->country == 'Italy' ? 'selected' : '' }}>Italy</option>
                                                    <option value="USA" {{ $usr->country == 'USA' ? 'selected' : '' }}>USA</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="input8" class="form-label">City</label>
                                                <input type="text" class="form-control" id="input8" placeholder="City" name="city" value="{{ old('city', $usr->city) }}">
                                            </div>
                                            <div class="col-md-2">
                                                <label for="input10" class="form-label">Zip</label>
                                                <input type="text" class="form-control" id="input10" placeholder="Zip" name="zip" value="{{ old('zip', $usr->zip) }}">
                                            </div>
                                            <div class="col-md-12">
                                                <label for="input11" class="form-label">Address</label>
                                                <textarea class="form-control" id="input11" placeholder="Address ..." rows="3" name="address">{{ old('address', $usr->address) }}</textarea>
                                            </div>
                                            <div class="col-md-12 mt-3">
                                                <label for="profilePicture" class="form-label">Profile Picture</label>
                                                <div class="input-group">
                                                    <input type="file" class="form-control" id="profilePicture" name="profile_picture" accept="image/jpeg, image/png, image/jpg, image/gif">
                                                </div>
                                                @if($usr->profile_picture)
                                                    <img src="{{ asset('storage/' . $usr->profile_picture) }}" alt="Current Profile Picture" class="img-thumbnail mt-2" width="150">
                                                @endif
                                            </div>
                                            <div class="col-md-12">
                                                <div class="d-md-flex d-grid align-items-center gap-3">
                                                    <button type="submit" class="btn btn-primary px-4">Update</button>
                                                    <button type="reset" class="btn btn-light px-4">Reset</button>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end page wrapper -->
        <!--start overlay-->
        <div class="overlay toggle-icon"></div>
        <!--end overlay-->
        <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i
                class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->
        <footer class="page-footer">
            <p class="mb-0">Copyright © 2021. All right reserved.</p>
        </footer>
    </div>
    <!--end wrapper-->

    <!-- search modal -->

    <!-- end search modal -->



    <!--start switcher-->
    <div class="switcher-wrapper">
        <div class="switcher-btn"> <i class='bx bx-cog bx-spin'></i>
        </div>
        <div class="switcher-body">
            <div class="d-flex align-items-center">
                <h5 class="mb-0 text-uppercase">Theme Customizer</h5>
                <button type="button" class="btn-close ms-auto close-switcher" aria-label="Close"></button>
            </div>
            <hr />
            <h6 class="mb-0">Theme Styles</h6>
            <hr />
            <div class="d-flex align-items-center justify-content-between">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="lightmode" checked>
                    <label class="form-check-label" for="lightmode">Light</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="darkmode">
                    <label class="form-check-label" for="darkmode">Dark</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="semidark">
                    <label class="form-check-label" for="semidark">Semi Dark</label>
                </div>
            </div>
            <hr />
            <div class="form-check">
                <input class="form-check-input" type="radio" id="minimaltheme" name="flexRadioDefault">
                <label class="form-check-label" for="minimaltheme">Minimal Theme</label>
            </div>
            <hr />
            <h6 class="mb-0">Header Colors</h6>
            <hr />
            <div class="header-colors-indigators">
                <div class="row row-cols-auto g-3">
                    <div class="col">
                        <div class="indigator headercolor1" id="headercolor1"></div>
                    </div>
                    <div class="col">
                        <div class="indigator headercolor2" id="headercolor2"></div>
                    </div>
                    <div class="col">
                        <div class="indigator headercolor3" id="headercolor3"></div>
                    </div>
                    <div class="col">
                        <div class="indigator headercolor4" id="headercolor4"></div>
                    </div>
                    <div class="col">
                        <div class="indigator headercolor5" id="headercolor5"></div>
                    </div>
                    <div class="col">
                        <div class="indigator headercolor6" id="headercolor6"></div>
                    </div>
                    <div class="col">
                        <div class="indigator headercolor7" id="headercolor7"></div>
                    </div>
                    <div class="col">
                        <div class="indigator headercolor8" id="headercolor8"></div>
                    </div>
                </div>
            </div>
            <hr />
            <h6 class="mb-0">Sidebar Colors</h6>
            <hr />
            <div class="header-colors-indigators">
                <div class="row row-cols-auto g-3">
                    <div class="col">
                        <div class="indigator sidebarcolor1" id="sidebarcolor1"></div>
                    </div>
                    <div class="col">
                        <div class="indigator sidebarcolor2" id="sidebarcolor2"></div>
                    </div>
                    <div class="col">
                        <div class="indigator sidebarcolor3" id="sidebarcolor3"></div>
                    </div>
                    <div class="col">
                        <div class="indigator sidebarcolor4" id="sidebarcolor4"></div>
                    </div>
                    <div class="col">
                        <div class="indigator sidebarcolor5" id="sidebarcolor5"></div>
                    </div>
                    <div class="col">
                        <div class="indigator sidebarcolor6" id="sidebarcolor6"></div>
                    </div>
                    <div class="col">
                        <div class="indigator sidebarcolor7" id="sidebarcolor7"></div>
                    </div>
                    <div class="col">
                        <div class="indigator sidebarcolor8" id="sidebarcolor8"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end switcher-->
    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!--plugins-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
    <script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    <!--app JS-->
    <script src="assets/js/app.js"></script>
</body>

</html>
