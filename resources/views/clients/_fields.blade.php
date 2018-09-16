{{ csrf_field() }}


<div>
  <label for="first_name">Nombre</label>
  <input type="text" name="first_name" id="first_name" value="{{ old('first_name',$client->first_name)}}"/>
</div>
<div>
  <label for="last_name">Apellido</label>
  <input type="text" name="last_name" id="last_name" value="{{ old('last_name',$client->last_name)}}"/>
</div>
<div>
  <label for="phone">Telefono</label>
  <input type="text" name="phone" id="phone" value="{{ old('phone',$client->phone)}}"/>
</div>
<div>
  <label for="email">Email</label>
  <input type="email" name="email" id="email" value="{{ old('email',$client->email)}}"/>
</div>
<div>
  <label for="address">Direccion</label>
  <input type="text" name="address" id="address" value="{{ old('address',$client->address)}}"/>
</div>
