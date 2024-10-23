@extends('admin.layouts.master')

@section('content')
    <div class="page-body">
        <div class="container-xl">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Certificate Content</h3>
    
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.certificate-builder.update') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mt-3">
                                    <label class="form-label">Certificate Title</label>
                                    <input type="text" class="form-control" name="title" placeholder="Enter certificate title">
                                    <x-input-error :messages="$errors->get('title')" class="mt-2" />
                                </div>
                                <div class="form-group mt-3">
                                    <label class="form-label">Certificate Subtitle</label>
                                    <input type="text" class="form-control" name="subtitle" placeholder="Enter certificate subtitle">
                                    <x-input-error :messages="$errors->get('subtitle')" class="mt-2" />

                                </div>

                                <div class="form-group mt-3">
                                    <label class="form-label">Certificate Description</label>
                                    <textarea name="description" class="form-control" placeholder="Enter certificate description"></textarea>
                                    <x-input-error :messages="$errors->get('description')" class="mt-2" />

                                </div>

                                <div class="form-group mt-3">
                                    <label class="form-label">Certificate Background</label>
                                    <input type="file" name="background" class="form-control">
                                    <x-input-error :messages="$errors->get('background')" class="mt-2" />

                                </div>

                                <div class="form-group mt-3">
                                    <label class="form-label">Certificate Segnature</label>
                                    <input type="file" name="segnature" class="form-control">
                                    <x-input-error :messages="$errors->get('segrature')" class="mt-2" />

                                </div>

                                <div class="form-group mt-3">

                                    <button type="submit" class="btn btn-primary">Update</button>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
    
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Certificate Builder</h3>
    
                        </div>
                        <div class="card-body">
    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
