@extends('admin.layouts.master')

@section('content')
    <div class="page-body">
        <div class="container-xl">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Course Sub Categories of: ({{ $course_category->name }})</h3>
                    <div class="card-actions">
                        <a href="{{ route('admin.course-categories.index') }}"
                            class="btn btn-dark">
                            <i class="ti ti-arrow-left"></i>
                            Back
                        </a>

                        <a href="{{ route('admin.course-sub-categories.create', $course_category->id) }}"
                            class="btn btn-primary">
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
                                    <th>Icon</th>
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($subCategories as $category)
                                    <tr>
                                        <td><img src="{{ asset($category->image) }}" alt=""></td>
                                        <td>{{ $category->name }}</td>
                                        <td>
                                            @if ($category->status == 1)
                                                <span class="badge bg-lime text-lime-fg">Yes</span>
                                            @else
                                                <span class="badge bg-red text-red-fg">No</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.course-sub-categories.edit', [
                                                'course_category' => $course_category->id,
                                                'course_sub_category' => $category->id,
                                            ]) }}"
                                                class="btn-sm btn-primary">
                                                <i class="ti ti-edit"></i>
                                            </a>

                                            <a href="{{ route('admin.course-sub-categories.destroy', [
                                                'course_category' => $course_category->id,
                                                'course_sub_category' => $category->id,
                                            ]) }}"
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
