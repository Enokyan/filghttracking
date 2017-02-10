<?php

namespace App\Http\Controllers;

use App\Aircrafttype;
use Illuminate\Http\Request;
//use App\Aircrafttype;
//use SoapClient;

use App\Aircraft;

class AircraftController extends Controller
{
//    public function index(){
//        $aircrafts = Aircrafttype::get();
//
//        if($aircrafts){
//            return response()->json(compact('aircrafts'));
//        }
//        else{
//            return response()->json(['error' => 'null']);
//        }
//    }
//
//    public function aircrafttype(Request $request){
//
//        $type  = $request->type;
//
//
//        $options = array(
//            'trace' => true,
//            'exceptions' => 0,
//            'login' => 'AlekseyGulko',
//            'password' => 'ae959142551eedbd675ab03e1634234fc22d1d15',
//        );
//        $client = new SoapClient('http://flightxml.flightaware.com/soap/FlightXML2/wsdl', $options);
//
//        $params = array("type" => "A320");
//        $result = $client->AircraftType($params);
//        echo '<pre>';
//        dd($result);
//
////        return response()->json(compact('result'));
//
//
//    }


    public function createAircraft(Request $request){
//$result = $request->all();
        $name = $request->input('name');
        $model = $request->input('model');
        $manufacturer = $request->input('manufacturer');
        $classification = $request->input('classification');
        $seats = $request->input('seats');
        $speed = $request->input('speed');
        $range = $request->input('range');
        $range_norm = $request->input('range_norm');
        $height = $request->input('height');
        $width = $request->input('width');
//dd($name);
        if(isset($_FILES['file'])){
            $file = $_FILES['file'];
            $filePath = $file['tmp_name'];
            $filename = $file['name'];
            Image::make($filePath)->save(public_path('img/') . $filename);
            $img_prof = $filename;
        } else
            $img_prof = 'null';


        $newAircraft = Aircraft::create([
            'img_prof'         => $img_prof,
            'name'             => $name,
            'model'            => $model,
            'manufacturer'     =>  $manufacturer,
            'classification'   =>  $seats,
            'seats'            =>  $classification,
            'speed'            =>  $speed,
            'range'            =>  $range,
            'range_norm'       =>  $range_norm,
            'height'           =>  $height,
            'width'            =>  $width,
        ]);

        return response()->json(compact('newAircraft'));
    }

}
