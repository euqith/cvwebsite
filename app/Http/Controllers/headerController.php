<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\header; // Import model User

class headerController extends Controller
{
   public function index (){
     
     $tb_m_header = Header::all();  // Kamu bisa menggunakan query lain seperti `User::where()` atau `User::paginate()`
     dump($tb_m_header);
    return view('home', compact('tb_m_header')); // Mengirim data ke view home
   }
}
