<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PelajaranController extends Controller
{
    public function pelajaran()
    {
        return view('pelajaran/pelajaran');
    }
}
