@extends('layouts.app')

@section('page-title', 'Role Update')

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
                        <h5 class="box-title">Update Role</h5>
                        <a class="ti-btn ti-btn-info" href="{{ route('role.index') }}">Role List</a>
                    </div>
                    <div class="box-body">
                        <form class="space-y-3" action="{{ route('role.update', $role->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="sm:grid grid-cols-12 gap-x-6">
                                <label class="col-span-3 ti-form-label">Role Name</label>
                                <div class="col-span-9">
                                    <input type="text" id="role_name" name="role_name" class="ti-form-input @error('role_name') is-invalid
                                    @enderror" value="{{ $role->role_name }}" placeholder="Role Name..">

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
                                    @enderror" name="role_note" id="role_note" cols="30" rows="4">{{ $role->role_note }}</textarea>

                                    @error('role_note')
                                        <span class="text-red-600 invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-span-12 xl:col-span-4">
                                <div class="box">
                                    <div class="box-header">
                                        <h5 class="box-title">Manage Permission for Role</h5>
                                    </div>

                                    <div class="row mt-4 ml-5">
                                        <input type="checkbox" class="ti-form-checkbox mt-0.5" id="select-all">
                                        <label for="select-all" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">Select All</label>
                                    </div>

                                    <div class="box-body">
                                        <div class="space-y-2">
                                            @foreach ($modules->chunk(4) as $key => $chunks)
                                                <div class="flex gap-x-8">

                                                    @foreach ($chunks as $module)
                                                        <div class="col">
                                                            <h5 class="my-2 box-title">Module: {{ $module->module_name }}</h5>

                                                            @foreach ($module->permissions as $permission)
                                                            <div class="flex mb-3">
                                                                <input type="checkbox" class="ti-form-checkbox mt-0.5" value="{{ $permission->id }}" name="permissions[]"
                                                                id="permission-{{ $permission->id }}"
                                                                @if (isset($role))
                                                                    @foreach ($role->permissions as $rPermission)
                                                                        {{ $rPermission->id==$permissions->id? 'checked' : '' }}
                                                                    @endforeach
                                                                @endif
                                                                >
                                                                <label for="permission-{{ $permission->id }}" class="text-sm text-gray-500 ltr:ml-2 rtl:mr-2 dark:text-white/70">{{ $permission->permission_name }}</label>
                                                            </div>
                                                            @endforeach
                                                        </div>
                                                    @endforeach

                                                </div>
                                            @endforeach

                                        </div>
                                    </div>
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

@push('scripts')
<script>
    $("#select-all").click(function(event){
        if(this.checked){
            $(':checkbox').each(function(){
                this.checked=true;
            })
        }else{
            $(':checkbox').each(function(){
                this.checked=false;
            })
        }
    })
</script>
@endpush
