<?php

namespace App\Http\Controllers;

use App\Models\Kelass;
use App\Http\Requests\StoreKelassRequest;
use App\Http\Requests\UpdateKelassRequest;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

class KelassController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $kelass = Kelass::select('nama_kelas', 'kompetensi_keahlian');
        return view('class.index', compact('kelass'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('class.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKelassRequest $request, Kelass $kelass)
    {
        //
        $request->validate([
            'nama_kelas'=>  "required|min:10",
            'kompetensi_keahlian'=>  "required|min:50",
           ]);

           $query = DB::table("kelass")->insert([
            'nama_kelas' => $request['nama_kelas'],
            'kompetensi_keahlian' => $request['kompetensi_keahlian'],
           ]);
           return redirect()->route('class.index')->with(['success'=>'Data Telah Ditambahkan']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Kelass $kelass)
    {
        //
        return view('class.show', compact('kelass'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kelass $kelass)
    {
        //
        return view('class.edit', compact('kelass'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKelassRequest $request, Kelass $kelass)
    {
        //
        $kelass->update($request->all());
        return redirect()->route('class.index')->with(['success' => 'Data '. $request["nama_kelas"]. ' berhasil diedit']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kelass $kelass)
    {
        //
        $kelass->delete();
        return redirect()->route('class.index')->with(['success' => 'Data  berhasil dihapus']);
    }
}
