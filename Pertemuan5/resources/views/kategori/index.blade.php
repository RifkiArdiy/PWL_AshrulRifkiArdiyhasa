@extends('layouts.app')

{{-- Customize layout sections --}}

@section('subtitle', 'Kategori')
@section('content_header_title', 'Home')
@section('content_header_subtitle', 'Kategori') {{-- Memperbaiki typo "Kagegori" menjadi "Kategori" --}}

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Manage Kategori</div>
            <div class="card-body">
                {!! $dataTable->table() !!} {{-- Menggunakan {!! ... !!} untuk menampilkan HTML yang dihasilkan DataTables --}}
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    {!! $dataTable->scripts() !!} {{-- Menggunakan {!! ... !!} untuk menampilkan script yang dihasilkan DataTables --}}
@endpush