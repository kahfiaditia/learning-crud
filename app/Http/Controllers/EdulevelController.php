<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facedes\DB;

class EdulevelController extends Controller
{
   public function data()
   {
      $edulevels = \DB::table('edulevels')->get();
      // return $edulevels;
      //dd($edulevels);
      // return view('edulevel.data',['edulevels'=>$edulevels]); 
      //return view('edulevel.data',compact('edulevels'));
      return view('edulevel.data')->with('edulevels',$edulevels);
   }

   public function add()
   {
      return view('edulevel/add');
   }

   public function addProcess(Request $request)
   {
      //validation
      $request->validate([
         'name' => 'required|min:2',
         'desc' => 'required'
      ]);
      //endvalidation

      \DB::table('edulevels')->insert([
         'name' => $request->name,
         'desc' => $request->desc
     ]);
     return redirect('edulevels')->with('status', 'Jenjang Berhasil di tambah');
   }

   public function edit($id)
   {
      
      $edulevel = \DB::table('edulevels')->where('id', $id)->first();
      //dd($edulevel);
      return view('edulevel/edit', compact('edulevel'));
   }

   public function Onproses(Request $request, $id)
   {
      //validation
      $request->validate([
         'name' => 'required|min:2',
         'desc' => 'required'
      ]);
      //endvalidation
      
      $edulevel = \DB::table('edulevels')->where('id',$id)
      ->update([
         'name' => $request->name,
         'desc' => $request->desc
      ]);

      return redirect ('edulevels')->with('status', 'Data telah di Update');
   }

   public function delete($id)
   {
     \DB::table('edulevels')->where('id',$id)->delete();
     return redirect ('edulevels')->with('status', 'Data telah dihapus');
   }
}
