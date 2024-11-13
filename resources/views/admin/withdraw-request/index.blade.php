@extends('admin.layouts.master')

@section('content')
    <div class="page-body">
        <div class="container-xl">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Withdraw Requests</h3>
                    <div class="card-actions">
                        <a href="{{ route('admin.course-levels.create') }}" class="btn btn-primary">
                            <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M12 5l0 14"></path>
                                <path d="M5 12l14 0"></path>
                            </svg>
                            Add new
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-vcenter card-table">
                            <thead>
                                <tr>
                                    <th>Insructor</th>
                                    <th>Payout Amount</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($withdraws as $withdraw)
                                <tr>
                                <td>{{ $withdraw->instructor->name }}</td>
                                <td>{{ config('settings.currency_icon') }}{{ $withdraw->amount }}</td>
                                <td>
                                    @if ($withdraw->status == 'pending')
                                        <span class="badge bg-yellow text-yellow-fg">Pending</span>
                                    @elseif($withdraw->status == 'rejected')
                                        <span class="badge bg-red text-red-fg">Rejected</span>
                                    @elseif($withdraw->status == 'approved')
                                        <span class="badge bg-green text-green-fg">Approved</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('admin.withdraw-request.show', $withdraw->id) }}" class="btn-sm btn-primary">
                                        <i class="ti ti-eye"></i>
                                    </a>
                                    
                                </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="4" class="text-center">No Data Found!</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-4">
                        {{ $withdraws->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
