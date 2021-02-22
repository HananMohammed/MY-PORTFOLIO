<div class="row align-items-center">
    <div class="row">
        <div class="col-lg-6 col-sm-12">
            <div class="form-group">
                <label for="title_en">@lang('admin.title-en')<label class="text-danger">*</label></label>
                <input type="text"  name="title[]"  value="{{old('title.0')??$course->getTranslation('title','en')}}" class="form-control " id="title_en"  placeholder="@lang('admin.enter-en-title')" >
            </div>
        </div>
        <div class="col-lg-6 col-sm-12">
            <div class="form-group">
                <label for="title_ar">@lang('admin.title-ar')<label class="text-danger">*</label></label>
                <input type="text"  name="title[]"  value="{{old('title.1')??$course->getTranslation('title','ar')}}" class="form-control " id="title_ar"  placeholder="@lang('admin.enter-ar-title')" >
            </div>
        </div>
        <div class="col-lg-6 col-sm-12">
            <div class="form-group">
                <label for="text_en">@lang('admin.text-en')<label class="text-danger">*</label></label>
                <textarea type="text" name="text[]" class="form-control summernote" id="text_en" placeholder="@lang('dashboard.enter-english-text')" >
                    {{old('text.0')??$course->getTranslation('text','en')}}
                </textarea>
            </div>
        </div>
        <div class="col-lg-6 col-sm-12">
            <div class="form-group">
                <label for="text_ar">@lang('admin.text-ar')<label class="text-danger">*</label></label>
                <textarea type="text" name="text[]" class="form-control summernote" id="text_ar" placeholder="@lang('dashboard.enter-arabic-text')" >
                    {{old('text.1')??$course->getTranslation('text','ar')}}
                </textarea>
            </div>
        </div>
        <div class="col-lg-12 col-sm-12" id="teachingStaff">
            <div class="row">
                <div class="col-lg-5 col-sm-12" >
                    <div class="form-group">
                        <label for="teacher_en">@lang('admin.teacher-name-en')<label class="text-danger">*</label></label>
                        <input type="text" name="teaching_staff_en[]" class="form-control teaching_staff_en" id="teacher_en" placeholder="@lang('admin.enter-english-teacher-name')" >
                    </div>
                </div>
                <div class="col-lg-5 col-sm-12">
                    <div class="form-group">
                        <label for="teacher_ar">@lang('admin.teacher-name-ar')<label class="text-danger">*</label></label>
                        <input type="text" name="teaching_staff_ar[]" class="form-control teaching_staff_ar" id="teacher_ar" placeholder="@lang('admin.enter-arabic-teacher-name')" >
                     </div>
                </div>
                <div class="col-lg-2 col-sm-2">
                    <a href="javascript:void(0)" class="btn btn-success mt-3" style="margin-top: 30px!important;" id="clonBtn">@lang('admin.add-new')</a>
                </div>
            </div>
        </div>
        <div class="col-lg-10 col-sm-12">
            <div class="form-group ">
            <label class="col-form-label col-lg-12 col-sm-12">@lang('admin.lesson-time')</label>
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="input-group timepicker">
                    <input class="form-control" id="kt_timepicker_2" name="time" readonly placeholder="Select time" type="text"/>
                    <div class="input-group-append">
                            <span class="input-group-text">
                                <i class="la la-clock-o"></i>
                            </span>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="col-lg-12 col-xl-12">
            <div class="image-input image-input-outline" id="kt_contacts_edit_avatar1" style="background-image:url({{asset_public('admin/media/gym_images/il_570xN.1580358345_5585.jpg')}}) ;width:300px;height: 220px;">
                <div class="image-input-wrapper"  style="background-image:@if(!empty($course->toArray())) url({{asset_public('storage/uploads/'.$course->image)}}) @else url({{asset_public('admin/assets/media/photography.svg')}}) @endif; width:300px;height: 220px;"></div>
                <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                    <i class="fa fa-pen icon-sm text-muted"></i>
                    <input type="file" name="image">
                </label>
                <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="cancel" data-toggle="tooltip" title="" data-original-title="Cancel avatar">
                    <i class="ki ki-bold-close icon-xs text-muted"></i>
                </span>
                <span class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="remove" data-toggle="tooltip" title="" data-original-title="Remove avatar">
                    <i class="ki ki-bold-close icon-xs text-muted"></i>
                </span>
            </div>
        </div>

    </div>
</div
    @section('scripts')
    /*editor*/
<script src="{{ asset_public('admin/assets/plugins/custom/ckeditor/ckeditor-classic.bundle.js') }}"></script>
<script src="{{ asset_public('admin/assets/plugins/js/pages/crud/forms/editors/ckeditor-classic.js') }}"></script>
<script src="{{asset_public('admin/assets/js/pages/crud/forms/widgets/bootstrap-timepicker.js')}}"></script>
<script>
    "use strict";

    // Class definition
    var KTContactsEdit = function () {
        // Base elements
        var avatar;

        var initAvatar1 = function() {
            avatar = new KTImageInput('kt_contacts_edit_avatar1');
        }
        return {
            // public functions
            init: function() {
                initAvatar1();
            }
        };
    }();


    jQuery(document).ready(function() {
        KTContactsEdit.init();
    });
</script>
<script>
    var KTBootstrapTimepicker = function () {

        // Private functions
        var demos = function () {
            // minimum setup
            $('#kt_timepicker_2, #kt_timepicker_2_modal').timepicker({
                minuteStep: 1,
                defaultTime: '',
                showSeconds: true,
                showMeridian: false,
                snapToStep: true
            });
            $('#edit_kt_timepicker_2, #kt_timepicker_2_modal').timepicker({
                minuteStep: 1,
                defaultTime: '',
                showSeconds: true,
                showMeridian: false,
                snapToStep: true
            });
        }

        return {
            // public functions
            init: function() {
                demos();
            }
        };
    }();

    jQuery(document).ready(function() {
        KTBootstrapTimepicker.init();
    });
</script>
<script>
    // Class definition

    var KTSummernoteDemo = function () {
        // Private functions
        var demos = function () {
            $('.summernote').summernote({
                height: 150
            });
        }

        return {
            // public functions
            init: function() {
                demos();
            }
        };
    }();

    // Initialization
    jQuery(document).ready(function() {
        KTSummernoteDemo.init();
    });
</script>
<script>
    $("#clonBtn").on("click", function (event){
        event.preventDefault();
        $("#teachingStaff").clone().insertAfter("#teachingStaff");
        $(".teaching_staff_en").last().val("");
        $(".teaching_staff_ar").last().val("");
        $(".btn-success").not(":first").remove();
    })
</script>

@if(session()->has('success'))
    <script>Swal.fire("Good Job", "{{session()->get('success')}}", "success");</script>
@endif
@endsection
