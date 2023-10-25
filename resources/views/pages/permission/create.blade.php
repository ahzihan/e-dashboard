@extends('layouts.app')

@section('page-title', 'Permission Create')

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
                        <h5 class="box-title">Create Permission</h5>
                        <a class="ti-btn ti-btn-info" href="{{ route('permission.index') }}">Permission List</a>
                    </div>
                    <div class="box-body">
                        <form class="space-y-3" action="{{ route('permission.store') }}" method="POST">
                            @csrf



                            <div class="sm:grid grid-cols-12 gap-x-6">
                                <label class="col-span-3 ti-form-label">Module Name</label>
                                <select class="col-span-9 ti-form-select" data-trigger="" name="module_id" id="module_id" tabindex="-1" data-choice="active">
                                    <option class="py-2 active" value="">Select Permission</option>
                                    @foreach ($modules as $module)
                                        <option class="py-2" value="{{ $module->id }}">{{ $module->module_name }}</option>
                                    @endforeach

                                </select>
                            </div>

                            <div class="sm:grid grid-cols-12 gap-x-6">
                                <label class="col-span-3 ti-form-label">Permission Name</label>
                                <input type="text" name="permission_name" class="col-span-9 ti-form-input" placeholder="Permission Name..">
                            </div>

                            <div class="grid grid-cols-12 gap-x-6">
                                <div class="col-span-3"> </div>
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
