<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Aircraft;
use App\Imageaircraft;
use Illuminate\Support\Facades\File;

class AircraftController extends Controller
{
    //////////showAircraft/////////////
    public function index(){
        $aircrafts = Aircraft::with('images')->get();
//        dd($aircrafts);
        return response()->json(compact('aircrafts'));

    }
////
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

    /////////insert aircraft i images aircraft///////////
    public function createAircraft(Request $request){
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

        $newAircraft = Aircraft::create([
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
        if(isset($request->file)){
            $files = $request->file;
            $img_names = [];
            foreach ($files as $file) {
                $imgRenamed = 'aircraft_'.str_random(10).'.'.$file->getClientOriginalExtension();
                $img_names[]=[
                    'aircraft_id' =>$newAircraft->id,
                    'imageAircrafts' =>$imgRenamed
                ];
                $file->move(config('Constants.upload_url'), $imgRenamed);
            }
            $AircraftImages = Imageaircraft::insert($img_names);
        }
        return response()->json(compact('newAircraft','AircraftImages'));
    }

}
