@extends('layouts.app')



@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default ">
                <div class="panel-heading d-flex flex-row">

                    <div class="p-2">
                      Clientes
                    </div>

                  <form action="clientes/agregar"><input type="submit" value="Nuevo" /></form>
                </div>



                  <table class="table">
                    <thead>
                      <tr>

                        <th scope="col">Nombre</th>
                        <th scope="col">Apellido</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">Mail</th>
                        <th scope="col">Direccion</th>
                        <th scope="col">Acciones</th>

                      </tr>
                    </thead>
                    <tbody>
                        @foreach($clients as $indexKey =>$client)
                      <tr>

                        <td>  {{ $client->first_name }}</td>
                        <td> {{ $client->last_name }}</td>
                        <td>{{ $client->phone }}</td>
                        <td>{{ $client->email }}</td>
                        <td>{{ $client->address }}</td>
                        <td>
                          <form class="" action="/clientes/{{$client->id}}/eliminar" method="post">
                            {{ csrf_field() }}
                            {{ method_field('delete') }}
                            <input type="submit" name="" value="Eliminar">
                          </form>

                          <form class="" action="/clientes/{{$client->id}}/editar" method="get">
                            {{ csrf_field() }}
                            <input type="submit" name="" value="Editar">
                          </form>
                        </td>



                      </tr>
                        @endforeach
                    </tbody>
                  </table>

{{$clients->links()}}
           </div>
        </div>
    </div>
</div>
<div class="d-flex flex-row">



@endsection
