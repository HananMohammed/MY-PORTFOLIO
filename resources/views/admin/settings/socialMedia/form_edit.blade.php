<!-- Modal-->
<div class="modal fade" id="newsModalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">@lang('admin.new-section')</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <form id="editForm" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    @method('put')
                    <input type="hidden" name="id" id="socialId">
                    <div class="col-lg-12 col-sm-12">
                        <div class="form-group">
                            <label for="urlEdit">@lang('admin.social-media-link')<label class="text-danger">*</label></label>
                            <input id="urlEdit" name="url" type="url"  class="form-control"  value="{{old('url')}}" placeholder="Enter A Social Media Related Link">
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-12" >
                        <label for="iconEdit">@lang('admin.related-social-media-icon')<label class="text-danger">*</label></label>
                        <div id="selectedIcon"></div>
                    </div>
                    <div class="col-lg-12 col-sm-12">
                        <label for="iconEdit">@lang('admin.social-media-icon')<label class="text-danger">*</label></label>
                        <select class="form-control selectpicker" name="icon_id" id="iconEdit">
                            <option  id="updateIcon" selected >@lang('admin.update-social-media-icon')</option>
                            @foreach($icons as $icon)
                                <option value="{{ $icon->id }}">{{ $icon->title }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">@lang('admin.close')</button>
                    <input type="submit" class="btn btn-primary font-weight-bold" value="@lang('admin.submit')" style="width: 15%;">
                </div>
            </form>
        </div>
    </div>
</div>
