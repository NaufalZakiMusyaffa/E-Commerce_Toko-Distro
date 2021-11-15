<?php

namespace App\Http\Controllers;

use App\Pembayaran;
use Illuminate\Http\Request;

class BuktitransferController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $pembayarans = Pembayaran::paginate(6);
        return view('buktitransfer', compact('pembayarans'));
    }
}
