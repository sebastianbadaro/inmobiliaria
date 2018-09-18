@extends('layouts.app')



@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default ">
                <div class="panel-heading d-flex flex-row">

                    <div class="p-2">
                      Propiedades
                    </div>

                  <form action="propiedades/agregar"><input type="submit" value="Nuevo" /></form>
                </div>



                  <table class="table">
                    <thead>
                      <tr>

                        <th scope="col">Direccion</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Categoria</th>
                        <th scope="col">Valor</th>
                        <th scope="col">Acciones</th>

                      </tr>
                    </thead>
                    <tbody>
                            @foreach($properties as $property)
                      <tr>

                        <td> {{$property->address}}</td>
                        <td> {{$property->propertytype->name}}</td>
                        <td> {{$property->category->name}}</td>
                        <td> {{$property->currency->symbol}} {{$property->value}}</td>

                        <td>
                          <form class="" action="/propiedades/{{$property->id}}/eliminar" method="post">
                            {{ csrf_field() }}
                            {{ method_field('delete') }}
                            <input type="submit" name="" value="Eliminar">
                          </form>

                          <form class="" action="/propiedades/{{$property->id}}/editar" method="get">
                            {{ csrf_field() }}
                            <input type="submit" name="" value="Editar">
                          </form>
                        </td>



                      </tr>
                        @endforeach
                    </tbody>
                  </table>

{{$properties->links()}}
           </div>
        </div>
    </div>
</div>
<div class="d-flex flex-row">



@endsection
