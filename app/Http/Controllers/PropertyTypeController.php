<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PropertyType;
class PropertyTypeController extends Controller
{
    public function show()
    {
      $propertyTypes = PropertyType::all();
      return view('propertyTypes.propertyTypes',compact('propertyTypes'));
    }

    public function delete(PropertyType $propertyType)
    {
      $propertyType->delete();
      return redirect('tiposDePropiedades/');
    }

    public function new()
    {
      $propertyType = new PropertyType();
      return view('propertyTypes.newPropertyType',compact('propertyType'));
    }

    public function save(Request $request)
    {
      $this->validate(
        $request,
        [
            'name' => 'required|max:20'

        ],
        [

        ],
        [
            'name' => 'nombre'
        ]
    );

    $propertyType = new PropertyType;
    $propertyType->fill($request->all());
    $propertyType->save();

    return redirect('/tiposDePropiedades/');
    }

    public function edit(PropertyType $propertyType)
    {

        return view('propertyTypes.editPropertyType',compact('propertyType'));
    }

    public function update(Request $request,PropertyType $propertyType)
    {
      $this->validate(
        $request,
        [
            'name' => 'required|max:20'

        ],
        [

        ],
        [
            'name' => 'nombre'
        ]
    );
    $propertyType->fill($request->all());
    $propertyType->save();

    return redirect('/tiposDePropiedades/');
    }
}
