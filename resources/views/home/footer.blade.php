<!-- begin:: Footer -->
<footer class="page-footer font-small unique-color-dark">

<div style="background-color: #6351ce;">
  <div class="container">

    <!-- Grid row-->
    <div class="row py-4 d-flex align-items-center">

      <!-- Grid column -->
      <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
        <h6 class="mb-0" style="color:white;">This is Icopool Web!</h6>
      </div>
      <!-- Grid column -->


    </div>
    <!-- Grid row-->

  </div>
</div>

<!-- Footer Links -->
<div class="container text-center text-md-left mt-5">

  <!-- Grid row -->
  <div class="row mt-3">

    <!-- Grid column -->
    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">

      <!-- Content -->
      <h6 class="text-uppercase font-weight-bold">Company name</h6>
      <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
      <p>This web help you to see Ico and Icopool. If you see bugs Please report it for us ♥</p>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
   
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

      <!-- Links -->
      <h6 class="text-uppercase font-weight-bold">Useful links</h6>
      <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
    @foreach($link as $data)
        <p>
        <a href="{{$data->link}}" target="{{$data->target}}">{{$data->name}}</a>
        </p>
    @endforeach

    </div>
    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

      <!-- Links -->
      <h6 class="text-uppercase font-weight-bold">Report Bugs</h6>
      <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
      <p>
      <button onclick="report()" style=" color: white;height: 50px;"  class="btn btn-danger"> REPORT BUGS</button>
      </p>

      <script type="text/javascript">
                                function report(){
                                    Swal.fire(
  'If you see bugs in this web please report for us',
  'You send your bug you have found at: {{$mail}}',
  'success'
);
                                }
                            </script>
    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</div>
<!-- Footer Links -->

<!-- Copyright -->
<div class="footer-copyright text-center py-3">© 2019 Copyright:
  <a href="#">Company name</a>
</div>
<!-- Copyright -->

