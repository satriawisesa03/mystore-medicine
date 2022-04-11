@extends('layouts.conquer2')

@section('title')
    Daftar Kategori Obat
@endsection

@section('content')
  <h2>Categories</h2>
  <p>List Category:</p>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Description</th>
      </tr>
    </thead>
    <tbody>
        @foreach($datas as $li)
      <tr>
        <td>{{ $li->id }}</td>
        <td>{{ $li->name }}</td>
        <td>{{ $li->description }}</td>
      </tr>
      @endforeach
    </tbody>
@endsection