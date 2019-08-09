@extends('dashboard.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="kt-portlet">
                <a href="{{route('acc')}}" class="form-text text-muted"><i class="flaticon2-back"></i> Back</a>
                <div class="kt-portlet__head">
                    <div class="kt-portlet__head-label">
                        <span class="kt-portlet__head-icon kt-hidden">
                            <i class="la la-gear"></i>
                        </span>
                        <h3 class="kt-portlet__head-title">
                            Add Account
                        </h3>
                    </div>
                </div>
                <!--begin::Form-->
                <form class="kt-form" method="post" action="{{route('editacc',$admin->id)}}" enctype="multipart/form-data">
                    @csrf
                    <div class="kt-portlet__body">
                        <div class="kt-form__section kt-form__section--first">
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label">Account Name:</label>
                                <div class="col-lg-4">
                                    <input required="" value="{{$admin->name}}" type="text" class="form-control" placeholder="Enter account name" name="name" >
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label">Username:</label>
                                <div class="col-lg-4">
                                    <input required="" value="{{$admin->username}}" name="username" type="text" class="form-control" placeholder="Enter username" >
                                    <span class="form-text text-muted"></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label">Email:</label>
                                <div class="col-lg-4">
                                    <input required="" value="{{$admin->email}}" name="email" type="email" class="form-control" placeholder="Enter Email" >
                                    <span class="form-text text-muted"></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-2 col-form-label">Password:</label>
                                <div class="col-lg-4">
                                    <input  value="" name="password" type="password" class="form-control" placeholder="Enter Password" >
                                    <span class="form-text text-muted"></span>
                                </div>
                            </div>
                            <p class="text-muted">Password cũ sẽ không hiện ra. Nếu không muốn đổi mất khẩu thì hãy để trống</p>
                        </div>
                        <div class="form-group row">
                                <label class="col-lg-2 col-form-label">Re-Password:</label>
                                <div class="col-lg-4">
                                    <input  value="" name="repassword" type="password" required="" class="form-control" placeholder="Enter Password" >
                                    <span class="form-text text-muted"></span>
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
