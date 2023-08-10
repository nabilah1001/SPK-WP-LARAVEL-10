<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PerhitunganModel extends Model
{ 
    protected $table = 'penilaian';
    protected $primaryKey = 'id_penilaian';
    protected $fillable = ['id_alternatif', 'id_kriteria', 'nilai'];
    public $timestamps = false;

    public static function data_nilai($id_alternatif, $id_kriteria)
    {
        return self::join('sub_kriteria', 'penilaian.nilai', '=', 'sub_kriteria.id_sub_kriteria')
            ->where('penilaian.id_alternatif', $id_alternatif)
            ->where('penilaian.id_kriteria', $id_kriteria)
            ->first();
    }

    public static function hapus_hasil()
    {
        DB::table('hasil')->truncate();
        return true;
    }

    // Add data to database 'hasil'
    public static function get_hasil()
    {
        $result = DB::table('hasil AS h')
                ->select('h.id_hasil', 'h.id_alternatif', 'h.nilai', 'a.nama', 
                    'sk1.deskripsi AS usia', 'a.sanggar', 'sk3.deskripsi AS status', 
                    'sk2.deskripsi AS pengalaman', 'sk4.deskripsi AS pendidikan', 
                    'a.daerah_tari', 'a.jumlah_pilihan', 'a.biaya', 'a.no_telp')
                ->join('alternatif AS a', 'h.id_alternatif', '=', 'a.id_alternatif')
                ->join('penilaian AS p', function ($join) {
                    $join->on('p.id_alternatif', '=', 'a.id_alternatif')
                        ->where('p.id_kriteria', '=', 28); // Usia
                })
                ->join('penilaian AS p2', function ($join) {
                    $join->on('p2.id_alternatif', '=', 'a.id_alternatif')
                        ->where('p2.id_kriteria', '=', 27); // Status
                })
                ->join('penilaian AS p3', function ($join) {
                    $join->on('p3.id_alternatif', '=', 'a.id_alternatif')
                        ->where('p3.id_kriteria', '=', 26); // Pengalaman
                })
                ->join('penilaian AS p4', function ($join) {
                    $join->on('p4.id_alternatif', '=', 'a.id_alternatif')
                        ->where('p4.id_kriteria', '=', 25); // Pendidikan
                })
                ->join('sub_kriteria AS sk1', 'p.nilai', '=', 'sk1.id_sub_kriteria')
                ->join('sub_kriteria AS sk2', 'p3.nilai', '=', 'sk2.id_sub_kriteria')
                ->join('sub_kriteria AS sk3', 'p2.nilai', '=', 'sk3.id_sub_kriteria')
                ->join('sub_kriteria AS sk4', 'p4.nilai', '=', 'sk4.id_sub_kriteria')
                ->get();

        return $result;
    }
}
