<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class SppController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $keyword = $request->keyword;

        $spps =DB::table("spps")->where('tahun','LIKE','%'.$keyword.'%')->get();
        return view("spp.index", compact("spps"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("spp.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'tahun' => "required|min:4",
            'nominal' => "required",
           ]);

           $query = DB::table("spps")->insert([
            'tahun' => $request['tahun'],
            'nominal' => $request['nominal'],
           ]);
           return redirect()->route('spp.index')->with(['success'=>'Data Telah Ditambahkan']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $spp = DB::table("spps")->where("spp_id", $id)->first();
        return view("spp.edit", compact("spps"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'tahun' => "required|min:4",
            'nominal' => "required",
           ]);

           $query = DB::table("spps")
           ->where('spp_id', $id)
           ->update([
            'tahun' => $request['tahun'],
            'nominal' => $request['nominal'],
           ]);
    
           return redirect()->route('spp.index')->with(['success'=>'Data Telah Diupdate']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $query = DB::table('spps')->where('spp_id',$id)->delete();
        return redirect()->route('spp.index')->with(['success'=>'Data Telah Dihapus']);
    }
}