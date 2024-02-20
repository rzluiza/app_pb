<?php

namespace App\Http\Controllers;

use App\Models\Info;
use Illuminate\Http\Request;

class infoController extends Controller
{
    public function index(Request $request)
    {
        $info = Info::all();
        return view('dashboard.home', compact('info'));
    }


}
