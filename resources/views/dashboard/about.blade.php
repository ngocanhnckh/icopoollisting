@extends('dashboard.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="kt-portlet">
                <a href="{{route('dashboard')}}" class="form-text text-muted"><i class="flaticon2-back"></i> Back</a>
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <span class="kt-portlet__head-icon kt-hidden">
                            <i class="la la-gear"></i>
                        </span>
                        <h3 class="kt-portlet__head-title">
                            Page
                        </h3>
                    </div>
                </div>
                <!--begin::Form-->
                <form class="kt-form" method="post" action="{{route('admin-about')}}">
                    @csrf
                    <div class="kt-portlet__body">
                        <div class="kt-form__section kt-form__section--first">

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label">About:</label>
                                <div class="col-lg-12">
                                    <textarea style="height: 150%;" class="form-control" id="summary-ckeditor" name="about">{{$page[0]->about}}</textarea>
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
                             <div class="form-group row">
                                <label class="col-lg-2 col-form-label">Faq:</label>
                                <div class="col-lg-12">
                                    <textarea style="height: 150%;" class="form-control" id="summary-ckeditor1" name="faq">{{$page[0]->faq}}</textarea>

                                    <script>
                                        CKEDITOR.replace( 'summary-ckeditor1', {
                                    filebrowserUploadUrl: "{{route('uploadimg', ['_token' => csrf_token() ])}}",
                                    filebrowserUploadMethod: 'form'
                                    });

                                    </script>
                                    <span class="form-text text-muted"></span>
                                </div>
                            </div>
                             <div class="form-group row">
                                <label class="col-lg-2 col-form-label">Adv:</label>
                                <div class="col-lg-12">
                                    <textarea style="height: 150%;" class="form-control" id="summary-ckeditor2" name="adv">{{$page[0]->adv}}</textarea>

                                    <script>
                                        CKEDITOR.replace( 'summary-ckeditor2', {
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
