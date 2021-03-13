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
                    <input type="hidden" name="id" id="categoryId">
                    <div class="col-lg-12 col-sm-12">
                        <div class="form-group">
                            <label for="categoryEdit_en">@lang('admin.category_en')<label class="text-danger">*</label></label>
                            <input id="categoryEdit_en" name="title[]" type="text"  class="form-control"  value="{{old('title.0')}}" placeholder="Enter A English correct Project category.En">
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-12">
                        <div class="form-group">
                            <label for="categoryEdit_ar">@lang('admin.category_ar')<label class="text-danger">*</label></label>
                            <input id="categoryEdit_ar" name="title[]" type="text"  class="form-control"  value="{{old('title.1')}}" placeholder="Enter An Arabic correct Project category.AR">
                        </div>
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
