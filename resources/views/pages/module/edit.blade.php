@extends('layouts.app')

@section('page-title', 'Module Update')

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
                        <h5 class="box-title">Update Module</h5>
                        <a class="ti-btn ti-btn-info" href="{{ route('module.index') }}">Module List</a>
                    </div>
                    <div class="box-body">
                        <form class="space-y-3" action="{{ route('module.update', $module->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="sm:grid grid-cols-12 gap-x-6">
                                <label class="col-span-3 ti-form-label">Module Name</label>
                                <div class="col-span-9">
                                    <input type="text" name="module_name" class="ti-form-input @error('module_name') is-invalid @enderror" value="{{ $module->module_name }}">

                                    @error('module_name')
                                        <span class="text-red-600 invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="grid grid-cols-12 gap-x-6">
                                <div class="col-span-3"> </div>
                                <div class="col-span-9">
                                    <button type="submit" class="ti-btn ti-btn-primary">Update</button>
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
