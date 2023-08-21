@include('layouts.header_admin')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-fw fa-users"></i> Data Alternatif</h1>

    <a href="{{ url('Alternatif') }}" class="btn btn-secondary btn-icon-split"><span class="icon text-white-50"><i
                class="fas fa-arrow-left"></i></span>
        <span class="text">Kembali</span>
    </a>
</div>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-fw fa-edit"></i> Edit Data Alternatif</h6>
    </div>

    <form method="POST" action="{{ url('Alternatif/update/' . $alternatif->id_alternatif) }}">
        {{ csrf_field() }}
        <div class="card-body">
            <div class="row">
                <input type="hidden" name="id_alternatif" value="{{ $alternatif->id_alternatif }}">
                <div class="form-group col-md-12">
                    <label class="font-weight-bold">Nama Alternatif</label>
                    <input autocomplete="off" type="text" name="nama" value="{{ $alternatif->nama }}" required
                        class="form-control" />
                </div>

                <div class="form-group col-md-12">
                    <label class="font-weight-bold">Sanggar Tari Tradisional</label>
                    <select name="sanggar" class="form-control">
                        <option value="">Pilih Sanggar</option>
                        <option value="Sanggar Tari Ayodya Pala (Depok)"
                            {{ $alternatif->sanggar === 'Sanggar Tari Ayodya Pala (Depok)' ? 'selected' : '' }}>Sanggar Tari Ayodya Pala (Depok)
                        </option>
                        <option value="Sanggar Seni Kartika Depok"
                            {{ $alternatif->sanggar === 'Sanggar Seni Kartika Depok' ? 'selected' : '' }}>Sanggar Seni Kartika Depok
                        </option>
                        <option value="Sanggar Tari Larasati"
                            {{ $alternatif->sanggar === 'Sanggar Tari Larasati' ? 'selected' : '' }}>Sanggar Tari Larasati
                        </option>
                        <option value="Sanggar Tari Retno Puspita"
                            {{ $alternatif->sanggar === 'Sanggar Tari Retno Puspita' ? 'selected' : '' }}>Sanggar Tari Retno Puspita
                        </option>
                        <option value="Sanggar Tari Wulandari"
                            {{ $alternatif->sanggar === 'Sanggar Tari Wulandari' ? 'selected' : '' }}>Sanggar Tari Wulandari
                        </option>
                        <option value="Sanggar Seni Tari Essy"
                            {{ $alternatif->sanggar === 'Sanggar Seni Tari Essy' ? 'selected' : '' }}>Sanggar Seni Tari Essy</option>
                    </select>
                </div>

                <div class="form-group col-md-12">
                    <label class="font-weight-bold">Daerah Tari Tradisional</label>
                    <input autocomplete="off" type="text" name="daerah_tari" value="{{ $alternatif->daerah_tari }}"
                        required class="form-control" />
                </div>
                <div class="form-group col-md-12">
                    <label class="font-weight-bold">Jumlah Pilihan Tari</label>
                    <input autocomplete="off" type="number" name="jumlah_pilihan"
                        value="{{ $alternatif->jumlah_pilihan }}" required class="form-control" />
                </div>
                <div class="form-group col-md-12">
                    <label class="font-weight-bold">Perkiraan Biaya Pelatihan</label>
                    <input autocomplete="off" type="number" name="biaya" value="{{ $alternatif->biaya }}" required
                        class="form-control" />
                </div>
                <div class="form-group col-md-12">
                    <label class="font-weight-bold">No. Telepon</label>
                    <input autocomplete="off" type="number" name="no_telp" value="{{ $alternatif->no_telp }}"
                        placeholder="085xxxxx" required class="form-control" />
                </div>
            </div>
        </div>
        <div class="card-footer text-right">
            <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
            <button type="reset" class="btn btn-info"><i class="fa fa-sync-alt"></i> Reset</button>
        </div>
    </form>

</div>

@include('layouts.footer_admin')
