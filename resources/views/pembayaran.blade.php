@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <!-- <a href="{{ url('home') }}" class="btn btn-primary">Kembali</a> -->
        </div>
        <div class="col-md-12 mt-3">
         <nav aria-label="breadcrumb">
             <ol class="breadcrumb">
                 <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Pembayaran</li>
            </ol>
        </nav>
        </div>
        <div class="col-md-12 mt-2">
            <div class="card">
             <div class="card-body">
                <h4><i class="fa fa-pencil-alt"></i> Pembayaran</h4>
                <br>
        <form action="{{ route('addimage') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
                <div class="custom-file">
                    <input type="file" name="gambar" class="form-control" required>
                </div>
                <br><br>

                <button type="submit" name="submit" class="btn btn-primary btn-lg"> Simpan Pembayaran </button>
        </form>
        <br>
        <br>
            <div class="card">
                <div class="card-body">
                    <h3>Informasi</h3>
                    <h5>Silahkan untuk melakukan pembayaran bisa melalui: </h5>
                    <br><strong>Bank BRI : 32266-000000-333 (A/N : Random)</strong>
                    <br><br><strong>OVO      : 089500000000 (A/N : Random)</strong>
                    <br><br><strong>Dana     : 089500001111 (A/N : Random)</strong>
                    </h5>
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>
    </div>
</div>
@endsection

               