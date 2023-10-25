<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use App\Http\Requests\RoleStoreRequest;
use App\Models\Role;

class RoleController extends Controller
{
    public function index()
    {
        $roles=Role::select(['id','role_name','role_slug','role_note','updated_at'])->latest()->get();

        return view('pages.role.index',compact('roles'));
    }


    public function create()
    {
        return view('pages.role.create');
    }


    public function store(RoleStoreRequest $request)
    {
        Role::updateOrCreate([
            'role_name' => $request->role_name,
            'role_slug' => Str::slug($request->role_name),
            'role_note' => $request->role_note,
        ]);

        Toastr::success('Role Created Successfully!');
        return redirect()->route('role.index');
    }


    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        $role=Role::find($id);
        return view('pages.role.edit',compact('role'));
    }


    public function update(RoleStoreRequest $request, string $id)
    {
        $role = Role::find($id);
        $role->update([
            'role_name' => $request->role_name,
            'role_slug' => Str::slug($request->role_name),
            'role_note' => $request->role_note,
        ]);

        Toastr::success('Role Updated Successfully!');
        return redirect()->route('role.index');
    }


    public function destroy(string $id)
    {
        $role = Role::find($id);
        $role->delete();

        Toastr::success('Role Deleted Successfully!');
        return redirect()->route('role.index');
    }
}
