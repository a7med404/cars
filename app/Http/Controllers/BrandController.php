<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BrandRequest;
use \Session;
use App\Brand;


class BrandController extends Controller
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
        $brands = Brand::all();
        return view('cpanel.brands.index', ['brands' => $brands]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cpanel.brands.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newBrand = Brand::create([
            'name'        => $request->name,
            'image'       => $request->image,
            'status'      => $request->status
        ]);
        Session::flash('flash_massage_type');
        return redirect('cpanel/brands')->withFlashMassage('Brand Created Susscefully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $brandInfo = Brand::findOrFail($id);
        return view('cpanel.brands.show', ['brandInfo' => $brandInfo]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brandInfo = Brand::findOrFail($id);
        return view('cpanel.brands.edit', ['brandInfo' => $brandInfo]);
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
      $brandUpdate = Brand::findOrFail($id);
      $data = [
        'name'      => $request->name,
        'image'     => $request->image,
        'status'      => $request->status
      ];
      $brandUpdate->fill($data)->save();
      Session::flash('flash_massage_type');
      return redirect()->back()->withFlashMassage('Brand Updated Susscefully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Brand $brand)
    {
      $brandForDelete = $brand->find($id);
    //   dd($brandForDelete);
      $brandForDelete->delete();
      Session::flash('flash_massage_type');
      return redirect()->back()->withFlashMassage('Brand Deleted Susscefully');
    }
}
