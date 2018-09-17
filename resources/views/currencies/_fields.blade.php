{{ csrf_field() }}


<div>
  <label for="name">Simbolo</label>
  <input type="text" name="symbol" id="symbol" value="{{ old('symbol',$currency->symbol)}}"/>
</div>
<div>
  <label for="name">Nombre</label>
  <input type="text" name="name" id="name" value="{{ old('name',$currency->name)}}"/>
</div>
