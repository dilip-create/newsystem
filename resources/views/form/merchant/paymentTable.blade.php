@extends('layouts.base')
@section('content')
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('messages.Home') }}</a></li>
                                            <li class="breadcrumb-item active">{{ __('messages.Deposit Transactions') }}</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">{{ __('messages.Deposit Transactions') }}</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                         <div class="row">
                            <div class="col-xl-4 col-md-6">
                                <div class="card-box tilebox-two">
                                    <i class="icon-chart float-right text-muted"></i>
                                    <h6 class="text-muted text-uppercase mt-0">{{__('messages.Total Deposit')}}</h6>
                                    <h3 class="mb-4"><span data-plugin="counterup" id="order_success_sum"></span></h3>
                                    <div class="progress progress-md">
                                        <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 90%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="card-box tilebox-two">
                                    <i class="icon-paypal float-right text-muted"></i>
                                    <h6 class="text-muted text-uppercase mt-0">{{ __('messages.Total MDR Fee:') }}</h6>
                                    <h3 class="mb-4"><span data-plugin="counterup" id="payment_count"></span></h3>
                                    <div class="progress progress-md">
                                        <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 50%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="90"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="card-box tilebox-two">
                                    <i class="icon-layers float-right text-muted"></i>
                                    <h6 class="text-muted text-uppercase mt-0">{{ __('messages.Total Net Amount:') }}</h6>
                                    <h3 class="mb-4" data-plugin="counterup" id="order_amount_sum"></h3>
                                    <div class="progress progress-md">
                                        <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 80%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                    
                        <div class="row">
                            <div class="col-12">
                                
                                <div class="card-body">
                                    <form action="" method="GET" class="row g-1">
                                        <div class="col-md-2">
                                            <label class="form-label header-title">{{ __('messages.Search') }}</label>
                                            <input id="search" type="search" class="form-control">
                                        </div>

                                        <div class="col-md-2">
                                            <label class="form-label header-title">{{ __('messages.Status') }}</label>
                                            <select id="status" class="form-control filterTable custom-select mb-3">
                                                <option value="" selected>{{ __('messages.All') }}</option>
                                                <option value="pending">{{ __('messages.pending') }}</option>
                                                <option value="success">{{ __('messages.Success') }}</option>
                                                <option value="processing">{{ __('messages.processing') }}</option>
                                                <option value="failed">{{ __('messages.Failed') }}</option>
                                            </select>
                                        </div>

                                        <div class="col-md-2">
                                            <label class="form-label header-title">{{ __('messages.Created Time') }}</label>
                                            <input type="text" name="daterange" id="daterange" class="form-control daterange" value="{{ date('Y-m-d') }} - {{ date('Y-m-d') }}" />
                                        </div>

                                        <div class="col-md-2">
                                            <label class="form-label header-title">{{ __('messages.Timezone') }}</label>
                                        <select id="timezone" class="form-control filterTable custom-select mb-3">
                                                @foreach ($timezones as $zone)
                                                    <option value="{{ $zone->id }}">{{ __('messages.'.$zone->timezone) }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-md-2">
                                            <label class="form-label header-title">{{ __('messages.refresh_interval') }}</label>
                                            <select id="minutes" class="form-control custom-select mb-3">
                                                <option value="1">{{ __('messages.one_minute') }}</option>
                                                <option value="2" selected>{{ __('messages.two_minutes') }}</option>
                                                <option value="5">{{ __('messages.five_minutes') }}</option>
                                            </select>
                                        </div>

                                        <div class="col-md-2">
                                            <label class="form-label mb-4"></label>
                                            <div class="">
                                                <button type='button' id="manual_update" class="btn btn-primary waves-effect waves-light">{{ __('messages.Refresh') }}</button>
                                                <button type='button' id="auto_update" class="btn btn-warning waves-effect waves-light">{{ __('messages.resume') }}</button>
                                                <button type='button' id="reset" class="btn btn-danger waves-effect waves-light">{{ __('messages.Reset') }}</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                {{-- <div class="card-body" id="success">
                                    <div class="mb-3 p-2 border bg-v-light">
                                        <ul class="list-inline right-bar-list mb-0">
                                            <li class="list-inline-item"><b>{{ __('messages.Result:') }}</b></li><span class="d-none d-md-inline fw-bold">--</span>
                                            <li class="list-inline-item"><b>{{ __('messages.Total Amount:') }} <span id="order_success_sum" class="text text-primary"></span></b></li> <span class="d-none d-md-inline">|</span>
                                            <li class="list-inline-item"><b>{{ __('messages.Total MDR Fee:') }} <span id="payment_count" class="text text-danger"></span></b></li> <span class="d-none d-md-inline">|</span>
                                            <li class="list-inline-item"><b>{{ __('messages.Total Net Amount:') }} <span id="order_amount_sum" class="text text-success"></span></b></li> 
                                        </ul>
                                    </div>
                                </div> --}}
                                <div class="card-body" id="fail">
                                    <div class="mb-3 p-2 border bg-v-light">
                                        <ul class="list-inline right-bar-list mb-0">
                                            <li class="list-inline-item">{{ __('messages.Fail order count:') }} <span id="order_fail_count"></span></li> <span class="d-none d-md-inline">|</span>
                                            <li class="list-inline-item">{{ __('messages.Fail order amount:') }} <span id="order_fail_sum"></span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-box">
                                    {{-- <h4 class="header-title">{{ __('messages.Deposit Transactions') }}</h4> --}}
                                    <p class="sub-header">
                                        <a href="#" id="exportMerchantPaymentDetails" class="btn btn-success waves-effect waves-light">{{ trans('messages.Export') }}</a>
                                    </p>

                                    <table id="paymentDataTable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                        <tr>
                                            <th>{{ __('messages.Order Id') }}</th>
                                            <th>{{ __('messages.Created Time') }}</th>
                                            <th>{{ __('messages.Transaction ID') }}</th>
                                            @if(Auth()->user()->merchant_id=='9')       
                                             <th>{{ __('messages.Invoice Number') }}</th>     {{-- For FC Department --}}
                                            @else
                                            <th>{{ __('messages.Reference ID') }}</th>
                                            @endif
                                            <th>{{ __('messages.Customer Name') }} </th>
                                            <th>{{ __('messages.Amount') }} </th>
                                            <th>{{ __('messages.MDR') }} </th>
                                            <th>{{ __('messages.Net') }} </th>
                                            <th>{{ __('messages.Currency') }}</th>
                                            <th >{{ __('messages.Status') }}</th>
                                            <th>{{ __('messages.Action') }}</th>
                                        </tr>
                                        </thead>


                                        <tbody></tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
@section('script')
    <script>
        $(document).ready(function(){
            $("#fail").hide();
        });
    </script>
 
    <script>
        $(function () {
            var table = $('#paymentDataTable').DataTable({
                rowReorder: {
                    selector: 'td:nth-child(2)'
                },
                responsive: true,
                processing: true,
                serverSide: true,
                order: [[ 0, "desc" ]],
                ajax: {
                    url: "{{ route('details-payment/list-merchant') }}",
                    data: function (d) {
                        d.status = $('#status').val()
                        d.daterange = $('#daterange').val()
                        d.search = $('#search').val()
                        d.timezone = $('#timezone').val()

                        var exportURL = '/merchant/export-payment-details?daterange='+d.daterange+'&status='+d.status+'&timezone='+d.timezone;
                        $('#exportMerchantPaymentDetails').attr('href', exportURL)
                    },
                    error: function (jqXHR) {
                        if (jqXHR && jqXHR.status == 401) {location.reload()}
                    },
                },
                columns: [
                    {
                    data: null,
                    render: function (data, type, row, meta) {
                        // Auto-increment the counter for each row
                        return meta.row + 1;
                    },
                    orderable: false,
                    searchable: false,
                    },
                    {data: 'created_at'},
                    {data: 'fourth_party_transection'},
                    {data: 'transaction_id'},
                    {data: 'customer_name'},
                    {data: 'amount'},
                    {data: 'mdr_fee_amount'},
                    {data: 'net_amount'},
                    {data: 'Currency'},
                    {data: 'payment_status'},
                    {data: 'action'},
                ],
                columnDefs: [
                    { className: "dt-right", targets: [  4, 5 ] },
                    { responsivePriority: 1, targets: 0 },
                    { responsivePriority: 2, targets: 4 },
                    { responsivePriority: 3, targets: 6 },
                ],
                language: {
                    search: "{{ trans('messages.Search') }}",
                    info: "_START_ - _END_ {{ trans('messages.of') }} _TOTAL_",
                    infoEmpty: "0 - 0 {{ trans('messages.of') }} 0",
                    lengthMenu: "{{ trans('messages.records per page') }} _MENU_",
                    infoFiltered: "({{ trans('messages.filtered from') }} _MAX_ {{ trans('messages.results') }})",
                    zeroRecords: "{{ trans('messages.No matching records found') }}",
                    loadingRecords: "{{ trans('messages.Loading') }}",
                    paginate: {
                        previous: "<",
                        next: ">",
                    },
                    emptyTable: "{{ trans('messages.No data available in the table') }}",
                    processing: "{{ trans('messages.processing') }}",
                },
                dom: 'rt<"bottom"ipl><"clear">',
            });

            table.on('draw.dt', function() {
                $('#payment_count').html(table.ajax.json().payment_count);
                $('#order_amount_sum').html(table.ajax.json().order_amount_sum);
                $('#order_success_count').html(table.ajax.json().order_success_count);
                $('#order_success_sum').html(table.ajax.json().order_success_sum);
                $('#order_fail_count').html(table.ajax.json().order_fail_count);
                $('#order_fail_sum').html(table.ajax.json().order_fail_sum);
            })

            // filter by dropdown
            $('.filterTable').change(function()
            {
                var selected_status = $("#status option:selected").val();
                    if(selected_status == 'success' || selected_status == '')
                    {
                        $("#success").show();
                        $("#fail").hide();
                    }
                    else if(selected_status == 'fail')
                    {
                        $("#success").hide();
                        $("#fail").show();
                    }
                table.draw();
            });

            // search
            document.getElementById('search').addEventListener('input', (e) => {
                table.draw();
            })

            // reset filter
            $('#reset').on('click', function() {
                $('#status').val('')
                $('input[name="daterange"]').val(
                    new Date().toJSON().slice(0,10) +' - '+ new Date().toJSON().slice(0,10)
                )
                $('#search').val('')
                table.draw();
            })

            $('input[name="daterange"]').on('apply.daterangepicker', function(ev, picker) {
                //$(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format('MM/DD/YYYY'));
                $(this).val(picker.startDate.format('YYYY-MM-DD') + ' - ' + picker.endDate.format('YYYY-MM-DD'));
                table.draw();
            });

            $('input[name="daterange"]').on('cancel.daterangepicker', function(ev, picker) {
                $(this).val('');
                table.draw();
            });

            $('#manual_update').click(function(){
                table.ajax.reload();
            });

            $('#auto_update').click(function()
            {
                var Interval;
              if($("#auto_update").text() == "Resume")
              {
                $("#auto_update").text('Pause').removeClass('btn-success').addClass('btn-warning');
                var selected_interval = $("#minutes option:selected").val();
                var time = selected_interval * 60000;
                window.Interval = setInterval(function(){
                    ajax_reload()
                }, time);

              }
              else if($("#auto_update").text() == "恢复")
              {
                $("#auto_update").text('暂停').removeClass('btn-success').addClass('btn-warning');
                var selected_interval = $("#minutes option:selected").val();
                var time = selected_interval * 60000;
                window.Interval = setInterval(function(){
                    ajax_reload()
                }, time);

              }
              else if ($("#auto_update").text() == "Pause")
              {
                $("#auto_update").text('Resume').removeClass('btn-warning').addClass('btn-success');
                window.clearInterval(window.Interval);
              }
              else if ($("#auto_update").text() == "暂停")
              {
                $("#auto_update").text('恢复').removeClass('btn-warning').addClass('btn-success');
                window.clearInterval(window.Interval);
              }

              function ajax_reload()
              {
                table.ajax.reload();
              }
              return false;
            });
        });
    </script>
@endsection
@endsection                