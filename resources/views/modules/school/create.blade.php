@extends('layouts.master')

@section('title', 'Update Schools Information') 

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
               {!! Form::open(['route' => ['schools.store', $school->id??null], "role"=>"form text-left"]) !!} 
                  <div class="mb-4 mt-4">
                     <label class="block text-gray-700 text-sm font-bold mb-2" for="username">স্কুল আইডি : </label>
                     {!! Form::text('school_code', $school->school_code??null, [
                        'placeholder'=>'স্কুল আইডি', 'required'=>true, 'class'=>'focus:shadow-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding p-3 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none'
                     ]) !!} 
                  </div>
                  <div class="mb-4">
                     <label class="block text-gray-700 text-sm font-bold mb-2" for="username">স্কুলের নাম : </label>
                     {!! Form::text('school_name', $school->school_name??null, [
                        'placeholder'=>'স্কুলের নাম', 'required'=>true, 'class'=>'focus:shadow-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding p-3 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none'
                     ]) !!} 
                  </div>
                  <div class="mb-4">
                     <label class="block text-gray-700 text-sm font-bold mb-2" for="username">নিবন্ধন নম্বর :</label>
                     {!! Form::text('regi_number', $school->regi_number??null, [
                        'placeholder'=>'নিবন্ধন নম্বর', 'required'=>true, 'class'=>'focus:shadow-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding p-3 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none'
                     ]) !!}
                  </div> 
                  <div class="mb-4">
                     <label class="block text-gray-700 text-sm font-bold mb-2" for="username">ঠিকানা :</label>
                     {!! Form::text('address', $school->address??null, [
                        'placeholder'=>'ঠিকানা', 'required'=>true, 'class'=>'focus:shadow-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding p-3 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none'
                     ]) !!}
                  </div>
                  <div class="mb-4">
                     <label class="block text-gray-700 text-sm font-bold mb-2" for="username">ইএমআইএস নম্বর :</label>
                     {!! Form::text('emis_no', $school->emis_no??null, [
                        'placeholder'=>'ইএমআইএস নম্বর', 'required'=>true, 'class'=>'focus:shadow-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding p-3 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none'
                     ]) !!}
                  </div>
                  <div class="mb-4">
                     <label class="block text-gray-700 text-sm font-bold mb-2" for="username">প্রতিষ্ঠার বছর :</label>
                     {!! Form::text('establishment', $school->establishment??null, [
                        'placeholder'=>'প্রতিষ্ঠার বছর', 'required'=>true, 'class'=>'focus:shadow-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding p-3 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none'
                     ]) !!} 
                  </div>
                  <div class="text-left">
                     <button type="submit" class="inline-block px-16 py-3.5 mt-6 mb-2 font-bold leading-normal text-center text-white align-middle transition-all bg-blue-500 border-0 rounded-lg cursor-pointer hover:-translate-y-px active:opacity-85 hover:shadow-xs text-sm ease-in tracking-tight-rem shadow-md bg-150 bg-x-25">
                     @if(isset($school->id)) Update Now @else Submit Now @endif
                     </button>
                  </div>
               {!! Form::close() !!}
            </div>
         </div>
      </div>
   </div>
 </div>
 
@stop 
@push('child-scripts') 
@endpush
