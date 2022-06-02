@extends('layouts.conquer2')

@section('title')
    Daftar Kategori Obat
@endsection

@section('medicineContent')
  <h2>MEDICINE</h2>
  <p>List Medicine:</p>            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Name</th>
        <th>Form</th>
        <th>Formula</th>
        <th>Description</th>
        <th>Faskes TK1</th>
        <th>Faskes TK2</th>
        <th>Faskes TK3</th>
        <th>Created At</th>
        <th>Updated At</th>
        <th>Category Id</th>
      </tr>
    </thead>
    <tbody>
        @foreach($datasmed as $li)
      <tr>
        <td>{{ $li->generic_name }}</td>
        <td>{{ $li->form }}</td>
        <td>{{ $li->restriction_formula }}</td>
        <td>{{ $li->description }}</td>
        <td>{{ $li->faskes_tk1 }}</td>
        <td>{{ $li->faskes_tk2 }}</td>
        <td>{{ $li->faskes_tk3 }}</td>
        <td>{{ $li->created_at }}</td>
        <td>{{ $li->updated_at }}</td>
        <td>{{ $li->category_id }}</td>
      </tr>
      @endforeach
      <div class="page-toolbar">
        <a href="{{url('obat/create')}}" class='btn btn-info'
        type="button"> + Obat Baru </a>
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
