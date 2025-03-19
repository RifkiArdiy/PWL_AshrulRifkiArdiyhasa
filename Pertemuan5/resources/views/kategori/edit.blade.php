@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card card-warning">
            <div class="card-header">
                <h3 class="card-title">Edit Kategori</h3>
            </div>
            {{-- <form method="POST" action="{{ route('kategori.update', $kategori->id) }}"> --}}
                <form method="POST" action="{{ route('kategori.update', ['kategori' => $kategori->kategori_id]) }}">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="kodekategori">Kode Kategori</label>
                            <input type="text" class="form-control" id="kodekategori" name="kodekategori"
                                value="{{ $kategori->kategori_kode }}" required>
                        </div>
                        <div class="form-group">
                            <label for="namakategori">Nama Kategori</label>
                            <input type="text" class="form-control" id="namakategori" name="namakategori"
                                value="{{ $kategori->kategori_nama }}" required>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-warning">Update</button>
                    </div>
                </form>
        </div>
    </div>
@endsection