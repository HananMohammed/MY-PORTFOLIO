<!-- Modal-->
<div class="modal fade" id="newsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">@lang('admin.new-section')</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('admin.blogs.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-xs-12">
                            <div class="form-group">
                                <label for="title_en">@lang('admin.title-en')<label class="text-danger">*</label></label>
                                <input type="text"  name="title[]"  value="{{old('title.0')}}" class="form-control " id="title_en"  placeholder="@lang('admin.enter-en-title')" >
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-xs-12">
                            <div class="form-group">
                                <label for="title_ar">@lang('admin.title-ar')<label class="text-danger">*</label></label>
                                <input type="text"  name="title[]"  value="{{old('title.0')}}" class="form-control " id="title_ar"  placeholder="@lang('admin.enter-ar-title')" >
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-xs-12">
                            <div class="form-group">
                                <label for="text_en">@lang('admin.text-en')<label class="text-danger">*</label></label>
                                <input type="text"  name="text[]"  value="{{old('text.0')}}" class="form-control " id="text_en"  placeholder="@lang('admin.enter-english-text')" >
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-xs-12">
                            <div class="form-group">
                                <label for="text_ar">@lang('admin.text-ar')<label class="text-danger">*</label></label>
                                <input type="text"  name="text[]"  value="{{old('text.0')}}" class="form-control " id="text_ar"  placeholder="@lang('admin.enter-arabic-text')" >
                            </div>
                        </div>
                        <div class="col-lg-12 col-xl-12" style="text-align: center;">
                            <div class="image-input image-input-outline" id="kt_contacts_edit_avatar1" style="background-image:url({{asset_public('admin/media/gym_images/il_570xN.1580358345_5585.jpg')}}) ;width:300px;height: 220px;">
                                <div class="image-input-wrapper"  style="background-image: url({{asset_public('admin/assets/media/photography.svg')}}); width:300px;height: 220px;"></div>
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
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">@lang('admin.close')</button>
                        <input type="submit" class="btn btn-primary font-weight-bold" value="@lang('admin.submit')">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
