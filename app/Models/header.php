<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class header extends Model
{
     protected $table ='tb_m_header';

     public static function GetList()
    {
        $data = ['isdeleted'=> false];
        return header::where($data)->orderBy('createddate', 'DESC')->get();
    }
}
