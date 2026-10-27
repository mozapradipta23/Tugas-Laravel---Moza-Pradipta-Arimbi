<?php

namespace App\Http\Requests;

use App\Models\Dokter;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class DokterRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $dokter = $this->route('dokter');

        return [
            'nama_dokter'   => ['required', 'string', 'max:255'],
            'tempat_lahir'  => ['required', 'string', 'max:255'],
            'tanggal_lahir' => ['required', 'date', 'before_or_equal:today'],
            'no_sip'        => [
                'required', 'string', 'max:50',
                Rule::unique('dokter', 'no_sip')->ignore($dokter?->id_dokter, 'id_dokter'),
            ],
            'spesialisasi'  => ['required', 'string', 'max:255'],
            'id_poli'       => ['required', Rule::in(array_keys(Dokter::DAFTAR_POLI))],
            'kontak'        => ['required', 'regex:/^[0-9+\-\s]{8,20}$/'],
            'email'         => ['required', 'email', 'max:255'],
        ];
    }

    public function messages(): array
    {
        return [
            'nama_dokter.required'          => 'Nama dokter wajib diisi.',
            'tempat_lahir.required'         => 'Tempat lahir wajib diisi.',
            'tanggal_lahir.required'        => 'Tanggal lahir tidak valid.',
            'tanggal_lahir.date'            => 'Tanggal lahir tidak valid.',
            'tanggal_lahir.before_or_equal' => 'Tanggal lahir tidak boleh di masa depan.',
            'no_sip.required'               => 'Nomor SIP wajib diisi.',
            'no_sip.unique'                 => 'Nomor SIP sudah dipakai dokter lain.',
            'spesialisasi.required'         => 'Spesialisasi wajib diisi.',
            'id_poli.required'              => 'Pilih poli terlebih dahulu.',
            'id_poli.in'                    => 'Pilih poli terlebih dahulu.',
            'kontak.required'               => 'Kontak wajib diisi.',
            'kontak.regex'                  => 'Kontak harus berupa nomor telepon (8-20 karakter).',
            'email.required'                => 'Email wajib diisi.',
            'email.email'                   => 'Format email tidak valid.',
        ];
    }
}