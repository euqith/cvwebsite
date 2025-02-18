<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\header; // Import model User
use App\Models\profileModel; // import model profileModel
use App\Models\skillModel;

class headerController extends Controller
{
   public function index()
    {
        // Mengambil semua data post
        $data = header::GetList();
        $dataprofile = profileModel::GetList();
        $dataskill = skillModel::GetList();
      //   var_dump($data);

        // Mengirim data ke view
        return view('home', ['data' => $data,'dataprofile'=>$dataprofile, 'dataskill'=>$dataskill]);
    }
}


