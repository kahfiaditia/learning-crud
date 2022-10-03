<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;
use App\Models\Edulevels;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programs = Program::with('edulevel')->get();
        //$programs = Program::all(); //nama Program di ambil dari class Model
        // return $programs;
        return view('program.index',compact('programs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $edulevels = Edulevels::all(); // Edulevels::all() diambil dari nama Model
        return view('program.create', compact('edulevels'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) // form input
    {
        $request->validate([
            'name' => 'required|min:7',
            'edulevel_id' => 'required'
         ],
         [
            'edulevel_id.required' => 'Jenjang Tidak Boleh Kosong'
         ]);

            // return $request;
            //Cara Pertama ORM, kiri filed database dan Kanan Name form
            // $programs = new Program;
            // $programs->name = $request->name;
            // $programs->edulevel_id = $request->edulevel_id;
            // $programs->student_price = $request->student_price;
            // $programs->student_max = $request->student_max;
            // $programs->info = $request->info;
            // $programs->save();
            //return $programs;

            //Cara Kedua mass assignment, ini perlu di definisikan $fillable atau guardednya pada model, isinya array assiatif
            // Program::create([
            //     'name'=> $request->name,
            //     'edulevel_id'=> $request->edulevel_id,
            //     'student_price'=> $request->student_price,
            //     'student_max'=> $request->student_max,
            //     'info'=> $request->info
            // ]);

            //Cara Ketiga, syaratnya filed tabel dan Inputan harus sama
            Program::create($request->all());

            //cara ke 4 adalah gabuangan dari ORM atau cara pertama dan mass assignment, harus ada $fillable atau $guarded
            // $program = new Program([
            //     'name'=> $request->name,
            //     'edulevel_id'=> $request->edulevel_id,
            //     'student_price'=> $request->student_price,
            //     'student_max'=> $request->student_max,
            //     'info'=> $request->info
            // ]);
            // //$programs->student_price = $request->student_price; // ini yang enggak boleh diinput di mass asignment atau
            // //$programs->student_price = 2000000; // ini sama kaya diatas tapi di default
            // $program->save();

            return redirect('programs')->with('status', 'Data Programs Berhasil di Tambah');
        
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */

    public function show(Program $program) //ini pake route model binding //ini klo manual// public function show($id)
    {
        //$program = $program::find($id);

        //$program = $program::where('id', $id)->get(); // jika pake where ini harus pake yang dibawah
        //$program = $program[0]; // jika pake where ini harus pake yang dibawah
        $program->makeHidden(['edulevel_id']); // untuk menghiden data yang tampil di fungsi show Program, jika multi pake array, jika satu boleh tidak
        //return $program;

        return view ('program.show',compact('program'));  //compact('program') diambil dari data diatasnya
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function edit(Program $program)
    {
        $edulevels = Edulevels::all();
        return view ('program.edit',compact('program','edulevels'));

        // public function edit hanya untukmenampilakan form edit, untuk prosesnya di update
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Program $program)
    {
        // return $request;
        $request->validate([
            'name' => 'required|min:7',
            'edulevel_id' => 'required'
         ], [
            'edulevel_id.required' => 'Jenjang Tidak Boleh Kosong.'
         ]);
        
        // // //return $request;

        // // //cara pertama
            // $programs = Programs::find($id);
            // $programs = Program::find($id);
           
            // $programs->name = $request->name;
            // $programs->edulevel_id = $request->edulevel_id;
            // $programs->student_price = $request->student_price;
            // $programs->student_max = $request->student_max;
            // $programs->info = $request->info;
            // $programs->save();
            Program::where('id',$program->id)
            ->update([
                    'name'=> $request->name,
                    'edulevel_id'=> $request->edulevel_id,
                    'student_price'=> $request->student_price,
                    'student_max'=> $request->student_max,
                    'info'=> $request->info
            ]);
            //return $request;
            return redirect('programs')->with('status', 'Data Programs Berhasil di Update');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function destroy(Program $program)
    {
        //
    }
}
