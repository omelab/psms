<!-- Navbar -->
<div class="container sticky top-0 z-sticky">
    <div class="flex flex-wrap -mx-3">
      <div class="w-full max-w-full px-3 flex-0">
        <nav class="absolute top-0 left-0 right-0 z-30 flex flex-wrap items-center px-4 py-2 m-6 mb-0 shadow-sm rounded-xl bg-white/80 backdrop-blur-2xl backdrop-saturate-200 lg:flex-nowrap lg:justify-start">
          <div class="flex items-center justify-between w-full p-0 px-6 mx-auto flex-wrap-inherit">
            <a class="py-0 text-sm mr-4 ml-4 whitespace-nowrap font-bold text-slate-700 lg:ml-0" href="{{url('/')}}"><img src="{{asset('/assets/img/logo-ct-dark.png')}}" alt="PSMS" width="170"></a>
            
            <button navbar-trigger class="px-3 py-1 ml-2 leading-none transition-all ease-in-out bg-transparent border border-transparent border-solid rounded-lg shadow-none cursor-pointer text-lg lg:hidden" type="button" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
              <span class="inline-block mt-2 align-middle bg-center bg-no-repeat bg-cover w-6 h-6 bg-none">
                <span bar1 class="w-5.5 rounded-xs relative my-0 mx-auto block h-px bg-gray-600 transition-all duration-300"></span>
                <span bar2 class="w-5.5 rounded-xs mt-1.75 relative my-0 mx-auto block h-px bg-gray-600 transition-all duration-300"></span>
                <span bar3 class="w-5.5 rounded-xs mt-1.75 relative my-0 mx-auto block h-px bg-gray-600 transition-all duration-300"></span>
              </span>
            </button>
            <div navbar-menu class="items-center flex-grow transition-all duration-500 lg-max:overflow-hidden ease lg-max:max-h-0 basis-full lg:flex lg:basis-auto">
              <ul class="flex flex-col pl-0 mx-auto mb-0 list-none lg:flex-row xl:ml-auto">
                {{-- <li>
                  <a class="flex items-center px-4 py-2 mr-2 font-normal transition-all ease-in-out lg-max:opacity-0 duration-250 text-sm text-slate-700 lg:px-2" aria-current="page" href="../pages/dashboard.html">
                    <i class="mr-1 fa fa-chart-pie opacity-60"></i>
                    Dashboard
                  </a>
                </li>
                <li>
                  <a class="block px-4 py-2 mr-2 font-normal transition-all ease-in-out lg-max:opacity-0 duration-250 text-sm text-slate-700 lg:px-2" href="../pages/profile.html">
                    <i class="mr-1 fa fa-user opacity-60"></i>
                    Profile
                  </a>
                </li> --}}
                <li>
                  <a class="block px-4 py-2 mr-2 font-normal transition-all ease-in-out lg-max:opacity-0 duration-250 text-sm text-slate-700 lg:px-2" href="{{ route('admin.register-view') }}">
                    <i class="mr-1 fas fa-user-circle opacity-60"></i>
                    Sign Up
                  </a>
                </li>
                <li>
                  <a class="block px-4 py-2 mr-2 font-normal transition-all ease-in-out lg-max:opacity-0 duration-250 text-sm text-slate-700 lg:px-2" href="{{ route('admin.login-view') }}">
                    <i class="mr-1 fas fa-key opacity-60"></i>
                    Sign In
                  </a>
                </li>
              </ul>
              <!-- online builder btn  -->
              <!-- <li class="flex items-center">
                <a
                  class="leading-pro ease-in text-blue-500 border-blue-500 text-xs tracking-tight-rem bg-150 bg-x-25 rounded-3.5xl hover:border-blue-500 hover:-translate-y-px hover:text-blue-500 active:hover:border-blue-500 active:hover:-translate-y-px active:hover:text-blue-500 active:opacity-85 active:shadow-xs active:bg-blue-500 active:border-blue-500 mr-2 mb-0 inline-block cursor-pointer border border-solid bg-transparent py-2 px-8 text-center align-middle font-bold uppercase shadow-none transition-all hover:bg-transparent hover:opacity-75 hover:shadow-none active:scale-100 active:text-white active:hover:bg-transparent active:hover:opacity-75 active:hover:shadow-none"
                  target="_blank"
                  href="https://www.creative-tim.com/builder/soft-ui?ref=navbar-dashboard&amp;_ga=2.76518741.1192788655.1647724933-1242940210.1644448053"
                  >Online Builder</a
                >
              </li> -->
              <ul class="hidden pl-0 mb-0 list-none lg:block lg:flex-row">
                <li>
                  <a href="https://www.abubakar.biz/psms" target="_blank" class="inline-block px-8 py-2 mb-0 mr-1 font-bold leading-normal text-center text-white align-middle transition-all ease-in bg-blue-500 border-0 rounded-lg shadow-md cursor-pointer hover:-translate-y-px hover:shadow-xs active:opacity-85 text-xs tracking-tight-rem">Get Free</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </div>