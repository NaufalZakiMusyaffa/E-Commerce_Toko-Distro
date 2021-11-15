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
                <li class="breadcrumb-item active" aria-current="page">Pembayaran</li>
            </ol>
        </nav>
        </div>
        <div class="col-md-12 mt-2">
            <div class="card">
             <div class="card-body">
                <h4><i class="fa fa-pencil-alt"></i> Pembayaran</h4>
                <form method="POST" action="{{ url('pembayaran') }}">
                        @csrf
                    
                    <div class="form-group{{ $errors->has('gambar') ? ' has-error' : '' }}">
                        <label for="gambar" class="col-md-4 control-label">Gambar</label>

                        <div class="col-md-6">
                            <input id="gambar" type="file" class="form-control" name="gambar" required>

                            @if ($errors->has('gambar'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('gambar') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Simpan
                                </button>
                            </div>
                        </div>
                 </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection