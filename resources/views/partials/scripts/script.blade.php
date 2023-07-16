<!-- vendor plugins -->
<script src="{{asset('assets/js/jquery_3.2.1.min.js')}}" async></script>
<script src="{{asset('assets/js/sweetalert2.js')}}" async></script>

@stack('vendor-scripts')

<!-- plugin for scrollbar -->
<script src="{{asset('assets/js/plugins/perfect-scrollbar.min.js')}}" async></script>

<!-- main script file -->
<script src="{{asset('assets/js/argon-dashboard-tailwind.js?v=1.0.1')}}" async></script> 
<script src="{{asset('assets/js/app.js?v=1.0.1')}}" async></script>
 

@if (\Session::has('success'))
    <script>
        swalSuccess({!! \Session::get('success') !!}) 
    </script>
@endif

@if (\Session::has('errors'))
    <script>
        swalError({!! \Session::get('errors') !!}) 
    </script>
@endif


@stack('child-scripts')