<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \App\Http\Requests\CarRequest;
use App\Helper\UploadFile;
use App\Car;
use App\CarImage;
use App\Feature;
use \Session;

class CarController extends Controller
{
    public function carDetails(){
        return view('website.cars.car-details');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::orderBy('id', 'desc')->get();
        return view('website.cars.index', ['cars' => $cars]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('website.cars.add-car');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Car $car, CarImage $carImages, Feature $feature)
    {
        dd($request->all());
        $data = [
            'ads_title'         => $request->ads_title,
            'price'             => $request->price,
            'transmission'      => $request->transmission,
            'drivetrain'        => $request->drivetrain,
            'price'             => $request->price,
            'fuel'              => $request->fuel,
            'km_driven'         => $request->km_driven,
            'level'              => $request->level,
            'for_sale_rent'     => $request->for_sale_rent,
            'engine_id'         => $request->engine_id,
            'brand_id'          => $request->brand_id,
            // 'address_id'        => $request->car_model_id,
            'note'              => $request->note,
            // 'customer_id'       => auth()->user()->id,
            // 'customer_id'       => 1,
        ];
        $carGetId = $car->create($data);
dd($carGetId);
        $feature = $carGetId->features()->attach($request->features);

        $uploadObject = new UploadFile();
        $names = $uploadObject->uploadMulti($request, 'image', 'public/uploads/images/cars');

        if ($names) {
            foreach ($names as $name) {
                $carImages->create([
                    'car_id' => $carGetId->id,
                    'image' =>  $name,
                ]);
            }
        }
        Session::flash('flash_massage_type', 1);
        return redirect('cpanel/cars')->withFlashMassage('Car Added Susscefully');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // return view('website.cars.car-details');
        $carInfo = Car::findOrFail($id);
        dd($carInfo);
        return view('website.cars.car-details', ['carInfo' => $carInfo]);
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
}
