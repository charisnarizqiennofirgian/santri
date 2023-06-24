<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftaran;
use DB;

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pendaftaran = Pendaftaran::join('santri', 'pendaftaran.santri_id', '=', 'santri.id')
            ->join('status_pendaftaran', 'pendaftaran.status_pendaftaran_id', '=', 'status_pendaftaran.id')
            ->select('pendaftaran.*', 'santri.nama as nama', 'status_pendaftaran.status_pendaftaran as status_pendaftaran')
            ->get();
        return view('admin.pendaftaran.index', compact('pendaftaran'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $santri = DB::table('santri')->get();
        $status_pendaftaran = DB::table('status_pendaftaran')->get();
        $pendaftaran = Pendaftaran::join('santri', 'pendaftaran.santri_id', '=', 'santri.id')
            ->join('status_pendaftaran', 'pendaftaran.status_pendaftaran_id', '=', 'status_pendaftaran.id')
            ->select('pendaftaran.*', 'santri.nama as nama', 'status_pendaftaran.status_pendaftaran as status_pendaftaran')
            ->get();
        return view('admin.pendaftaran.create', compact('pendaftaran', 'santri', 'status_pendaftaran'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::table('pendaftaran')->insert([
            'tgl_pendaftaran' => $request->tgl_pendaftaran,
            'santri_id' => $request->santri_id,
            'status_pendaftaran_id' => $request->status_pendaftaran_id,
        ]);
        return redirect('admin/pendaftaran');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $pendaftaran = Pendaftaran::join('santri', 'pendaftaran.santri_id', '=', 'santri.id')
            ->join('status_pendaftaran', 'pendaftaran.status_pendaftaran_id', '=', 'status_pendaftaran.id')
            ->select('pendaftaran.*', 'santri.nama as nama', 'status_pendaftaran.status_pendaftaran as status_pendaftaran')
            ->where('pendaftaran.id', $id)
            ->get();
            return view('admin.pendaftaran.detail', compact('pendaftaran'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $santri = DB::table('santri')->get();
        $status_pendaftaran = DB::table('status_pendaftaran')->get();
        $pendaftaran = DB::table('pendaftaran')->where('id', $id)->get();

        return view('admin.pendaftaran.edit', compact('pendaftaran', 'santri', 'status_pendaftaran'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        DB::table('pendaftaran')->where('id', $request->id)->update([
            'tgl_pendaftaran' => $request->tgl_pendaftaran,
            'santri_id' => $request->santri_id,
            'status_pendaftaran_id' => $request->status_pendaftaran_id,
        ]);
        return redirect('admin/pendaftaran');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
