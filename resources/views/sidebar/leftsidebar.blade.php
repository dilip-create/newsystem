 <!-- ========== Left Sidebar Start ========== -->
        <div class="left-side-menu">

            <div class="slimscroll-menu">

                <!--- Sidemenu -->
                <div id="sidebar-menu">

                    <ul class="metismenu" id="side-menu">
                         @php
                        $data = getTodayTransactionCount();
                        @endphp
                        {{-- <li class="menu-title">Navigation</li> --}}
                        <li>
                            <a href="/">
                                <i class="mdi mdi-view-dashboard"></i>
                                <span> Dashboard </span>
                            </a>
                        </li>
                        @if (Auth()->user()->role_name === 'Merchant')
                            <li>
                                <a href="{{ route('details-payment/list-merchant') }}">
                                    <i class="mdi mdi-file-document-box-check-outline"></i>
                                    <span class="badge badge-warning badge-pill float-right">{{ $data['todayDepositCount'] > 0 ?   $data['todayDepositCount']  : '' }}</span>
                                    <span>{{ __('messages.Deposit Transactions') }} </span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('view/settledHistory-merchant') }}">
                                    <i class="mdi mdi-google-pages"></i>
                                    <span class="badge badge-warning badge-pill float-right">{{ $data['todayWithdrawCount'] > 0 ?  $data['todayWithdrawCount'] : '' }}</span>
                                    <span style="font-size:14px;">{{ __('messages.Withdraw Transactions') }}</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('merchant-qrcode-list') }}">
                                    <i class="mdi mdi-poll"></i>
                                    <span> {{ __('messages.Summary Report') }} </span>
                                </a>
                            </li>

                        @endif
                        @if (Auth()->user()->role_name === 'Admin')

                            @if (auth()->user()->can('PaymentDetails: View PaymentDetails'))
                            <li>
                                <a href="{{ route('PaymentDetails: View PaymentDetails') }}">
                                    <i class="mdi mdi-file-document-box-check-outline"></i>
                                    <span class="badge badge-warning badge-pill float-right">{{ $data['todayDepositCount'] > 0 ?   $data['todayDepositCount']  : '' }}</span>
                                    <span>{{ __('messages.Deposit Transactions') }} </span>
                                </a>
                            </li>
                            @endif 
                            @if (auth()->user()->can('Settlement: Billing View Settlement') ||
                                auth()->user()->can('Settlement: Settle Request View Settlement') ||
                                auth()->user()->can('Settlement: Settle Approved View Settlement') ||
                                auth()->user()->can('Settlement: Settled View Settlement') ||
                                auth()->user()->can('Settlement: Settled History Settlement'))   
                                <li>
                                    <a href="{{ route('Settlement: Settled History Settlement') }}">
                                        <i class="mdi mdi-google-pages"></i>
                                        <span class="badge badge-warning badge-pill float-right">{{ $data['todayWithdrawCount'] > 0 ?  $data['todayWithdrawCount'] : '' }}</span>
                                        <span style="font-size:14px;">{{ __('messages.Withdraw Transactions') }}</span>
                                    </a>
                                </li>
                            @endif

                        @endif
                        {{-- <li class="menu-title mt-2">Components</li>
                        <li>
                            <a href="javascript: void(0);">
                                <i class="mdi mdi-black-mesa"></i>
                                <span> Icons </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="icons-materialdesign.html">Material Design</a></li>
                                <li><a href="icons-ionicons.html">Ion Icons</a></li>
                                <li><a href="icons-fontawesome.html">Font awesome</a></li>
                                <li><a href="icons-themify.html">Themify Icons</a></li>
                                <li><a href="icons-simple-line.html">Simple line Icons</a></li>
                                <li><a href="icons-weather.html">Weather Icons</a></li>
                                <li><a href="icons-pe7.html">PE7 Icons</a></li>
                                <li><a href="icons-typicons.html">Typicons</a></li>
                            </ul>
                        </li>

                        

                        <li>
                            <a href="javascript: void(0);">
                                <i class="mdi mdi-table-settings"></i>
                                <span> Tables </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="tables-basic.html">Basic Tables</a></li>
                                <li><a href="tables-datatable.html">Data Tables</a></li>
                                <li><a href="tables-responsive.html">Responsive Table</a></li>
                                <li><a href="tables-tablesaw.html">Tablesaw</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="javascript: void(0);">
                                <i class="mdi mdi-poll"></i>
                                <span> Charts </span>
                                <span class="menu-arrow"></span>
                            </a>
                            <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="charts-flot.html">Flot Charts</a></li>
                                <li><a href="charts-morris.html">Morris Charts</a></li>
                                <li><a href="charts-chartjs.html">Chartjs</a></li>
                                <li><a href="charts-peity.html">Peity Charts</a></li>
                                <li><a href="charts-chartist.html">Chartist Charts</a></li>
                                <li><a href="charts-c3.html">C3 Charts</a></li>
                                <li><a href="charts-sparkline.html">Sparkline Charts</a></li>
                                <li><a href="charts-knob.html">Jquery Knob</a></li>
                            </ul>
                        </li> --}}

                    

                       
                    </ul>

                </div>
                <!-- End Sidebar -->

                <div class="clearfix"></div>

            </div>
            <!-- Sidebar -left -->

        </div>
        <!-- Left Sidebar End -->