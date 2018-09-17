@extends('layouts.app')



@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default ">
                <div class="panel-heading d-flex flex-row">

                    <div class="p-2">
                      Monedas
                    </div>

                  <form action="monedas/agregar"><input type="submit" value="Nuevo" /></form>
                </div>



                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Simbolo</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Acciones</th>

                      </tr>
                    </thead>
                    <tbody>
                        @foreach($currencies as $indexKey =>$currency)
                      <tr>

                        <td>  {{ $indexKey+1 }}</td>
                        <td> {{ $currency->symbol }}</td>
                        <td>{{ $currency->name }}</td>
                        <td>
                          <form class="" action="/monedas/{{$currency->id}}/eliminar" method="post">
                            {{ csrf_field() }}
                            {{ method_field('delete') }}
                            <input type="submit" name="" value="Eliminar">
                          </form>

                          <form class="" action="/monedas/{{$currency->id}}/editar" method="get">
                            {{ csrf_field() }}
                            <input type="submit" name="" value="Editar">
                          </form>
                        </td>



                      </tr>
                        @endforeach
                    </tbody>
                  </table>


           </div>
        </div>
    </div>
</div>
<div class="d-flex flex-row">



@endsection
