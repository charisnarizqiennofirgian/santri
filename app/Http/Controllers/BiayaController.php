<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Biaya;
use App\Models\Pendaftaran;
use DB;

class BiayaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $biaya = Biaya::join('pendaftaran', 'biaya.pendaftaran_id', '=', 'pendaftaran.id')
        ->select('biaya.*', 'pendaftaran.tgl_pendaftaran as tanggal')
        ->get();
        return view('admin.biaya.index', compact('biaya'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pendaftaran = DB::table('pendaftaran')->get();
        $biaya = Biaya::join('pendaftaran', 'biaya.pendaftaran_id', '=', 'pendaftaran.id')
            ->select('biaya.*', 'pendaftaran.tgl_pendaftaran as tanggal')
            ->get();
            
        return view('admin.biaya.create', compact('biaya', 'pendaftaran'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if(!empty($request->bukti_pembayaran)){ 
            $fileName = 'bukti_pembayaran-'.$request->id.'.'.$request->bukti_pembayaran->extension(); 
            $request->bukti_pembayaran->move(public_path('admin/image'), $fileName); 
        } 
        else{ 
            $fileName = ''; 
        }
        DB::table('biaya')->insert([
            'tgl_pembayaran' => $request->tgl_pembayaran,
            'jml_pembayaran' => $request->jml_pembayaran,
            'bukti_pembayaran' => $fileName,
            'status_pembayaran' => $request->status_pembayaran,
            'pendaftaran_id' => $request->pendaftaran_id,
        ]);
        return redirect('admin/biaya');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    { 
        // table biaya join tabel pendaftaran dan table santri
        // $biaya = Biaya::join('pendaftaran', 'biaya.pendaftaran_id', '=', 'pendaftaran.id')
        // ->select('biaya.*', 'pendaftaran.tgl_pendaftaran as tanggal')
        // ->where('biaya.id', $id)
        // ->get();
        $biaya = Biaya::join('pendaftaran', 'biaya.pendaftaran_id', '=', 'pendaftaran.id')
        ->join('santri', 'pendaftaran.santri_id', '=', 'santri.id')
        ->select('biaya.*', 'pendaftaran.tgl_pendaftaran as tanggal', 'santri.nama as nama_santri', 'santri.alamat as alamat_santri', 'santri.no_hp as no_hp_santri')
        ->where('biaya.id', $id)
        ->get();
        return view('admin.biaya.detail', compact('biaya'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pendaftaran = DB::table('pendaftaran')->get();
        $biaya = DB::table('biaya')->where('id', $id)->get();

        return view('admin.biaya.edit', compact('biaya', 'pendaftaran'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        if(!empty($request->bukti_pembayaran)){ 
            $fileName = 'bukti_pembayaran-'.$request->id.'.'.$request->bukti_pembayaran->extension(); 
            $request->bukti_pembayaran->move(public_path('admin/image'), $fileName); 
        } 
        else{ 
            $fileName = ''; 
        }
        DB::table('biaya')->where('id', $request->id)->update([
            'tgl_pembayaran' => $request->tgl_pembayaran,
            'jml_pembayaran' => $request->jml_pembayaran,
            'bukti_pembayaran' => $fileName,
            'status_pembayaran' => $request->status_pembayaran,
            'pendaftaran_id' => $request->pendaftaran_id,
        ]);
        return redirect('admin/biaya');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('biaya')->where('id', $id)->delete();
        return redirect('admin/biaya');
    }
}
