@extends('layouts.app')

@section('title', 'Tambah Data Dokter')

@section('content')
<div class="card">
    <h2>Form Tambah Data Dokter</h2>

    <form action="{{ route('dokter.store') }}" method="POST" novalidate>
        @csrf

        @include('dokter.form')

        <div class="actions">
            <button type="submit" class="btn btn-primary">Simpan Data Dokter</button>
            <a href="{{ route('dokter.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </form>
</div>
@endsection