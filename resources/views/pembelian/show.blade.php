@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Data pembelian
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Nama Pembeli</label>
                            <input type="text" class="form-control " name="nama" value="{{ $pembelian->nama_pembeli }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tanggal Pembelian</label>
                            <input type="text" class="form-control " name="nis" value="{{ $pembelian->tgl_beli }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Nama Barang</label>
                            <input type="text" class="form-control " name="nis" value="{{ $pembelian->nama_barang }}"
                                readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Harga Satuan</label>
                            <input type="text" class="form-control " name="nis" value="{{ $pembelian->harga_satuan }}"
                                readonly>
                        </div>
                        </div>
                        <div class="mb-3">
                            <div class="d-grid gap-2">
                                <a href="{{ route('pembelian.index') }}" class="btn btn-primary" type="submit">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection