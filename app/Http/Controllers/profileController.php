<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\profileModel;

class profileController extends Controller
{
    public function index()
    {
        // Mengambil semua data post
        $dataprofile = profileModel::GetList();
       var_dump($dataprofile);

        // Mengirim data ke view
        return view('home', ['dataprofile' => $dataprofile]);
    }
}
