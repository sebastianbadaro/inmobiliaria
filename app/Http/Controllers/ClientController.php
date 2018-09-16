<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
class ClientController extends Controller
{
    public function show()
    {
      $clients = Client::paginate(10);
      return view('clients.clients',compact('clients'));
    }

    public function delete(Client $client)
    {
      $client->delete();
      return redirect('clientes/');
    }

    public function edit(Client $client)
    {
        return view('clients.editClient',compact('client'));
    }

    public function update(Request $request, Client $client)
    {
      $this->validate(
        $request,
        [
            'first_name' => 'required|max:60',
            'last_name' => 'required|max:60',
            'phone' => 'required|max:60',
            'email' => 'required|max:60|email ',
            'address' => 'required|max:200'

        ],
        [

        ],
        [
          'first_name' => 'nombre',
          'last_name' => 'apellido',
          'phone' => 'telefono',
          'address' => 'direccion'
        ]
    );
    $client->fill($request->all());
    $client->save();

    return redirect('/clientes/');
    }

    public function new()
    {
      $client = new Client();
      return view('clients.newClient',compact('client'));
    }
    public function save(Request $request, Client $client)
    {
      $this->validate(
        $request,
        [
            'first_name' => 'required|max:60',
            'last_name' => 'required|max:60',
            'phone' => 'required|max:60',
            'email' => 'required|max:60|email ',
            'address' => 'required|max:200'

        ],
        [

        ],
        [
            'first_name' => 'nombre',
            'last_name' => 'apellido',
            'phone' => 'Telefono',
            'address' => 'Direccion'
        ]
    );
    $client->fill($request->all());
    $client->save();

    return redirect('/clientes/');
    }
}
