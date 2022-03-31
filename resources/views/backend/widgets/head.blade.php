<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>@section('title')
        {{$configs['title']->value}}
    @show</title>
    <link rel="icon" type="image/x-icon" href="public/assets/img/favicon.ico"/>
    <link href="{{ asset('backend/assets/css/loader.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('backend/assets/js/loader.js') }}"></script>
    <script src="{{ asset('backend/assets/js/libs/jquery-3.1.1.min.js') }}"></script>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="{{ asset('backend/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/assets/css/plugins.css') }}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
    <link href="{{ asset('backend/plugins/apex/apexcharts.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend/assets/css/dashboard/dash_1.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('backend/assets/css/tables/table-basic.css') }}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->

    <!--  BEGIN Profile css  -->
    <link href="{{asset('backend/assets/css/users/uesr-profile.css')}}" rel="stylesheet" type="text/css" />
    <!--  END CProfile css   -->

    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/plugins/dropify/dropify.min.css')}}">
    <link href="{{asset('backend/assets/css/users/account-setting.css')}}" rel="stylesheet" type="text/css" />
    <!--  END CUSTOM STYLE FILE  -->

    <!-- CKEDITOR and ckfinder and js-->
    <script>
        var PUBLIC = '{{asset('/')}}';
    </script>
    <script src="{{asset('backend/ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('backend/ckfinder/ckfinder.js')}}"></script>

    <!--  BEGIN datepicker  -->
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <!-- END datepicker-->
