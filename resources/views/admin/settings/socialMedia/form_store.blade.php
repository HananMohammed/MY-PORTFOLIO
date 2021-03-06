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
            <form action="{{route('admin.social-media.store')}}" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    <div class="col-lg-12 col-sm-12">
                        <div class="form-group">
                            <label for="url">@lang('admin.social-media-link')<label class="text-danger">*</label></label>
                            <input id="url" name="url" type="url"  class="form-control"  value="{{old('url')}}" placeholder="Enter A Social Media Related Link">
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-12">
                        <label for="icon">@lang('admin.social-media-icon')<label class="text-danger">*</label></label>
                        <select class="form-control selectpicker" name="icon_id" id="icon">
                            <option value=""  disabled selected >@lang('admin.select-social-media-icon')</option>
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
