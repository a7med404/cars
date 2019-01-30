<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FeatureRequest;
use \Session;
use App\Feature;

class FeatureController extends Controller
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
        $features = Feature::all();
        return view('cpanel.features.index', ['features' => $features]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cpanel.features.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newFeature = Feature::create([
            'name'          => $request->name,
            'parent'        => $request->parent,
            'description'   => $request->description,
            'status'        => $request->status
        ]);
        Session::flash('flash_massage_type');
        return redirect('cpanel/features')->withFlashMassage('Feature Created Susscefully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $featureInfo = Feature::findOrFail($id);
        return view('cpanel.features.show', ['featureInfo' => $featureInfo]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $featureInfo = Feature::findOrFail($id);
        return view('cpanel.features.edit', ['featureInfo' => $featureInfo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, Feature $bngine)
    {
      $bngineUpdate = $bngine->findOrFail($id);
      $data = [
        'name'          => $request->name,
        'parent'        => $request->parent,
        'description'   => $request->description,
        'status'        => $request->status
      ];
      $bngineUpdate->fill($data)->save();
      Session::flash('flash_massage_type');
      return redirect()->back()->withFlashMassage('Feature Updated Susscefully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Feature $bngine)
    {
      $bngineForDelete = $bngine->find($id);
      $bngineForDelete->delete();
      Session::flash('flash_massage_type');
      return redirect()->back()->withFlashMassage('Feature Deleted Susscefully');
    }
}
