@extends('layouts.app')

@section('title', 'Edit Data Dokter')

@section('content')
<div class="card">
    <h2>Form Edit Data Dokter</h2>

    <form action="{{ route('dokter.update', $dokter) }}" method="POST" novalidate>
        @csrf
        @method('PUT')

        @include('dokter.form')

        <div class="actions">
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            <a href="{{ route('dokter.index') }}" class="btn btn-secondary">Batal</a>
        </div>
    </form>
</div>
@endsection