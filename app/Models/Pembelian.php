<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    use HasFactory;
    //field apa saja yang bisa di isi
    public $fillable = ['nama_pembeli', 'tgl_beli', 'nama_barang', 'harga_satuan', 'jumlah_barang', 'total_harga'];
    // membuat fitur created_at(kapan data dibuat) & updated_at (kapan data diedit)
    // aktif     <th>No</th>
    // <th>Nama Pembeli</th>
    // <th>Tanggal Pembelian</th>
    // <th>Nama Barang</th>
    // <th>Harga Satuan</th>
    // <th>Jumlah Barang</th>
    public $timestamps = true;
}

