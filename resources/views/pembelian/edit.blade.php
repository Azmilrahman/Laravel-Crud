@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header">
                        Data Pembeli
                    </div>
                    <div class="card-body">
                        <form action="{{ route('pembelian.update', $pembelian->id) }}" method="post">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label class="form-label"> Pembeli</label>
                                <input type="text" class="form-control  @error('_pembeli') is-invalid @enderror"
                                    name="_pembeli" value="{{ $pembelian->nama_pembeli }}">
                                @error('nama_pembeli')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Tanggal Pembelian</label>
                                <input type="date" class="form-control  @error('tgl_beli') is-invalid @enderror"
                                    name="tgl_beli" value="{{ $pembelian->tgl_beli }}">
                                @error('tgl_beli')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Nama Barang</label>
                                <input type="text" class="form-control  @error('harga_satuan') is-invalid @enderror"
                                    name="nama_barang" value="{{ $barangan->nama_barang }}">
                                @error('nama_barang')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Harga Satuan</label>
                                <input type="text" class="form-control  @error('harga_satuan') is-invalid @enderror"
                                    name="harga_satuan" value="{{ $barangan->harga_satuan }}">
                                @error('harga_satuan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Jumlah Barang</label>
                                <input type="text" class="form-control  @error('jumlah_barang') is-invalid @enderror"
                                    name="jumlah_barang" value="{{ $barangan->jumlah_barang }}">
                                @error('jumlah_barang')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary" type="submit">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection