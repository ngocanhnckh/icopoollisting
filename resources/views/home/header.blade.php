<!DOCTYPE html>
<html lang="en">
<!-- begin::Head -->

<head>
    <base href="{{asset('public/dashboard')}}/">
    <!--begin::Base Path (base relative path for assets of this page) -->
    <!--end::Base Path -->
    <meta charset="utf-8" />
    <title>{{$title}}</title>
    <meta name="description" content="Page with empty content">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--begin::Fonts -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]
            },
            active: function () {
                sessionStorage.fonts = true;
            }
        });
    </script>
    <!--end::Fonts -->
    <!--begin::Page Vendors Styles(used by this page) -->
    <link href="./assets/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Page Vendors Styles -->
    <!--begin:: Global Mandatory Vendors -->
    <link href="./assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet"
        type="text/css" />
    <!--end:: Global Mandatory Vendors -->
    <!--begin:: Global Optional Vendors -->
    <meta name="description"
        content="Service collects data from ICO pools about LIVE deals and represents it in a useful table form sorted by rating. The data is updated every hour.">
    <link href="https://icopools.io/assets/d90e486a/themes/smoothness/jquery-ui.css?v=1474004875" rel="stylesheet">
    <link href="https://icopools.io/css/jquery.mCustomScrollbar.css?v=1548945978" rel="stylesheet">
    <link href="https://icopools.io/css/mTab-style.css?v=1548945978" rel="stylesheet">
    <link href="https://icopools.io/css/jquery-ui.min.css?v=1548945975" rel="stylesheet">
    <link href="https://icopools.io/css/jquery.formstyler.css?v=1548945976" rel="stylesheet">
    <link href="https://icopools.io/css/jquery.formstyler.theme.css?v=1548945976" rel="stylesheet">
    <link href="https://icopools.io/css/reset.css?v=1548945979" rel="stylesheet">
    <link href="https://icopools.io/css/style.css?v=1548945983" rel="stylesheet">
    <link href="./assets/vendors/general/tether/dist/css/tether.css" rel="stylesheet" type="text/css" />
    <link href="./assets/vendors/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css" rel="stylesheet"
        type="text/css" />
    <link href="./assets/vendors/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css" rel="stylesheet"
        type="text/css" />
    <link href="./assets/vendors/general/bootstrap-timepicker/css/bootstrap-timepicker.css" rel="stylesheet"
        type="text/css" />
    <link href="./assets/vendors/general/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet"
        type="text/css" />
    <link href="./assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css" rel="stylesheet"
        type="text/css" />
    <link href="./assets/vendors/general/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet"
        type="text/css" />
    <link href="./assets/vendors/general/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css" rel="stylesheet"
        type="text/css" />
    <link href="./assets/vendors/general/select2/dist/css/select2.css" rel="stylesheet" type="text/css" />
    <link href="./assets/vendors/general/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet" type="text/css" />
    <link href="./assets/vendors/general/nouislider/distribute/nouislider.css" rel="stylesheet" type="text/css" />
    <link href="./assets/vendors/general/owl.carousel/dist/assets/owl.carousel.css" rel="stylesheet" type="text/css" />
    <link href="./assets/vendors/general/owl.carousel/dist/assets/owl.theme.default.css" rel="stylesheet"
        type="text/css" />
    <link href="./assets/vendors/general/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css" />
    <link href="./assets/vendors/general/summernote/dist/summernote.css" rel="stylesheet" type="text/css" />
    <link href="./assets/vendors/general/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet"
        type="text/css" />
    <link href="./assets/vendors/general/animate.css/animate.css" rel="stylesheet" type="text/css" />
    <link href="./assets/vendors/general/toastr/build/toastr.css" rel="stylesheet" type="text/css" />
    <link href="./assets/vendors/general/morris.js/morris.css" rel="stylesheet" type="text/css" />
    <link href="./assets/vendors/general/sweetalert2/dist/sweetalert2.css" rel="stylesheet" type="text/css" />
    <link href="./assets/vendors/general/socicon/css/socicon.css" rel="stylesheet" type="text/css" />
    <link href="./assets/vendors/custom/vendors/line-awesome/css/line-awesome.css" rel="stylesheet" type="text/css" />
    <link href="./assets/vendors/custom/vendors/flaticon/flaticon.css" rel="stylesheet" type="text/css" />
    <link href="./assets/vendors/custom/vendors/flaticon2/flaticon.css" rel="stylesheet" type="text/css" />
    <link href="./assets/vendors/general/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet"
        type="text/css" />
    <script src="./assets/vendors/general/jquery/dist/jquery.js" type="text/javascript"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!--end:: Global Optional Vendors -->
    <!--begin::Global Theme Styles(used by all pages) -->
    <link href="./assets/css/demo1/style.bundle.front.css" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles -->
    <!--begin::Layout Skins(used by all pages) -->
    <link href="./assets/css/demo1/skins/header/base/light.css" rel="stylesheet" type="text/css" />
    <link href="./assets/css/demo1/skins/header/menu/light.css" rel="stylesheet" type="text/css" />
    <link href="./assets/css/demo1/skins/brand/dark.css" rel="stylesheet" type="text/css" />
    <link href="./assets/css/demo1/skins/aside/dark.css" rel="stylesheet" type="text/css" />
    <!--end::Layout Skins -->
    <style type="text/css">
        .cogach {
            text-decoration: underline;
        }

        .modal-backdrop {
            z-index: 0;
        }
        .text-warning{
            color:#f8bf03!important;
        }
    </style>
    <link rel="shortcut icon" href="{{asset('public/thumnailimg')}}/{{$thumnail}}" />
    <script type="text/javascript">

    </script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
</head>
<!-- end::Head -->
<!-- begin::Body -->

<body
    class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">
    <!-- begin:: Page -->
    <!-- begin:: Header Mobile -->
    <header class="header mb-5" style="z-index: 100;">
        <div class="container">
            <div class="wrap_header">
                    <div class="wr_logo">
                            <a href="{{route('home')}}" class="logo mr-1"><img  src="{{asset('public/logoimg')}}/{{$logo}}" alt=""></a>
                            <p>List of ICO Pools</p>
                            <div class="wr_menu">
                                <ul>
                                    <li><a href="{{route('about')}}">About</a></li>
                                    <li><a href="{{route('faq')}}">FAQ</a></li>
                                    <li><a href="{{route('adv')}}">Adv</a></li>
                                    <li><a href="{{route('trangblog')}}">Blog</a></li>
                                    
                                </ul>
                                
                            </div>
                        </div>
                        
                        <div class="right_head">
                            <div class="right_button">
                                <a href="javascript:void(0); " data-toggle="modal" data-target="#addico" class="button-add add-ico-button">+ Add ICO</a>
                                <a href="javascript:void(0);" data-toggle="modal" data-target="#addpool" class="button-add add-pool-button">+ Add pool</a>
                            </div>
                           
                        </div>
                        <button class="pull" data-toggle="modal" data-target="#menu"></button>
                <!-- Modal -->
                <div class="modal fade" id="menu" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content" style="text-align:center;">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Menu</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="mb-3"></div>
                            <div class="">
                                <ul>
                                    <li class="hidden-desktop"><a href="{{route('about')}}">About</a></li>
                                    <li class="hidden-desktop"><a href="{{route('faq')}}">FAQ</a></li>
                                    <li class="hidden-desktop"><a href="{{route('adv')}}">Adv</a></li>
                                    <li><a href="{{route('trangblog')}}">Blog</a></li>
                                    <li class="hidden-desktop"><a data-toggle="modal" data-target="#addico" >Add ICO</a></li>
                                    <li class="hidden-desktop"><a   >Add pool</a></li>


                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal fade" id="addico" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add New ICO</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form class="formaddico" method="post" action="{{route('apiaddico')}}">
                                <div class="modal-body">

                                        @csrf
                                        <input class="form-control my-2 iconame" type="text" placeholder="ICO Name" required="" name="name">
                                        <input class="form-control my-2 icolink" type="url" placeholder="Main Link" name="link">
                                        <input class="form-control my-2 icocontact" type="text" placeholder="Your Contact" required="" name="contact">
                                        <textarea class="form-control my-2 icocmt" name="cmt" placeholder="Comment"></textarea>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <input type="submit" value="ADD" class="btn btn-primary" />
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade" id="addpool" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add New ICOPool</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form class="formaddico" method="post" action="{{route('apiaddpool')}}">
                                <div class="modal-body">

                                        @csrf
                                        <input class="form-control my-2 iconame" type="text" placeholder="ICOPool Name" required="" name="name">
                                        <input class="form-control my-2 icolink" type="url" placeholder="Main Link" name="link">
                                        <input class="form-control my-2 icocontact" type="text" placeholder="Your Contact" required="" name="contact">
                                        <textarea class="form-control my-2 icocmt" name="cmt" placeholder="Comment"></textarea>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <input type="submit" value="ADD" class="btn btn-primary" />
                                </div>
                                </form>
                            </div>
                        </div>
            </div>
        </div>
    </header>