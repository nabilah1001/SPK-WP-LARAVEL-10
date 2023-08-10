@include('layouts.header_admin')

@if (session('log.id_user_level') == '1')
    <div class="mb-4">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-fw fa-home"></i> Dashboard</h1>
        </div>

        <!-- Content Row -->
        <div class="row">
            <div class="col-xl-6 col-md-6 mb-4">
                <div class="card">
                    <div class="d-flex align-items-end row">
                        <div class="col-sm-12">
                            <div class="card-body">
                                <h5 class="card-title text-primary d-flex justify-content-end">
                                </h5>
                                <p class="mb-4">
                                    Selamat datang, {{ session('log.nama') }} <span class="fw-bold"> </span>
                                    <span class="fw-bold">
                                    </span>!
                                    Disini Anda dapat menentukan data alternatif, kriteria, sub kriteria, hasi
                                    perhitungan sehingga memperlolah hasil akhir dengan metode SPK WP dengan baik.
                                </p>

                                <a href="#" class="btn btn-sm btn-outline-primary">More Info</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="h5 mb-0 font-weight-bold text-gray-800">
                                    <a href="{{ url('Kriteria') }}" class="text-secondary text-decoration-none">Data
                                        Kriteria</a>
                                </div>
                                <span class="text-gray-900" style="font-size: 1.2em;">{{ $jumlahKriteria }}</span>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-cube fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            {{-- <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><a href="{{ url('SubKriteria') }}"
                                        class="text-secondary text-decoration-none">Data Sub Kriteria</a></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-cubes fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><a href="{{ url('Alternatif') }}"
                                        class="text-secondary text-decoration-none">Data Alternatif</a></div>
                                <span class="text-gray-900" style="font-size: 1.2em;">{{ $jumlahAlternatif }}</span>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-users fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-secondary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><a href="{{ url('Penilaian') }}"
                                        class="text-secondary text-decoration-none">Data Penilaian</a></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-edit fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><a href="{{ url('Perhitungan') }}"
                                        class="text-secondary text-decoration-none">Data Perhitungan</a></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-calculator fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-danger shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><a href="{{ url('Hasil') }}"
                                        class="text-secondary text-decoration-none">Data Hasil Akhir</a></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-chart-area fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
@endif

@if (session('log.id_user_level') == '2')
    <div class="mb-4">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-fw fa-home"></i> Dashboard</h1>
        </div>

        <!-- Content Row -->
        <div class="row">
            <div class="col-lg-6 mb-4 order-0">
                <div class="card">
                    <div class="d-flex align-items-end row">
                        <div class="col-sm-12">
                            <div class="card-body">
                                <h5 class="card-title text-primary d-flex justify-content-end">
                                </h5>
                                <p class="mb-4">
                                    Selamat datang, {{ session('log.nama') }} <span class="fw-bold"> </span>
                                    <span class="fw-bold">
                                    </span>!
                                    Disini hanya melihat hasil akhir dengan metode SPK WP dengan baik.
                                </p>

                                <a href="#" class="btn btn-sm btn-outline-primary">More Info</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endif


@include('layouts.footer_admin')
