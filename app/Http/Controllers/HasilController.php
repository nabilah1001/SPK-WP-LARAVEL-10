<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PerhitunganModel;

class HasilController extends Controller
{
    public function index()
    {
        $data['page'] = "Hasil";
        $data['hasil'] = PerhitunganModel::get_hasil();
        return view('hasil.index', $data);
    }

    public function all()
    {
        $data['page'] = "Hasil";
        $data['hasil'] = PerhitunganModel::get_hasil();
        return response(
            $data,
            200
        );
    }

    public function Laporan()
    {
        $data['hasil'] = PerhitunganModel::get_hasil();
        return view('hasil.laporan', $data);
    }
}
