<?php

namespace App\Http\Controllers;

use App\Models\IdentitasSantri;
use Carbon\Carbon;
use Illuminate\Http\Request;

class IdentitasSantriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datas = IdentitasSantri::all();

        return view('admin.santri.santri_new', compact('datas'));
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
    public function show(IdentitasSantri $identitasSantri)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(IdentitasSantri $identitasSantri)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, IdentitasSantri $identitasSantri)
    {
        //
        $this->validate(
            $request,
            [
                'nama_lengkap' => 'required',
                'foto' => 'mimes:jpeg,jpg,png|max:512'
                //Lalu isikan sendiri untuk validasi lainnya
            ]
        );

        $input = $request->all();

        if (!in_array(null, $input, true)) {
            $input['is_filled'] = 1;
        }

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $newFileName = $file->getClientOriginalName();
            $path = $file->storeAs('foto-pendaftar', $newFileName, 'public');
            $input['foto'] = $path;
        } else {
            isset($input['foto']);
        }

        $identitasSantri->update($input);

        return redirect()->back()->with('success', 'Data berhasil disimpan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(IdentitasSantri $identitasSantri)
    {
        //
    }
}
