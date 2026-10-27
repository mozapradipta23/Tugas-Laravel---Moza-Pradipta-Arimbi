@extends('layouts.app')

@section('title', 'Informasi Dokter dan Medis')
@section('lebar', 'lebar')

@section('content')
<div class="header-halaman">
    <div>
        <h2>Informasi Dokter dan Medis</h2>
        <p class="teks-redup">Data master dokter Klinik Sehat</p>
    </div>

    <a href="{{ route('dokter.create') }}" class="btn btn-primary">+ Tambah Dokter</a>
</div>

@if (session('success'))
    <div class="alert sukses">{{ session('success') }}</div>
@endif

@if (session('error'))
    <div class="alert">{{ session('error') }}</div>
@endif

<div class="card">
    <div class="tabel-wrap">
        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Dokter</th>
                    <th>Nomor SIP</th>
                    <th>Spesialisasi</th>
                    <th>ID Poli</th>
                    <th>Kontak</th>
                    <th>Email</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
            @forelse ($dokters as $dokter)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $dokter->nama_dokter }}</td>
                    <td>{{ $dokter->no_sip }}</td>
                    <td>{{ $dokter->spesialisasi }}</td>
                    <td>{{ $dokter->id_poli }}</td>
                    <td>{{ $dokter->kontak }}</td>
                    <td>{{ $dokter->email }}</td>
                    <td>
                        <div class="aksi">
                            <a class="btn btn-sm btn-edit"
                               href="{{ route('dokter.edit', $dokter) }}">Edit</a>

                            <button type="button" class="btn btn-sm btn-hapus btn-buka-hapus"
                                    data-url="{{ route('dokter.destroy', $dokter) }}"
                                    data-nama="{{ $dokter->nama_dokter }}">
                                Hapus
                            </button>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="8" class="tengah">Belum ada data dokter.</td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
</div>

<!-- POPUP KONFIRMASI HAPUS -->
<div class="modal-overlay" id="modalHapus">
    <div class="modal-box">
        <div class="modal-ikon">!</div>
        <h3>Hapus Data Dokter?</h3>
        <p>Data <strong id="namaHapus"></strong> akan dihapus permanen<br>dan tidak bisa dikembalikan.</p>

        <form method="POST" id="formHapus" class="modal-aksi">
            @csrf
            @method('DELETE')
            <button type="button" class="btn btn-secondary" id="batalHapus">Batal</button>
            <button type="submit" class="btn btn-hapus">Ya, Hapus</button>
        </form>
    </div>
</div>
@endsection

@push('scripts')
<script>
    const modal     = document.getElementById("modalHapus");
    const formHapus = document.getElementById("formHapus");
    const namaTeks  = document.getElementById("namaHapus");

    function tutupModal() {
        modal.classList.remove("tampil");
    }

    document.querySelectorAll(".btn-buka-hapus").forEach(function (tombol) {
        tombol.addEventListener("click", function () {
            formHapus.action     = tombol.dataset.url;
            namaTeks.textContent = tombol.dataset.nama;
            modal.classList.add("tampil");
        });
    });

    document.getElementById("batalHapus").addEventListener("click", tutupModal);
    modal.addEventListener("click", function (e) {
        if (e.target === modal) tutupModal();
    });
    document.addEventListener("keydown", function (e) {
        if (e.key === "Escape") tutupModal();
    });
</script>
@endpush