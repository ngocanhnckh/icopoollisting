@extends('dashboard.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="kt-portlet">
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
                                <form class="kt-form" method="post" action="{{route('profile')}}">
                                    @csrf
                                    <div class="kt-portlet__body">
                                        <div class="kt-form__section kt-form__section--first">
                                            <div class="form-group row">
                                                <label class="col-lg-2 col-form-label">Name:</label>
                                                <div class="col-lg-4">
                                                    <input type="text" class="form-control" placeholder="Enter full name" name="name" value="{{$admin->name}}">
                                                    <span class="form-text text-muted">Please enter your name</span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-2 col-form-label">Username:</label>
                                                <div class="col-lg-4">
                                                    <input name="username" type="text" class="form-control" placeholder="Enter full name" value="{{$admin->username}}">
                                                    <span class="form-text text-muted"></span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-2 col-form-label">Email address:</label>
                                                <div class="col-lg-4">
                                                    <input type="email" name="email" value="{{$admin->email}}" class="form-control" placeholder="Enter email">

                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-2 col-form-label">Password:</label>
                                                <div class="col-lg-4">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"><span class="input-group-text"><i class="la la-chain"></i></span></div>
                                                        <input  type="password" class="form-control" placeholder="Password" name="password">
                                                    </div>
                                                    <span class="form-text text-muted">Your current password doesn't show. If you don't change password please don't type in here</span>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label">Re-Password:</label>
                                <div class="col-lg-4">
                                    <input  value="" name="repassword" type="password"class="form-control" placeholder="Enter Password" >
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