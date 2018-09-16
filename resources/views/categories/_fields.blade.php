{{ csrf_field() }}


<div>
  <label for="name">Name</label>
  <input type="text" name="name" id="name" value="{{ old('name',$category->name)}}"/>
</div>
