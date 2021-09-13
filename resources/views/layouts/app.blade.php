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
    <link rel="stylesheet" href="{{ url('/md/css/material-dashboard.css') }}">
    <link rel="stylesheet" href="{{ url('/css/custom.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.min.css" integrity="sha512-f0tzWhCwVFS3WeYaofoLWkTP62ObhewQ1EZn65oSYDZUg1+CyywGKkWzm8BxaJj5HGKI72PnMH9jYyIFz+GH7g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- Jquery Date/time picker-->
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.20/jquery.datetimepicker.full.min.js" integrity="sha512-AIOTidJAcHBH2G/oZv9viEGXRqDNmfdPVPYOYKGy3fti0xIplnlgMHUGfuNRzC6FkzIo0iIxgFnr9RikFxK+sw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>

</head>

<body class="off-canvas-sidebar">
    @yield('content')
    
<script>
    $(document).ready(function () {
    moment.updateLocale('en', {
      week: {dow: 1} // Monday is the first day of the week
    })

    $('.date').datetimepicker({
      format: 'd/m/Y',
      locale: 'en',
      timepicker:false,
      icons: {
        up: 'fas fa-chevron-up',
        down: 'fas fa-chevron-down',
        previous: 'fas fa-chevron-left',
        next: 'fas fa-chevron-right'
      }
    })

    $('.datetime').datetimepicker({
      format: 'DD/MM/YYYY HH:mm:ss',
      locale: 'en',
      sideBySide: true,
      icons: {
        up: 'fas fa-chevron-up',
        down: 'fas fa-chevron-down',
        previous: 'fas fa-chevron-left',
        next: 'fas fa-chevron-right'
      }
    })

    $('.timepicker').datetimepicker({
      format: 'HH:mm:ss',
      icons: {
        up: 'fas fa-chevron-up',
        down: 'fas fa-chevron-down',
        previous: 'fas fa-chevron-left',
        next: 'fas fa-chevron-right'
      }
    })
  })
    </script>
   
</body>

</html>