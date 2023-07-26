<!-- vendor plugins -->
<script src="{{asset('assets/js/jquery_3.2.1.min.js')}}"></script>
<script src="{{asset('assets/js/sweetalert2.js')}}"></script>

@stack('vendor-scripts')

<!-- plugin for scrollbar -->
<script src="{{asset('assets/js/plugins/perfect-scrollbar.min.js')}}"></script>

<!-- main script file -->
<script src="{{asset('assets/js/argon-dashboard-tailwind.js?v=1.0.1')}}"></script> 
<script src="{{asset('assets/js/app.js?v=1.0.1')}}"></script> 

@if(\Session::has('success'))
    <script>  
        swalSuccess("{!! \Session::get('success') !!}") 
    </script>
@endif

@if(\Session::has('error'))
    <script>
        swalError({!! \Session::get('error') !!}) 
    </script>
@endif

@stack('child-scripts')