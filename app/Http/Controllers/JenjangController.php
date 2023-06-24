<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jenjang;
use DB;

class JenjangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jenjang = DB::table('jenjang')->get();
        return view('admin.jenjang.index', compact('jenjang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.jenjang.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::table('jenjang')->insert([
            'jenjang' => $request->jenjang,
            'thn_ajaran' => $request->thn_ajaran,
            'kuota' => $request->kuota,
        ]);
        return redirect('admin/jenjang');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $jenjang = DB::table('jenjang')->where('id', $id)->get();
        return view('admin.jenjang.detail', compact('jenjang'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $jenjang = DB::table('jenjang')->where('id', $id)->get();

        return view('admin.jenjang.edit', compact('jenjang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        DB::table('jenjang')->where('id', $request->id)->update([
            'jenjang' => $request->jenjang,
            'thn_ajaran' => $request->thn_ajaran,
            'kuota' => $request->kuota,
        ]);

        return redirect('admin/jenjang');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('jenjang')->where('id', $id)->delete();
        return redirect('admin/jenjang');
    }
}
