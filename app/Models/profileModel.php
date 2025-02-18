<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class profileModel extends Model
{
    use HasFactory;

    // Nama tabel yang digunakan oleh model ini
    protected $table = 'tb_m_profile';

    // Kolom yang boleh diisi secara mass-assignment
    protected $fillable = [
        'pendidikan1', 'pendidikan2', 'pendidikan3', 'pendidikan4', 'pendidikan5',
        'description', 'createdby', 'createddate', 'updatedby', 'updateddate',
        'isactive', 'isdeleted',
        'jurusan1', 'jurusan2', 'jurusan3', 'jurusan4', 'jurusan5',
        'lokasipendidikan1', 'lokasipendidikan2', 'lokasipendidikan3', 'lokasipendidikan4', 'lokasipendidikan5',
        'tahunlulus1', 'tahunlulus2', 'tahunlulus3', 'tahunlulus4', 'tahunlulus5',
    ];

    // Kolom yang tidak bisa diisi secara mass-assignment (guarded)
    // protected $guarded = [];

    // Menentukan format untuk kolom timestamps (optional jika Anda ingin memodifikasi)
    const CREATED_AT = 'createddate';
    const UPDATED_AT = 'updateddate';

    // Setel default nilai isactive dan isdeleted jika diperlukan di model
    protected $attributes = [
        'isactive' => 1,
        'isdeleted' => 0,
    ];
    public static function GetList()
    {
        $dataprofile = ['isdeleted'=> false];
        return profileModel::where($dataprofile)->orderBy('createddate', 'DESC')->get();
    }
}
