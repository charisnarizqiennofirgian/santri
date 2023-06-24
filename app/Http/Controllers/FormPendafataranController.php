<?php

namespace App\Http\Controllers;

use App\Models\DokumenSantri;
use App\Models\IdentitasSantri;
use App\Models\OrtuSantri;
use App\Models\WaliSantri;
use Illuminate\Http\Request;

class FormPendafataranController extends Controller
{
    //
    public function santri()
    {
        $santri = IdentitasSantri::where('user_id', auth()->user()->id)->first();
        return $santri;
    }
    public function index()
    {
        $santri = $this->santri();

        return view('pendaftar.form_pendaftaran.index', compact('santri'));
    }

    public function dokumen()
    {
        $dokumen = DokumenSantri::where('santri_id', $this->santri()->id)->first();

        return view('pendaftar.form_pendaftaran.dokumen', compact('dokumen'));
    }

    public function ketOrtu()
    {
        $ortu = OrtuSantri::where('santri_id', $this->santri()->id)->first();

        return view('pendaftar.form_pendaftaran.ket_ortu', compact('ortu'));
    }

    public function ketWali()
    {
        $wali = WaliSantri::where('santri_id', $this->santri()->id)->first();

        return view('pendaftar.form_pendaftaran.identitas_wali', compact('wali'));
    }

    public function dashboard()
    {
        return view('pendaftar.dashboard.index');
    }

    public function status()
    {
        return view('pendaftar.dashboard.status');
    }
}
