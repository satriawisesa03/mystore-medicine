@extends('layouts.conquer2')
@section('title')
  Daftar Supplier
@endsection
</script>
@section('daftarSupplier')
<h2>Supplier</h2>
  <p>Supplier</p>
      @if (session('status'))
        <div class ="alert alert-success">
          {{session('status')}}
        </div>
      @endif
  <table class="table table-hover">
    <thead>
      <tr>
      <th>ID</th>
        <th>Nama</th>
        <th>Address</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach($dataSup as $li)
      <tr>
        <td>{{ $li->id }}</td>
        <td>{{ $li->name }}</td>
        <td>{{ $li->address }}</td>
        <td>{{ $li->created_at}}</td>
        <td><a href="{{ url('suppliers/'.$li->id.'/edit')}}"
                class='btn btn-xs btn-info'>Edit</a> <br>
    @can('delete-permission', $li)
            <form method='POST' action="{{ url('suppliers/'.$li->id)}}">
            @csrf
            @method('DELETE')
            <input type="submit" value="delete" class='btn btn-danger btn-xs'
            onclick="if(!confirm('are you sure to delete this record ? ')) return false;"/>
          </form>
    @endcan
        </td>

        <td><a class="btn btn-default" data-toogle="modal" href="#basic"
            onclick="getDetailData({{$li->id}});">Lihat Rincian Pembelian</a></td>
      </tr>
      @endforeach
      <div class="page-toolbar">
        <a href="{{url('suppliers/create')}}" class='btn btn-info'
        type="button"> + Supplier Baru </a>
      </div>
    </tbody>
</table>
@endsection