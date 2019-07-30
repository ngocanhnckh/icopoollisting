@extends('dashboard.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="kt-portlet">
                <a href="{{route('add-ads')}}" class="form-text text-muted"><i class="flaticon2-back"></i> Back</a>
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <span class="kt-portlet__head-icon kt-hidden">
                            <i class="la la-gear"></i>
                        </span>
                        <h3 class="kt-portlet__head-title">
                            Add ADS
                        </h3>
                    </div>
                </div>
                <!--begin::Form-->
                <form class="kt-form" method="post" action="{{route('addads')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="kt-portlet__body">
                        <div class="kt-form__section kt-form__section--first">
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label">ADS NAME:</label>
                                <div class="col-lg-4">
                                    <input required="" type="text" class="form-control" placeholder="Enter ADS name" name="name" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label">Người thuê:</label>
                                <div class="col-lg-4">
                                    <input required="" name="ngthue" type="text" class="form-control" placeholder="" >
                                    <span class="form-text text-muted"></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label">Image:</label>
                                <div class="col-lg-4">
                                    <input required="" name="img" type="file" accept="image/*"class="form-control" >
                                    <span class="form-text text-muted"></span>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label">Description:</label>
                                <div class="col-lg-12">
                                    <textarea style="height: 150%;" class="form-control" id="summary-ckeditor" name="description"></textarea>
                                    <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
                                    <script>
                                        CKEDITOR.replace( 'summary-ckeditor', {
                                    filebrowserUploadUrl: "{{route('uploadimg', ['_token' => csrf_token() ])}}",
                                    filebrowserUploadMethod: 'form'
                                    });

                                    </script>
                                    <span class="form-text text-muted"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="kt-portlet__foot">
                        <div class="kt-form__actions">
                            <div class="row">
                                <div class="col-lg-2"></div>
                                <div class="col-lg-2">
                                    <button type="submit" class="btn btn-success" style="display: inline">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <!--end::Form-->
            </div>
        </div>
    </div>
</div>
@endsection
