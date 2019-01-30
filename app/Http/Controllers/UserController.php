<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\CreateUserRequest;
use \Session;
use App\Role;

class UserController extends Controller
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
  public function index(User $user){
      $allUsers = $user->all();
      return view('cpanel.users.index', ['users' => $allUsers]);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      $roles = Role::all();
      return view('cpanel.users.add', ['roles' => $roles]);
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(CreateUserRequest $request, User $user)
  {
      $newUser = $user::create([
          'name'      => $request->name,
          // 'phone'     => $request->phone,
          'email'     => $request->email,
          'password'  => Hash::make($request->password)
      ]);
      if ($newUser) {
        if($request->roles != null){
          $newUser->attachRoles($request->roles);
        }else {
          $newUser->attachRole('user');
        }
      }
      Session::flash('flash_massage_type');
      return redirect('cpanel/users')->withFlashMassage('User Created Susscefully');
  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
      $userInfo = user::findOrFail($id);
      return view('cpanel.users.show', ['userInfo' => $userInfo]);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id, User $users)
  {
    $roles = Role::all();
    $userInfo = $users->find($id);
    return view('cpanel.users.edit',['userInfo' => $userInfo, 'roles' => $roles]);
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function update($id, CreateUserRequest $request, User $Oneuser)
  {
      $userUpdate = $Oneuser->findOrFail($id);
      $data = [
          'name'  => $request->name,
          'phone' => $request->phone,
          'email' => $request->email
      ];
      $userUpdate->fill($data)->save();
      if ($userUpdate) {
        $userUpdate->syncRoles($request->roles);
      }
      Session::flash('flash_massage_type');
      return redirect()->back()->withFlashMassage('User Updated Susscefully');
  }
  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id, User $Oneuser){
    $cruentUser = \Auth::user()->id;
    $userForDelete = $Oneuser->find($id);
    if ($id == 1 Or $id == $cruentUser) {
      return redirect()->back()->withFlashMassage('You Can\'t Delete This User');
    }
    $userForDelete->delete();
    Session::flash('flash_massage_type');
    return redirect()->back()->withFlashMassage('User Deleted Susscefully');
  }



  public function changeMyPassword($id, User $Oneuser){
    $userInfo = $Oneuser->find($id);
    return view('cpanel.users.change-my-password', ['userInfo' => $userInfo]);
  }

  public function updatePassword($id, User $Oneuser, Request $request)
  {
      $userUpdate = $Oneuser->find($id);
      $authUser = auth()->user();

      // if ($request->password !== $request->password_confirm) {
      //     Session::flash('flash_massage_type');
      //     return redirect()->back()->withFlashMassage('Password Updated Susscefully');
      // }
      if($request->has('old_password')){
          $adminPassword = $authUser->password;
          $oldPassword  = $request->old_password;
          if (Hash::check($oldPassword, $adminPassword)) {
              $authUser->password = Hash::make($request->password);
              $authUser->save();
              Session::flash('flash_massage_type');
              return redirect()->back()->withFlashMassage('Password Updated Susscefully');
          }else {
              Session::flash('flash_massage_type', 4);
              return redirect()->back()->withFlashMassage('Password Not Right');
          }
      }elseif ($request->has('password')) {
          $userUpdate->password = Hash::make($request->password);
          $userUpdate->save();
          Session::flash('flash_massage_type');
          return redirect()->back()->withFlashMassage('User Password Updated Susscefully');
      }
  }

  public function logout(){
      auth()->logout();
      session()->forget('*');
      Session::flash('flash_massage_type');
      return redirect()->route('login')->withFlashMassage('Logout Susscefully');
  }

}
