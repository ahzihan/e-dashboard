@extends('layouts.app')

@section('page-title', 'Role Create')

@section('side-bar')
    @include('components.Sidebar')
@endsection

@section('header')
    @include('components.Header')
@endsection

@section('content')
    <div class="row">
        <div class="col">
            <div class="col-span-12 xxl:col-span-6">
                <div class="box">
                    <div class="box-header flex content-center items-center">
                        <h5 class="box-title">Create Role</h5>
                        <a class="ti-btn ti-btn-info" href="{{ route('role.index') }}">Role List</a>
                    </div>
                    <div class="box-body">
                        <form class="space-y-3" action="{{ route('role.store') }}" method="POST">
                            @csrf

                            <div class="sm:grid grid-cols-12 gap-x-6">
                                <label class="col-span-3 ti-form-label">Role Name</label>
                                <div class="col-span-9">
                                    <input type="text" id="role_name" name="role_name" class="ti-form-input @error('role_name') is-invalid
                                    @enderror" value="{{ old('role_name') }}" placeholder="Role Name..">

                                    @error('role_name')
                                        <span class="text-red-600 invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="sm:grid grid-cols-12 gap-x-6">
                                <label class="col-span-3 ti-form-label">Role Note</label>
                                <div class="col-span-9">
                                    <textarea class="ti-form-input @error('role_note') is-invalid
                                    @enderror" name="role_note" id="role_note" cols="30" rows="7" placeholder="Role Note..">{{ old('role_name') }}</textarea>

                                    @error('role_note')
                                        <span class="text-red-600 invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="grid grid-cols-12 gap-x-6">
                                <div class="col-span-3"></div>
                                <div class="col-span-9">
                                    <button type="submit" class="ti-btn ti-btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    @include('components.Footer')
@endsection
