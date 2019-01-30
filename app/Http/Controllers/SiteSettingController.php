<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteSetting;
use \Session;
use App\Http\Requests;

class SiteSettingController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
  }
  
  public function index(SiteSetting $siteSetting){
    $siteSetting = $siteSetting->all();
    // dd($siteSetting);
    return view('cpanel.siteSetting.index', ['stieSetting' => $siteSetting]);
  }

  public function store(Request $request, SiteSetting $siteSetting){
    // dd($request->file($siteSetting->name_setting));
    foreach (array_except($request->toArray(), ['submit', '_token']) as $key => $req) {
        $updateSetting = $siteSetting->where('name_setting', $key)->get()[0];
        $u = $updateSetting->fill(['value' => $req])->save();
    }
    Session::flash('flash_massage_type');
    return redirect()->back()->withFlashMassage('Setting Saved Successfully');
  }

}
