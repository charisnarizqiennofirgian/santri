<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\StatusPendaftaran;

class StatusPendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $status_pendaftaran = DB::table('status_pendaftaran')->get();
        return view('admin.status_pendaftaran.index', compact('status_pendaftaran'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        $status_pendaftaran = DB::table('status_pendaftaran')->where('id', $id)->get();

        return view('admin.status_pendaftaran.edit', compact('status_pendaftaran'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        DB::table('status_pendaftaran')->where('id', $request->id)->update([
            'status_pendaftaran' => $request->status_pendaftaran,
        ]);
        
        return redirect('admin/status_pendaftaran');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
