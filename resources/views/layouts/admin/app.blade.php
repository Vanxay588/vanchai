<!DOCTYPE html>
<html lang="en">

<head>

    <!--meta Default -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <!--meta SEO -->
    <meta name="description" content="{{ trans('panel.site_title') }}, Sangha Education Commission Office of Savannakhet, ແຈ້ງການ, ແບບຮຽນ, ຄູ່ມືຄູ, ຮ່າງເອກະສານ, ຜົນສອບເສັງ, ສຶກສາສົງແຂວງ,ນິຕິກຳ" >
    <meta name="keywords" content="{{ trans('panel.site_title') }}, Sangha Education Commission Office of Savannakhet, ແຈ້ງການ, ແບບຮຽນ, ຄູ່ມືຄູ, ຮ່າງເອກະສານ, ຜົນສອບເສັງ, ສຶກສາສົງແຂວງ,ນິຕິກຳ">
    <meta name="author" content="{{ trans('panel.site_title') }}, {{ trans('panel.author') }} "> 

    <!-- meta config date/time -->
    <meta name="moment_date_format" content="{{ config('project.moment_date_format') }}" />
    <meta name="moment_time_format" content="{{ config('project.moment_time_format') }}" />
    <meta name="moment_datetime_format" content="{{ config('project.moment_datetime_format') }}" />

    <!-- meta Languages -->
    <meta name="app-locale" content="{{ App::getLocale() }}" />

    <!-- Title -->
    <title>{{ trans('panel.site_title') }}</title>

    <!-- Logo and Icon app-->
    <link rel="shortcut icon" sizes="96x96" href="{{ asset('/images/logo.ico') }}">
    <link rel="icon" type="image/png" href="{{ url('/images/Logo.png') }}">

    <!-- Font and Icon -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;400;500;700&family=Roboto:wght@300;400;500;700&family=Material+Icons&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ mix('/adminapp/css/app.css') }}">
    <link rel="stylesheet" rel="preload" href="{{ url('/md/css/material-dashboard.css') }}">
    <link rel="stylesheet" href="{{ url('/css/custom.css') }}">

</head>

<body>
    <div id="app"></div>
    
    <a id="button"></a>

    <!-- Core file -->
    <script src="{{ url('/md/js/core/jquery.min.js') }} "></script>
    <script src="{{ url('/md/js/core/popper.min.js') }} "></script>
    <script src="{{ url('/md/js/core/bootstrap-material-design.min.js') }} "></script>
    <script src="{{ url('/md/js/plugins/perfect-scrollbar.jquery.min.js') }} "></script>

   <!-- Plugin for the momentJs -->
    <script src="{{ url('/md/js/plugins/moment.min.js') }} "></script>

    <!-- Notifications Plugin -->
    <script src="{{ url('/md/js/plugins/bootstrap-notify.js') }} "></script>

    <!-- Datetime Picker -->
    <script src="{{ url('/md/js/plugins/bootstrap-datetimepicker.min.js') }}"></script>
    
    <!-- apps -->
    <script src="{{ mix('/adminapp/js/app.js') }}" type="text/javascript" charset="utf-8"></script>

    <!-- go to top -->
    <script>
        var btn = $('#button');

        $(window).scroll(function() {
        if ($(window).scrollTop() > 300) {
            btn.addClass('show');
        } else {
            btn.removeClass('show');
        }
        });

        btn.on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({scrollTop:0}, '300');
        });
    </script>

</body>

</html>
