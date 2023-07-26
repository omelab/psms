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
              @if (isset($teacher->id))
                {!! Form::model($teacher, [
                  'method' => 'PATCH',
                  'route' => ['teachers.update', $teacher->id],
                  'role' => 'form text-left',
                  'files' => true,
                ]) !!}  
              @else 
                {!! Form::open(['route' => ['teachers.store'], 'method' => 'POST', 'files' => true, "role"=>"form text-left"]) !!}
              @endif 
                  <div class="grid grid-cols-6 gap-4 mb-4 mt-4">  
                    <label class="p-4 text-gray-700" for="teachers_code">শিক্ষক আইডি :</label>
                    <div class="col-span-4">
                    {!! Form::text('teachers_code', $teacher->teachers_code??null, [
                      'placeholder'=>'শিক্ষক আইডি', 'required'=>true, 'class'=>'focus:shadow-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding p-3 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none'
                    ]) !!}
                    @if($errors->has('teachers_code'))
                      <div class="form-control-feedback">{{ $errors->first('teachers_code') }}</div>
                    @endif
                    </div>
                  </div>
                  <div class="grid grid-cols-6 gap-4 mb-4 mt-4">  
                    <label class="p-4 text-gray-700" for="name">নাম :</label>
                    <div class="col-span-4">
                    {!! Form::text('name', $teacher->name??null, [
                      'placeholder'=>'নাম', 'required'=>true, 'class'=>'focus:shadow-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding p-3 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none'
                    ]) !!}
                    @if($errors->has('name'))
                     <div class="form-control-feedback">{{ $errors->first('name') }}</div>
                    @endif
                    </div>
                  </div>
                  <div class="grid grid-cols-6 gap-4 mb-4 mt-4">  
                    <label class="p-4 text-gray-700" for="designation">পদবী :</label>
                    <div class="col-span-4">
                      {!! Form::text('designation', $teacher->designation??null, [
                        'placeholder'=>'পদবী', 'required'=>true, 'class'=>'focus:shadow-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding p-3 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none'
                      ]) !!}
                      @if($errors->has('designation'))
                      <div class="form-control-feedback">{{ $errors->first('designation') }}</div>
                      @endif
                    </div>
                  </div>
                  <div class="grid grid-cols-6 gap-4 mb-4 mt-4">  
                    <label class="p-4 text-gray-700" for="prmanent_address">স্থায়ী ঠিকানা :</label>
                    <div class="col-span-4">
                      {!! Form::text('prmanent_address', $teacher->prmanent_address??null, [
                        'placeholder'=>'স্থায়ী ঠিকানা', 'required'=>true, 'class'=>'focus:shadow-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding p-3 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none'
                      ]) !!}
                      @if($errors->has('prmanent_address'))
                      <div class="form-control-feedback">{{ $errors->first('prmanent_address') }}</div>
                      @endif
                    </div>
                  </div>
                  <div class="grid grid-cols-6 gap-4 mb-4 mt-4">  
                    <label class="p-4 text-gray-700" for="present_address">বর্তমান ঠিকানা :</label>
                    <div class="col-span-4">
                      {!! Form::text('present_address', $teacher->present_address??null, [
                        'placeholder'=>'বর্তমান ঠিকানা', 'required'=>true, 'class'=>'focus:shadow-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding p-3 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none'
                      ]) !!}
                      @if($errors->has('present_address'))
                      <div class="form-control-feedback">{{ $errors->first('present_address') }}</div>
                      @endif
                    </div>
                  </div>
                  <div class="grid grid-cols-6 gap-4 mb-4 mt-4">  
                    <label class="p-4 text-gray-700" for="district">জেলা :</label>
                    <div class="col-span-4">
                      {!! Form::text('district', $teacher->district??null, [
                        'placeholder'=>'জেলা', 'required'=>true, 'class'=>'focus:shadow-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding p-3 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none'
                      ]) !!}
                      @if($errors->has('district'))
                      <div class="form-control-feedback">{{ $errors->first('district') }}</div>
                      @endif
                    </div>
                  </div>
                  <div class="grid grid-cols-6 gap-4 mb-4 mt-4">  
                    <label class="p-4 text-gray-700" for="gender">লিঙ্গ :</label>
                    <div class="col-span-4">
                      {!! Form::select('gender', ['পুরুষ'=>'পুরুষ', 'মহিলা'=>'মহিলা'], $teacher->gender??null, [
                        'placeholder'=>'লিঙ্গ', 'required'=>true, 'class'=>'focus:shadow-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding p-3 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none'
                      ]) !!}
                      @if($errors->has('gender'))
                      <div class="form-control-feedback">{{ $errors->first('gender') }}</div>
                      @endif
                    </div>
                  </div>
                  <div class="grid grid-cols-6 gap-4 mb-4 mt-4">  
                    <label class="p-4 text-gray-700" for="marital_status">বৈবাহিক অবস্থা :</label>
                    <div class="col-span-4">
                      {!! Form::select('marital_status', ['বিবাহিত'=>'বিবাহিত', 'অবিবাহিত'=>'অবিবাহিত'], $teacher->marital_status??null, [
                        'placeholder'=>'বৈবাহিক অবস্থা', 'required'=>true, 'class'=>'focus:shadow-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding p-3 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none'
                      ]) !!}
                      @if($errors->has('marital_status'))
                      <div class="form-control-feedback">{{ $errors->first('marital_status') }}</div>
                      @endif
                    </div>
                  </div>
                  <div class="grid grid-cols-6 gap-4 mb-4 mt-4">  
                    <label class="p-4 text-gray-700" for="date_of_birth">জন্ম তারিখ :</label>
                    <div class="col-span-4"> 

                      {!! Form::date('date_of_birth', isset($teacher->date_of_birth) ? date('Y-m-d', strtotime($teacher->date_of_birth)):null, [
                        'placeholder'=>'জন্ম তারিখ', 'required'=>true, 'class'=>'focus:shadow-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding p-3 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none'
                      ]) !!}
                      @if($errors->has('date_of_birth'))
                      <div class="form-control-feedback">{{ $errors->first('date_of_birth') }}</div>
                      @endif
                    </div>
                  </div>
                  <div class="grid grid-cols-6 gap-4 mb-4 mt-4">  
                    <label class="p-4 text-gray-700" for="education">শিক্ষাগত যোগ্যতা :</label>
                    <div class="col-span-4">
                    {!! Form::text('education', $teacher->education??null, [
                      'placeholder'=>'শিক্ষাগত যোগ্যতা', 'required'=>true, 'class'=>'focus:shadow-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding p-3 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none'
                    ]) !!}
                    @if($errors->has('education'))
                    <div class="form-control-feedback">{{ $errors->first('education') }}</div>
                    @endif
                    </div>
                  </div>
                  <div class="grid grid-cols-6 gap-4 mb-4 mt-4">  
                    <label class="p-4 text-gray-700" for="name">বিভাগ :</label>
                    <div class="col-span-4">
                    {!! Form::text('department', $teacher->department??null, [
                      'placeholder'=>'বিভাগ', 'required'=>true, 'class'=>'focus:shadow-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding p-3 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none'
                    ]) !!}
                     @if($errors->has('department'))
                     <div class="form-control-feedback">{{ $errors->first('department') }}</div>
                     @endif
                    </div>
                  </div>
                  <div class="grid grid-cols-6 gap-4 mb-4 mt-4">  
                    <label class="p-4 text-gray-700" for="email">ই-মেইল :</label>
                    <div class="col-span-4">
                    {!! Form::text('email', $teacher->email??null, [
                      'placeholder'=>'ই-মেইল', 'required'=>true, 'class'=>'focus:shadow-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding p-3 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none'
                    ]) !!}
                     @if($errors->has('email'))
                     <div class="form-control-feedback">{{ $errors->first('email') }}</div>
                     @endif
                    </div>
                  </div>
                  <div class="grid grid-cols-6 gap-4 mb-4 mt-4">  
                    <label class="p-4 text-gray-700" for="mobile">মোবাইল নাম্বার :</label>
                    <div class="col-span-4">
                    {!! Form::text('mobile', $teacher->mobile??null, [
                      'placeholder'=>'মোবাইল নাম্বার', 'required'=>true, 'class'=>'focus:shadow-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding p-3 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none'
                    ]) !!}  
                    </div>
                  </div>
                  <div class="grid grid-cols-6 gap-4 mb-4 mt-4">  
                    <label class="p-4 text-gray-700" for="notes">নোটস :</label>
                    <div class="col-span-4">
                    {!! Form::text('notes', $teacher->notes??null, [
                      'placeholder'=>'নোটস', 'required'=>true, 'class'=>'focus:shadow-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding p-3 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none'
                    ]) !!}
                     @if($errors->has('notes'))
                     <div class="form-control-feedback">{{ $errors->first('notes') }}</div>
                     @endif
                    </div>
                  </div>
                  <div class="grid grid-cols-6 gap-4 mb-4 mt-4">  
                    <label class="p-4 text-gray-700" for="joining_date">যোগদান তারিখ :</label>
                    <div class="col-span-4"> 
                      {!! Form::date('joining_date', isset($teacher->joining_date) ? date('Y-m-d', strtotime($teacher->joining_date)):null, [
                        'placeholder'=>'যোগদান তারিখ', 'required'=>true, 'class'=>'focus:shadow-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding p-3 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none'
                      ]) !!}
                      @if($errors->has('joining_date'))
                      <div class="form-control-feedback">{{ $errors->first('joining_date') }}</div>
                      @endif
                    </div>
                  </div>
                  <div class="grid grid-cols-6 gap-4 mb-4 mt-4">  
                    <label class="p-4 text-gray-700" for="notes">ছবি :</label>
                    <div class="col-span-4">
                        <div class="focus:shadow-primary-outline dark:bg-gray-950 dark:placeholder:text-white/80 dark:text-white/80 text-sm leading-5.6 ease block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding p-3 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
                        @if(isset($teacher->picture) && $teacher->picture !=='') 
                          <img src="{{asset('storage/'.$teacher->picture)}}" class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-in-out h-12 w-12 rounded-xl" alt="user1">
                        @endif  
                        {!! Form::file('picture', null, [
                          'placeholder'=>'ছবি', 'required'=>true, 'id'=>'picture', 'class'=>'picture'
                        ]) !!}

                        </div>
                        @if($errors->has('picture'))
                          <div class="form-control-feedback">{{ $errors->first('picture') }}</div>
                        @endif
                    </div>
                  </div>
                  <div class="grid grid-cols-6 gap-4 mb-4 mt-4">  
                    <label class="p-4 text-gray-700" for="name">&nbsp;</label>
                    <div class="col-span-2">
                      <button type="submit" class="inline-block px-16 py-3.5 mt-6 mb-2 font-bold leading-normal text-center text-white align-middle transition-all bg-blue-500 border-0 rounded-lg cursor-pointer hover:-translate-y-px active:opacity-85 hover:shadow-xs text-sm ease-in tracking-tight-rem shadow-md bg-150 bg-x-25">
                      @if(isset($teacher->id)) Update Now @else Submit Now @endif
                      </button>
                    </div>
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
