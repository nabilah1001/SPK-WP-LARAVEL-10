@include('layouts.header_admin')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-fw fa-users"></i> Data Alternatif</h1>

    <a href="{{ url('Alternatif') }}" class="btn btn-secondary btn-icon-split"><span class="icon text-white-50"><i
                class="fas fa-arrow-left"></i></span>
        <span class="text">Kembali</span>
    </a>
</div>

@if (session('message'))
    {!! session('message') !!}
@endif

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-fw fa-plus"></i> Tambah Data Alternatif</h6>
    </div>

    <form action="{{ url('Alternatif/simpan') }}" method="POST">
        {{ csrf_field() }}
        <div class="card-body">
            <div class="row">
                <div class="form-group col-md-12">
                    <label class="font-weight-bold">Nama Lengkap</label>
                    <input autocomplete="off" type="text" name="nama" required class="form-control" />
                </div>
                <div class="form-group col-md-12">
                    <label class="font-weight-bold">Sanggar Tari Tradisional</label>
                    <input autocomplete="off" type="text" name="sanggar" required class="form-control" />
                </div>
                <div class="form-group col-md-12">
                    <label class="font-weight-bold">Daerah Tari Tradisional</label>
                    <input autocomplete="off" type="text" name="daerah_tari" required class="form-control" />
                </div>
                <div class="form-group col-md-12">
                    <label class="font-weight-bold">Jumlah Pilihan Tari</label>
                    <input autocomplete="off" type="number" name="jumlah_pilihan" required class="form-control" />
                </div>
                <div class="form-group col-md-12">
                    <label class="font-weight-bold">Perkiraan Biaya Pelatihan</label>
                    <input autocomplete="off" type="number" name="biaya" required class="form-control" />
                </div>
                <div class="form-group col-md-12">
                    <label class="font-weight-bold">No. Telepon</label>
                    <input autocomplete="off" type="number" name="no_telp" placeholder="085xxxxx" required
                        class="form-control" />
                </div>
                {{-- <div class="form-group col-md-12">
                    @foreach ($kriteria as $key)
                        @php
                            $sub_kriteria = \App\Models\SubKriteriaModel::data_sub_kriteria($key->id_kriteria);
                        @endphp
                        @if ($sub_kriteria != null)
                            <input type="hidden" name="id_alternatif" value="{{ $key->id_alternatif }}">
                            <input type="hidden" name="id_kriteria[]" value="{{ $key->id_kriteria }}">
                            <div class="form-group">
                                <label class="font-weight-bold"
                                    for="{{ $key->id_kriteria }}">{{ $key->keterangan }}</label>
                                <select name="nilai[]" class="form-control" id="{{ $key->id_kriteria }}" required>
                                    <option value="">--Pilih--</option>
                                    @foreach ($sub_kriteria as $subs_kriteria)
                                        <option value="{{ $subs_kriteria['id_sub_kriteria'] }}">
                                            {{ $subs_kriteria['deskripsi'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                        @endif
                    @endforeach
                </div> --}}
            </div>
        </div>
        <div class="card-footer text-right">
            <button type="submit" class="btn btn-success"><i class="fa fa-save"></i> Simpan</button>
            <button type="reset" class="btn btn-info"><i class="fa fa-sync-alt"></i> Reset</button>
        </div>
    </form>
</div>

@include('layouts.footer_admin')
