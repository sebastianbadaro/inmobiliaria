{{ csrf_field() }}


<div>
  <label for="rating">Name</label>
  <input type="text" name="name" id="name" value="{{ old('name',$propertyType->name)}}"/>
</div>
