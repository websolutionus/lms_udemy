@extends('admin.setting.layout')

@section('setting-content')
    <div class="col-12 col-md-9 d-flex flex-column">
        <form action="{{ route('admin.commission-settings.update') }}" method="POST">
            <div class="card-body">

                <h3 class="card-title mt-4">Commission Settings</h3>
                @csrf
                <div class="row g-3">
                    <div class="col-md-12">
                        <div class="form-label">Instructor Commission Rate Per Sale (%)</div>
                        <input type="text" class="form-control" name="commission_rate"
                            value="{{ config('settings.commission_rate') }}">
                        <x-input-error :messages="$errors->get('commission_rate')" class="mt-2" />
                    </div>

                </div>

            </div>
    </div>
    <div class="card-footer bg-transparent mt-auto">
        <div class="btn-list justify-content-end">

            <button type="submit" class="btn btn-primary">
                Submit
            </button>
        </div>
    </div>
    </form>
    </div>
@endsection
