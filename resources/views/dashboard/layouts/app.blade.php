<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('landrada') }}/favicon.png">
    <link rel="icon" type="image/png" href="{{ asset('landrada') }}/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <meta name="googlebot" content="index">
  <meta name="robots" content="follow">

  <!-- Canonical SEO -->
  <link rel="canonical" href="https://blog.landrada.mx/" />

  <!--  Social tags      -->
  <meta name="keywords" content="inversion segura, inversion en yucatan, invierte en merida, lotes de inversion, lotes semiurbanizados, inversion con conciencia, altamisa precios, lagunas kuche, lotes en sisal, inversion en cancun, inversion en merida, patrimonio familiar, residenciales, lotes residenciales">
  <meta name="description" content="Nos especializamos en la comercialización de desarrollos inmobiliarios en México, ofrecemos inversiones confiables que se ajusten a tus objetivos.">

  <!-- Schema.org markup for Google+ -->
  <meta itemprop="name" content="Blog sobre temas de inversión con conciencia">
  <meta itemprop="description" content="Nos especializamos en la comercialización de desarrollos inmobiliarios en México, ofrecemos inversiones confiables que se ajusten a tus objetivos.">

  <meta itemprop="image" content="{{ asset('landrada/blog/articulos/construye-tu-patrimonio.jpg')}} ">

  <!-- Twitter Card data -->
  <meta name="twitter:card" content="product">
  <meta name="twitter:site" content="@landradadesarollos">
  <meta name="twitter:title" content="Blog sobre temas de inversión con conciencia">
  <meta name="twitter:title" content="Blog sobre temas de inversión con conciencia">

  <meta name="twitter:description" content="Nos especializamos en la comercialización de desarrollos inmobiliarios en México, ofrecemos inversiones confiables que se ajusten a tus objetivos.">
  <meta name="twitter:creator" content="@landradadesarrollos">
  <meta name="twitter:image" content="{{ asset('landrada/blog/articulos/construye-tu-patrimonio.jpg')}}">

  <!-- Open Graph data -->
  <meta property="fb:app_id" content="655968634437471">
  <meta property="og:title" content="Blog sobre temas de inversión con conciencia" />
  <meta property="og:type" content="article" />
  <meta property="og:url" content="https://blog.landrada.mx/" />
  <meta property="og:image" content="{{ asset('landrada/blog/articulos/construye-tu-patrimonio.jpg')}}" />
  <meta property="og:description" content="Nos especializamos en la comercialización de desarrollos inmobiliarios en México, ofrecemos inversiones confiables que se ajusten a tus objetivos." />
  <meta property="og:site_name" content="Blog Landrada Desarrollos" />
    <title>
        {{ ('Blog - Landrada Desarrollos') }}
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files withowt SCSS-->
    <link href="{{ asset('material') }}/material-dashboard.css" rel="stylesheet" />

    <!-- CSS Files with SCSS-->
    <link href="{{ asset('css') }}/material-dashboard.css" rel="stylesheet" />

    <!-- Include Editor style. -->
    <link href="https://cdn.jsdelivr.net/npm/froala-editor@latest/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />

</head>

<body class="{{ $class ?? '' }}">
    @if (auth()->check() && !in_array(request()->route()->getName(), ['welcome', 'page.pricing', 'page.lock',
    'page.error']))
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
    @include('dashboard.layouts.page_templates.auth')
    @else
    @include('dashboard.layouts.page_templates.guest')
    @endif

    <!--   Core JS Files   -->
    <script src="https://cdn.ckeditor.com/ckeditor5/19.1.1/classic/ckeditor.js"></script>
    <script src="{{ asset('material') }}/js/core/jquery.min.js"></script>
    <script src="{{ asset('material') }}/js/core/popper.min.js"></script>
    <script src="{{ asset('material') }}/js/core/bootstrap-material-design.min.js"></script>
    <script src="{{ asset('material') }}/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!-- Plugin for the momentJs  -->
    <script src="{{ asset('material') }}/js/plugins/moment.min.js"></script>
    <!--  Plugin for Sweet Alert -->
    <script src="{{ asset('material') }}/js/plugins/sweetalert2.js"></script>
    <!-- Forms Validations Plugin -->
    <script src="{{ asset('material') }}/js/plugins/jquery.validate.min.js"></script>
    <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
    <script src="{{ asset('material') }}/js/plugins/jquery.bootstrap-wizard.js"></script>
    <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
    <script src="{{ asset('material') }}/js/plugins/bootstrap-selectpicker.js"></script>
    <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
    <script src="{{ asset('material') }}/js/plugins/bootstrap-datetimepicker.min.js"></script>
    <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
    <script src="{{ asset('material') }}/js/plugins/jquery.dataTables.min.js"></script>
    <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
    <script src="{{ asset('material') }}/js/plugins/bootstrap-tagsinput.js"></script>
    <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
    <script src="{{ asset('material') }}/js/plugins/jasny-bootstrap.min.js"></script>
    <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
    <script src="{{ asset('material') }}/js/plugins/fullcalendar.min.js"></script>
    <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
    <script src="{{ asset('material') }}/js/plugins/jquery-jvectormap.js"></script>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="{{ asset('material') }}/js/quill.min.js"></script>


    <script src="{{ asset('material') }}/js/plugins/nouislider.min.js"></script>
    <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
    <!-- Library for adding dinamically elements -->
    <script src="{{ asset('material') }}/js/plugins/arrive.min.js"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chartist JS -->
    <script src="{{ asset('material') }}/js/plugins/chartist.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="{{ asset('material') }}/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('material') }}/js/material-dashboard.js?v=2.1.0" type="text/javascript"></script>
    <!-- Material Dashboard DEMO methods, don't include it in your project! -->
    <script src="{{ asset('material') }}/demo/demo.js"></script>
    <script src="{{ asset('material') }}/js/application.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js"></script>

    <script>
        $(document).ready(function () {
            @if (session('status'))
                $.notify({
                    icon: "done",
                    message: "{{ session('status') }}"
                }, {
                    type: 'success',
                    timer: 3000,
                    placement: {
                        from: 'top',
                        align: 'right'
                    }
                });
            @endif
            @if (isset($errors))
                @foreach($errors->all() as $error)
                    $.notify({
                        icon: "",
                        message: "{{ $error }}"
                    }, {
                        type: 'danger',
                        timer: 3000,
                        placement: {
                            from: 'top',
                            align: 'right'
                        }
                    });
                @endforeach
            @endif
        });
    </script>

    <!-- Function for setting slug -->
    <script>
        function setSlug(element, slugElement) {
            let text = $(element).val();
            let slug = text.trim().replace(/\s+/g, '-').toLowerCase().replace(/[^0-9a-zA-Z ]/g, '-').replace(/-+/g, '-');
            if (slug[slug.length - 1] === '-') {
                slug = slug.substring(0, slug.length - 1);
            }

            $(slugElement).val(slug);
        }
    </script>
    @stack('js')
</body>

</html>