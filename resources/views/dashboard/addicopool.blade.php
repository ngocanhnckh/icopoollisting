@extends('dashboard.master')
@section('content')
<script type="text/javascript">
        $(function(){
            $('#activeico').tokenfield({
                autocomplete:{
                    source:['{!!$icoarrstr!!}'],
                    delay:100
                },
                showAutocompleteOnFocus: true
            });
        });

    </script>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="kt-portlet">
                <a href="{{route('icopool')}}" class="form-text text-muted"><i class="flaticon2-back"></i> Back</a>
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <span class="kt-portlet__head-icon kt-hidden">
                            <i class="la la-gear"></i>
                        </span>
                        <h3 class="kt-portlet__head-title">
                            Add new ICO pool
                        </h3>
                    </div>
                </div>
                <!--begin::Form-->
                <form class="kt-form" method="post" action="{{route('addicopool')}}">
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
                                <label class="col-lg-2 col-form-label">Active ICO:</label>
                                <div class="col-lg-4">
                                    <input type="text" placeholder="Add Active ICO" name="activeico" id="activeico" >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label">Number Of Participants:</label>
                                <div class="col-lg-4">
                                    <input name="numofparticipants" type="text" class="form-control" placeholder="Enter Number Of Participants " >
                                    <span class="form-text text-muted"></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label">Tok. distr. :</label>
                                <div class="col-lg-4">
                                    <input name="tok_distr" type="text" class="form-control" placeholder="Enter Tok. distr." >
                                    <span class="form-text text-muted"></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label">Rating:</label>
                                <div class="col-lg-4">
                                    <input name="rating" type="text" class="form-control" placeholder="Enter Rating" >
                                    <span class="form-text text-muted"></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label">Lang.:</label>
                                <div class="col-lg-4">
                                    <input name="lang" type="text" class="form-control" placeholder="Enter Lang" >
                                    <span class="form-text text-muted"></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label">Access:</label>
                                <div class="col-lg-4">
                                    <input name="access" type="text" class="form-control" placeholder="Enter Access" >
                                    <span class="form-text text-muted"></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label">Created:</label>
                                <div class="col-lg-4">
                                    <input name="created" type="text" class="form-control" placeholder="Enter Created" >
                                    <span class="form-text text-muted"></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label">Addr.:</label>
                                <div class="col-lg-4">
                                    <input name="addr" type="text" class="form-control" placeholder="Enter Addr." >
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
