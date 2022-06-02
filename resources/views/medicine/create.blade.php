@extends('layouts.conquer2')
@section('title')
  Form Create Obat
@endsection

@section('createMedicine')

<h1> Form Obat </h1>
<form method ="POST" action="{{route('obat.store')}}">
    @csrf
<form action="/action_page.php">
  <div class="form-group">
    <label for="name">Name </label>
    <input type="generic_name" class="form-control" id="name" name="name">
  </div>
  <div class="form-group">
    <label for="form">Form </label>
    <input type="form" class="form-control" id="form" name="form">
  </div>
  <div class="form-group">
    <label for="frm">Formula</label>
    <input type="restriction_formula" class="form-control" id="frm" name="frm">
  </div>
  <div class="form-group">
    <label for="dsc">Description </label>
    <input type="description" class="form-control" id="dsc" name="dsc">
  </div>
  <div class="form-group">
    <label for="fk1">Faskes TK 1 </label>
    <input type="faskes_tk1" class="form-control" id="fk1" name="fk1">
  </div>
  <div class="form-group">
    <label for="fk1">Faskes TK 2 </label>
    <input type="faskes_tk2" class="form-control" id="fk2" name="fk2">
  </div>
  <div class="form-group">
    <label for="fk1">Faskes TK 3 </label>
    <input type="faskes_tk3" class="form-control" id="fk3" name="fk3">
  </div>
  <!-- <div class="form-group">
    <label for="cateid">Category ID</label>
    <input type="category_id" class="form-control" id="cateid" name="cateid">
  </div> -->
  <div class="form-group row">
        <label for="category_id" class="col-md-4 col-form-label">Category ID</label>
        <div class="col-md-6">
            <select name="category_id" id="category_id" class="form-control">
                <option value="">== Select Category ==</option>
                @foreach ($categories as $id => $name)
                    <option value="{{ $id }}">{{ $name }}</option>
                @endforeach
            </select>
        </div>
    </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection