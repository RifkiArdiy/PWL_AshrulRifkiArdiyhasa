
@extends('layouts.template')

@section('content')
<div class="card card-outline card-primary mx-4">
    <div class="card-header">
        <h3 class="card-title">{{ $page->title }}</h3>
        <div class="card-tools">
            <a class="btn btn-sm btn-primary mt-1" href="{{ url('level/create') }}">Tambah</a>
        </div>
    </div>
    <div class="card-body">
        @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        @if (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
        @endif
        <table class="table table-bordered table-striped table-hover table-sm" id="table_level">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Kode Level</th>
                    <th>Nama Level</th>
                    <th>Aksi</th>
                </tr>
            </thead>
        </table>
    </div>
</div>
@endsection

@push('css')
@endpush
@push('js')
<script>
    $(document).ready(function() {
        var dataUser = $('#table_level').DataTable({
            serverSide: true, // serverSide: true, jika ingin menggunakan server side processing
            ajax: {
                "url": "{{ url('level/list') }}",
                "dataType": "json",
                "type": "POST"
            },
            columns: [{
                data: "DT_RowIndex", // nomor urut dari laravel datatable addIndexColumn()           
                className: "text-center",
                orderable: false,
                searchable: false
            }, {
                data: "level_kode",
                className: "text-center",
                orderable: true, // orderable: true, jika ingin kolom ini bisa diurutkan
                searchable: true // searchable: true, jika ingin kolom ini bisa dicari
            }, {
                data: "level_nama",
                className: "text-center",
                orderable: true, // orderable: true, jika ingin kolom ini bisa diurutkan
                searchable: true // searchable: true, jika ingin kolom ini bisa dicari
            }, {
                data: "aksi",
                className: "text-center",
                orderable: false, // orderable: true, jika ingin kolom ini bisa diurutkan 
                searchable: false // searchable: true, jika ingin kolom ini bisa dicari
            }]
        });
    });
</script>
@endpush
