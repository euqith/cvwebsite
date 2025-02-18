<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class skillModel extends Model
{
    use HasFactory;

    // Menentukan nama tabel yang digunakan oleh model ini
    protected $table = 'tb_m_skills';

    // Menentukan field yang dapat diisi mass-assignment
    protected $fillable = [
        'skill',
        'percentage',
        'description',
        'createdby',
        'createddate',
        'updatedby',
        'updateddate',
        'isactive',
        'isdelete',
    ];

    // Jika Anda menggunakan timestamp otomatis, Anda bisa menambahkan
    public $timestamps = false; // Jika Anda tidak ingin Laravel mengelola `created_at` dan `updated_at`

    // Jika nama kolom waktu tidak mengikuti standar Laravel (created_at, updated_at), Anda bisa tentukan nama kolomnya
    const CREATED_AT = 'createddate';
    const UPDATED_AT = 'updateddate';

    public static function GetList()
    {
        $dataskill = ['isdeleted'=> false];
        return skillModel::where($dataskill)->orderBy('createddate', 'DESC')->get();
    }
}
