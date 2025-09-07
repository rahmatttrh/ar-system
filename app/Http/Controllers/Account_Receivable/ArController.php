<?php

namespace App\Http\Controllers\Account_Receivable;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('account_receivable.index');
    }
}
