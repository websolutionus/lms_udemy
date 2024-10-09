@extends('admin.layouts.master')

@section('content')
    <div class="page-body">
        <div class="container-xl">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Create Level</h3>
                    <div class="card-actions">
                        <a href="{{ route('admin.course-levels.index') }}" class="btn btn-primary">
                            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round"
                                class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-left">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                <path d="M5 12l14 0" />
                                <path d="M5 12l6 6" />
                                <path d="M5 12l6 -6" />
                            </svg>
                            Back
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="card">
                        <div class="card-header">
                            <ul class="nav nav-tabs card-header-tabs nav-fill" data-bs-toggle="tabs" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a href="#paypal-seeting" class="nav-link active" data-bs-toggle="tab" aria-selected="false"
                                        role="tab" tabindex="-1">Paypal Settings</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a href="#tabs-profile-5" class="nav-link" data-bs-toggle="tab" aria-selected="false"
                                        role="tab" tabindex="-1">Profile</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a href="#tabs-activity-5" class="nav-link" data-bs-toggle="tab"
                                        aria-selected="true" role="tab">Activity</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane active" id="paypal-seeting" role="tabpanel">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <div class="mb-3">
                                                <label class="form-label">Paypal Mode</label>
                                                <input type="text" class="form-control" name="name"
                                                    placeholder="Enter Level name">
                                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                            </div>
                                        </div>

                                        <div class="col-md-5">
                                            <div class="mb-3">
                                                <label class="form-label">Currency</label>
                                                <input type="text" class="form-control" name="name"
                                                    placeholder="Enter Level name">
                                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="mb-3">
                                                <label class="form-label">Rate (USD)</label>
                                                <input type="text" class="form-control" name="name"
                                                    placeholder="Enter Level name">
                                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label class="form-label">Clinet Id</label>
                                                <input type="text" class="form-control" name="name"
                                                    placeholder="Enter Level name">
                                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label class="form-label">Clinet Secret</label>
                                                <input type="text" class="form-control" name="name"
                                                    placeholder="Enter Level name">
                                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="mb-3">
                                                <label class="form-label">App Id</label>
                                                <input type="text" class="form-control" name="name"
                                                    placeholder="Enter Level name">
                                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                            </div>
                                        </div>

                                        
                                    </div>
                                    <div class="text-end">
                                        <a href="" class="btn btn-primary">Save</a>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tabs-profile-5" role="tabpanel">
                                    <h4>Profile tab</h4>
                                    <div>Fringilla egestas nunc quis tellus diam rhoncus ultricies tristique enim at diam,
                                        sem nunc amet, pellentesque id egestas velit sed</div>
                                </div>
                                <div class="tab-pane show" id="tabs-activity-5" role="tabpanel">
                                    <h4>Activity tab</h4>
                                    <div>Donec ac vitae diam amet vel leo egestas consequat rhoncus in luctus amet, facilisi
                                        sit mauris accumsan nibh habitant senectus</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
