@extends('dashboard.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="kt-portlet">
                <a href="{{route('link')}}" class="form-text text-muted"><i class="flaticon2-back"></i> Back</a>
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <span class="kt-portlet__head-icon kt-hidden">
                            <i class="la la-gear"></i>
                        </span>
                        <h3 class="kt-portlet__head-title">
                            Add Link
                        </h3>
                    </div>
                </div>
                <!--begin::Form-->
                <form class="kt-form" method="post" action="{{route('addlink')}}">
                    @csrf
                    <div class="kt-portlet__body">
                        <div class="kt-form__section kt-form__section--first">
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label">NAME:</label>
                                <div class="col-lg-4">
                                    <input type="text" required="" class="form-control" placeholder="Enter name" name="name" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label">Main Link:</label>
                                <div class="col-lg-4">
                                    <input name="link" required=""  type="url" class="form-control" placeholder="Enter Link" >
                                    <span class="form-text text-muted"></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label">Target</label>
                                <div class="col-lg-4">
                                    <input name="target" type="text" class="form-control" placeholder="Enter Target" >
                                    <span class="form-text text-muted"></span>
                                </div>

                            </div>
                            <p class="text-muted" >*Note: About open link in new tab the Target is: _blank. Open in current tab the target is _self (default)</p>
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
