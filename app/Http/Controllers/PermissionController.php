<?php

namespace App\Http\Controllers;

use App\Http\Requests\PermissionRequest;
use App\Permission;
use App\Role;
use \Session;
use Illuminate\Http\Request;
use \Auth;

class PermissionController extends Controller
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
      // $a = Auth::user()->hasPermission('test-permission');
      // $a = auth()->user()->hasRole('superadministrator');
      // $a = Auth::user()->canPermissionsIndex();
      $permissions = Permission::all();
      // dump($a);
      return view('cpanel.permissions.index', ['permissions' => $permissions]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cpanel.permissions.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     public function store(PermissionRequest $request)
     {
       Permission::create([
           'name'                     => $request->name,
           'display_name'     => $request->display_name,
           'description'       => $request->description
       ]);
       Session::flash('flash_massage_type');
       return redirect('cpanel/permissions')->withFlashMassage('Permission Created Susscefully');
     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $permissionInfo = Permission::findOrFail($id);
      return view('cpanel.permissions.show', ['permissionInfo' => $permissionInfo]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function edit($id)
     {
         $permissionInfo = permission::findOrFail($id);
         return view('cpanel.permissions.edit', ['permissionInfo' => $permissionInfo]);
     }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function update(PermissionRequest $request, $id, Permission $Onepermission)
     {
       $permissionUpdate = $Onepermission->findOrFail($id);
       $data = [
         'name'             =>          $request->name,
         'display_name'     =>  $request->display_name,
         'description'      =>   $request->description
       ];
       $permissionUpdate->fill($data)->save();
       Session::flash('flash_massage_type');
       return redirect()->back()->withFlashMassage('Permission Updated Susscefully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function destroy($id, Permission $Onepermission)
     {
       $permissionForDelete = $Onepermission->find($id);
       // dd($Onepermission->detachPermissions($permissionForDelete));
       $permissionForDelete->delete();
       Session::flash('flash_massage_type');
       return redirect()->back()->withFlashMassage('Permission Deleted Susscefully');
     }

}
