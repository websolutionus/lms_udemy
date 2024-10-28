@extends('admin.layouts.master')

@section('content')
    <div class="page-body">
        <div class="container-xl">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Video Section</h3>
                    
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.video-section.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                       
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <x-image-preview src="{{ asset($video?->background) }}" style="background-color: rgb(197, 197, 197)" />
                                    <label class="form-label">Background</label>
                                    <input type="file" class="form-control" name="background"
                                        placeholder="">
                                    <input type="hidden" name="old_background" value="">
                                    <x-input-error :messages="$errors->get('background')" class="mt-2" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Video Url</label>
                                    <input type="text" class="form-control" name="video_url"
                                        placeholder="" value="{{ $video?->video_url }}">
                                    <x-input-error :messages="$errors->get('video_url')" class="mt-2" />
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Description</label>
                                    <textarea name="description" class="form-control">{{ $video?->description }}</textarea>
                                    <x-input-error :messages="$errors->get('description')" class="mt-2" />
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Button Text</label>
                                    <input type="text" class="form-control" name="button_text"
                                        placeholder="" value="{{ $video?->button_text }}">
                                    <x-input-error :messages="$errors->get('button_text')" class="mt-2" />
                                </div>
                            </div>
                          
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Button Url</label>
                                    <input type="text" class="form-control" name="button_url"
                                        placeholder="" value="{{ $video?->button_url }}">
                                    <x-input-error :messages="$errors->get('button_url')" class="mt-2" />
                                </div>
                            </div>
                          
                            <div class="mb-3">
                                <button class="btn btn-primary" type="submit">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="icon icon-tabler icons-tabler-outline icon-tabler-device-floppy">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2" />
                                        <path d="M12 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" />
                                        <path d="M14 4l0 4l-6 0l0 -4" />
                                    </svg>
                                    Update
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
