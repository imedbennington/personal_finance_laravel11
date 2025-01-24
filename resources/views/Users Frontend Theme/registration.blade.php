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
            </nav>
        </div>
    </header>


    <div class="row">
        <div class="col-xl-6 mx-auto">

            <div class="card">
                <div class="card-body p-4">
                    <h5 class="mb-4">Create an account</h5>
                    <div class="card-body p-4">
                        <h5 class="mb-4">Create an account</h5>

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
                    <form class="row g-3" method="POST" action="{{ route('registeration_account') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-6">
                            <label for="input1" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="input1" placeholder="First Name" name="name">
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
                            <label for="input6" class="form-label">Date of birth</label>
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
                        <div class="col-md-12 mt-3">
                            <label for="profilePicture" class="form-label">Profile Picture</label>
                            <div class="input-group">
                                <input type="file" class="form-control" id="profilePicture" name="profile_picture" accept="image/jpeg, image/png, image/jpg, image/gif">
                            </div>
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
