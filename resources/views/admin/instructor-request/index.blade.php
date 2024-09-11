@extends('admin.layouts.master')

@section('content')
    <div class="page-body">
        <div class="container-xl">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Card title</h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-vcenter card-table">
                          <thead>
                            <tr>
                              <th>Name</th>
                              <th>Email</th>
                              <th>Status</th>
                              <th>Document</th>
                              <th>Action</th>
                              <th class="w-1"></th>
                            </tr>
                          </thead>
                          <tbody>
                            @forelse($instructorsRequests as $instructor)
                            <tr>
                              <td>{{ $instructor->name }}</td>
                              <td >
                                {{ $instructor->email }}
                              </td>
                              <td >
                                @if ($instructor->approve_status === 'pending')
                                   <span class="badge bg-yellow text-yellow-fg">Pending</span> 
                                @endif
                              </td>
                              <td>
                                <a href="#" class="text-muted">
                                    <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-download"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 17v2a2 2 0 0 0 2 2h12a2 2 0 0 0 2 -2v-2" /><path d="M7 11l5 5l5 -5" /><path d="M12 4l0 12" /></svg>
                                </a>
                              </td>
                              <td >
                                <form action="">
                                    <select name="" id="" class="form-control">
                                        <option value="">Pending</option>
                                        <option value="">Approve</option>
                                        <option value="">Reject</option>
                                    </select>
                                </form>
                              </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="3">No Data Available!</td>
                                
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
