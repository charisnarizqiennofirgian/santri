<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Santri;
use App\Models\Jenjang;
use App\Models\Orangtua;
use DB;

class SantriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $santri = DB::table('santri')
            ->join('orangtua', 'santri.orangtua_id', '=', 'orangtua.id')
            ->join('jenjang', 'santri.jenjang_id', '=', 'jenjang.id')
            ->select('santri.*', 'orangtua.nama as nama_ortu', 'jenjang.jenjang as jenjang')
            ->get();

        //         $santri = Santri::join('orangtua', 'santri.orangtua_id', '=', 'orangtua.id')
        //             ->join('jenjang', 'santri.jenjang_id', '=', 'jenjang.id')
        //             ->select('santri.*', 'orangtua.nama as nama_ortu', 'jenjang.jenjang as jenjang')
        //             ->get();
        // >>>>>>> 1a4ea8082aa3e6f2a239a0e1b1c665c3d7c2760f
        return view('admin.santri.index', compact('santri'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $orangtua = DB::table('orangtua')->get();
        $jenjang = DB::table('jenjang')->get();
        $santri = DB::table('santri')
            ->join('orangtua', 'santri.orangtua_id', '=', 'orangtua.id')
            ->join('jenjang', 'santri.jenjang_id', '=', 'jenjang.id')
            ->select('santri.*', 'orangtua.nama as nama_ortu', 'jenjang.jenjang as jenjang')
            ->get();

        return view('admin.santri.create', compact('santri', 'orangtua', 'jenjang'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::table('santri')->insert([
            'nisn' => $request->nisn,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'jk' => $request->jk,
            'no_hp' => $request->no_hp,
            'email' => $request->email,
            'orangtua_id' => $request->orangtua_id,
            'jenjang_id' => $request->jenjang_id,
        ]);
        return redirect('admin/santri');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $santri = DB::table('santri')
            ->join('orangtua', 'santri.orangtua_id', '=', 'orangtua.id')
            ->join('jenjang', 'santri.jenjang_id', '=', 'jenjang.id')
            ->select('santri.*', 'orangtua.nama as nama_ortu', 'jenjang.jenjang as jenjang')
            ->where('santri.id', $id)
            ->get();

            return view('admin.santri.detail', compact('santri'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $orangtua = DB::table('orangtua')->get();
        $jenjang = DB::table('jenjang')->get();
        $santri = DB::table('santri')->where('id', $id)->get();

        return view('admin.santri.edit', compact('santri', 'orangtua', 'jenjang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        DB::table('santri')->where('id', $request->id)->update([
            'nisn' => $request->nisn,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'jk' => $request->jk,
            'no_hp' => $request->no_hp,
            'email' => $request->email,
            'orangtua_id' => $request->orangtua_id,
            'jenjang_id' => $request->jenjang_id,
        ]);
        return redirect('admin/santri');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
