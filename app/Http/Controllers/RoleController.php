<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RoleRequest;
use App\Permission;
use App\Role;
use \Session;

class RoleController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $roles = Role::all();
      return view('cpanel.roles.index', ['roles' => $roles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permissions = Permission::all();
        return view('cpanel.roles.add', ['permissions' => $permissions]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RoleRequest $request)
    {
      $newRole = Role::create([
          'name'                     => $request->name,
          'display_name'     => $request->display_name,
          'description'       => $request->description
      ]);
      if ($newRole) {
        $newRole->attachPermissions($request->permissions);
      }
      Session::flash('flash_massage_type');
      return redirect('cpanel/roles')->withFlashMassage('Role Created Susscefully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $roleInfo = role::findOrFail($id);
        return view('cpanel.roles.show', ['roleInfo' => $roleInfo]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $permissions = Permission::all();
        $roleInfo = role::findOrFail($id);
        return view('cpanel.roles.edit', ['roleInfo' => $roleInfo, 'permissions' => $permissions]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RoleRequest $request, $id, Role $Onerole)
    {
      $roleUpdate = $Onerole->findOrFail($id);
      $data = [
        'name'                     => $request->name,
        'display_name'     => $request->display_name,
        'description'       => $request->description
      ];
      $updateRole = $roleUpdate->fill($data)->save();
      if ($updateRole) {
        $roleUpdate->syncPermissions($request->permissions);
      }

      Session::flash('flash_massage_type');
      return redirect()->back()->withFlashMassage('Role Updated Susscefully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Role $Onerole)
    {
      $roleForDelete = $Onerole->find($id);
      $roleForDelete->delete();
      Session::flash('flash_massage_type');
      return redirect()->back()->withFlashMassage('Role Deleted Susscefully');
    }
}
