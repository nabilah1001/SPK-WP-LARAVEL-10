@include('layouts.header_admin')

</html>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-fw fa-users"></i>Data Pelatih Tari (Alternatif)</h1>
    <!-- <p>Page: {{ $page }}</p> -->

    <a href="{{ url('Alternatif') }}" class="btn btn-secondary btn-icon-split"><span class="icon text-white-50">
        <i class="fas fa-arrow-left"></i></span>
        <span class="text">Kembali</span>
    </a>
</div>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-fw fa-edit"></i> Detail Data Pelatih Tari</h6>
    </div>

    <form method="POST" action="{{ url('Alternatif/view/' . $alternatif->id_alternatif) }}">
        {{ csrf_field() }}
        <div class="card-body">
            <div class="row">
                <input type="hidden" name="id_alternatif" value="{{ $alternatif->id_alternatif }}">
                <div class="form-group col-md-12">
                    <label class="font-weight-bold">Nama Alternatif</label>
                    <p>{{ $alternatif->nama }}</p>
                </div>
    
                <div class="form-group col-md-12">
                    <label class="font-weight-bold">Sanggar Tari Tradisional</label>
                    <p>{{ $alternatif->sanggar }}</p>
                </div>
    
                <div class="form-group col-md-12">
                    <label class="font-weight-bold">Daerah Tari Tradisional</label>
                    <p>{{ $alternatif->daerah_tari }}</p>
                </div>
                <div class="form-group col-md-12">
                    <label class="font-weight-bold">Jumlah Pilihan Tari</label>
                    <p>{{ $alternatif->jumlah_pilihan }}</p>
                </div>
                <div class="form-group col-md-12">
                    <label class="font-weight-bold">Perkiraan Biaya Pelatihan</label>
                    <p>{{ $alternatif->biaya }}</p>
                </div>
                <div class="form-group col-md-12">
                    <label class="font-weight-bold">No. Telepon</label>
                    <p>{{ $alternatif->no_telp }}</p>
                </div>
            </div>
        </div>
    </form>

</div>

@include('layouts.footer_admin')
