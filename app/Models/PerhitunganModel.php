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
        // return DB::table('hasil')
        //     ->join('alternatif', 'hasil.id_alternatif', '=', 'alternatif.id_alternatif')
        //     ->orderBy('nilai', 'DESC')
        //     // ->select('alternatif.id_alternatif', 'alternatif.nama', 'alternatif.sanggar')
        //     ->get();
        
        //  $result = DB::table('penilaian')
        //     ->join('hasil', 'penilaian.id_alternatif', '=', 'hasil.id_alternatif')
        //     ->join('alternatif', 'penilaian.id_alternatif', '=', 'alternatif.id_alternatif')
        //     ->join('kriteria', 'penilaian.id_kriteria', '=', 'kriteria.id_kriteria')
        //     ->join('sub_kriteria', 'penilaian.nilai', '=', 'sub_kriteria.id_sub_kriteria') // Join 'sub_kriteria' table
        //     ->select(
        //         'hasil.id_hasil',
        //         'hasil.id_alternatif',
        //         'penilaian.nilai AS penilaian_nilai',
        //         'alternatif.nama',
        //         'sub_kriteria.id_kriteria AS Usia',
        //         'alternatif.sanggar.',
        //         'sub_kriteria.deskripsi AS pendidikan',
        //         'sub_kriteria.nilai AS sub_kriteria_nilai', // Rename 'nilai' to avoid conflict
        //         'kriteria.id_kriteria',
        //         'kriteria.keterangan',
        //         'kriteria.kode_kriteria',
        //         'kriteria.bobot',
        //         'kriteria.jenis',
        //         'penilaian.id_penilaian',
        //         'penilaian.id_alternatif',
        //         'penilaian.id_kriteria',
        //         'hasil.nilai AS hasil_nilai'
        //     )
        //     ->get();

        // return $result;

        $result = DB::table('hasil AS h')
            ->select('h.id_hasil', 'h.id_alternatif', 'h.nilai', 'a.nama', 'p.nilai AS usia', 'a.sanggar', 'p2.nilai AS status', 'p3.nilai AS pengalaman', 'sk.deskripsi AS pendidikan', 'a.daerah_tari', 'a.jumlah_pilihan', 'a.biaya', 'a.no_telp')
            ->join('alternatif AS a', 'h.id_alternatif', '=', 'a.id_alternatif')
            ->join('penilaian AS p', function ($join) {
                $join->on('p.id_alternatif', '=', 'a.id_alternatif')
                    ->where('p.id_kriteria', '=', 28);
            })
            ->join('penilaian AS p2', function ($join) {
                $join->on('p2.id_alternatif', '=', 'a.id_alternatif')
                    ->where('p2.id_kriteria', '=', 27);
            })
            ->join('penilaian AS p3', function ($join) {
                $join->on('p3.id_alternatif', '=', 'a.id_alternatif')
                    ->where('p3.id_kriteria', '=', 26);
            })
            ->join('sub_kriteria AS sk', 'p.nilai', '=', 'sk.id_sub_kriteria')
            ->get();

        return $result;





    }
}
