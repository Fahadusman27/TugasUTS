<?php

namespace App\Http\Controllers;

use App\Models\Kategoris;
use Illuminate\Http\Request;

class KateController extends Controller
{
    public function index()
    {
        $kategoris = Kategoris::all(); // Ambil semua kategori dari database
        return view('User.page.kategori.indexs', compact('kategoris'));
    }
}
