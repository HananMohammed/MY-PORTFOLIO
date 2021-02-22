@extends('admin.layouts.app')

@section('title', 'Customer Orders')

@section('content')
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-1">
                <!--begin::Page Heading-->
                <div class="d-flex align-items-baseline flex-wrap mr-5">
                    <!--begin::Page Title-->
                    <h5 class="text-dark font-weight-bold my-1 mr-5">@lang('admin.newsLetter')</h5>
                    <!--end::Page Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                        <li class="breadcrumb-item">
                            <a href="{{route('admin.adminPanel')}}" class="text-muted">@lang('admin.adminPanel')</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{route('admin.customerOrders')}}" class="text-muted">@lang('admin.customer-orders')</a>
                        </li>
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page Heading-->
            </div>
            <!--end::Info-->
        </div>
    </div>
    <!--end::Subheader-->
    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid mt-5" id="kt_content">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Card-->
            <div class="card card-custom gutter-b" style="width: 100%;">
                <div class="card-header flex-wrap py-3">
                    <div class="card-title">
                        <h3 class="card-label">@lang('admin.customer-orders')</h3>
                    </div>
                </div>
                <div class="card-body">
                    <!--begin: Datatable-->
                    <div id="kt_datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table table-bordered table-checkable " id="kt_datatable">
                                    <thead>
                                    <tr role="row">
                                        <th>@lang('dashboard.id')</th>
                                        <th>@lang('admin.first-name')</th>
                                        <th>@lang('admin.last-name')</th>
                                        <th>@lang('admin.email')</th>
                                        <th>@lang('admin.phone')</th>
                                        <th>@lang('admin.address')</th>
                                        <th>@lang('admin.country')</th>
                                        <th>@lang('admin.state')</th>
                                        <th>zip</th>
                                        <th>Payment Method</th>
                                        <th>@lang('admin.price')</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    @if(count($orders)>0)
                                        <tbody>
                                        @foreach($orders as $order)
                                            <tr>
                                                <td>{{ $order->id }}</td>
                                                <td>{{ $order->firstName }}</td>
                                                <td>{{ $order->lastName }}</td>
                                                <td>{{ $order->email }}</td>
                                                <td>{{ $order->phone }}</td>
                                                <td>
                                                    <ol>
                                                        @foreach(json_decode( $order->address) as $address)
                                                            <li>{{$address}}</li>
                                                        @endforeach
                                                    </ol>
                                                </td>
                                                <td>{{ $order->country }}</td>
                                                <td>{{ $order->state }}</td>
                                                <td>{{ $order->zip }}</td>
                                                <td>@if($order->country == 1) Cache on Delivery @elseif($order->country == 2) WeAccept @elseif($order->country == 3) Paypal @endif</td>
                                                <td>{{ $order->amount }}</td>
                                                <td nowrap="nowrap">{{ $order->id }}</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    @endif
                                </table>
                            </div>
                        </div>
                    </div>
                    <!--end: Datatable-->
                </div>
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
@endsection
@section('scripts')
    <script src="{{ asset_public('admin/assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <script type="text/javascript">
        $( document ).ready(function() {

// begin first table
            var table = $('#kt_datatable');
            console.log(table);
            table.DataTable({
                responsive: true,
                retrieve: true,
                paging: true,
                // DOM Layout settings
                dom: `<'row'<'col-sm-12'tr>>
<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7 dataTables_pager'lp>>`,

                lengthMenu: [5, 10, 25, 50],

                pageLength: 10,

                language: {
                    'lengthMenu': 'Display _MENU_',
                },

                // Order settings
                order: [[1, 'desc']],

                headerCallback: function(thead, data, start, end, display) {
                    thead.getElementsByTagName('th')[0].innerHTML = `
    <label class="checkbox checkbox-single">
        <input type="checkbox" value="" class="group-checkable"/>
        <span></span>
    </label>`;
                },
                columnDefs: [
                    {
                        targets: 0,
                        title: 'ID',
                        width: '30px',
                        className: 'dt-left',
                        orderable: false,
                        render: function(data, type, full, meta) {
                            return `
        <label class="checkbox checkbox-single">
            <input type="checkbox" value="" class="checkable"/>
            <span></span>
        </label>`;
                        },
                    },
                    {
                        targets: -1,
                        orderable: false,
                        width: '125px',
                        render: function(data, type, full, meta) {
                            // href="`+currentLocation+`/${data}/edit"
                            return `
            <a href="${currentLocation}/customer-orders/${data}"class="btn btn-sm btn-clean btn-icon" title="Delete" onclick="event.preventDefault();
                        document.getElementById('delete-operator-form-${data}').submit();">
                <span class="svg-icon svg-icon-md">
                    <svg class="delete" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24"></rect>
                            <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"></path>
                            <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"></path>
                        </g>
                    </svg>
                </span>
                <form id="delete-operator-form-${data}" action="${currentLocation}/${data}" method="POST" style="display: none;">
                    @csrf
                            @method('DELETE')
                            </form>
                        </a>`;
                        },
                    },
                ],

            });

        });
    </script>
    @if(session()->has('success'))
        <script>Swal.fire("Good Job", "{{session()->get('success')}}", "success");</script>
    @endif
@endsection

