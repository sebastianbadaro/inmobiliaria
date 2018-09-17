<?php

namespace App\Http\Controllers;
use App\Currency;
use Illuminate\Http\Request;

class CurrencyController extends Controller
{
    public function show()
    {
      $currencies = Currency::all();
      return view('currencies.currencies',compact('currencies'));
    }
    public function delete(Currency $currency)
    {
      $currency->delete();
      return redirect('/monedas/');
    }

    public function new()
    {
      $currency = new Currency();
      return view('currencies.newCurrency',compact('currency'));
    }

    public function save(Request $request)
    {
      $currency= new Currency();

      $this->validate(
        $request,
        [
            'name' => 'required|max:20',
            'symbol' => 'required|max:20',

        ],
        [

        ],
        [
            'name' => 'nombre'
        ]
    );
    $currency->fill($request->all());
    $currency->save();

    return redirect('/monedas/');
    }

    public function edit(Currency $currency)
    {
      return view('currencies.editCurrency',compact('currency'));
    }

    public function update(Request $request, Currency $currency)
    {
      $this->validate(
        $request,
        [
            'name' => 'required|max:20',
            'symbol' => 'required|max:20',

        ],
        [

        ],
        [
            'name' => 'nombre',
            'symbol' => 'simbolo'
        ]
    );
    $currency->fill($request->all());
    $currency->save();

    return redirect('/monedas/');
    }
}
