@extends('admin.layouts.app')

@section('title', 'Contacts')

@section('header-css')
    <style>
        .svg-icon svg {
            height: 5.5rem;
            width: 5.5rem;
        }
    </style>
    @stop
@section('content')
<div class="d-flex flex-column-fluid">
    <!--begin::Container-->
    <div class="container">
        <!--begin::Profile Email Settings-->
        <div class="d-flex flex-row">
            <!--begin::Aside-->
            <div class="flex-row-auto offcanvas-mobile w-250px w-xxl-350px" id="kt_profile_aside">
                <!--begin::Profile Card-->
                <div class="card card-custom card-stretch">
                    <!--begin::Body-->
                    <div class="card-body pt-4">
                        <!--begin::Toolbar-->
                        <div class="d-flex justify-content-end">
                            <div class="dropdown dropdown-inline">
                                <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="ki ki-bold-more-hor"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                    <!--begin::Navigation-->
                                    <ul class="navi navi-hover py-5">
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-drop"></i>
																		</span>
                                                <span class="navi-text">New Group</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-list-3"></i>
																		</span>
                                                <span class="navi-text">Contacts</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-rocket-1"></i>
																		</span>
                                                <span class="navi-text">Groups</span>
                                                <span class="navi-link-badge">
																			<span class="label label-light-primary label-inline font-weight-bold">new</span>
																		</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-bell-2"></i>
																		</span>
                                                <span class="navi-text">Calls</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-gear"></i>
																		</span>
                                                <span class="navi-text">Settings</span>
                                            </a>
                                        </li>
                                        <li class="navi-separator my-3"></li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-magnifier-tool"></i>
																		</span>
                                                <span class="navi-text">Help</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
																		<span class="navi-icon">
																			<i class="flaticon2-bell-2"></i>
																		</span>
                                                <span class="navi-text">Privacy</span>
                                                <span class="navi-link-badge">
																			<span class="label label-light-danger label-rounded font-weight-bold">5</span>
																		</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <!--end::Navigation-->
                                </div>
                            </div>
                        </div>
                        <!--end::Toolbar-->
                        <!--begin::User-->
                        <div class="d-flex align-items-center">
                            <div class="symbol symbol-60 symbol-xxl-100 mr-5 align-self-start align-self-xxl-center">
                                <span class="svg-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="80px" height="80px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"></rect>
                                            <path d="M6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,12 C19,12.5522847 18.5522847,13 18,13 L6,13 C5.44771525,13 5,12.5522847 5,12 L5,3 C5,2.44771525 5.44771525,2 6,2 Z M7.5,5 C7.22385763,5 7,5.22385763 7,5.5 C7,5.77614237 7.22385763,6 7.5,6 L13.5,6 C13.7761424,6 14,5.77614237 14,5.5 C14,5.22385763 13.7761424,5 13.5,5 L7.5,5 Z M7.5,7 C7.22385763,7 7,7.22385763 7,7.5 C7,7.77614237 7.22385763,8 7.5,8 L10.5,8 C10.7761424,8 11,7.77614237 11,7.5 C11,7.22385763 10.7761424,7 10.5,7 L7.5,7 Z" fill="#000000" opacity="0.3"></path>
                                            <path d="M3.79274528,6.57253826 L12,12.5 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 Z" fill="#000000"></path>
                                        </g>
                                    </svg>
                                </span>
                                <i class="symbol-badge bg-success"></i>
                            </div>
                            <div>
                                <a href="javascript:void(0)" class="font-weight-bolder font-size-h5 text-dark-75 text-hover-primary">@lang('admin.inbox-details')</a>
                            </div>
                        </div>
                        <!--end::User-->
                        <!--begin::Nav-->
                        <div class="navi navi-bold navi-hover navi-active navi-link-rounded">
                            @foreach($contacts as $contact)
                            <div class="navi-item mb-2">
                                <a href="javascript:void(0)" class="navi-link py-4">
                                    <span class="navi-icon mr-2">
                                        <span class="svg-icon">
                                            <!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                                    <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                                    <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero"></path>
                                                </g>
                                            </svg>
                                            <!--end::Svg Icon-->
                                        </span>
                                    </span>
                                    <span class="navi-text font-size-lg">{{ $contact->username }}</span>
                                </a>
                            </div>
                            @endforeach
                        </div>
                        <!--end::Nav-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Profile Card-->
            </div>
            <!--end::Aside-->
            <!--begin::Content-->
            <div class="flex-row-fluid ml-lg-8">
                <!--begin::Card-->
                <div class="card card-custom">
                    <!--begin::Header-->
                    <div class="card-header py-3">
                        <div class="card-title align-items-start flex-column">
                            <h3 class="card-label font-weight-bolder text-dark">Email Content</h3>
                        </div>
                        <div class="card-toolbar">
                            <button type="reset" class="btn btn-success mr-2">@lang('admin.send')</button>
                            <button type="reset" class="btn btn-secondary">@lang('admin.cancel')</button>
                        </div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Form-->
                    <form class="form">
                        <div class="card-body">
                            <div class="row">
                                <label class="col-xl-3"></label>
                                <div class="col-lg-9 col-xl-6">
                                    <h5 class="font-weight-bold mb-6">Setup Email Notification:</h5>
                                </div>
                            </div>
                            <div class="form-group row align-items-center">
                                <label class="col-xl-3 col-lg-3 col-form-label font-weight-bold text-left text-lg-right">Email Notification</label>
                                <div class="col-lg-9 col-xl-6">
															<span class="switch switch-sm">
																<label>
																	<input type="checkbox" checked="checked" name="email_notification_1">
																	<span></span>
																</label>
															</span>
                                </div>
                            </div>
                            <div class="form-group row align-items-center">
                                <label class="col-xl-3 col-lg-3 col-form-label font-weight-bold text-left text-lg-right">Send Copy To Personal Email</label>
                                <div class="col-lg-9 col-xl-6">
															<span class="switch switch-sm">
																<label>
																	<input type="checkbox" name="email_notification_2">
																	<span></span>
																</label>
															</span>
                                </div>
                            </div>
                            <div class="separator separator-dashed my-10"></div>
                            <div class="row">
                                <label class="col-xl-3"></label>
                                <div class="col-lg-9 col-xl-6">
                                    <h5 class="font-weight-bold mb-6">Activity Related Emails:</h5>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label font-weight-bold text-left text-lg-right">When To Email</label>
                                <div class="col-lg-9 col-xl-6">
                                    <div class="checkbox-list">
                                        <label class="checkbox">
                                            <input type="checkbox">
                                            <span></span>You have new notifications</label>
                                        <label class="checkbox">
                                            <input type="checkbox">
                                            <span></span>You're sent a direct message</label>
                                        <label class="checkbox">
                                            <input type="checkbox" checked="checked">
                                            <span></span>Someone adds you as a connection</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label font-weight-bold text-left text-lg-right">When To Escalate Emails</label>
                                <div class="col-lg-9 col-xl-6">
                                    <div class="checkbox-list">
                                        <label class="checkbox checkbox-primary">
                                            <input type="checkbox">
                                            <span></span>Upon new order</label>
                                        <label class="checkbox checkbox-primary">
                                            <input type="checkbox">
                                            <span></span>New membership approval</label>
                                        <label class="checkbox checkbox-primary">
                                            <input type="checkbox" checked="checked">
                                            <span></span>Member registration</label>
                                    </div>
                                </div>
                            </div>
                            <div class="separator separator-dashed my-10"></div>
                            <div class="row">
                                <label class="col-xl-3"></label>
                                <div class="col-lg-9 col-xl-6">
                                    <h5 class="font-weight-bold mb-6">Updates From Keenthemes:</h5>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-xl-3 col-lg-3 col-form-label font-weight-bold text-left text-lg-right">Email You With</label>
                                <div class="col-lg-9 col-xl-6">
                                    <div class="checkbox-list">
                                        <label class="checkbox">
                                            <input type="checkbox">
                                            <span></span>News about Keenthemes products and feature updates</label>
                                        <label class="checkbox">
                                            <input type="checkbox">
                                            <span></span>Tips on getting more out of Keen</label>
                                        <label class="checkbox">
                                            <input type="checkbox" checked="checked">
                                            <span></span>Things you missed since you last logged into Keen</label>
                                        <label class="checkbox">
                                            <input type="checkbox" checked="checked">
                                            <span></span>News about Metronic on partner products and other services</label>
                                        <label class="checkbox">
                                            <input type="checkbox" checked="checked">
                                            <span></span>Tips on Metronic business products</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!--end::Form-->
                </div>
            </div>
            <!--end::Content-->
        </div>
        <!--end::Profile Email Settings-->
    </div>
    <!--end::Container-->
</div>
@endsection
