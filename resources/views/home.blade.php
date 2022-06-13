@extends('layouts.frontend')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1>Riwayat Transaksi</h1>
                    <table id=nota class="table table-hover table-condensed">
                        <thead>
                            <tr>
                                <th style="width:10%">Kode</th>
                                <th style="width:50%">Waktu Transaksi</th>
                                <th style="width:30%" class="txt-center">Total</th>
                                <th style="width:10%"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($trans as $t)
                            <tr>
                                <td data-th="Kode">
                                    {{$t->id}}
                                </td>
                                <td data-th="Waktu">
                                    {{$t->transaction_date}}
                                </td>
                                <td data-th="Total">
                                   Rp. {{$t->total}}
                                </td>
                                <td data-th="">
                                    <a class="btn btn-info btn-sm update-cart" data-id="{{$t->id}}" 
                                        href="{{ route ('transactions.show',$t->id) }} " >View</a>
                                </td>
                                
                            </tr>
                            @endforeach
                        </tbody>
                        <td colspan="2" class="hidden-xs"></td>
                        <td colspan="2" class="hidden-xs"></td>
                        <td><a href="{{ url('/') }}" class="btn btn-warning"><i class="fa fa-angle-right"></i> Back Shopping</a></td>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
