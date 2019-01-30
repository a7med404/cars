<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
{

    public function profile(){
        return view('website.customers.profile');
    }
    public function sing(){
        return view('website.customers.sing');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function login()
    {
        $rememberme = request('remember_me') == 1 ? true : false;
        if(auth()->guard('customer')->attempt(['phone_number' => request('phone_number'), 'password' => request('password')], $rememberme)){
          Session::flash('flash_massage_type');
          return redirect()->next()->withFlashMassage('Login Susscefully');
        }else{
          Session::flash('flash_massage_type', 4);
          return redirect()->back()->withFlashMassage('Phone Number Or Password Is\'t Correct');
        }
    }

    public function logout()
    {
        auth()->guard('customer')->logout();
        return redirect('/')->withFlashMassage('Logout Susscefully');
    }
}
