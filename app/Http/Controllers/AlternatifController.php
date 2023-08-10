<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AlternatifModel;
use App\Models\KriteriaModel;
use Exception;

class AlternatifController extends Controller
{
    public function index()
    {
        $id_user_level = session('log.id_user_level');
        
        // Validation user level
        if ($id_user_level != 1) {
            ?>
            <script>
                window.location='<?php echo url("Dashboard"); ?>'
                alert('Anda tidak berhak mengakses halaman ini!');
            </script>
            <?php
        }

        $data['page'] = "Alternatif";
        $data['list'] = AlternatifModel::all();
        return view('alternatif.index', $data);
    }

    public function getDataById(request $request) {
        $data = AlternatifModel::find($request->id);
        if($data != null) {
            return response(
                $data,
                200
            );
        } else {
            return response(
                'Data not found',
                400
        );
        };
    }

    public function tambah()
    {
        $id_user_level = session('log.id_user_level');
        
        if ($id_user_level != 1) {
            ?>
            <script>
                window.location='<?php echo url("Dashboard"); ?>'
                alert('Anda tidak berhak mengakses halaman ini!');
            </script>
            <?php
        }

        
        $data['page'] = "Alternatif";
        $data['kriteria'] = KriteriaModel::all();
        return view('alternatif.tambah', $data);
    }

    public function simpan(Request $request)
    {
        $id_user_level = session('log.id_user_level');
        
        if ($id_user_level != 1) {
            ?>
            <script>
                window.location='<?php echo url("Dashboard"); ?>'
                alert('Anda tidak berhak mengakses halaman ini!');
            </script>
            <?php
        }

        $this->validate($request, [
            'nama' => 'required'
        ]);

        $data = [
            'nama' => $request->nama,
            'sanggar' => $request->sanggar,
            'daerah_tari' => $request->daerah_tari,
            'jumlah_pilihan' => $request->jumlah_pilihan,
            'biaya' => $request->biaya,
            'no_telp' => $request->no_telp
        ];


        // dd($data);

        $result = AlternatifModel::create($data);

        if ($result) {
            $request->session()->flash('message', '<div class="alert alert-success" role="alert">Data berhasil disimpan!</div>');
            return redirect('Alternatif');
        } else {
            $request->session()->flash('message', '<div class="alert alert-danger" role="alert">Data gagal disimpan!</div>');
            return redirect('Alternatif/tambah');
        }
    }

    public function edit($id_alternatif)
    {
        $id_user_level = session('log.id_user_level');
        
        if ($id_user_level != 1) {
            ?>
            <script>
                window.location='<?php echo url("Dashboard"); ?>'
                alert('Anda tidak berhak mengakses halaman ini!');
            </script>
            <?php
        }

        $data['page'] = "Alternatif";
        $data['alternatif'] = AlternatifModel::findOrFail($id_alternatif);
        return view('alternatif.edit', $data);
    }

    public function update(Request $request, $id_alternatif)
    {
        $id_user_level = session('log.id_user_level');
        
        if ($id_user_level != 1) {
            ?>
            <script>
                window.location='<?php echo url("Dashboard"); ?>'
                alert('Anda tidak berhak mengakses halaman ini!');
            </script>
            <?php
        }

        $this->validate($request, [
            'nama' => 'required',
            'sanggar' => 'required',
            'daerah_tari' => 'required',
            'jumlah_pilihan' => 'required',
            'biaya' => 'required',
            'no_telp' => 'required',
        ]);

        $data = [
            'nama' => $request->nama,
            'sanggar' => $request->sanggar,
            'daerah_tari' => $request->daerah_tari,
            'jumlah_pilihan' => $request->jumlah_pilihan,
            'biaya' => $request->biaya,
            'no_telp' => $request->no_telp
        ];

        $alternatif = AlternatifModel::findOrFail($id_alternatif);
        $alternatif->update($data);

        $request->session()->flash('message', '<div class="alert alert-success" role="alert">Data berhasil diupdate!</div>');
        return redirect('Alternatif');
    }

    public function destroy(Request $request, $id_alternatif)
    {
        $id_user_level = session('log.id_user_level');
        
        if ($id_user_level != 1) {
            ?>
            <script>
                window.location='<?php echo url("Dashboard"); ?>'
                alert('Anda tidak berhak mengakses halaman ini!');
            </script>
            <?php
        }
        
        AlternatifModel::findOrFail($id_alternatif)->delete();
        $request->session()->flash('message', '<div class="alert alert-success" role="alert">Data berhasil dihapus!</div>');
        return redirect('Alternatif');
    }

}
