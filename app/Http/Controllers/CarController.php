<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Http\Requests\CarRequest;
use App\Helper\UploadFile;
use App\Car;
use App\CarImage;
use App\Feature;
use \Session;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cars = Car::orderBy('id', 'desc')->get();
        return view('cpanel.cars.index', ['cars' => $cars]);
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $features = Feature::orderBy('id', 'desc')->where('status', 1)->get();
        return view('cpanel.cars.create', ['features' => $features]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CarRequest $request, Car $car, CarImage $carImages, Feature $feature)
    {
        // dd($request->all());
        # id 	name 	color 	body_type 	km_driven 	seats_number 	doors_number 	note 	visibility 	status 	customer_id 	engine_id 	brands_id 	car_model_id 	user_id 
        // $dateTime = explode(' - ', $request->dateTime, 2);
        $data = [
            'name'              => $request->name,
            'color'             => $request->color,
            'body_type'         => $request->body_type,
            'price'             => $request->price,
            'transmission'      => $request->transmission,
            'drivetrain'        => $request->drivetrain,
            'fuel'              => $request->fuel,
            'cylinder_count'    => $request->cylinder_count,
            'seats_number'      => $request->seats_number,
            'doors_number'      => $request->doors_number,
            'km_driven'         => $request->km_driven,
            'note'              => $request->note,
            'for_sale_rent'     => $request->for_sale_rent,
            'visibility'        => $request->visibility,
            'status'            => $request->status,
            'engine_id'         => $request->engine_id,
            'brand_id'          => $request->brand_id,
            'address_id'        => $request->address_id,
            'customer_id'       => $request->customer_id,
            'user_id'           => auth()->user()->id,
        ];
        $carGetId = $car->create($data);

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
  
        $carInfo = Car::findOrFail($id);
        return view('cpanel.cars.show', ['carInfo' => $carInfo]);  }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $carInfo = Car::findOrFail($id);
        $features = Feature::orderBy('id', 'desc')->where('status', 1)->get();
        return view('cpanel.cars.edit', ['carInfo' => $carInfo, 'features' => $features]);
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
        $carModel =  Car::findOrFail($id);
        // $budget = explode(';', $request->budget, 2);
        // $dateTime = explode(' - ', $request->dateTime, 2);
        $data = [
            'name'              => $request->name,
            'color'             => $request->color,
            'body_type'         => $request->body_type,
            'price'             => $request->price,
            'transmission'      => $request->transmission,
            'drivetrain'        => $request->drivetrain,
            'fuel'              => $request->fuel,
            'cylinder_count'    => $request->cylinder_count,
            'seats_number'      => $request->seats_number,
            'doors_number'      => $request->doors_number,
            'km_driven'         => $request->km_driven,
            'note'              => $request->note,
            'for_sale_rent'     => $request->for_sale_rent,
            'visibility'        => $request->visibility,
            'status'            => $request->status,
            'engine_id'         => $request->engine_id,
            'brand_id'          => $request->brand_id,
            'address_id'        => $request->address_id,
            'customer_id'       => $request->customer_id,
            'user_id'           => auth()->user()->id,
        ];
        $carSeved = $carModel->fill($data)->save();

        if($carSeved){
            $feature = $carModel->features()->sync($request->features);

            $uploadObject = new UploadFile();
            $names = $uploadObject->uploadMulti($request, 'image', 'public/uploads/images/cars');
            if ($names) {
                foreach ($names as $name) {
                    carImages::create([
                        'car_id' => $carModel->id,
                        'image' =>  $name,
                    ]);
                }
            }
            if($request->has('delete_image')){
                $carImages = carImages::where('car_id', $id)->findOrFail($request->delete_image);
                foreach ($carImages as $image) {
                    $image->delete();
                }
                // $carImages->delete(array_pluck($carImages, 'image'));
                $uploadObject->deleteMultiFile('storage/images/cars/', array_pluck($carImages, 'image'));
                
            }
            Session::flash('flash_massage_type', 2);
            return redirect()->back()->withFlashMassage('car Updated Susscefully');
        }else {
            Session::flash('flash_massage_type', 3);
            return redirect()->back()->withFlashMassage('car Update Fialuer');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $carForDelete = Car::findOrFail($id);
        $carForDelete->delete();
        Session::flash('flash_massage_type', 2);
        return redirect()->back()->withFlashMassage('Car Deleted Successfully');
    }

    public function repport()
    {
        $cars = Car::orderBy('id', 'desc')->get();
        return view('cpanel.cars.repport', ['cars' => $cars]);
    }

    public function sale()
    {
        $cars = Car::orderBy('id', 'desc')->where('for_sale_rent', '!=', 2)->get();
        return view('cpanel.cars.sale', ['cars' => $cars]);
    }



    public function rent()
    {
        $cars = Car::orderBy('id', 'desc')->where('for_sale_rent', '!=', 1)->get();
        return view('cpanel.cars.rent', ['cars' => $cars]);
    }
}
