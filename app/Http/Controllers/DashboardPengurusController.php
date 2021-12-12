<?php

namespace App\Http\Controllers;

use App\Models\pengurus;
use Illuminate\Http\Request;

class DashboardPengurusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengurus = pengurus::all();
        return view('pages/dashboardAdmin/pengurus/pengurus', compact('pengurus'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pengurus  $pengurus
     * @return \Illuminate\Http\Response
     */
    public function show(pengurus $pengurus)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pengurus  $pengurus
     * @return \Illuminate\Http\Response
     */
    public function edit(pengurus $pengurus)
    {
        return view('pages.dashboardAdmin.pengurus.editpengurus', compact('pengurus'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pengurus  $pengurus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pengurus $pengurus)
    {

        pengurus::where('id', $pengurus->id)
        ->update([
            'mabigus' => $request->mabigus, 
            'pembinaUtama' =>$request->pembinaUtama, 
            'ketuaDewanPutra'=>$request-> ketuaDewanPutra, 
            'ketuaDewanPutri'=>$request->ketuaDewanPutri, 
            'bendaharaPutra'=>$request->bendaharaPutra,
            'bendaharaPutri'=>$request->bendaharaPutri, 
            'pemangkuAdatPutra'=>$request->pemangkuAdatPutra,
            'pemangkuAdatPutri'=>$request->pemangkuAdatPutri
        ]);

        return redirect('/admin/pengurus');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pengurus  $pengurus
     * @return \Illuminate\Http\Response
     */
    public function destroy(pengurus $pengurus)
    {
        //
    }
    public function tampilPengurus()
    {
        $pengurus = pengurus::all();
        return view('pages/mainWebsite/pengurus', compact('pengurus'));
    }
}
