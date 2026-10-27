<div class="form-grid">

    <div class="full">
        <label for="nama_dokter">Nama Dokter</label>
        <input type="text" id="nama_dokter" name="nama_dokter"
               class="@error('nama_dokter') input-error @enderror"
               value="{{ old('nama_dokter', $dokter->nama_dokter ?? '') }}">
        @error('nama_dokter') <small class="error-text">{{ $message }}</small> @enderror
    </div>

    <div>
        <label for="tempat_lahir">Tempat Lahir</label>
        <input type="text" id="tempat_lahir" name="tempat_lahir"
               class="@error('tempat_lahir') input-error @enderror"
               value="{{ old('tempat_lahir', $dokter->tempat_lahir ?? '') }}">
        @error('tempat_lahir') <small class="error-text">{{ $message }}</small> @enderror
    </div>

    <div>
        <label for="tanggal_lahir">Tanggal Lahir</label>
        <input type="date" id="tanggal_lahir" name="tanggal_lahir"
               max="{{ date('Y-m-d') }}"
               class="@error('tanggal_lahir') input-error @enderror"
               value="{{ old('tanggal_lahir', $dokter->tanggal_lahir ?? '') }}">
        @error('tanggal_lahir') <small class="error-text">{{ $message }}</small> @enderror
    </div>

    <div>
        <label for="no_sip">Nomor SIP</label>
        <input type="text" id="no_sip" name="no_sip"
               class="@error('no_sip') input-error @enderror"
               value="{{ old('no_sip', $dokter->no_sip ?? '') }}">
        @error('no_sip') <small class="error-text">{{ $message }}</small> @enderror
    </div>

    <div>
        <label for="spesialisasi">Spesialisasi</label>
        <input type="text" id="spesialisasi" name="spesialisasi"
               class="@error('spesialisasi') input-error @enderror"
               value="{{ old('spesialisasi', $dokter->spesialisasi ?? '') }}">
        @error('spesialisasi') <small class="error-text">{{ $message }}</small> @enderror
    </div>

    <div class="full">
        <label for="id_poli">Poli</label>
        <select id="id_poli" name="id_poli" class="@error('id_poli') input-error @enderror">
            <option value="">-- Pilih Poli --</option>
            @foreach (\App\Models\Dokter::DAFTAR_POLI as $id => $nama)
                <option value="{{ $id }}"
                    {{ (string) old('id_poli', $dokter->id_poli ?? '') === (string) $id ? 'selected' : '' }}>
                    {{ $nama }}
                </option>
            @endforeach
        </select>
        @error('id_poli') <small class="error-text">{{ $message }}</small> @enderror
    </div>

    <div>
        <label for="kontak">Kontak</label>
        <input type="tel" id="kontak" name="kontak"
               class="@error('kontak') input-error @enderror"
               value="{{ old('kontak', $dokter->kontak ?? '') }}">
        @error('kontak') <small class="error-text">{{ $message }}</small> @enderror
    </div>

    <div>
        <label for="email">Email</label>
        <input type="email" id="email" name="email"
               class="@error('email') input-error @enderror"
               value="{{ old('email', $dokter->email ?? '') }}">
        @error('email') <small class="error-text">{{ $message }}</small> @enderror
    </div>

</div>