<?php
function changeLocale()
{
	// if(\Session::has('locale'))
    // {
    //    \Session::put('locale', \App::getLocale());
    // }


    // App::setLocale($locale);
    // $locale = App::getLocale();

    // if (App::isLocale('en')) {
    //     if(\Session::get('locale') == 'en'){
    //         \Session::put('locale', 'ar');
    //     }else {
    //         \Session::put('locale', 'en');
    //     }
    // }
    if (App::isLocale('en')) {
        App::setLocale('ar');
         \Session::put('locale', 'ar');
    }else {
    return "aaaaaaaaaaaa";
        App::setLocale('en');
         \Session::put('locale', 'en');
    }

    // $d = 'en';
    // if(isset($_SESSION["defalut-lang"]) && $_SESSION['defalut-lang'] == "$d"){
    //     $_SESSION['defalut-lang'] = 'ar'; 
    // }else {
    //     $_SESSION['defalut-lang'] = 'en'; 
    // }


    return \Session::get('locale');
    // Session::set('locale', 'en');
	// return Redirect::back();

    // app()->setLocale(\Session::get('locale'));



    // return $next($request);
}

function maleOrfemale(){
    return [
        '0' => 'Female',
        '1' => 'Male',
    ];
}



function visibility(){
    return [
        '0' => 'Visibile',
        '1' => 'Hidden',
    ];
}
function isAegnt(){
    return [
        '0' => 'Dealer',
        '1' => 'dealer',
    ];
}
function toggleOneZeroClass(){
    return [
        '0' => 'label label-default',
        '1' => 'label label-success',
    ];
}
function status(){
    return [
        '0' => 'Disable',
        '1' => 'Enable',
    ];
}
function trusted(){
    return [
        '0' => 'Not Trusted',
        '1' => 'Trusted',
    ];
}
function toggleTrusted(){
    return [
        '0' => 'label label-danger',
        '1' => 'label label-success',
    ];
}

function level(){
    return [
        '1' => 'New & Used Cars',
        '2' => 'New Cars',
        '3' => 'Used Cars',
        '4' => 'Certified Cars',
    ];
}
function forSaleRent(){
    return [
        '1' => 'Sale',
        '2' => 'Rent',
        '3' => 'All'
    ];
}

function transmission(){
    return [
        '1' => 'Any Transmission',
        '2' => 'Manual',
        '3' => 'Automatic',
        '4' => 'Other / Unknown',
    ];
}


function drivetrain(){
    return [
        '1' => 'Any Drivetrain',
        '2' => '4x2/2-wheel drive',
        '3' => '4x4/4-wheel drive',
        '4' => 'AWD',
        '5' => 'FWD',
        '6' => 'RWD',
        '7' => 'Unknown',
    ];
}

function fuel(){
    return [
        '1' => 'Gasoline',
        '2' => 'E-85/Gasoline',
        '3' => 'Gasoline Hybrid',
        '4' => 'Diesel',
        '5' => 'Electric',
        '6' => 'Compressed Natural Gas',
        '7' => 'Unknown',
    ];
}



function color(){
    return [
        '1' => 'White',
        '2' => 'Gray',
        '3' => 'Black',
        '4' => 'Red',
        '5' => 'Blue',
    ];
}



function seatNumber(){
    return [
        '1' => '1',
        '2' => '2',
        '3' => '3',
        '4' => '4',
        '5' => '5',
        '6' => '6',
        '7' => '7',
        '8' => '8'
    ];
}


function doorsNumber(){
    return [
        '1' => '1',
        '2' => '2',
        '3' => '3',
        '4' => '4',
        '5' => '5',
        '6' => '6',
        '7' => '7',
        '8' => '8'
    ];
}



function kmDriven(){
    return [
        '0' => '< 1000',
        '1' => '1000 - 1500',
        '2' => '1000 - 1500',
        '3' => '1000 - 1500',
        '4' => '1000 - 1500',
        '5' => '1000 - 1500',
        '6' => '1000 - 1500',
        '7' => '1000 - 1500',
        '8' => '1000 - 1500',
        '9' => '1000 - 1500',
        '10' => '1000 - 1500',
    ];
}



