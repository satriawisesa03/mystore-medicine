@extends('layouts.conquer2')
@section('title')
  Form Create Category
@endsection

@section('createCategory')

<h1> Form Category </h1>
<form method ="POST" action="{{route('kategori_obat.store')}}">
    @csrf
<form action="/action_page.php">
  <div class="form-group">
    <label for="name">Name </label>
    <input type="name" class="form-control" id="name" name="name">
  </div>
  <div class="form-group">
    <label for="adr">Description</label>
    <input type="description" class="form-control" id="dsc" name="dsc">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection