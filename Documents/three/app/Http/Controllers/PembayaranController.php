<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pesan;

class PembayaranController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request, [
        'name' => 'required',
        'nim' => 'required|min:9',
        'no_telp' => 'required|min:9',
        'prodi' => 'required',
        'tgl_mulai' => 'required',
        'tgl_selesai' => 'required',
        'ruang' => 'required'
        ]);
        $input = $request->all();
        $pesan = Pesan::create($input);
        return redirect()->route('pembayaran')
        ->with('success','PEMESANAN ANDA BERHASIL');
    }
}
