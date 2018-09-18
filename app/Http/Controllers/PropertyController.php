<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;

class PropertyController extends Controller
{
    public function show()
    {
    //  $properties = Property::all();

      $properties = Property::paginate(10);
    //  $properties->load('propertyType');
    //  dd($properties);
      return view('properties.properties',compact('properties'));
    }
}
