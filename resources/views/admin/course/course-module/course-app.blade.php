@extends('admin.layouts.master')

@section('content')
    <div class="page-body">
        <div class="container-xl">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Course Create</h3>
                    <div class="card-actions">
                        <a href="{{ route('admin.courses.index') }}" class="btn btn-primary">
                            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                            <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-left"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l14 0" /><path d="M5 12l6 6" /><path d="M5 12l6 -6" /></svg>
                            Back
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="dashboard_add_courses">
                        <ul class="nav nav-pills" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation ">
                                <a href="" class="nav-link course-tab {{ request('step') == 1 ? 'active' : '' }}" data-step="1">Basic Infos</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a href="" class="nav-link course-tab {{ request('step') == 2 ? 'active' : '' }}" data-step="2">More Info</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a href="" class="nav-link course-tab {{ request('step') == 3 ? 'active' : '' }}" data-step="3">Course Contents</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a href="" class="nav-link course-tab {{ request('step') == 4 ? 'active' : '' }}" data-step="4" >Finish</a>
                            </li>
                        </ul>
                        @yield('tab_content')
                    </div>


                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script type="module">
     $('#lfm').filemanager('file', {prefix: '/admin/laravel-filemanager'});
</script>
@endpush

@push('header_scripts')
    @vite(['resources/js/admin/course.js'])
@endpush
