@extends('layouts.master')

@section('title', 'School List') 

@section('content')
<div class="flex flex-wrap -mx-3">
  <div class="flex-none w-full max-w-full px-3">
     <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
      <div class="p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl  border-b dark:border-white/40  flex justify-between">
         <h6 class="dark:text-white">Teachers Information</h6>
            <a href="{{route('teachers.create')}}" class="inline-block px-3 py-2 mb-4 text-xs font-bold text-center text-white capitalize transition-all ease-in rounded-lg shadow-md bg-slate-700 bg-150 hover:shadow-xs hover:-translate-y-px">
            <i class="ni ni-fat-add"></i> Create
         </a>
        </div>
        <div class="flex-auto px-0 pt-0 pb-2">
           <div class="p-0 overflow-x-auto">
              <table class="items-center w-full mb-0 align-top border-collapse dark:border-white/40 text-slate-500">
                 <thead class="align-bottom">
                    <tr>
                       <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Teachers Name</th>
                       <th class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Designation</th>
                       <th class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Mobile</th>
                       <th class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Email</th>
                       <th class="px-6 py-3 pl-2 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Present Address</th> 
                       <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Status</th>
                       <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Employed</th>
                       <th class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-collapse border-solid shadow-none dark:border-white/40 dark:text-white tracking-none whitespace-nowrap text-slate-400 opacity-70"></th>
                    </tr>
                 </thead>
                 <tbody>
                  @if(isset($rows) && count($rows) > 0)
                     @foreach ($rows as $data) 
                        <tr>
                           <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                              <div class="flex px-2 py-1"> 
                                 <div>
                                    @if(isset($data->picture) && $data->picture !=='') 
                                    <img src="{{asset('storage/'.$data->picture)}}" class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-in-out h-9 w-9 rounded-xl" alt="user1">
                                    @else 
                                    <img src="{{asset('assets/img/team-2.jpg')}}" class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-in-out h-9 w-9 rounded-xl" alt="user1">
                                    @endif
                                 </div> 
                                 <div class="flex flex-col justify-center">
                                    <h6 class="mb-0 text-sm leading-normal dark:text-white">{{$data->name??'N/A'}}</h6>
                                    <p class="mb-0 text-xs leading-tight dark:text-white dark:opacity-80 text-slate-400">{{$data->teachers_code??'N/A'}}</p>
                                 </div>
                              </div>
                           </td>
                           <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                              <p class="mb-0 text-xs font-semibold leading-tight dark:text-white dark:opacity-80">{{$data->designation??'N/A'}}</p> 
                           </td>
                           <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                              <span class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400">{{$data->mobile??''}}</span>
                           </td>
                           <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                              <span class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400">{{$data->email??''}}</span>
                           </td>
                           <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                              <span class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400">{{$data->present_address??''}}</span>
                           </td>
                           <td class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent"> 
                              <span class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400">{{$data->status??''}}</span>
                           </td>
                           <td class="p-2 text-center align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                              <span class="text-xs font-semibold leading-tight dark:text-white dark:opacity-80 text-slate-400">{{$data->date_of_birth??''}}</span>
                           </td>
                           <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                              <a href="{{route('teachers.edit', $data->id)}}" class="bg-slate-700 bg-150 to-teal-400 px-1 text-xs rounded-1 py-1 inline-block text-xs font-semibold leading-tight text-white ml-1"> Edit </a>
                              <a href="{{route('teachers.show', $data->id)}}" class="bg-gradient-to-tl from-emerald-500 to-teal-400 px-1 text-xs rounded-1 py-1 inline-block text-xs font-semibold leading-tight text-white ml-1"> Show </a>
                              <button onclick="deleteConfirm({{$data->id}});" class="bg-orange-500 from-emerald-500 to-teal-400 px-1 text-xs rounded-1 py-1 inline-block text-xs font-semibold leading-tight text-white ml-1"> Delete </button>
                              {!! Form::open([
                                    'method' => 'DELETE',
                                    'route' => ['teachers.destroy', $data->id],
                                    'style' => 'display:inline',
                                    'id' => 'delete-form' . $data->id,
                              ]) !!}
                              {!! Form::close() !!} 
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
@endpush