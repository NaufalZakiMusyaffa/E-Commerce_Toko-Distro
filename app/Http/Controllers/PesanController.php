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

class PesanController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index($id) {
        $barang = Barang::where('id', $id)->first();

        return view('pesan.index', compact('barang'));
    }

    public function pesan(Request $request, $id) {
        $barang = Barang::where('id', $id)->first();
        $tanggal = Carbon::now();

        //Menampung pesanan cek validasi
        $cek_pesanan = Pesanan::where('id_user', Auth::user()->id)->where('status',0)->first();

        if(empty($cek_pesanan)) {
            //Menyimpan ke database pesanan
            $pesanan = new Pesanan;
            $pesanan->id_user = Auth::user()->id;
            $pesanan->tanggal = $tanggal;
            $pesanan->status = 0;
            $pesanan->jumlah_harga = 0;
            $pesanan->save();
        }

        //Validasi stok barang
        if($request->jumlah_beli > $barang->stok) {
            return redirect('pesan/'.$id);
        }
      
        //Menyimpan ke database detail pesanan
        $pesanan_baru = Pesanan::where('id_user', Auth::user()->id)->where('status',0)->first();

        //cek detail pesanan
        $cek_detail_pesanan = DetailPesanan::where('id_barang', $barang->id)->where('id_pesanan', $pesanan_baru->id)->first();
            if(empty($cek_detail_pesanan)) {
                $detail_pesanan = new DetailPesanan;
                $detail_pesanan->id_barang = $barang->id;
                $detail_pesanan->id_pesanan = $pesanan_baru->id;
                $detail_pesanan->jumlah = $request->jumlah_beli;
                $detail_pesanan->jumlah_harga = $barang->harga*$request->jumlah_beli;
                $detail_pesanan->save(); 
            }else{
                $detail_pesanan = DetailPesanan::where('id_barang', $barang->id)->where('id_pesanan', $pesanan_baru->id)->first();
                $detail_pesanan->jumlah = $detail_pesanan->jumlah_beli+$request->jumlah_beli;
               
                //harga total
                $harga_detail_pesanan = $barang->harga*$request->jumlah_beli;
                $detail_pesanan->jumlah_harga = $detail_pesanan->jumlah_harga+$harga_detail_pesanan;
                $detail_pesanan->update();
            }
      
            //jumlah total
            $pesanan = Pesanan::where('id_user', Auth::user()->id)->where('status',0)->first();
            $pesanan->jumlah_harga = $pesanan->jumlah_harga+$barang->harga*$request->jumlah_beli;
            $pesanan->update();
            
        return redirect('home');
    }

    public function check_out() {

        $pesanan = Pesanan::where('id_user', Auth::user()->id)->where('status',0)->first();
        //mendeklarasikan variabel
        $detail_pesanans = [];

        if(!empty($pesanan))
        {
            $detail_pesanans = DetailPesanan::where('id_pesanan', $pesanan->id)->get();
        }
        return view('pesan.check_out', compact('pesanan', 'detail_pesanans'));
    }

    public function delete($id) {
        $detail_pesanan = DetailPesanan::where('id', $id)->first();

        //jika pesanan ada yang dihapus maka disini kita meload pesanan yang masih ada dan menjumlahkan harganya lagi
        $pesanan = Pesanan::where('id', $detail_pesanan->id_pesanan)->first();
        $pesanan->jumlah_harga = $pesanan->jumlah_harga-$detail_pesanan->jumlah_harga;
        $pesanan->update();

        $detail_pesanan->delete();

        return redirect('check-out');
    }

    public function konfirmasi() {

        $user = User::where('id', Auth::user()->id)->first();
        
        if(empty($user->alamat)) {
            Alert::error('Lengkapi identitas Anda', 'Error');
            return redirect('profile');
        }

        if(empty($user->nohp)) {
            Alert::error('Lengkapi identitas Anda', 'Error');
            return redirect('profile');
        }


        $pesanan = Pesanan::where('id_user', Auth::user()->id)->where('status',0)->first();
        $id_pesanan = $pesanan->id;
        $pesanan->status = 1;
        $pesanan->update();

        $detail_pesanans = DetailPesanan::where('id_pesanan', $id_pesanan)->get();
            foreach ($detail_pesanans as $detail_pesanan) {
                $barang = Barang::where('id', $detail_pesanan->id_barang)->first();
                $barang->stok = $barang->stok-$detail_pesanan->jumlah;
                $barang->update();
            }

        return redirect('pembayaran');
    }

  
}

