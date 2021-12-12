<?php

namespace App\Http\Controllers;

use App\Models\Prestasi;
use Illuminate\Http\Request;

class DashboardPrestasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $datas = Prestasi::all();
        // return view('pages.dashboardAdmin.prestasi.prestasi', [
        //     "datas" => $datas
        // ]);
        return view('pages.dashboardAdmin.prestasi.prestasi', [
            "datas" => Prestasi::latest()->filter(request(['search']))->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.dashboardAdmin.prestasi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'title' => 'required|unique:prestasis|max:255',
            'body' => 'required'
        ]);

        Prestasi::create($validateData);
        return redirect('/admin/prestasi')->with('success', 'Prestasi berhasil dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Prestasi  $prestasi
     * @return \Illuminate\Http\Response
     */
    public function show(Prestasi $prestasi)
    {
        return view("pages.dashboardAdmin.prestasi.detail", [
            'datas' => $prestasi
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Prestasi  $prestasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Prestasi $prestasi)
    {
        return view("pages.dashboardAdmin.prestasi.update", [
            'datas' => $prestasi
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Prestasi  $prestasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prestasi $prestasi)
    {
        $rules = [
            'body' => 'required'
        ];

        if ($request->title != $prestasi->title) {
            $rules['title'] = 'required|unique:prestasis|max:255';
        }

        $validateData = $request->validate($rules);
        Prestasi::where('id', $prestasi->id)
            ->update($validateData);
        return redirect('/admin/prestasi')->with("success", "Prestasi berhasil di edit");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Prestasi  $prestasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Prestasi $prestasi)
    {
        Prestasi::destroy($prestasi->id);
        return redirect('/admin/prestasi')->with("success", "Prestasi berhasil dihapus");
    }
}
