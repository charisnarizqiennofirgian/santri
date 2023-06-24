<?php

namespace App\Http\Controllers;

use App\Models\IdentitasSantri;
use App\Models\OrtuSantri;
use Illuminate\Http\Request;

class OrtuSantriController extends Controller
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
        // Isikan validasi disini
    }

    /**
     * Display the specified resource.
     */
    public function show(OrtuSantri $ortuSantri)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OrtuSantri $ortuSantri)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, OrtuSantri $ortuSantri)
    {
        //
        $input = $request->all();

        if (!in_array(null, $input, true)) {
            $input['is_filled'] = 1;
        }

        $ortuSantri->updateOrCreate(['santri_id' => $this->santri()->id], $input);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OrtuSantri $ortuSantri)
    {
        //
    }
}
