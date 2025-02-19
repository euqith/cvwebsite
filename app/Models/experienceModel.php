<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class experienceModel extends Model
{
    use HasFactory;

    // Menentukan nama tabel jika tidak menggunakan nama tabel default (plural dari model)
    protected $table = 'tb_m_experiences';

    // Menentukan kolom yang dapat diisi (mass assignable)
    protected $fillable = [
        'experience', 
        'description', 
        'company', 
        'startyear', 
        'endyear', 
        'createdby', 
        'createddate', 
        'updatedby', 
        'updateddate', 
        'isactive', 
        'isdeleted',
    ];

    // Menentukan kolom yang tidak boleh diubah (protected, atau tidak boleh di-mass assign)
    protected $guarded = [];

    // Menentukan format waktu untuk createddate dan updateddate
    protected $casts = [
        'createddate' => 'datetime',
        'updateddate' => 'datetime',
    ];

    // Menambahkan method tambahan jika diperlukan, misalnya untuk mendapatkan data aktif
    public static function getActiveExperiences()
    {
        return self::where('isactive', true)->where('isdeleted', false)->get();
    }

    public static function GetList()
    {
        $dataexperience = ['isdeleted'=> false];
        return experienceModel::where($dataexperience)->orderBy('id', 'DESC')->get();
    }
}
