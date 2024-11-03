@extends('admin.layouts.master')

@section('content')
    <div class="page-body">
        <div class="container-xl">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Course Levels</h3>
                    
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-vcenter card-table">
                            <thead>
                                <tr>
                                    <th>Course</th>
                                    <th>User</th>
                                    <th>Rating</th>
                                    <th>Review</th>
                                    <th></th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($reviews  as $review)
                                <tr>
                                    <td>
                                        <div>{{ $review->course->title }}</div>
                                        <div class="text-muted">{{ $review->course->instructor->name }}</div>
                                    </td>
                                <td>
                                    <div>{{ $review->user->name }}</div>
                                    <div class="text-muted">{{ $review->user->email }}</div>
                                </td>
                                <td>{{ $review->rating }}</td>
                                <td style="width: 600px">{{ $review->review }}</td>
                                <td>
                                    @if($review->status == 1)
                                        <span class="badge bg-lime text-lime-fg">Approved</span>
                                    @else
                                        <span class="badge bg-red text-red-fg">Pending</span>
                                    @endif
                                </td>
                                <td>
                                    <form action="{{ route('admin.reviews.update', $review->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                    <select name="status" class="form-control" onchange="this.form.submit()">
                                        <option @selected($review->status == 0) value="0">Pending</option>
                                        <option @selected($review->status == 1) value="1">Approved</option>
                                    </select>
                                    </form>
                                </td>
                                <td>
                                    <a href="{{ route('admin.reviews.destroy', $review->id) }}" class="text-red delete-item">
                                        <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-trash-x"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 7h16" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /><path d="M10 12l4 4m0 -4l-4 4" /></svg>
                                    </a>
                                </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="7" class="text-center">No Data Found!</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-4">
                        {{ $reviews->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
