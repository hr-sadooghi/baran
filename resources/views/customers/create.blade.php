@extends ('layouts.master')

@section ('content')
<div class="col-sm-8 blog-main">
<form method="POST" action="/customers">
	{{ csrf_field() }}
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>

  <div class="form-group">
    <label for="family">Family</label>
    <input type="text" class="form-control" id="family" name="family">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection
