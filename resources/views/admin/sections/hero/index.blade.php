@extends('admin.layouts.master')

@section('content')
    <div class="page-body">
        <div class="container-xl">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Hero</h3>
                    
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.hero.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                       
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Label</label>
                                    <input type="text" class="form-control" name="label"
                                        placeholder="" value="{{ $hero?->label }}">
                                    <x-input-error :messages="$errors->get('label')" class="mt-2" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Title</label>
                                    <input type="text" class="form-control" name="title"
                                        placeholder="" value="{{ $hero?->title }}">
                                    <x-input-error :messages="$errors->get('title')" class="mt-2" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Subtitle</label>
                                    <input type="text" class="form-control" name="subtitle"
                                        placeholder="" value="{{ $hero?->subtitle }}">
                                    <x-input-error :messages="$errors->get('subtitle')" class="mt-2" />
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Button Text</label>
                                    <input type="text" class="form-control" name="button_text"
                                        placeholder="" value="{{ $hero?->button_text }}">
                                    <x-input-error :messages="$errors->get('button_text')" class="mt-2" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Button Url</label>
                                    <input type="text" class="form-control" name="button_url"
                                        placeholder="" value="{{ $hero?->button_url }}">
                                    <x-input-error :messages="$errors->get('button_url')" class="mt-2" />
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Video Button Text</label>
                                    <input type="text" class="form-control" name="video_button_text"
                                        placeholder="" value="{{ $hero?->video_button_text }}">
                                    <x-input-error :messages="$errors->get('video_button_text')" class="mt-2" />
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Video Button Url</label>
                                    <input type="text" class="form-control" name="video_button_url"
                                        placeholder="" value="{{ $hero?->video_button_url }}">
                                    <x-input-error :messages="$errors->get('video_button_url')" class="mt-2" />
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Banner Item Title</label>
                                    <input type="text" class="form-control" name="banner_item_title"
                                        placeholder="" value="{{ $hero?->banner_item_title }}">
                                    <x-input-error :messages="$errors->get('banner_item_title')" class="mt-2" />
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Banner Item Subtitle</label>
                                    <input type="text" class="form-control" name="banner_item_subtitle"
                                        placeholder="" value="{{ $hero?->banner_item_subtitle }}">
                                    <x-input-error :messages="$errors->get('banner_item_subtitle')" class="mt-2" />
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Rounded Text</label>
                                    <input type="text" class="form-control" name="rounded_text"
                                        placeholder="" value="{{ $hero?->round_text }}">
                                    <x-input-error :messages="$errors->get('rounded_text')" class="mt-2" />
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="mb-3">
                                    <x-image-preview src="{{ asset($hero?->image) }}" />
                                    <label class="form-label">Hero Image</label>
                                    <input type="file" class="form-control" name="image"
                                        placeholder="">
                                    <input type="hidden" name="old_image" value="{{ $hero?->image }}">
                                    <x-input-error :messages="$errors->get('image')" class="mt-2" />
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
