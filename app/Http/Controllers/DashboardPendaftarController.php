<?php

namespace App\Http\Controllers;

use App\Models\pendaftar;
use Illuminate\Http\Request;

class DashboardPendaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pendaftar = pendaftar::all();
        return view('pages/dashboardAdmin/pendaftar/listpendaftar', compact('pendaftar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'namaLengkap' => 'required',
            'kelas' => 'required',
            'tempatLahir' => 'required',
            'tanggalLahir' => 'required',
            'alamatRumah' => 'required',
            'hobi' => 'required',
            'email' => 'required',
            'nomorTelepon' => 'required',
            'pengalamanOrganisasi' => 'required',
            'alasanMasukOrganisasi' => 'required'
        ]);

        pendaftar::create($request->all());

        return redirect('/formpendaftaran')->with('status', 'Pendaftaran Berhasil Dilakukan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pendaftar  $pendaftar
     * @return \Illuminate\Http\Response
     */
    public function show(pendaftar $pendaftar)
    {
        return view('pages.dashboardAdmin.pendaftar.detailpendaftar', compact('pendaftar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pendaftar  $pendaftar
     * @return \Illuminate\Http\Response
     */
    public function edit(pendaftar $pendaftar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pendaftar  $pendaftar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pendaftar $pendaftar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pendaftar  $pendaftar
     * @return \Illuminate\Http\Response
     */
    public function destroy(pendaftar $pendaftar)
    {
        pendaftar::destroy($pendaftar->id);
        return redirect('/admin/listpendaftar')->with('status', 'Pendaftar berhasil dihapus!');
    }
}
