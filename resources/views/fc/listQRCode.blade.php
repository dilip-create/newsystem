@extends('layouts.base')
@section('content')
    {!! Toastr::message() !!}
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">{{ __('messages.Home') }}</a></li>
                        <li class="breadcrumb-item active">{{ __('messages.Summary Report') }}</li>
                    </ol>
                </div>
                <h4 class="page-title">{{ __('messages.Summary Report') }}</h4>
            </div>
        </div>
    </div>     
    <!-- end page title --> 

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body row">
                    <div class="col-md-2">
                        <label class="form-label header-title">{{ __('messages.Search') }}</label>
                        <input id="search" type="search" class="form-control">
                    </div>

                    <div class="col-md-2">
                        <label class="form-label header-title">{{ __('messages.Created Time') }}</label>
                        <input type="text" name="daterange" id="daterange" class="form-control daterange" value="" />
                    </div>

                    <div class="col-md-2">
                        <label class="form-label mb-4"></label>
                        <div class="">
                            <button type='button' id="reset" class="btn btn-danger waves-effect waves-light">{{ __('messages.Reset') }}</button>
                        </div>
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-2">
                        <label class="form-label mb-4"></label>
                         <div class="">
                            <a href="{{ route('merchant-export-invoice') }}" class="btn btn-success waves-effect waves-light">{{ trans('messages.Export Report') }}</a>
                        </div>
                    </div>
                   
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table id="requestDataTable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>{{ __('messages.Order Id') }}</th>
                                    <th>{{ __('messages.Invoice Number') }}</th>  
                                    <th>{{ __('messages.Customer Name') }}</th>
                                    <th>{{ __('messages.Amount') }}</th>
                                    <th>{{ __('messages.Status') }}</th>
                                    <th>{{ __('messages.Created Time') }}</th>
                                    <th>{{ __('messages.Action') }}</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
       
    @section('script')
        <script>
            $(function () {
                var table = $('#requestDataTable').DataTable({
                    rowReorder: {
                        selector: 'td:nth-child(2)'
                    },
                    responsive: true,
                    processing: true,
                    serverSide: true,
                    order: [[ 0, "desc" ]],
                    ajax: {
                        url: "{{ route('merchant-qrcode-list') }}",
                        data: function (d) {
                            d.daterange = $('#daterange').val()
                            d.search = $('#search').val()
                            d.status = $('#status').val()
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
                        {data: 'invoice_number'},
                        {data: 'customer_name'},
                        {data: 'amount'},
                        {data: 'status'},
                        {data: 'created_at'},
                        {data: 'action', searchable: false, sortable: false},
                    ],
                    columnDefs: [
                        { className: "dt-right", targets: [ 4, 5 ] },
                        { responsivePriority: 1, targets: 0 },
                        { responsivePriority: 2, targets: 4 },
                        { responsivePriority: 3, targets: 5 },
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

                // table.on('draw.dt', function() {
                //     $('#payment_count').html(table.ajax.json().payment_count);
                //     $('#order_amount_sum').html(table.ajax.json().order_amount_sum);
                //     $('#order_success_sum').html(table.ajax.json().order_success_sum);
                   
                // })

                // filter by dropdown
                $('.filterTable').change(function(){
                    table.draw();
                });

                // search
                document.getElementById('search').addEventListener('input', (e) => {
                    table.draw();
                })

                $('input[name="daterange"]').on('apply.daterangepicker', function(ev, picker) {
                    $(this).val(picker.startDate.format('YYYY-MM-DD') + ' - ' + picker.endDate.format('YYYY-MM-DD'));
                    table.draw();
                });

                $('input[name="daterange"]').on('cancel.daterangepicker', function(ev, picker) {
                    $(this).val('');
                    table.draw();
                });

                $('#reset').on('click', function() {
                    $('#status').val('')
                    $('#daterange').val('')
                    $('#search').val('')
                    table.draw();
                })
            });
        </script>
    @endsection
@endsection
