<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Auth Dashboard
    </title>
    <link rel="shortcut icon" href="{{ asset('assets/auth/images/favicon.png') }}" type="image/png">
    <!-- GOOGLE FONT -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <!-- BOXICONS -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <!-- Plugin -->
    <link rel="stylesheet" href="{{ asset('assets/auth/libs/owl.carousel/assets/owl.carousel.min.css') }}">

    <!-- APP CSS -->
    <link rel="stylesheet" href="{{ asset('assets/auth/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/auth/css/grid.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/auth/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/auth/css/responsive.css') }}">
</head>

<body class="sidebar-expand">

    <!-- SIDEBAR -->
    <div class="sidebar">
        <div class="sidebar-logo">

                <img src="{{ asset('assets/auth/images/logo.png') }}" alt="Protend logo">

            <div class="sidebar-close" id="sidebar-close">
                <i class='bx bx-left-arrow-alt'></i>
            </div>
        </div>
        <!-- SIDEBAR MENU -->
        <div class="simlebar-sc" data-simplebar>
            <ul class="sidebar-menu tf">
                <li class="sidebar-submenu">
                    <a href="{{ route('auth') }}" class="sidebar-menu-dropdown">
                        <i class='bx bxs-home'></i>
                        <span>Dashboard</span>

                    </a>
                    <ul class="sidebar-menu sidebar-menu-dropdown-content">

                    </ul>
                </li>

                <li>
                    <a href="{{ route('board') }}">
                        <i class='bx bxs-dashboard'></i>
                        <span>Board</span>
                    </a>
                </li>

                <li>
                    <a class="darkmode-toggle" id="darkmode-toggle" onclick="switchTheme()">
                        <div>
                            <i class='bx bx-cog mr-10'></i>
                            <span>darkmode</span>
                        </div>

                        <span class="darkmode-switch"></span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- END SIDEBAR MENU -->
    </div>

    </div>
    <!-- END SIDEBAR -->
    <!-- Main Header -->
    <div class="main-header">
        <div class="d-flex">
            <div class="mobile-toggle" id="mobile-toggle">
                <i class='bx bx-menu'></i>
            </div>
            <div class="main-title">
                Dashboard
            </div>
        </div>


            <div class="dropdown d-inline-block mt-12">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="info d-xl-inline-block  color-span">
                        <span class="d-block fs-20 font-w600">{{ $LoggedUserInfo['name'] ." " .$LoggedUserInfo['surname']}}</span>
                        <span class="d-block mt-7">{{ $LoggedUserInfo['email'] }}</span>
                    </span>

                    <i class='bx bx-chevron-down'></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    {{-- <!-- item-->
                    <a class="dropdown-item" href="#"><i class="bx bx-user font-size-16 align-middle me-1"></i>
                        <span>Profile</span></a>
                    <a class="dropdown-item d-block" href="#"><i
                            class="bx bx-wrench font-size-16 align-middle me-1"></i> <span>Settings</span></a>
                    <div class="dropdown-divider"></div> --}}
                    <a class="dropdown-item text-danger" href="{{ route('logout') }}"><i
                            class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i>
                        <span>Logout</span></a>
                </div>
            </div>
        </div>
    </div>

    <!-- End Main Header -->
    <!-- MAIN CONTENT -->

    <div class="main">

        <div class="main-content dashboard">
            <div class="row">
                <div class="col-12">
                    <div class="box card-box">
                            <div class="icon-box bg-color-4">
                                <a class="create d-flex" href="#" data-toggle="modal" data-target="#add_income">
                                    <div class="icon bg-white">
                                        <i class="bx bx-plus"></i>
                                    </div>
                                    <div class="content d-flex align-items-center">
                                        <h5 class="color-white">Add Income</h5>
                                    </div>
                                </a>
                            </div>

                        <div class="icon-box bg-color-4">
                            <a class="create d-flex" href="#" data-toggle="modal" data-target="#add_expense">
                                <div class="icon bg-white">
                                    <i class="bx bx-plus"></i>
                                </div>
                                <div class="content d-flex align-items-center">
                                    <h5 class="color-white">Add Expense</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-6 col-xl-12 col-sm-12">
                <div class="box">
                    <div class="box-body d-flex pb-0">
                        <div class="me-auto">
                            <h5 class="box-title mb-36">Income</h5>
                            <table class="table table-bordered mb-10">
                                <thead>
                                    <tr>
                                        <th>Amount</th>
                                        <th>Date</th>
                                        <th>Info</th>
                                        <th>Notes</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>$1200</td>
                                        <td>23.01.2023</td>
                                        <td>Rent</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>$800</td>
                                        <td>11.03.2023</td>
                                        <td>from Dad</td>
                                        <td>for the order</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div>
                            <h5>Total:</h5>
                            <h4 class="numb font-wb fs-30">+$400</h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-6 col-xl-12 col-sm-12">
            <div class="box">
                <div class="box-body d-flex pb-0">
                    <div class="me-auto">
                        <h5 class="box-title mb-36">Expense</h5>
                        <table class="table table-bordered mb-10">
                            <thead>
                                <tr>
                                    <th>Amount</th>
                                    <th>Date</th>
                                    <th>Info</th>
                                    <th>Notes</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>$1200</td>
                                    <td>23.01.2021</td>
                                    <td>Rent</td>
                                    <td>last one</td>
                                </tr>
                                <tr>
                                    <td>$800</td>
                                    <td>20.10.2023</td>
                                    <td>Grocery</td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div>
                        <h5>Total:</h5>
                        <h4 class="numb font-wb fs-30">-$400</h4>
                    </div>
                </div>
            </div>


        {{-- Form Start --}}

        <div id="add_income" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Income</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('saveIncomeExpense') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="userID" value="{{ $LoggedUserInfo['id'] }}">
                            <input type="hidden" name="type" value="income">
                            <div class="row">
                                <div class="col-sm-6 mb-0">
                                    <div class="form-group">
                                        <label>Date</label>
                                        <div class="cal-icon">
                                            <input name="date" class="form-control " type="date">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <span style='color:red;'>@error('date'){{ $message }}@enderror</span>
                            <div class="row">
                                <div class="col-sm-3 mb-0">
                                    <div class="form-group">
                                        <label>Rate</label>
                                        <input name="rate" placeholder="$50" class="form-control" value=""
                                            type="text">
                                    </div>
                                </div>
                            </div>
                            <span style='color:red;'>@error('rate'){{ $message }}@enderror</span>
                            {{-- combobox --}}
                            <div class="row">
                                <div class="col-sm-3 mb-0">
                                    <div class="form-group">
                                        <label>Income Category</label>
                                        <select name="category" class="form-control" style="width: 300px;">
                                            <option value="">-- Select an income category --</option>
                                            <option value="Salary">Salary</option>
                                            <option value="Hourly Wage">Hourly Wage</option>
                                            <option value="Investment Income">Investment Income</option>
                                            <option value="Rent">Rent</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <span style='color:red;'>@error('name'){{ $message }}@enderror</span>
                            <div class="form-group">
                                <label>Notes</label>
                                <input type="text" name="notes" class="form-control" placeholder="Enter the notes about the income if any">
                            </div>
                            <div class="submit-section">
                                <button class="btn btn-primary submit-btn">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        {{-- Form End --}}
        {{-- Form Start --}}

        <div id="add_expense" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add Expense</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('saveIncomeExpense') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="userID" value="{{ $LoggedUserInfo['id'] }}">
                            <input type="hidden" name="type" value="expense">
                            <div class="row">
                                <div class="col-sm-6 mb-0">
                                    <div class="form-group">
                                        <label>Date</label>
                                        <div class="cal-icon">
                                            <input name="date" class="form-control " type="date">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <span style='color:red;'>@error('date'){{ $message }}@enderror</span>
                            <div class="row">
                                <div class="col-sm-3 mb-0">
                                    <div class="form-group">
                                        <label>Rate</label>
                                        <input name="rate" placeholder="$50" class="form-control" value=""
                                            type="text">
                                    </div>
                                </div>
                            </div>
                            <span style='color:red;'>@error('rate'){{ $message }}@enderror</span>
                            {{-- combobox --}}
                            <div class="row">
                                <div class="col-sm-3 mb-0">
                                    <div class="form-group">
                                        <label>Expense Category</label>
                                        <select name="category" class="form-control" style="width: 300px;">
                                            <option value="">-- Select an expense category --</option>
                                            <option value="Food and Grocery">Food and Grocery</option>
                                            <option value="Shopping">Shopping</option>
                                            <option value="Tuition">Tuition Fee</option>
                                            <option value="Transportation">Transportation</option>
                                            <option value="Utilities">Utilities</option>
                                            <option value="Health">Health</option>
                                            <option value="Entertainment">Entertainment</option>
                                            <option value="Debt">Debt</option>
                                            <option value="Taxes">Taxes</option>
                                            <option value="Insurance">Insurance</option>
                                            <option value="Rent">Rent</option>
                                            <option value="Other">Other</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <span style='color:red;'>@error('name'){{ $message }}@enderror</span>
                            <div class="form-group">
                                <label>Notes</label>
                                <input type="text" name="notes" class="form-control" placeholder="Enter the notes about the expense if any">
                            </div>
                            <div class="submit-section">
                                <button class="btn btn-primary submit-btn">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        {{-- Form End --}}

        <div class="modal custom-modal fade" id="delete_project" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="form-header">
                            <h3>Delete Project</h3>
                            <p>Are you sure want to delete?</p>
                        </div>
                        <div class="modal-btn delete-action">
                            <div class="row">
                                <div class="col-6 mb-0">
                                    <a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
                                </div>
                                <div class="col-6 mb-0">
                                    <a href="javascript:void(0);" data-dismiss="modal"
                                        class="btn btn-primary cancel-btn">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal custom-modal fade" id="edit_project" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="form-header">
                            <h5 class="modal-title">Edit Project</h5>
                        </div>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row">
                                <div class="col-sm-6 mb-0">
                                    <div class="form-group">
                                        <label>Project Name</label>
                                        <input class="form-control" value="Gold App" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6 mb-0">
                                    <div class="form-group">
                                        <label>Client</label>
                                        <select class="select">
                                            <option>Client 1</option>
                                            <option>Client 2</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="submit-section">
                                <button class="btn btn-primary submit-btn">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
    <!-- END MAIN CONTENT -->

    <div class="overlay"></div>

    <!-- SCRIPT -->
    <!-- APEX CHART -->

    <script src="{{ asset('assets/auth/libs/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/auth/libs/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('assets/auth/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/auth/libs/peity/jquery.peity.min.js') }}"></script>
    <script src="{{ asset('assets/auth/libs/chart.js/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/auth/libs/owl.carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/auth/libs/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/auth/libs/apexcharts/apexcharts.js') }}"></script>
    <script src="{{ asset('assets/auth/libs/simplebar/simplebar.min.js') }}"></script>

    <!-- APP JS -->
    <script src="{{ asset('assets/auth/js/main.js') }}"></script>
    <script src="{{ asset('assets/auth/js/dashboard.js') }}"></script>
    <script src="{{ asset('assets/auth/js/shortcode.js') }}"></script>
    <script src="{{ asset('assets/auth/js/pages/dashboard.js') }}"></script>


</body>

</html>
