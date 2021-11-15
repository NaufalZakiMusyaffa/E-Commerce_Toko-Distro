@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="{{ url('history') }}" class="btn btn-primary">Kembali</a>
        </div>
        <div class="col-md-12 mt-3">
         <nav aria-label="breadcrumb">
             <ol class="breadcrumb">
                 <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                 <li class="breadcrumb-item"><a href="{{ url('history') }}">History Pesanan</a></li>
                <li class="breadcrumb-item active" aria-current="page">Detail Pesanan</li>
            </ol>
        </nav>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Detail Pesanan</h3>
                </div>
            </div>
            <div class="card-body">
            @if(!empty($pesanan))
                 <p>Tanggal Pemesanan : {{ $pesanan->tanggal }}</p>
                 <table class="table table-striped">
                    <thead>
                         <tr>
                             <th>No</th>
                             <th>Product</th>
                             <th>Nama Barang</th>
                             <th>Jumlah</th>
                             <th>Harga</th>
                             <th>Total Harga</th>
                         </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        @foreach($detail_pesanans as $detail_pesanan)
                         <tr>
                             <td>{{ $no++ }}</td>
                             <td>
                                <img src="{{ url('images') }}/{{ $detail_pesanan->barang->gambar }}" width="100" alt="...">
                             </td>
                             <td>{{ $detail_pesanan->barang->nama_barang }}</td>
                             <td>{{ $detail_pesanan->jumlah }}</td>
                             <td align="left">Rp. {{ number_format($detail_pesanan->barang->harga) }}</td>
                             <td align="left">Rp. {{ number_format($detail_pesanan->jumlah_harga) }}</td>
                             <td>
                
                         </tr>
                         @endforeach
                         <tr>
                            <td colspan="5" align="right"><strong>Total Harga :</strong></td>
                            <td><strong>Rp. {{ number_format($pesanan->jumlah_harga) }}</strong></td>
                         </tr>
                    </tbody>
                 </table>
                 @endif
            </div>
        </div>
    </div>
</div>
</div>
@endsection