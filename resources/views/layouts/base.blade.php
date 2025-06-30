<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>{{ trans('messages.PAYMENT GATEWAY') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Responsive bootstrap 4 admin template" name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ URL::to('newassets/images/favicon.ico') }}">
    <!-- App css -->
    <link href="{{ URL::to('newassets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
    <link href="{{ URL::to('newassets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ URL::to('newassets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-stylesheet" />
    <!-- Table datatable css -->
        <link href="{{ URL::to('newassets/libs/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::to('newassets/libs/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::to('newassets/libs/datatables/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::to('newassets/libs/datatables/select.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />

    {{-- message toastr --}}
    <link rel="stylesheet" href="{{ URL::to('assets/css/toastr.min.css') }}">
    <script src="{{ URL::to('assets/js/toastr_jquery.min.js') }}"></script>
    <script src="{{ URL::to('assets/js/toastr.min.js') }}"></script>

    <link href="{{ URL::to('assets/css/custom_style.css') }}" rel="stylesheet">
    <link href="{{ URL::to('assets/vendor/datatables/css/responsive.min.css') }}" rel="stylesheet">
    <link href="{{ URL::to('assets/vendor/datatables/css/datatable.min.css') }}" rel="stylesheet">

</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">

            <!-- Topbar Start -->
            <div class="navbar-custom">
                <ul class="list-unstyled topnav-menu float-right mb-0">

                    <li class="dropdown notification-list dropdown d-none d-lg-inline-block ml-2"><br/>
                        {{-- <a class="nav-link dropdown-toggle mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false"> --}}
                            {{-- <img src="{{ URL::to('newassets/images/flags/' . (session('locale') == 'en' ? 'us' : 'italy') . '.jpg') }}" alt="lang-image" height="12"> --}}
                            <select class="form-control changeLang" style="padding-inline: 19px;">
                                        <option value="en"
                                            {{ session()->get('locale') == 'en' ? 'selected' : '' }}><b>English</b></option>
                                        <option value="th"
                                            {{ session()->get('locale') == 'th' ? 'selected' : '' }}><b>Thai</b></option>
                                        {{-- <option value="ch"
                                            {{ session()->get('locale') == 'ch' ? 'selected' : '' }}>中文</option> --}}
                                    </select>

                        {{-- </a> --}}
                    </li>
                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle  waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="mdi mdi-bell-outline noti-icon"></i>
                            <span class="noti-icon-badge"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-lg">

                            <!-- item-->
                            <div class="dropdown-item noti-title">
                                <h5 class="font-16 text-white m-0">
                                    <span class="float-right">
                                        <a href="" class="text-white">
                                            <small>Clear All</small>
                                        </a>
                                    </span>Notification
                                </h5>
                            </div>

                            <div class="slimscroll noti-scroll">

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-success">
                                        <i class="mdi mdi-settings-outline"></i>
                                    </div>
                                    <p class="notify-details">New settings
                                        <small class="text-muted">There are new settings available</small>
                                    </p>
                                </a>
                    
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-info">
                                        <i class="mdi mdi-bell-outline"></i>
                                    </div>
                                    <p class="notify-details">Updates
                                        <small class="text-muted">There are 2 new updates available</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-danger">
                                        <i class="mdi mdi-account-plus"></i>
                                    </div>
                                    <p class="notify-details">New user
                                        <small class="text-muted">You have 10 unread messages</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-info">
                                        <i class="mdi mdi-comment-account-outline"></i>
                                    </div>
                                    <p class="notify-details">Caleb Flakelar commented on Admin
                                        <small class="text-muted">4 days ago</small>
                                    </p>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <div class="notify-icon bg-secondary">
                                        <i class="mdi mdi-heart"></i>
                                    </div>
                                    <p class="notify-details">Carlos Crouch liked
                                        <b>Admin</b>
                                        <small class="text-muted">13 days ago</small>
                                    </p>
                                </a>
                            </div>

                            <!-- All-->
                            <a href="javascript:void(0);" class="dropdown-item text-primary notify-item notify-all">
                                View all
                                <i class="fi-arrow-right"></i>
                            </a>

                        </div>
                    </li>

                   

                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <img src="{{ URL::to('newassets/images/users/avatar-1.jpg') }}" alt="user-image" class="rounded-circle">
                            <span class="d-none d-sm-inline-block ml-1 font-weight-medium">Hello, <b>{{ ucfirst(Session::get('name')) }}</b></span>
                            <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown ">
                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow text-white m-0">Welcome !</h6>
                            </div>

                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                <i class="mdi mdi-account-outline"></i>
                                <span>Profile</span>
                            </a>

                            <div class="dropdown-divider"></div>

                            <!-- item-->
                            <a href="{{ route('logout') }}" class="dropdown-item notify-item">
                                <i class="mdi mdi-logout-variant"></i>
                                <span>Logout</span>
                            </a>

                        </div>
                    </li>
                </ul>

                <!-- LOGO -->
                <div class="logo-box">
                    <a href="/" class="logo text-center logo-dark">
                        <span class="logo-lg">
                            <img src="{{ URL::to('newassets/images/logo-Gtech.png') }}" alt="" height="22">
                            <!-- <span class="logo-lg-text-dark">Uplon</span> -->
                        </span>
                        <span class="logo-sm">
                            <!-- <span class="logo-lg-text-dark">U</span> -->
                            <img src="{{ URL::to('newassets/images/logo-Gtech.png') }}" alt="" height="15">
                        </span>
                    </a>
                </div>

                <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                    <li>
                        <button class="button-menu-mobile waves-effect waves-light">
                            <i class="mdi mdi-menu"></i>
                        </button>
                    </li>
                </ul>
            </div>
            <!-- end Topbar -->
            <!-- ========== Left Sidebar Start ========== -->
            @include('sidebar.leftsidebar')
            <!-- Left Sidebar End -->
            
            <div class="content-page">
                <div class="content"><!-- Start Content-->
                    <div class="container-fluid">
            
                        @yield('content')

                    </div> <!-- end container-fluid -->
                </div> <!-- end content -->

                <!-- Footer Start -->
                {{-- <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                2025 - 2026 &copy; theme by <a href="">ZaffranTaach</a>
                            </div>
                        </div>
                    </div>
                </footer> --}}
                <!-- end Footer -->

            </div>


    </div>
    <!-- END wrapper -->

    <!-- Vendor js -->
    <script src="{{ URL::to('newassets/js/vendor.min.js') }}"></script>
    <!--Morris Chart-->
    <script src="{{ URL::to('newassets/libs/morris-js/morris.min.js') }}"></script>
    <script src="{{ URL::to('newassets/libs/raphael/raphael.min.js') }}"></script>
    <!-- Dashboard init js-->
    <script src="{{ URL::to('newassets/js/pages/dashboard.init.js') }}"></script>
    <!-- App js -->
    <script src="{{ URL::to('newassets/js/app.min.js') }}"></script>
    <!-- Datatable plugin js -->
    <script src="{{ URL::to('newassets/libs/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ URL::to('newassets/libs/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ URL::to('newassets/libs/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ URL::to('newassets/libs/datatables/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ URL::to('newassets/libs/datatables/dataTables.buttons.min.js') }}"></script>
    <script src="{{ URL::to('newassets/libs/datatables/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ URL::to('newassets/libs/jszip/jszip.min.js') }}"></script>
    <script src="{{ URL::to('newassets/libs/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ URL::to('newassets/libs/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ URL::to('newassets/libs/datatables/buttons.html5.min.js') }}"></script>
    <script src="{{ URL::to('newassets/libs/datatables/buttons.print.min.js') }}"></script>
    <script src="{{ URL::to('newassets/libs/datatables/dataTables.keyTable.min.js') }}"></script>
    <script src="{{ URL::to('newassets/libs/datatables/dataTables.select.min.js') }}"></script>
    <!-- Datatables init -->
    <script src="{{ URL::to('newassets/js/pages/datatables.init.js') }}"></script>


    <script type="text/javascript" src="{{ asset('/assets/js/moment.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/assets/js/daterangepicker.js') }}"></script>
	<link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/daterangepicker.css') }}" />

    <script type="text/javascript">
		$(function () {
			$('.daterange').daterangepicker({
				autoUpdateInput: false,
				locale: {
					format: 'YYYY-MM-DD',
					applyLabel: "{{ trans('messages.Apply') }}",
					cancelLabel: "{{ trans('messages.Clear') }}",
					@if(session()->get('locale') == 'ch')
						daysOfWeek: [
							"日",
							"一",
							"二",
							"三",
							"四",
							"五",
							"六"
						],
						monthNames: [
							"一月",
							"二月",
							"三月",
							"四月",
							"五月",
							"六月",
							"七月",
							"八月",
							"九月",
							"十月",
							"十一月",
							"十二月"
						],
					@endif
				},
			});
		})

        $(".changeLang").change(function(){
            window.location.href = "{{ route('changeLang') }}" + "?lang="+ $(this).val();
        });

        $(".updateTimezone").change(function(){
            window.location.href = "{{ route('updateTimezone') }}" + "?tz="+ $(this).val();
        });

        $(function() {
            $('input').attr('maxlength', '20');

            $('input').keyup(function() {
                if ($(this).attr('id') == 'account_number' || $(this).attr('id') == 'editAccountNumber') {
                    $(this).attr('maxlength', '40');
                } else if($(this).attr('id') == 'url' || $(this).attr('id') == 'editUrl' || $(this).attr('id') == 'pre_sign' || $(this).attr('id') == 'editPreSign' || $(this).attr('id') == 'e_comm_website' || $(this).attr('id') == 'editE_comm_website'){
                    $(this).attr('maxlength', '200');
                } else {
                    $('input').attr('maxlength', '20');
                }
            });

             $(".params").keyup(function(){
               $('.params').attr('maxlength', '200');
             });
        })

        $(function() {
            Echo.private('App.Models.User.{{ auth()->id() }}')
                .notification((notification) => {
                    $.ajax({
                        url: "{{ route('get-unread-notification') }}",
                        type: 'GET',
                        success: function(res) {
                            $('#notificationCount').text(res.length);
                            $('#notificationCount').removeClass('d-none');
                            $('#notiBell').attr("data-toggle", "dropdown");
                            $('#notiBell').attr("aria-haspopup", "true");

                            var newContent = '';

                            for (let i = 0; i < res.length; i++) {
                                newContent += `
									<li>
										<div class="timeline-panel">
											<div class="media-body">
												<h5 class="mb-1">{{ trans('messages.Payment Success') }} ${res[i].data.currency} ${res[i].data.amount}</h5>
												<p class="mb-2">{{ trans('messages.Trans ID') }}: ${res[i].data.transaction_id}</p>
												<small class="d-block">
													${Math.abs(Math.round((((new Date().getTime() - new Date(res[i].created_at).getTime()) / 1000) / 60)))} {{ trans('messages.minutes ago') }}
												</small>
											</div>
										</div>
									</li>
								`;
                            }

                            $('#notiContent').html(newContent);
                        }
                    });

                    $('#notiDiv').addClass('show');
                    $('#notiBell').attr("aria-expanded", "true");
                    $('#notiBody').addClass('show');
                    $("#notiBody").effect("shake", {
                        direction: "up",
                        times: 4,
                        distance: 10
                    }, 1000);
                });
        });
    </script>

    @yield('script')
</body>
</html>