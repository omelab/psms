@extends('layouts.master')

@section('title', 'Class Information') 

@section('content')
<div class="flex flex-wrap -mx-3">
  <div class="grid grid-cols-3 gap-4  w-full max-w-full px-3"> 
    <div class="relative flex flex-col min-w-0 mb-3 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
        <div class="flex justify-center p-6">
           <a href="{{route('subjects.index')}}"><img src="{{asset('assets/img/chinese.png')}}" width="100px" height="" alt="" /></a>
        </div>
        <div class="p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent flex justify-between">
           <h6 class="dark:text-white">Subject</h6>
           <a href="{{route('subjects.create')}}" class="inline-block px-3 py-2 mb-4 text-xs font-bold text-center text-white capitalize transition-all ease-in rounded-lg shadow-md bg-slate-700 bg-150 hover:shadow-xs hover:-translate-y-px"><i class="ni ni-fat-add"></i> Create</a>
        </div> 
    </div>
    <div class="relative flex flex-col min-w-0 mb-3 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
        <div class="flex justify-center p-6">
           <a href="{{route('exams.index')}}"><img src="{{asset('assets/img/calendar.png')}}" width="100px" height="" alt="" /></a>
        </div>
        <div class="p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent flex justify-between">
           <h6 class="dark:text-white">Exams</h6>
           <a href="{{route('exams.create')}}" class="inline-block px-3 py-2 mb-4 text-xs font-bold text-center text-white capitalize transition-all ease-in rounded-lg shadow-md bg-slate-700 bg-150 hover:shadow-xs hover:-translate-y-px"><i class="ni ni-fat-add"></i> Create</a>
        </div> 
    </div>
    <div class="relative flex flex-col min-w-0 mb-3 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
        <div class="flex justify-center p-6">
           <a href="{{route('books.index')}}"><img src="{{asset('assets/img/books.png')}}" width="100px" height="" alt="" /></a>
        </div>
        <div class="p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent flex justify-between">
           <h6 class="dark:text-white">Booklist</h6>
           <a href="{{route('books.create')}}" class="inline-block px-3 py-2 mb-4 text-xs font-bold text-center text-white capitalize transition-all ease-in rounded-lg shadow-md bg-slate-700 bg-150 hover:shadow-xs hover:-translate-y-px"><i class="ni ni-fat-add"></i> Create</a>
        </div> 
    </div>
    <div class="relative flex flex-col min-w-0 mb-3 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
        <div class="flex justify-center p-6">
           <a href="{{route('programs.index')}}"><img src="{{asset('assets/img/online-learning.png')}}" width="100px" height="" alt="" /></a>
        </div>
        <div class="p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent flex justify-between">
           <h6 class="dark:text-white">Class/Level</h6>
           <a href="{{route('programs.create')}}" class="inline-block px-3 py-2 mb-4 text-xs font-bold text-center text-white capitalize transition-all ease-in rounded-lg shadow-md bg-slate-700 bg-150 hover:shadow-xs hover:-translate-y-px"><i class="ni ni-fat-add"></i> Create</a>
        </div> 
    </div>
     
  </div>
</div>
            
@stop

<!-- vendor plugins -->
@push('child-scripts')
  <script src="{{asset('assets/js/plugins/chartjs.min.js')}}" async></script>
@endpush