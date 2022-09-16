<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PelajaranController extends Controller
{
    public function pelajaran()
    {
        $pelajaran = \DB::table('pelajaran')->get();

        // return view('pelajaran.data',['pelajaran'=>$pelajaran]); 
        return view('pelajaran.pelajaran',compact('pelajaran'));
        //return view('pelajaran/pelajaran');
    }

    public function input()
    {

        return view('pelajaran.input');
    }

    public function proses(Request $request)
    {
        \DB::table('pelajaran')->insert([
            'nama_pelajaran' => $request->nama_pelajaran,
            'kelas' => $request->kelas,
            'desc' => $request->desc
        ]);
        return redirect('pelajaran')->with('status','Data Pelajaran Berhasil di Input');
    }

}
