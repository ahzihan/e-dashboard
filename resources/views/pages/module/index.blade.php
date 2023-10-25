@extends('layouts.app')

@section('page-title', 'Module List')

@section('side-bar')
    @include('components.Sidebar')
@endsection

@section('header')
    @include('components.Header')
@endsection

@section('content')
    <div class="row">
        <div class="col">
            <div class="col-span-12">
                <div class="box">
                    <div class="box-header flex content-center items-center">
                        <h5 class="box-title">Module List</h5>
                        <a class="ti-btn ti-btn-primary" href="{{ route('module.create') }}">Add New</a>
                    </div>
                    <div class="box-body">
                        <div class="table-bordered rounded-sm ti-custom-table-head">
                            <div class="py-2 px-3">
                                <div class="relative max-w-xs">
                                    <label for="hs-table-search2" class="sr-only">Search</label>
                                    <input type="text" name="hs-table-search2" id="hs-table-search2"
                                        class="p-3 ltr:pl-10 rtl:pr-10 ti-form-input" placeholder="Search for items">
                                    <div
                                        class="absolute inset-y-0 ltr:left-0 rtl:right-0 flex items-center pointer-events-none ltr:pl-4 rtl:pr-4">
                                        <svg class="h-3.5 w-3.5 text-gray-400 dark:text-white/70"
                                            xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" viewBox="0 0 16 16">
                                            <path
                                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="overflow-auto">
                                <table class="ti-custom-table ti-custom-table-head">
                                    <thead class="bg-gray-50 dark:bg-black/20">
                                        <tr>
                                            <th scope="col" class="text-justify">SL</th>
                                            <th scope="col" class="text-justify">Last Update</th>
                                            <th scope="col" class="text-justify">Module Name</th>
                                            <th scope="col" class="text-justify">Slug</th>
                                            <th scope="col" class="text-justify">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="">
                                        @forelse ($modules as $module)
                                            <tr>
                                                <td class="font-medium">{{ $loop->index+1 }}</td>
                                                <td>{{ $module->updated_at->format('d-M-Y') }}</td>
                                                <td class="font-medium">{{ $module->module_name }}</td>
                                                <td>{{ $module->module_slag }}</td>
                                                <td class="font-medium">
                                                    <a class="ti-btn ti-btn-outline ti-btn-outline-info" href="">View</a>
                                                    <a class="ti-btn ti-btn-outline ti-btn-outline-success" href="{{ route('module.edit', $module->id ) }}">Edit</a>
                                                    <form class="inline" action="{{ route('module.destroy',$module->id ) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="ti-btn ti-btn-outline ti-btn-outline-danger show_confirm" type="submit">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <th class="font-medium" colspan="4">No Data Found</th>
                                            </tr>
                                        @endforelse

                                    </tbody>
                                </table>
                            </div>
                            <div class="py-1 px-4">
                                <nav class="flex items-center sm:space-x-2 rtl:space-x-reverse">
                                    <a class="text-gray-400 dark:text-white/70 hover:text-primary p-4 inline-flex items-center gap-2 font-medium rounded-sm"
                                        href="javascript:void(0);">
                                        <span aria-hidden="true">«</span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="w-10 h-10 bg-primary text-white p-4 inline-flex items-center text-sm font-medium rounded-full"
                                        href="javascript:void(0);" aria-current="page">1</a>
                                    <a class="w-10 h-10 text-gray-400 dark:text-white/70 hover:text-primary p-4 inline-flex items-center text-sm font-medium rounded-full"
                                        href="javascript:void(0);">2</a>
                                    <a class="w-10 h-10 text-gray-400 dark:text-white/70 hover:text-primary p-4 inline-flex items-center text-sm font-medium rounded-full"
                                        href="javascript:void(0);">3</a>
                                    <a class="text-gray-400 dark:text-white/70 hover:text-primary p-4 inline-flex items-center gap-2 font-medium rounded-sm"
                                        href="javascript:void(0);">
                                        <span class="sr-only">Next</span>
                                        <span aria-hidden="true">»</span>
                                    </a>
                                </nav>
                            </div>
                        </div>
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
    $(document).ready(function(){
        $(".show_confirm").click(function(event){
            let form=$(this).closest('form');
            event.preventDefault();

            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                    Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                    )
                }
            })
        });
    })
</script>

@endpush
