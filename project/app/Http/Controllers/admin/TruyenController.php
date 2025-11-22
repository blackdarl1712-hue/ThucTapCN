<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Truyen; 

class TruyenController extends Controller
{
    public function index()
    {
        $truyens = Truyen::orderBy('id', 'desc')->get(); 
        return view('admin.danhsachtruyen', compact('truyens'));
    }
}