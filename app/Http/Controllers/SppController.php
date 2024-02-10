<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Spp;
use App\Http\Controllers\Controller;

class SppController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $spps = DB::table("spps")->get();
      return view("spp.index", compact("spps"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('spp.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //data inputan data wajib diisi dan minimal 5 karakter
        $request->validate([
            'tahun'  => 'required', 
            'nominal' => 'required',
        ]);
        
        // Query Untuk menyimpan data
        $query = DB::table('spps')->insert([
            'tahun'  => $request['tahun'],
            'nominal'=> $request['nominal'],
        ]);
        // data disimpan maka di redirect ke halaman index
        return redirect()->route('spp.index')->with(['success' => 'Data Telah ditambahkan']);;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $spp = DB::table('spps')->where('id_spp', $id)->first();
        return view('spp.show', compact('spp'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $spps = DB::table('spps')->where('id_spp', $id)->first();
        //menampilkan view edit data
        return view('spp.edit', compact('spps'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //data imputan data wajib diisi min 5 karakter
        $request->validate([
            'tahun' =>'required',
            'nominal'=> 'required',
        ]);

        //untuk menyimpan data
        $query = DB::table('spps')
        ->where('id_spp', $id)
        ->update([
            'tahun' => $request['tahun'],
            'nominal' => $request['nominal'],
            ]);
        //data disimpan maka akan di direct ke halaman index
        return redirect()->route('spp.index')->with(['success'=> 'Data berhasil di update']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $sppsHapus = DB::table('spps')->where('id_spp', $id)->delete();
        return redirect()->route('spp.index')->with('success', 'Data berhasil dihapus');
    }
}