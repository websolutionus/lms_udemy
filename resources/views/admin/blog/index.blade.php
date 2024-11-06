@extends('admin.layouts.master')

@section('content')
    <div class="page-body">
        <div class="container-xl">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Blogs</h3>
                    <div class="card-actions">
                        <a href="{{ route('admin.blogs.create') }}" class="btn btn-primary">
                            <i class="ti ti-plus"></i>
                            Add new
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-vcenter card-table">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($blogs as $blog)
                                    <tr>
                                        <td><img width="100" src="{{ asset($blog->image) }}" alt=""></td>
                                        <td>{{ $blog->title }}</td>
                                        <td>{{ $blog->category->name}}</td>
                                        <td>
                                            @if ($blog->status == 1)
                                               <span class="badge bg-lime text-lime-fg">Active</span> 
                                            @else 
                                               <span class="badge bg-red text-red-fg">Inactive</span> 
                                            @endif
                                        </td>
                                        <td>
                                           
                                            <a href="{{ route('admin.blogs.edit', $blog->id) }}"
                                                class="btn-sm btn-primary">
                                                <i class="ti ti-edit"></i>
                                            </a>
                                            
                                            <a href="{{ route('admin.blogs.destroy', $blog->id) }}"
                                                class="text-red delete-item">
                                                <i class="ti ti-trash-x"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center">No Data Found!</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
@endsection
