<div class="portlet">
    <div class="portlet-title">
        <b>Tampilan transaksi dari : {{$data->id}} - {{$data->transaction_date}}</b>
    </div>
    <div class="portlet-body">
        <div class="row">
            @foreach($dataproduk as $dp)
            <div class="col-md-4">
                <div class="thumbnail">
                    <img src="data:image/svg+xml;base64,">
                    <div class="caption">
                        <p align="center"><b>{{$dp->nama_produk}}</b></p>
                        <hr/>
                        <p>Kategori : {{$dp->category->nama_kategori}}</p>
                        <p>Harga : Rp. {{$dp->harga_produk}} ,- </p>
                        <p>Jumlah Beli : {{$dp->pivot->quantity}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>