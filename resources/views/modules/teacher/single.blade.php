@extends('layouts.master')
@section('title', 'Create New Teacher')
@section('breadcrumb') 
   <li class="text-sm pl-2 capitalize leading-normal text-white before:float-left before:pr-2 before:text-white before:content-['/']" aria-current="page">
      <a class="text-white" href="{{route('teachers.index')}}">Teacher</a>
   </li>
@endsection
@section('content')
<div class="flex flex-wrap -mx-3">
   <div class="flex-none w-full max-w-full px-3">
      <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
         <div class="p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl  border-b dark:border-white/40  flex justify-between">
            <h6 class="dark:text-white">Teacher Information</h6>
            <a href="{{route('teachers.index')}}"  class="inline-block px-3 py-2 mb-4 text-xs font-bold text-center text-white capitalize transition-all ease-in rounded-lg shadow-md bg-slate-700 bg-150 hover:shadow-xs hover:-translate-y-px">
               <i class="ni ni-bold-left"></i> Back to List
            </a>
         </div>

         <div class="flex-auto px-0 pt-0 pb-2">
            <div class="pl-4 pr-4 overflow-x-auto">
              <div class="grid grid-cols-6 gap-4 mb-4 mt-4">  
                <label class="p-4 text-gray-700" for="teachers_code">শিক্ষক আইডি :</label>
                <div class="col-span-4 focus:shadow-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding p-3 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
                  {{$teacher->teachers_code??null}}
                </div>
              </div> 
              <div class="grid grid-cols-6 gap-4 mb-4 mt-4">  
                <label class="p-4 text-gray-700" for="teachers_code">নাম :</label>
                <div class="col-span-4 focus:shadow-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding p-3 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
                  {{$teacher->name??null}}
                </div>
              </div> 
              <div class="grid grid-cols-6 gap-4 mb-4 mt-4">  
                <label class="p-4 text-gray-700" for="teachers_code">পদবী :</label>
                <div class="col-span-4 focus:shadow-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding p-3 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
                  {{$teacher->designation??null}}
                </div>
              </div> 
              <div class="grid grid-cols-6 gap-4 mb-4 mt-4">  
                <label class="p-4 text-gray-700" for="teachers_code">স্থায়ী ঠিকানা :</label>
                <div class="col-span-4 focus:shadow-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding p-3 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
                  {{$teacher->prmanent_address??null}}
                </div>
              </div> 
              <div class="grid grid-cols-6 gap-4 mb-4 mt-4">  
                <label class="p-4 text-gray-700" for="teachers_code">বর্তমান ঠিকানা  :</label>
                <div class="col-span-4 focus:shadow-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding p-3 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
                  {{$teacher->present_address??null}}
                </div>
              </div>  
              <div class="grid grid-cols-6 gap-4 mb-4 mt-4">  
                <label class="p-4 text-gray-700" for="teachers_code">জেলা  :</label>
                <div class="col-span-4 focus:shadow-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding p-3 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
                  {{$teacher->district??null}}
                </div>
              </div> 
              <div class="grid grid-cols-6 gap-4 mb-4 mt-4">  
                <label class="p-4 text-gray-700" for="teachers_code">লিঙ্গ  :</label>
                <div class="col-span-4 focus:shadow-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding p-3 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
                  {{$teacher->gender??null}}
                </div>
              </div> 
              <div class="grid grid-cols-6 gap-4 mb-4 mt-4">  
                <label class="p-4 text-gray-700" for="teachers_code">বৈবাহিক অবস্থা :</label>
                <div class="col-span-4 focus:shadow-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding p-3 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
                  {{$teacher->marital_status??null}}
                </div>
              </div> 
              <div class="grid grid-cols-6 gap-4 mb-4 mt-4">  
                <label class="p-4 text-gray-700" for="teachers_code">জন্ম তারিখ :</label>
                <div class="col-span-4 focus:shadow-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding p-3 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
                  {{ isset($teacher->date_of_birth) ? date('dd/mm/yyyy', strtotime($teacher->date_of_birth)):null}}
                </div>
              </div> 
              <div class="grid grid-cols-6 gap-4 mb-4 mt-4">  
                <label class="p-4 text-gray-700" for="teachers_code">শিক্ষাগত যোগ্যতা :</label>
                <div class="col-span-4 focus:shadow-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding p-3 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
                  {{ $teacher->education??null}}
                </div>
              </div> 
              <div class="grid grid-cols-6 gap-4 mb-4 mt-4">  
                <label class="p-4 text-gray-700" for="teachers_code">বিভাগ :</label>
                <div class="col-span-4 focus:shadow-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding p-3 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
                  {{ $teacher->department??null}}
                </div>
              </div> 
              <div class="grid grid-cols-6 gap-4 mb-4 mt-4">  
                <label class="p-4 text-gray-700" for="teachers_code">ই-মেইল :</label>
                <div class="col-span-4 focus:shadow-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding p-3 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
                  {{ $teacher->email??null}}
                </div>
              </div> 
              <div class="grid grid-cols-6 gap-4 mb-4 mt-4">  
                <label class="p-4 text-gray-700" for="teachers_code">মোবাইল নাম্বার :</label>
                <div class="col-span-4 focus:shadow-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding p-3 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
                  {{ $teacher->mobile??null}}
                </div>
              </div>
              <div class="grid grid-cols-6 gap-4 mb-4 mt-4">  
                <label class="p-4 text-gray-700" for="teachers_code">নোটস :</label>
                <div class="col-span-4 focus:shadow-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding p-3 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
                  {{ $teacher->notes??null}}
                </div>
              </div>
              <div class="grid grid-cols-6 gap-4 mb-4 mt-4">  
                <label class="p-4 text-gray-700" for="teachers_code">যোগদান তারিখ  :</label>
                <div class="col-span-4 focus:shadow-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding p-3 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
                  {{ isset($teacher->joining_date) ? date('dd/mm/yyyy', strtotime($teacher->joining_date)):null}}
                </div>
              </div>
              <div class="grid grid-cols-6 gap-4 mb-4 mt-4">  
                <label class="p-4 text-gray-700" for="teachers_code">ছবি :</label>
                <div class="col-span-4">
                  @if(isset($teacher->picture) && $teacher->picture !=='') 
                    <img src="{{asset('storage/'.$teacher->picture)}}" class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-in-out h-12 w-12 rounded-xl" alt="user1">
                  @endif 
                </div>
              </div>  
            </div>
         </div>
      </div>
   </div>
 </div>
@stop 
 
