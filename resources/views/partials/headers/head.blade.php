<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/img/apple-icon.png')}}" />
<link rel="icon" type="image/png" href="{{asset('assets/img/favicon.png')}}" />

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<title>{{ config('app.title', 'Primary School Management') }} - @yield('title')</title>
 

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />

<!-- Font Awesome Icons -->
<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

<!-- Nucleo Icons -->
<link href="{{asset('assets/css/nucleo-icons.css')}}" rel="stylesheet" />
<link href="{{asset('assets/css/nucleo-svg.css')}}" rel="stylesheet" />

<!-- Popper -->
<script src="https://unpkg.com/@popperjs/core@2"></script>

<!-- Main Styling -->
<link href="{{asset('assets/css/argon-dashboard-tailwind.css?v=1.0.1')}}" rel="stylesheet" />
<link href="{{asset('assets/css/customize.css?v=1.0.1')}}" rel="stylesheet" />