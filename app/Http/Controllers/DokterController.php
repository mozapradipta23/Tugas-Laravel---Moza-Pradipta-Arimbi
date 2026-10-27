<?php

namespace App\Http\Controllers;

use App\Http\Requests\DokterRequest;
use App\Models\Dokter;
use Illuminate\Database\QueryException;

class DokterController extends Controller
{
    public function index()
{
    $dokters = Dokter::orderBy('id_dokter')->get();

    return view('dokter.index', compact('dokters'));
}
    public function create()
    {
        return view('dokter.create');
    }

    public function store(DokterRequest $request)
    {
        Dokter::create($request->validated());

        return redirect()->route('dokter.index')
            ->with('success', 'Data dokter berhasil ditambahkan.');
    }

    public function edit(Dokter $dokter)
    {
        return view('dokter.edit', compact('dokter'));
    }

    public function update(DokterRequest $request, Dokter $dokter)
    {
        $dokter->update($request->validated());

        return redirect()->route('dokter.index')
            ->with('success', 'Data dokter berhasil diperbarui.');
    }

    public function destroy(Dokter $dokter)
    {
        try {
            $dokter->delete();
        } catch (QueryException $e) {
            return redirect()->route('dokter.index')
                ->with('error', 'Data gagal dihapus. Periksa apakah data digunakan oleh tabel lain.');
        }

        return redirect()->route('dokter.index')
            ->with('success', 'Data dokter berhasil dihapus.');
    }
}