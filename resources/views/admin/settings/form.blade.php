@section('header-css')
    <link rel="stylesheet" href="{{ asset_public('admin/assets/css/intlTelInput.css')}}">
    <link rel="stylesheet" href="{{ asset_public('admin/assets/css/intlTelIDemo.css')}}">
@stop

<div class="row align-items-center">
    <div class="row">
        <div class="col-lg-6 col-sm-12">
            <div class="form-group">
                <label for="title_en">@lang('admin.website-title-en')<label class="text-danger">*</label></label>
                <input type="text"  name="title[]"  value="{{old('title.0')??$setting->getTranslation('title','en')}}" class="form-control " id="title_en"  placeholder="@lang('admin.enter-en-title')" >
            </div>
        </div>
        <div class="col-lg-6 col-sm-12">
            <div class="form-group">
                <label for="title_ar">@lang('admin.website-title-ar')<label class="text-danger">*</label></label>
                <input type="text"  name="title[]"  value="{{old('title.1')??$setting->getTranslation('title','ar')}}" class="form-control " id="title_ar"  placeholder="@lang('admin.enter-ar-title')" >
            </div>
        </div>
        <div class="col-lg-3 col-sm-12">
            <label for="phone">@lang('admin.whatsapp-contact')<label class="text-danger">*</label></label>
            <div class="form-group">
                <input id="phone" name="whatsapp" type="tel"  class="form-control "  value="{{old('whatsapp')??$setting->whatsapp}}" >
            </div>
        </div>
        <div class="col-lg-9 col-sm-12">
            <div class="form-group">
                <label for="map">@lang('admin.website-map')<label class="text-danger">*</label></label>
                <input type="text"  name="map"  value="{{old('map')??$setting->map}}" class="form-control " id="map"  placeholder="@lang('admin.enter-map')" >
            </div>
        </div>
        <div class="form-group">
            <label for="logo" style="margin: 12px;">@lang('admin.website-logo')<label class="text-danger">*</label></label>
            <div class="col-lg-12 col-sm-12" style="text-align: center;" id="logo">
                <div class="image-input image-input-outline" id="kt_contacts_edit_avatar1" style="background-image:url({{asset_public('admin/media/gym_images/il_570xN.1580358345_5585.jpg')}}) ;width:300px;height: 220px;">
                    <div class="image-input-wrapper"  style="background-image:@if(!empty($setting->toArray())) url({{asset_public('storage/uploads/'.$setting->image)}}) @else url({{asset_public('admin/assets/media/photography.svg')}}) @endif; width:300px;height: 220px;"></div>
                    <label class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow" data-action="change" data-toggle="tooltip" title="" data-original-title="Change avatar">
                        <i class="fa fa-pen icon-sm text-muted" @if(app()->getLocale()=='en')style="padding-left: 27px;" @else style="padding-right: 27px;"@endif></i>
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

    </div>
</div>
@section('scripts')
    /*editor*/
    <script src="{{ asset_public('admin/plugins/custom/ckeditor/ckeditor-classic.bundle.js') }}"></script>
    <script src="{{ asset_public('admin/plugins/js/pages/crud/forms/editors/ckeditor-classic.js') }}"></script>

    <script src="{{ asset_public('admin/assets/js/intlTelInput.js')}}"></script>
    <script>
        var input = document.querySelector("#phone");
        window.intlTelInput(input, {
            // allowDropdown: false,
            // autoHideDialCode: false,
            // autoPlaceholder: "off",
            // dropdownContainer: document.body,
            // excludeCountries: ["us"],
            // formatOnDisplay: false,
            // geoIpLookup: function(callback) {
            //   $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
            //     var countryCode = (resp && resp.country) ? resp.country : "";
            //     callback(countryCode);
            //   });
            // },
            // hiddenInput: "full_number",
            // initialCountry: "auto",
            // localizedCountries: { 'de': 'Deutschland' },
            // nationalMode: false,
            // onlyCountries: ['us', 'gb', 'ch', 'ca', 'do'],
            // placeholderNumberType: "MOBILE",
            // preferredCountries: ['cn', 'jp'],
            // separateDialCode: true,
            utilsScript: "build/js/utils.js",
        });
    </script>
    <script>
        "use strict";
        // Class definition
        var KTContactsEdit = function () {
            // Base elements
            var avatar;
            var initAvatar1 = function() {
                avatar = new KTImageInput('kt_contacts_edit_avatar1');
            }
            var initAvatar2 = function() {
                avatar = new KTImageInput('kt_contacts_edit_avatar2');
            }
            return {
                // public functions
                init: function() {
                    initAvatar1();
                    initAvatar2();
                }
            };
        }();
        jQuery(document).ready(function() {
            KTContactsEdit.init();
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
    @if(session()->has('success'))
        <script>Swal.fire("Good Job", "{{session()->get('success')}}", "success");</script>
    @endif
@endsection