function bodyType(){
    return [
        '1' => 'Sedan',
        '2' => 'SUV / Crossover',
        '3' => 'Hatchback',
        '4' => 'Convertible',
        '5' => 'Minivan',
        '6' => 'Pickup Truck',
        '7' => 'Coupe',
        '8' => 'Wagon',
    ];
}

function identifierType(){
    return [
        '1' => 'Public Card',
        '2' => 'Passprot',
        '3' => 'National Number',
        '4' => 'Diver License',
    ];
}
function toggleLevelClass(){
    return [
        '1' => 'label label-default',
        '2' => 'label label-info',
        '3' => 'label label-primary',
        '4' => 'label label-success',
    ];
}
function getSelect($tableName){

    switch ($tableName) {
        case 'role':
            $list = \DB::table('roles')->pluck('name', 'id');
            return $list->toArray();
            break;
        case 'parent':
            $list = \DB::table('features')->where('status', 1)->pluck('name', 'id');
            return $list->toArray();
            break;
        case 'car_model':
            $list = \DB::table('car_models')->where('status', 1)->pluck('name', 'id');
            return $list->toArray();
            break;
        case 'customer':
            $list = \DB::table('customers')->where('status', 1)->pluck('phone_number', 'id');
            return $list->toArray();
            break;
        case 'brand':
            $list = \DB::table('brands')->where('status', 1)->pluck('name', 'id');
            return $list->toArray();
            break;
        case 'engine':
            $list = \DB::table('engines')->where('status', 1)->pluck('name', 'id');
            return $list->toArray();
            break;
        default:
            $list = \App\Brand::get();
            break;
    }
    // $arrayList = [];
    // foreach ($list->toArray() as $key => $value) {
    //     $arrayList[$key] = $value;
    // }
    // return $arrayList;
}

function getDefaultImage($imageName){
    
    return $imageName == null ? "default_customer_image.png" : "$imageName";
}
function getCustomerImageOrDefaultImage($imageName = null){
    if($imageName != null){
        if(\File::exists(public_path('storage/uploads/images/customers/'.$imageName))){
            return asset('storage/uploads/images/customers/'.$imageName);
        }
    return asset('storage/uploads/images/customers/default_customer_image.png');
    }
}
function getDepartmentImageOrDefaultImage($imageName = null){
    if($imageName != null){
        if(\File::exists(public_path('storage/uploads/images/departments/'.$imageName))){
            return asset('storage/uploads/images/departments/'.$imageName);
        }
    return asset('storage/uploads/images/departments/default_department_image.png');
    }
}
function getJobImageOrDefaultImage($imageName = null){
    if($imageName != null){
        if(\File::exists(public_path('storage/uploads/images/jobs/'.$imageName))){
            return asset('storage/uploads/images/jobs/'.$imageName);
        }
    return asset('storage/uploads/images/jobs/default_job_image.png');
    }
}
function getOfferImageOrDefaultImage($imageName = null){
    if($imageName != null){
        if(\File::exists(public_path('storage/uploads/images/offers/'.$imageName))){
            return asset('storage/uploads/images/offers/'.$imageName);
        }
    return asset('storage/uploads/images/offers/default_offer_image.png');
    }
}
function getProviderImageOrDefaultImage($imageName = null){
    if($imageName != null){
        if(\File::exists(public_path('storage/uploads/images/providers/'.$imageName))){
            return asset('storage/uploads/images/providers/'.$imageName);
        }
    return asset('storage/uploads/images/providers/default_provider_image.png');
    }
}


function getProviderIdentifierImageOrDefaultImage($imageName = null){
    if($imageName != null){
        if(\File::exists(public_path('storage/uploads/images/identifiers/'.$imageName))){
            return asset('storage/uploads/images/identifiers/'.$imageName);
        }
    return asset('storage/uploads/images/providers/default_provider_image.png');
    }
}


function customDate($date){
    return $date;
}


function getBalance($max_price, $min_price){
    return (($max_price + $min_price)/2)/10;
}
function getOfferPrice($max_price, $min_price){
    return ($max_price + $min_price)/2;
}



/**
 * To set null when delete
 */