@extends('layouts.master')

@section('title', 'School Information List') 

@section('breadcrumb') 
   <li class="text-sm pl-2 capitalize leading-normal text-white before:float-left before:pr-2 before:text-white before:content-['/']" aria-current="page">
      <a class="text-white" href="{{route('schools.index')}}">Schools</a>
   </li>
@endsection 

@section('content')
<div class="flex flex-wrap -mx-3 mt-10">
  <div class="flex-none w-full max-w-full px-3">
     <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
        <div class="p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent flex justify-between">
           <h6 class="dark:text-white">School List</h6>
           {{-- <a href="{{route('schools.create')}}"  class="inline-block px-3 py-2 mb-4 text-xs font-bold text-center text-white capitalize transition-all ease-in rounded-lg shadow-md bg-slate-700 bg-150 hover:shadow-xs hover:-translate-y-px"><i class="ni ni-fat-add"></i> Create</a> --}}
        </div>
        <div class="flex-auto px-0 pt-0 pb-2">
           <div class="p-0 overflow-x-auto">
              <table class="items-center w-full mb-0 align-top border-collapse dark:border-white/40 text-slate-500">
                 <thead class="align-bottom">
                    <tr>
                       <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">School ID</th>
                       <th class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">School Name</th>
                       <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Regi: Number</th>
                       <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Address</th>
                       <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">EMIS No.</th>
                       <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Establishment Year</th>
                       <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Action</th>
                    </tr>
                 </thead>
                 <tbody> 
                  @if(isset($schools) && count($schools) > 0)
                     @foreach ($schools as $row) 
                     <tr>
                        <td class="pt-2 pr-2 pl-4 pb-2 align-middle bg-transparent whitespace-nowrap shadow-transparent">
                           <p class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-80">{{$row->school_code??'N/A'}}</p> 
                        </td>
                        <td class="p-2 align-middle bg-transparent whitespace-nowrap shadow-transparent">
                           <p class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-80">{{$row->school_name??'N/A'}}</p> 
                        </td>
                        <td class="p-2 text-sm leading-normal text-center align-middle bg-transparent whitespace-nowrap shadow-transparent">
                           <p class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-80">{{$row->regi_number??'N/A'}}</p>  
                        </td>
                        <td class="p-2 text-center align-middle bg-transparent whitespace-nowrap shadow-transparent">
                           <span class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400">{{$row->address??'N/A'}}</span>
                        </td>
                        <td class="p-2 text-center align-middle bg-transparent whitespace-nowrap shadow-transparent">
                           <span class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400">{{$row->emis_no??'N/A'}}</span>
                        </td>
                        <td class="p-2 text-center align-middle bg-transparent whitespace-nowrap shadow-transparent">
                           <span class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400">{{$row->establishment??'N/A'}}</span>
                        </td>
                        <td class="p-2 align-middle bg-transparent whitespace-nowrap shadow-transparent">
                           <a href="{{route('schools.create', $row->id)}}" class="bg-orange-500 from-emerald-500 to-teal-400 px-1 text-xs rounded-1 py-1 inline-block text-xs font-semibold leading-tight text-white ml-1"> Edit </a>
                           <a href="{{route('schools.show', $row->id)}}" class="bg-gradient-to-tl from-emerald-500 to-teal-400 px-1 text-xs rounded-1 py-1 inline-block text-xs font-semibold leading-tight text-white ml-1"> Show </a>
                        </td>
                     </tr> 
                     @endforeach
                  @endif
                 </tbody>
              </table>
           </div>
        </div>
     </div>
  </div>
</div>
@stop

<!-- vendor plugins -->
@push('child-scripts')
  <script src="{{asset('assets/js/plugins/chartjs.min.js')}}" async></script>
@endpush