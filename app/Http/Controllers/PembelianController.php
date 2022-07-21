<?php

namespace App\Http\Controllers;

use App\Models\Pembelian;
use Illuminate\Http\Request;

class PembelianController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //menampilkan semua data dari model Pembelian
        $pembelian = Pembelian::all();
        return view('pembelian.index', compact('pembelian'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pembelian.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validasi
        $validated = $request->validate([
            'nama_pembeli' => 'required',
            'tgl_beli' => 'required',
            'nama_barang' => 'required',
            'harga_satuan' => 'required',
            'jumlah_barang' => 'required',
        
        ]);

        $pembelian = new Pembelian();
        $pembelian->nama_pembelian = $request->nama_pembelian;
        $pembelian->tgl_beli = $request->tgl_beli;
        $pembelian->nama_barang = $request->nama_barang;
        $pembelian->harga_satuan = $request->harga_satuan;
        $pembelian->jumlah_barang = $request->jumlah_barang;
        $pembelian->total_harga = $request->harga_satuan * $request->jumlah_barang;
        $pembelian->save();
        return redirect()->route('pembelian.index')
            ->with('success', 'Data berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pembelian = Pembelian::findOrFail($id);
        return view('pembelian.show', compact('pembelian'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pembelian = Pembelian::findOrFail($id);
        return view('$pembelian.edit', compact('pembelian'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated =  $request->validate([
                'nama_pembeli' => 'required',
                'tgl_beli' => 'required',
                'nama_barang' => 'required',
                'harga_satuan' => 'required',
                'jumlah_barang' => 'required',

        ]);
        // <th>No</th>
        // <th>Nama Pembeli</th>
        // <th>Tanggal Pembelian</th>
        // <th>Nama Barang</th>
        // <th>Harga Satuan</th>
        // <th>Jumlah Barang</th>
        // // Validasi
        // $validated = $request->validate([
        //     'nama' => 'required',
        //     'nis' => 'required|max:255',
        //     'jenis_kelamin' => 'required',
        //     'agama' => 'required',
        //     'tgl_lahir' => 'required',
        //     'alamat' => 'required',
        // ]);

        // $siswa = Siswa::findOrFail($id);
        // $siswa->nama = $request->nama;
        // $siswa->nis = $request->nis;
        // $siswa->jenis_kelamin = $request->jenis_kelamin;
        // $siswa->agama = $request->agama;
        // $siswa->tgl_lahir = $request->tgl_lahir;
        // $siswa->alamat = $request->alamat;
        // $siswa->save();
        // return redirect()->route('siswa.index')
        //     ->with('success', 'Data berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswa = Pembelian::findOrFail($id);
        $siswa->delete();
        return redirect()->route('pembelian.index')
            ->with('success', 'Data berhasil dihapus!');
    }
}