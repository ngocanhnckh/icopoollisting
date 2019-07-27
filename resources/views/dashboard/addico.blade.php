@extends('dashboard.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="kt-portlet">
                <a href="{{route('ico')}}" class="form-text text-muted"><i class="flaticon2-back"></i> Back</a>
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <span class="kt-portlet__head-icon kt-hidden">
                            <i class="la la-gear"></i>
                        </span>
                        <h3 class="kt-portlet__head-title">
                            Profile of Admin
                        </h3>
                    </div>
                </div>
                <!--begin::Form-->
                <form class="kt-form" method="post" action="{{route('addico')}}">
                    @csrf
                    <div class="kt-portlet__body">
                        <div class="kt-form__section kt-form__section--first">
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label">ICO NAME:</label>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" placeholder="Enter ICO name" name="name" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label">Min cap:</label>
                                <div class="col-lg-4">
                                    <input name="mincap" type="text" class="form-control" placeholder="Enter Min cap" >
                                    <span class="form-text text-muted"></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label">Bonus:</label>
                                <div class="col-lg-4">
                                    <input name="bonus" type="text" class="form-control" placeholder="Enter Bonus " >
                                    <span class="form-text text-muted"></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label">Commission:</label>
                                <div class="col-lg-4">
                                    <input name="commission" type="text" class="form-control" placeholder="Enter Commission" >
                                    <span class="form-text text-muted"></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label">Raised:</label>
                                <div class="col-lg-4">
                                    <input name="raised" type="text" class="form-control" placeholder="Enter Raised" >
                                    <span class="form-text text-muted"></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label">Product:</label>
                                <div class="col-lg-4">
                                    <input name="product" type="text" class="form-control" placeholder="Enter Product" >
                                    <span class="form-text text-muted"></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label">Team and partners:</label>
                                <div class="col-lg-4">
                                    <input name="teamnpartner" type="text" class="form-control" placeholder="Enter Team and partners" >
                                    <span class="form-text text-muted"></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label">Market:</label>
                                <div class="col-lg-4">
                                    <input name="market" type="text" class="form-control" placeholder="Enter Market">
                                    <span class="form-text text-muted"></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label">Average:</label>
                                <div class="col-lg-4">
                                    <input name="average" type="text" class="form-control" placeholder="Enter Average">
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
