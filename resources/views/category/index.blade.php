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
        <td><a class="btn btn-default" data-toogle="modal" href="#basic"
            onclick="getDetailData({{$li->id}});">Lihat RIncian Pembelian</a></td>
      </tr>
      @endforeach
      <div class="page-toolbar">
        <a href="{{url('kategori_obat/create')}}" class='btn btn-info'
        type="button"> + Kategori Baru </a>
      </div>
    </tbody>
</table>
<div class="page-content">
      @if (session('status'))
        <div class ="alert alert-success">
          {{session('status')}}
        </div>
      @endif
    </div>
@endsection