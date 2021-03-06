@extends('admin.layouts.app')

@section('title', 'Contacts Reply')

@section('header-css')
    <style>
        .svg-icon svg {
            height: 5.5rem;
            width: 5.5rem;
        }

        /*
         *  STYLE 10
         */

        #style-10::-webkit-scrollbar-track
        {
            -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
            background-color: #F5F5F5;
            border-radius: 10px;
        }

        #style-10::-webkit-scrollbar
        {
            width: 10px;
            background-color: #F5F5F5;
        }

        #style-10::-webkit-scrollbar-thumb
        {
            background-color: #AAA;
            border-radius: 10px;
            background-image: -webkit-linear-gradient(90deg,
            rgba(0, 0, 0, .2) 25%,
            transparent 25%,
            transparent 50%,
            rgba(0, 0, 0, .2) 50%,
            rgba(0, 0, 0, .2) 75%,
            transparent 75%,
            transparent)
        }
        input[type=text],input[type=email]{
            outline: none;
            border-top: none;
            border-left: none;
            border-right: none;
            border-radius: 0;
        }
        .error{
            color: #b51717;
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
                                            <a href="javascript:void(0)" id="deleteEmail" class="navi-link">
                                                <span class="navi-icon">
                                                    <i class="flaticon-delete"></i>
                                                </span>
                                                <span class="navi-text">Delete</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
                                                <span class="navi-icon">
                                                    <i class="flaticon2-reply"></i>
                                                </span>
                                                <span class="navi-text">Forward</span>
                                            </a>
                                        </li>
                                        <li class="navi-item">
                                            <a href="#" class="navi-link">
                                                <span class="navi-icon">
                                                    <i class="flaticon2-pen"></i>
                                                </span>
                                                <span class="navi-text">Replay all</span>
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
                        <div class="navi navi-bold navi-hover navi-active navi-link-rounded" id="style-10" style=" overflow: auto; height: 400px;overflow-x: hidden;">
                            @foreach($contacts as $contact)
                            <div class="navi-item mb-2"  >
                                <a href="javascript:void(0)" class="navi-link py-4 emailDetails" data-id="{{ $contact->id }}" data-email="{{ $contact->email }}" data-subject="{{ $contact->subject }}" tabindex="{{$loop->index}}" >
                                    <label class="checkbox mr-2">
                                        <input type="checkbox" class="checkedContact" name="checkedContact"  value="{{ $contact->id }}">
                                        <span></span></label>
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
            <div class="flex-row-fluid ml-lg-8" >
                <!--begin::Card-->
                <div class="card card-custom wave wave-animate wave-danger mb-8 mb-lg-0">
                    <div class="card-body">
                        <div class="d-flex align-items-center p-5">
                            <div class="mr-6">
                            <span class="svg-icon svg-icon-danger svg-icon-4x">
                             <svg>
                              ...
                             </svg>
                            </span>
                            </div>
                            <div class="d-flex flex-column">
                                <a href="#" class="text-dark text-hover-primary font-weight-bold font-size-h4 mb-3">
                                    Tutorials
                                </a>
                                <div class="text-dark-75">
                                    ...
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card card-custom">
                    <!--begin::Header-->
                    <div class="alert alert-custom alert-light-primary mb-5" role="alert" style="display: none">
                        <div class="alert-icon"><i class="flaticon-warning"></i></div>
                        <div class="alert-text"></div>
                        <div class="alert-close">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true"><i class="ki ki-close"></i></span>
                            </button>
                        </div>
                    </div>
                    <div class="alert alert-custom alert-light-danger mb-5" role="alert" style="display: none">
                        <div class="alert-icon"><i class="flaticon-warning"></i></div>
                        <div class="alert-text"></div>
                        <div class="alert-close">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true"><i class="ki ki-close"></i></span>
                            </button>
                        </div>
                    </div>
                    <div class="card-header py-3">
                        <div class="card-title align-items-start flex-column">
                            <h3 class="card-label font-weight-bolder text-dark">@lang('admin.new-email')</h3>
                        </div>
                        <div class="card-toolbar">
                            <button type="send-email" id="sendEmail" class="btn btn-success mr-2">@lang('admin.send')</button>
                            <button type="reset" id="resetForm"  class="btn btn-secondary">@lang('admin.cancel')</button>
                        </div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Form-->
                    <form class="form" id="ajaxform">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h5 class="font-weight-bold mb-6">@lang('admin.setup')</h5>
                                </div>
                            </div>
                            <div class="form-group row align-items-center">
                                <div class="col-lg-12 ">
                                    <input class="form-control form-control-lg" type="email" placeholder="Email Address" name="email" id="email">
                                    <span class="error" id="emailError" for="email"></span>
                                </div>
                            </div>
                            <div class="form-group row align-items-center">
                                <div class="col-lg-12">
                                    <input class="form-control form-control-lg" type="text" placeholder="Subject" name="subject" id="subject">
                                    <div class="error" id="subjectError" for="subject"></div>

                                </div>
                            </div>
                            <div class="separator separator-dashed my-10"></div>
                            <div class="row">
                                 <div class="col-lg-12">
                                    <h5 class="font-weight-bold mb-6">@lang('admin.message')</h5>
                                </div>
                                <div class="col-lg-12">
                                      <textarea type="text" id="message" name="message" class="form-control summernote" id="text_en" placeholder="@lang('dashboard.enter-english-text')" >
                                        {{old('message')}}
                                    </textarea>
                                    <div class="error" id="messageError" for="message"></div>

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
@section('scripts')


<script src="{{ asset_public('admin/assets/js/pages/crud/forms/editors/summernote.js') }}"></script>

<script type="text/javascript">
    // // $(function () {
    // //     $('[data-toggle="popover"]').popover()
    // // })
    // $(document).on("hover",".emailDetails", function () {
    //     // event.preventDefault();
    //     // let id = $(this).data('id');
    //     // let email = $(this).data('email');
    //     // let subject = $(this).data('subject');
    //     // let message = $(this).data('message');
    //     // $(".email").html(email)
    //     // $(".message").html(message)
    //     // $(".subject").html(subject)
    //
    // });

    //Send New Email
    $(document).on("click","#sendEmail", function () {
        event.preventDefault();
        let url =  window.location.href +  "/ajax-send-contact";
        let subject = $("input[name=subject]").val();
        let email = $("input[name=email]").val();
        let message = $("textarea[name=message]").val();
        let _token   = $('meta[name="csrf-token"]').attr('content');
        let nameMatch = email.match(/^([^@]*)@/);
        let username = nameMatch ? nameMatch[1] : null;
        console.log(url)
        $.ajax({
            url:url,
            type:"POST",
            data:{
                username: username,
                subject:subject,
                email:email,
                message:message,
                _token: _token
            },
            success:function(response){
                if(response) {
                    $(".alert-light-primary").fadeIn(1000).fadeOut(5000);
                    $('.alert-text').text(response.msg);
                    $("#ajaxform")[0].reset();
                    $(".note-editable").html("")
                }
            },
            error:function (error) {
                let errors = error.responseJSON.errors;

                $(".alert-light-danger").fadeIn(1000).fadeOut(5000);
                $('.alert-text').text(error.responseJSON.message);
                $(".note-editable").html("")
                $.each(errors, function(key,valueObj){
                    switch (key) {
                        case "email":
                            $("#emailError").html(valueObj)
                            break;
                        case "subject":
                            $("#subjectError").html(valueObj)
                            break;
                        case "message":
                            $("#messageError").html(valueObj)
                            break;
                    }
                });
             },
        });
    });
    //Delete Email
    $(document).on("click","#deleteEmail", function () {
        event.preventDefault();
        let selectedContacts = [];
        $("input:checkbox[name='checkedContact']:checked").each(function(){
            selectedContacts.push($(this).val());
        });

      //  $('.checkedContact').is(":checked") ? alert($('.checkedContact').val()) : 'Nooooo'
       // alert($('.checkedContact').is(":checked"))
        // let url =  window.location.href +  "/contacts/";
        // let subject = $("input[name=subject]").val();
        // let email = $("input[name=email]").val();
        // let message = $("textarea[name=message]").val();
        // let _token   = $('meta[name="csrf-token"]').attr('content');
        // let nameMatch = email.match(/^([^@]*)@/);
        // let username = nameMatch ? nameMatch[1] : null;
        // console.log(url)
        // $.ajax({
        //     url:url,
        //     type:"POST",
        //     data:{
        //         username: username,
        //         subject:subject,
        //         email:email,
        //         message:message,
        //         _token: _token
        //     },
        //     success:function(response){
        //         if(response) {
        //             $(".alert-light-primary").fadeIn(1000).fadeOut(5000);
        //             $('.alert-text').text(response.msg);
        //             $("#ajaxform")[0].reset();
        //             $(".note-editable").html("")
        //         }
        //     },
        //     error:function (error) {
        //         let errors = error.responseJSON.errors;
        //
        //         $(".alert-light-danger").fadeIn(1000).fadeOut(5000);
        //         $('.alert-text').text(error.responseJSON.message);
        //         $(".note-editable").html("")
        //         $.each(errors, function(key,valueObj){
        //             switch (key) {
        //                 case "email":
        //                     $("#emailError").html(valueObj)
        //                     break;
        //                 case "subject":
        //                     $("#subjectError").html(valueObj)
        //                     break;
        //                 case "message":
        //                     $("#messageError").html(valueObj)
        //                     break;
        //             }
        //         });
        //      },
        // });
    });
</script>
@stop
