<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src="{{ asset('backend/assets/js/libs/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('backend/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('backend/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/app.js') }}"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="{{ asset('backend/assets/js/custom.js') }}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src="{{ asset('backend/plugins/apex/apexcharts.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/dashboard/dash_1.js') }}"></script>

    <!-- END PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

    <!-- BEGIN CKFINDER JS -->
    <script src="{{ asset('backend/js/script.js') }}"></script>
    <!-- END CKFINDER JS -->

    <!-- BEGIN UserProfile js -->
    <script src="{{asset('backend/assets/js/custom.js')}}"></script>
    <!-- END UserProfile js -->

    <!--  BEGIN profile-setting js  -->

    <script src="{{asset('backend/plugins/dropify/dropify.min.js')}}"></script>
    <script src="{{asset('backend/plugins/blockui/jquery.blockUI.min.js')}}"></script>
    <script src="{{asset('backend/assets/js/users/account-settings.js')}}"></script>
    <!--  END profile-setting jsE  -->

    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
