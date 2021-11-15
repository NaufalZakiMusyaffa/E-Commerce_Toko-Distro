<?php

namespace App\Http\Controllers;

use Auth;
use Alert;
use App\User;
use App\Barang;
use App\Pesanan;
use App\DetailPesanan;
use App\Pembayaran;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        return view('pembayaran');
    }

    public function store(Request $request){
        $pembayaran = new Pembayaran();
        
        if($request->hasfile('gambar')) {
            $file = $request->file('gambar');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/pembayaran/', $filename);
            $pembayaran->gambar = $filename;

        }else{
            return $request;
            $pembayaran->gambar = '';
        }
        
        $pembayaran->save();

        return redirect('history');

    }

        
}
