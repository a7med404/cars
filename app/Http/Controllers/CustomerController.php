<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helper\UploadFile;
use App\Http\Requests\CustomerRequest;
use Illuminate\Support\Facades\Hash;
use \DB;
use App\Customer;
use Session;
use Carbon\Carbon;

class CustomerController extends Controller
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
        
        $customers = customer::orderBy('id', 'desc')->get();
        return view('cpanel.customers.index', ['customers' => $customers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cpanel.customers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CustomerRequest $request, Customer $customer)
    {
        // dd($request->all());
        $data = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'is_dealer' => $request->is_dealer,
            'password'  => Hash::make('password'),
            'dealer_name' => $request->dealer_name,
            'profile_image' => $request->profile_image,
            'status'      => $request->status
        ];
        $customer->create($data);
        Session::flash('flash_massage_type', 1);
        return redirect('cpanel/customers')->withFlashMassage('Customer Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customerInfo = customer::findOrFail($id);
        return view('cpanel.customers.show', ['customerInfo' => $customerInfo]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $customerInfo = customer::findOrFail($id);
        return view('cpanel.customers.edit', ['customerInfo' => $customerInfo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CustomerRequest $request, $id)
    {
        $customerInfo = customer::findOrFail($id);
        $data = [
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'dealer_name' => $request->dealer_name,
            'status'      => $request->status
        ];
        $customerInfo->fill($data)->save();
        Session::flash('flash_massage_type', 2);
        return redirect()->back()->withFlashMassage('Customer Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customerForDelete = customer::findOrFail($id);
        // $customerForDelete->offers()->detach();
        // $customerForDelete->offers->setNull('customer_id');
        $customerForDelete->delete();
        Session::flash('flash_massage_type', 2);
        return redirect()->back()->withFlashMassage('Customer Deleted Successfully');
    }


    public function repport()
    {
        // $customers = customer::orderBy('id', 'desc')->get();
        $customers = customer::orderBy('id', 'desc')->get();
        return view('cpanel.customers.repport', ['customers' => $customers]);
    }

}
