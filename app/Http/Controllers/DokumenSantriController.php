<?php

namespace App\Http\Controllers;

use App\Models\DokumenSantri;
use App\Models\IdentitasSantri;
use Illuminate\Http\Request;

class DokumenSantriController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function santri()
    {
        $santri = IdentitasSantri::where('user_id', auth()->user()->id)->first();
        return $santri;
    }

    public function index()
    {
        //
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
    public function show(DokumenSantri $dokumenSantri)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DokumenSantri $dokumenSantri)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DokumenSantri $dokumenSantri)
    {
        //
        $input = $request->all();

        if (!in_array(null, $input, true)) {
            $input['is_filled'] = 1;
        }

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $newFileName = $file->getClientOriginalName();
            $path = $file->storeAs('photo-pendaftar', $newFileName, 'public');
            $input['photo'] = $path;
        } else {
            isset($input['photo']);
        }

        if ($request->hasFile('kartu_identitas')) {
            $file = $request->file('kartu_identitas');
            $newFileName = $file->getClientOriginalName();
            $path = $file->storeAs('ki-pendaftar', $newFileName, 'public');
            $input['kartu_identitas'] = $path;
        } else {
            isset($input['kartu_identitas']);
        }

        if ($request->hasFile('akta')) {
            $file = $request->file('akta');
            $newFileName = $file->getClientOriginalName();
            $path = $file->storeAs('akta-pendaftar', $newFileName, 'public');
            $input['akta'] = $path;
        } else {
            isset($input['akta']);
        }

        if ($request->hasFile('kartu_keluarga')) {
            $file = $request->file('kartu_keluarga');
            $newFileName = $file->getClientOriginalName();
            $path = $file->storeAs('kk-pendaftar', $newFileName, 'public');
            $input['kartu_keluarga'] = $path;
        } else {
            isset($input['kartu_keluarga']);
        }

        if ($request->hasFile('ijazah')) {
            $file = $request->file('ijazah');
            $newFileName = $file->getClientOriginalName();
            $path = $file->storeAs('ijazah-pendaftar', $newFileName, 'public');
            $input['ijazah'] = $path;
        } else {
            isset($input['ijazah']);
        }

        if ($request->hasFile('skhun')) {
            $file = $request->file('skhun');
            $newFileName = $file->getClientOriginalName();
            $path = $file->storeAs('skhun-pendaftar', $newFileName, 'public');
            $input['skhun'] = $path;
        } else {
            isset($input['skhun']);
        }

        $dokumenSantri->updateOrCreate(['santri_id' => $this->santri()->id], $input);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DokumenSantri $dokumenSantri)
    {
        //
    }
}
