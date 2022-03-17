<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Pegawai;
use App\Models\Pelanggan;
use App\Models\Supplier;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function home()
    {

        return view('index', [
            'barangs' => Barang::all(),
            'pelangan' => Pelanggan::all(),
            'peg' => Pegawai::all(),
            'sup' => Supplier::all()
        ]);
    }
}
