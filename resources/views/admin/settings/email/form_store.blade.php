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
            <form action="{{route('admin.emails.store')}}" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    @csrf
                    <div class="col-lg-12 col-sm-12">
                        <div class="form-group">
                            <label for="email">@lang('admin.email')<label class="text-danger">*</label></label>
                            <input id="email" name="email" type="email"  class="form-control"  value="{{old('email')}}" placeholder="Enter Email Address">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="receiveContacts" class="col-12 col-form-label">@lang('admin.receiveContacts')<label class="text-danger">*</label></label>
                        <div class="col-12" id="receiveContacts">
                            <span class="switch switch-outline switch-icon switch-dark">
                            <label>
                             <input type="checkbox" name="receive_contacts" id="receivedContactsStatus"/>
                             <span></span>
                            </label>
                           </span>
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
