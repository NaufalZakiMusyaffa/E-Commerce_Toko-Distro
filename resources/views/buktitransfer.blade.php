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
                <li class="breadcrumb-item active" aria-current="page">Bukti Transfer</li>
            </ol>
        </nav>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Bukti Transfer</h3>
                </div>
            </div>
            <div class="card-body">
                 <table class="table table-striped">
                    <thead>
                         <tr>
                             <th>No</th>
                             <th>Gambar</th>
                         </tr>
                    </thead>
                    <tbody>
                    <?php $no = 1; ?>
                        @foreach($pembayarans as $pembayaran)
                         <tr>
                             <td>{{ $no++ }}</td>
                             <td>
                                <img src="{{ url('uploads/pembayaran') }}/{{ $pembayaran->gambar }}" width="350" alt="..."> 
                             </td>
                         </tr>
                         @endforeach
                    </tbody>
                 </table>
            </div>
        </div>
    </div>
</div>
</div>
@endsection