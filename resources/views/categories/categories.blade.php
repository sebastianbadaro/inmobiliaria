@extends('layouts.app')



@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default ">
                <div class="panel-heading d-flex flex-row">

                    <div class="p-2">
                      Categorias
                    </div>

                  <form action="categorias/agregar"><input type="submit" value="Nuevo" /></form>
                </div>



                  <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Created</th>
                        <th scope="col">Updated</th>
                        <th scope="col">Acciones</itth>

                      </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $indexKey =>$category)
                      <tr>
                        <th scope="row">{{$indexKey+1}}</th>
                        <td>  {{ $category->name }}</td>
                        <td> {{ $category->created_at }}</td>
                        <td>{{ $category->updated_at }}</td>
                        <td>
                          <form class="" action="/categorias/{{$category->id}}/eliminar" method="post">
                            {{ csrf_field() }}
                            {{ method_field('delete') }}
                            <input type="submit" name="" value="Eliminar">
                          </form>

                          <form class="" action="/categorias/{{$category->id}}/editar" method="get">
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
