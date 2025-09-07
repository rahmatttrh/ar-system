<?php

namespace App\Http\Controllers\Direksi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DireksiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('direksi.index');
    }
}
