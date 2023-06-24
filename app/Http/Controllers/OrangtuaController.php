<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orangtua;
use DB;

class OrangtuaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $org_tua = DB::table('orangtua')->get();
        return view('admin.orangtua.index', compact('org_tua'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // arahkan ke file create
        return view('admin.orangtua.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::table('orangtua')->insert([
            'nama' => $request->nama,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
            'pekerjaan' => $request->pekerjaan,
        ]);
        return redirect('admin/orangtua');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $orangtua = DB::table('orangtua')->where('id', $id)->get();
        return view('admin.orangtua.detail', compact('orangtua'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $orangtua = DB::table('orangtua')->where('id', $id)->get();

        return view('admin.orangtua.edit', compact('orangtua'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        DB::table('orangtua')->where('id', $request->id)->update([
            'nama' => $request->nama,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
            'pekerjaan' => $request->pekerjaan,
        ]);
        
        return redirect('admin/orangtua');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('orangtua')->where('id', $id)->delete();
        return redirect('admin/orangtua');
    }
}
