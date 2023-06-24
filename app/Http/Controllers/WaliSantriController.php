<?php

namespace App\Http\Controllers;

use App\Models\IdentitasSantri;
use App\Models\WaliSantri;
use Illuminate\Http\Request;

class WaliSantriController extends Controller
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
    public function show(WaliSantri $waliSantri)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(WaliSantri $waliSantri)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, WaliSantri $waliSantri)
    {
        //
        $input = $request->all();

        if (!in_array(null, $input, true)) {
            $input['is_filled'] = 1;
        }

        $waliSantri->updateOrCreate(['santri_id' => $this->santri()->id], $input);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(WaliSantri $waliSantri)
    {
        //
    }
}
