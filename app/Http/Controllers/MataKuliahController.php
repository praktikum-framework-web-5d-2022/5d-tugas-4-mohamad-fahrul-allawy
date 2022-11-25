<?php

namespace App\Http\Controllers;

use App\Models\MataKuliah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class MataKuliahController extends Controller
{
    
    public function index()
    {
        $matkuls = DB::select('select * from mata_kuliahs');
        return view('main', ['matakuliahs' => $matkuls]);
    }

    
}