</footer>

                            <!-- @foreach($link as $data)
                                <a href="{{$data->link}}"  style="color:#fff;" target="{{$data->target}}" class="kt-footer__menu-link pt-3 kt-link">{{$data->name}}</a>
                            @endforeach
                            <button onclick="report()" style=" color: white;height: 50px;"  class="kt-footer__menu-link kt-link btn  btn-danger btn-pill"> REPORT BUGS</button>
                            <script type="text/javascript">
                                function report(){
                                    Swal.fire(
  'If you see bugs in this web please report for us',
  'You send your bug you have found at: {{$mail}}',
  'success'
);
                                }
                            </script>
                         -->

                    <!-- end:: Footer -->
                </div>
            </div>
        </div>

        <!-- end:: Page -->



        <!-- begin::Scrolltop -->
        <div id="kt_scrolltop" class="kt-scrolltop">
            <i class="fa fa-arrow-up"></i>
        </div>

        <!-- end::Scrolltop -->


        <!--ENd:: Chat-->

        <!-- begin::Global Config(global config for global JS sciprts) -->
        <script>
            var KTAppOptions = {
                "colors": {
                    "state": {
                        "brand": "#5d78ff",
                        "dark": "#282a3c",
                        "light": "#ffffff",
                        "primary": "#5867dd",
                        "success": "#34bfa3",
                        "info": "#36a3f7",
                        "warning": "#ffb822",
                        "danger": "#fd3995"
                    },
                    "base": {
                        "label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
                        "shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
                    }
                }
            };
        </script>

        <!-- end::Global Config -->

        <!--begin:: Global Mandatory Vendors -->

        <script src="./assets/vendors/general/popper.js/dist/umd/popper.js" type="text/javascript"></script>
        <script src="./assets/vendors/general/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="./assets/vendors/general/js-cookie/src/js.cookie.js" type="text/javascript"></script>
        <script src="./assets/vendors/general/moment/min/moment.min.js" type="text/javascript"></script>
        <script src="./assets/vendors/general/tooltip.js/dist/umd/tooltip.min.js" type="text/javascript"></script>
        <script src="./assets/vendors/general/perfect-scrollbar/dist/perfect-scrollbar.js" type="text/javascript"></script>
        <script src="./assets/vendors/general/sticky-js/dist/sticky.min.js" type="text/javascript"></script>
        <script src="./assets/vendors/general/wnumb/wNumb.js" type="text/javascript"></script>

        <!--end:: Global Mandatory Vendors -->

        <!--begin:: Global Optional Vendors -->
        <script src="./assets/vendors/general/jquery-form/dist/jquery.form.min.js" type="text/javascript"></script>
        <script src="./assets/vendors/general/block-ui/jquery.blockUI.js" type="text/javascript"></script>
        <script src="./assets/vendors/general/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
        <script src="./assets/vendors/custom/js/vendors/bootstrap-datepicker.init.js" type="text/javascript"></script>
        <script src="./assets/vendors/general/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
        <script src="./assets/vendors/general/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
        <script src="./assets/vendors/custom/js/vendors/bootstrap-timepicker.init.js" type="text/javascript"></script>
        <script src="./assets/vendors/general/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
        <script src="./assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js" type="text/javascript"></script>
        <script src="./assets/vendors/general/bootstrap-maxlength/src/bootstrap-maxlength.js" type="text/javascript"></script>
        <script src="./assets/vendors/custom/vendors/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js" type="text/javascript"></script>
        <script src="./assets/vendors/general/bootstrap-select/dist/js/bootstrap-select.js" type="text/javascript"></script>
        <script src="./assets/vendors/general/bootstrap-switch/dist/js/bootstrap-switch.js" type="text/javascript"></script>
        <script src="./assets/vendors/custom/js/vendors/bootstrap-switch.init.js" type="text/javascript"></script>
        <script src="./assets/vendors/general/select2/dist/js/select2.full.js" type="text/javascript"></script>
        <script src="./assets/vendors/general/ion-rangeslider/js/ion.rangeSlider.js" type="text/javascript"></script>
        <script src="./assets/vendors/general/typeahead.js/dist/typeahead.bundle.js" type="text/javascript"></script>
        <script src="./assets/vendors/general/handlebars/dist/handlebars.js" type="text/javascript"></script>
        <script src="./assets/vendors/general/inputmask/dist/jquery.inputmask.bundle.js" type="text/javascript"></script>
        <script src="./assets/vendors/general/inputmask/dist/inputmask/inputmask.date.extensions.js" type="text/javascript"></script>
        <script src="./assets/vendors/general/inputmask/dist/inputmask/inputmask.numeric.extensions.js" type="text/javascript"></script>
        <script src="./assets/vendors/general/nouislider/distribute/nouislider.js" type="text/javascript"></script>
        <script src="./assets/vendors/general/owl.carousel/dist/owl.carousel.js" type="text/javascript"></script>
        <script src="./assets/vendors/general/autosize/dist/autosize.js" type="text/javascript"></script>
        <script src="./assets/vendors/general/clipboard/dist/clipboard.min.js" type="text/javascript"></script>
        <script src="./assets/vendors/general/dropzone/dist/dropzone.js" type="text/javascript"></script>
        <script src="./assets/vendors/general/summernote/dist/summernote.js" type="text/javascript"></script>
        <script src="./assets/vendors/general/markdown/lib/markdown.js" type="text/javascript"></script>
        <script src="./assets/vendors/general/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>
        <script src="./assets/vendors/custom/js/vendors/bootstrap-markdown.init.js" type="text/javascript"></script>
        <script src="./assets/vendors/general/bootstrap-notify/bootstrap-notify.min.js" type="text/javascript"></script>
        <script src="./assets/vendors/custom/js/vendors/bootstrap-notify.init.js" type="text/javascript"></script>
        <script src="./assets/vendors/general/jquery-validation/dist/jquery.validate.js" type="text/javascript"></script>
        <script src="./assets/vendors/general/jquery-validation/dist/additional-methods.js" type="text/javascript"></script>
        <script src="./assets/vendors/custom/js/vendors/jquery-validation.init.js" type="text/javascript"></script>
        <script src="./assets/vendors/general/toastr/build/toastr.min.js" type="text/javascript"></script>
        <script src="./assets/vendors/general/raphael/raphael.js" type="text/javascript"></script>
        <script src="./assets/vendors/general/morris.js/morris.js" type="text/javascript"></script>
        <script src="./assets/vendors/general/chart.js/dist/Chart.bundle.js" type="text/javascript"></script>
        <script src="./assets/vendors/custom/vendors/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js" type="text/javascript"></script>
        <script src="./assets/vendors/custom/vendors/jquery-idletimer/idle-timer.min.js" type="text/javascript"></script>
        <script src="./assets/vendors/general/waypoints/lib/jquery.waypoints.js" type="text/javascript"></script>
        <script src="./assets/vendors/general/counterup/jquery.counterup.js" type="text/javascript"></script>
        <script src="./assets/vendors/general/es6-promise-polyfill/promise.min.js" type="text/javascript"></script>

        <script src="./assets/vendors/general/jquery.repeater/src/lib.js" type="text/javascript"></script>
        <script src="./assets/vendors/general/jquery.repeater/src/jquery.input.js" type="text/javascript"></script>
        <script src="./assets/vendors/general/jquery.repeater/src/repeater.js" type="text/javascript"></script>
        <script src="./assets/vendors/general/dompurify/dist/purify.js" type="text/javascript"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <!--end:: Global Optional Vendors -->

        <!--begin::Global Theme Bundle(used by all pages) -->
        <script src="./assets/js/demo1/scripts.bundle.js" type="text/javascript"></script>

        <!--end::Global Theme Bundle -->

        <!--begin::Page Vendors(used by this page) -->
        <script src="./assets/vendors/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript"></script>
        <script src="//maps.google.com/maps/api/js?key=AIzaSyBTGnKT7dt597vo9QgeQ7BFhvSRP4eiMSM" type="text/javascript"></script>
        <script src="./assets/vendors/custom/gmaps/gmaps.js" type="text/javascript"></script>

        <!--end::Page Vendors -->

        <!--begin::Page Scripts(used by this page) -->
        <script src="./assets/js/demo1/pages/dashboard.js" type="text/javascript"></script>

        <!--end::Page Scripts -->

    </body>

    <!-- end::Body -->
</html>