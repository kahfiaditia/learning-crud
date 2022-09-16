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

    public function edit($id)
    {
        $pelajaran =\DB::table('pelajaran')->where('id',$id)->first();
        //dd($pelajaran);
        return view('pelajaran.edit', compact('pelajaran'));
    }

    public function ProsesEdit(Request $request, $id)
    {
        $pelajaran =\DB::table('pelajaran')->where('id',$id)
        
        ->update([
            'nama_pelajaran' => $request->nama_pelajaran,
            'kelas' => $request->kelas,
            'desc' => $request->desc
        ]);
        return redirect('pelajaran')->with('status','Data Pelajaran Berhasil di update');
    }

    public function hapus($id)
    {
        \DB::table('pelajaran')->where('id', $id)->delete();
        return redirect('pelajaran')->with('status','Data Pelajaran Berhasil dihapus');
    }


}
