@extends('admin.layouts.master')

@section('content')
    <div class="page-body">
        <div class="container-xl">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Hero</h3>
                    
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.about-section.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                       
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <x-image-preview src="{{ asset($about?->image) }}" style="background-color: rgb(197, 197, 197)" />
                                    <label class="form-label">Image</label>
                                    <input type="file" class="form-control" name="image"
                                        placeholder="">
                                    <input type="hidden" name="old_image" value="{{ $about?->image }}">
                                    <x-input-error :messages="$errors->get('image')" class="mt-2" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Rounded Text</label>
                                    <input type="text" class="form-control" name="rounded_text"
                                        placeholder="" value="{{ $about?->rounded_text }}">
                                    <x-input-error :messages="$errors->get('rounded_text')" class="mt-2" />
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Lerner Count</label>
                                    <input type="text" class="form-control" name="lerner_count"
                                        placeholder="" value="{{ $about?->lerner_count }}">
                                    <x-input-error :messages="$errors->get('lerner_count')" class="mt-2" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Learner Count Text</label>
                                    <input type="text" class="form-control" name="lerner_count_text"
                                        placeholder="" value="{{ $about?->lerner_count_text }}">
                                    <x-input-error :messages="$errors->get('lerner_count_text')" class="mt-2" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <x-image-preview src="{{ asset($about?->lerner_image) }}" style="background-color: rgb(197, 197, 197)" />
                                    <label class="form-label">Learner Image</label>
                                    <input type="file" class="form-control" name="lerner_image"
                                        placeholder="">
                                    <input type="hidden" name="old_lerner_image" value="{{ $about?->lerner_image }}">
                                    <x-input-error :messages="$errors->get('lerner_image')" class="mt-2" />
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">About Title</label>
                                    <input type="text" class="form-control" name="about_title"
                                        placeholder="" value="{{ $about?->title }}">
                                    <x-input-error :messages="$errors->get('about_title')" class="mt-2" />
                                </div>
                            </div>
                            
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">About Description</label>
                                    <textarea class="editor" name="about_description">{!! $about?->description !!}</textarea>
                                    <x-input-error :messages="$errors->get('about_description')" class="mt-2" />
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Button Text</label>
                                    <input type="text" class="form-control" name="button_text"
                                        placeholder="" value="{{ $about?->button_text }}">
                                    <x-input-error :messages="$errors->get('button_text')" class="mt-2" />
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Button Url</label>
                                    <input type="text" class="form-control" name="button_url"
                                        placeholder="" value="{{ $about?->button_url }}">
                                    <x-input-error :messages="$errors->get('button_url')" class="mt-2" />
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="mb-3">

                                    <x-image-preview src="{{ $about?->video_image }}" style="background-color: rgb(197, 197, 197)" />
                                    <label class="form-label">Video Image</label>
                                    <input type="file" class="form-control" name="video_image"
                                        placeholder="">
                                    <input type="hidden" name="old_video_image" value="{{ $about?->video_image}}">
                                    <x-input-error :messages="$errors->get('video_image')" class="mt-2" />
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Video Url</label>
                                    <input type="text" class="form-control" name="video_url"
                                        placeholder="" value="{{ $about?->video_url }}">
                                    <x-input-error :messages="$errors->get('video_url')" class="mt-2" />
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
