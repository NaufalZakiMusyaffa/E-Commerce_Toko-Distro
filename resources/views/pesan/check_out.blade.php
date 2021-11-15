@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="{{ url('home') }}" class="btn btn-primary">Kembali</a>
        </div>
        <div class="col-md-12 mt-3">
         <nav aria-label="breadcrumb">
             <ol class="breadcrumb">
                 <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Check Out</li>
            </ol>
        </nav>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Check Out</h3>
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
                             <th>Fitur</th>
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
                                <form action="{{ url('check-out') }}/{{ $detail_pesanan->id }}" method="post">
                                    @csrf
                                    {{ method_field('DELETE') }}
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Pesanan ini akan dihapus?');"><i class="fa fa-trash"></i></button>
                                </form>
                             </td>
                         </tr>
                         @endforeach
                         <tr>
                            <td colspan="5" align="right"><strong>Total Harga :</strong></td>
                            <td><strong>Rp. {{ number_format($pesanan->jumlah_harga) }}</strong></td>
                            <td><a href="{{ url('konfirmasi-check-out') }}" class="btn btn-success">Check Out</a></td>
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