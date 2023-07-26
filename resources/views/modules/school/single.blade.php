@extends('layouts.master')

@section('title', 'Show Schools Information') 

@section('breadcrumb') 
   <li class="text-sm pl-2 capitalize leading-normal text-white before:float-left before:pr-2 before:text-white before:content-['/']" aria-current="page">
      <a class="text-white" href="{{route('schools.index')}}">স্কুল তথ্য</a>
   </li>
@endsection 

@section('content')   
<div class="flex flex-wrap -mx-3">
   <div class="flex-none w-full max-w-full px-3">
      <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
         <div class="p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl  border-b dark:border-white/40  flex justify-between">
            <h6 class="dark:text-white">স্কুল তথ্য</h6>
            <a href="{{route('schools.index')}}"  class="inline-block px-3 py-2 mb-4 text-xs font-bold text-center text-white capitalize transition-all ease-in rounded-lg shadow-md bg-slate-700 bg-150 hover:shadow-xs hover:-translate-y-px">
              <i class="ni ni-bold-left"></i> Back
           </a>
         </div>
         <div class="flex-auto px-0 pt-0 pb-2">
            <div class="pl-4 pr-4 overflow-x-auto">  
                  <div class="mb-4 mt-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">স্কুল আইডি :</label>
                    <p class="focus:shadow-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding p-3 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">{{$school->school_code}}</p>
                  </div>
                  <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">স্কুলের নাম : </label>
                    <p class="focus:shadow-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding p-3 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
                      {{$school->school_name}}
                    </p>
                  </div>
                  <div class="mb-4">
                     <label class="block text-gray-700 text-sm font-bold mb-2" for="username">নিবন্ধন নম্বর :</label>
                     <p class="focus:shadow-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding p-3 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
                      {{$school->regi_number}}
                    </p> 
                  </div> 
                  <div class="mb-4">
                     <label class="block text-gray-700 text-sm font-bold mb-2" for="username">ঠিকানা :</label>
                    <p class="focus:shadow-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding p-3 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
                      {{$school->address}}
                    </p>  
                  </div>
                  <div class="mb-4">
                     <label class="block text-gray-700 text-sm font-bold mb-2" for="username">ইএমআইএস নম্বর :</label>
                    <p class="focus:shadow-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding p-3 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
                      {{$school->emis_no}}
                    </p>
                  </div>
                  <div class="mb-4">
                     <label class="block text-gray-700 text-sm font-bold mb-2" for="username">প্রতিষ্ঠার বছর :</label>
                    <p class="focus:shadow-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding p-3 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
                      {{$school->establishment}}
                    </p> 
                  </div>
            </div>
         </div>
      </div>
   </div>
 </div> 
@stop 
@push('child-scripts') 
@endpush
