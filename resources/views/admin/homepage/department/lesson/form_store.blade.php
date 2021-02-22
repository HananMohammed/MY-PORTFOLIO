<!-- Modal-->
<div class="modal fade" id="lessonModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">@lang('admin.create-lesson')</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('admin.lessons.store')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-xs-12">
                            <div class="form-group">
                                <label for="lesson_en">@lang('admin.lesson_en')<label class="text-danger">*</label></label>
                                <input type="text"  name="lesson[]"  value="{{old('lesson.0')}}" class="form-control " id="lesson_en"  placeholder="@lang('admin.enter-en-lesson')" >
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-xs-12">
                            <div class="form-group">
                                <label for="lesson_ar">@lang('admin.lesson_ar')<label class="text-danger">*</label></label>
                                <input type="text"  name="lesson[]"  value="{{old('lesson.0')}}" class="form-control " id="lesson_ar"  placeholder="@lang('admin.enter-ar-lesson')" >
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-xs-12">
                            <div class="form-group">
                                <label for="doctor_name_en">@lang('admin.doctor_name_en')<label class="text-danger">*</label></label>
                                <input type="text"  name="doctor_name[]"  value="{{old('doctor_name.0')}}" class="form-control " id="doctor_name_en"  placeholder="@lang('admin.enter-en-doctor_name')" >
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-xs-12">
                            <div class="form-group">
                                <label for="doctor_name_ar">@lang('admin.doctor_name_ar')<label class="text-danger">*</label></label>
                                <input type="text"  name="doctor_name[]"  value="{{old('doctor_name.0')}}" class="form-control " id="doctor_name_ar"  placeholder="@lang('admin.enter-ar-doctor_name')" >
                            </div>
                        </div>
                    </div>
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
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">@lang('admin.close')</button>
                        <input type="submit" class="btn btn-primary font-weight-bold" value="@lang('admin.submit')">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
