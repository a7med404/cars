<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EngineRequest;
use \Session;
use App\Engine;

class EngineController extends Controller
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
        $engines = Engine::all();
        return view('cpanel.engines.index', ['engines' => $engines]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cpanel.engines.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newEngine = Engine::create([
            'name'        => $request->name,
            'status'      => $request->status
        ]);
        Session::flash('flash_massage_type');
        return redirect('cpanel/engines')->withFlashMassage('Engine Created Susscefully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $engineInfo = Engine::findOrFail($id);
        return view('cpanel.engines.show', ['engineInfo' => $engineInfo]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $engineInfo = Engine::findOrFail($id);
        return view('cpanel.engines.edit', ['engineInfo' => $engineInfo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, Engine $bngine)
    {
      $bngineUpdate = $bngine->findOrFail($id);
      $data = [
        'name'      => $request->name,
        'status'      => $request->status
      ];
      $bngineUpdate->fill($data)->save();
      Session::flash('flash_massage_type');
      return redirect()->back()->withFlashMassage('Engine Updated Susscefully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Engine $bngine)
    {
      $bngineForDelete = $bngine->find($id);
      $bngineForDelete->delete();
      Session::flash('flash_massage_type');
      return redirect()->back()->withFlashMassage('Engine Deleted Susscefully');
    }
}
