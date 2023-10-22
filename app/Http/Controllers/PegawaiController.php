<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    public function index() {
        $pegawai = DB::table('pegawai')->get();  //select * from pegawai

        return view('index',['pegawai' => $pegawai]);
    }


}
