@extends('layouts.conquer2')
@section('title')
  Form Supplier
@endsection

@section('supplierContent')

<h1> Form Supplier </h1>
<form method ="POST" action="{{url('suppliers/'.$data->id)}}">
    @csrf
    @method("PUT")
<form action="/action_page.php">
  <div class="form-group">
    <label for="name">Name </label>
    <input type="name" class="form-control" id="name" name="name" value="{{$data->name}}">
  </div>
  <div class="form-group">
    <label for="adr">Address</label>
    <input type="address" class="form-control" id="adr" name="adr" value="{{$data->address}}">
  </div>
  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection