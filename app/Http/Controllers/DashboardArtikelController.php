<?php

namespace App\Http\Controllers;

use App\Models\artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Contracts\Service\Attribute\Required;
use Illuminate\Support\Str;

class DashboardArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = artikel::all();
        // $datas->isi_artikel = Str::limit($this->isi_artikel, 100, '...');
        return view('pages.dashboardAdmin.artikel.artikel', [
            "datas" => $datas
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('pages.dashboardAdmin.artikel.create');
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
            'judul_artikel' => 'unique:artikels|max:255',
            'penulis_artikel' => 'max:255',
            'waktu_dibuat_artikel' => '',
            'gambar_artikel' => 'image|file|max:1024',
            'isi_artikel' => 'required'
        ]);

        if ($request->file('gambar_artikel')) {
            $validateData['gambar_artikel'] = $request->file('gambar_artikel')->store('post-images');
            // return $request->file('gambar_artikel')->store('images');
        }

        artikel::create($validateData);
        return redirect('/admin/artikel')->with("success", "Artikel berhasil dibuat");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function show(artikel $artikel)
    {
        return view('pages.dashboardAdmin.artikel.detail', [
            "datas" => $artikel
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function edit(artikel $artikel)
    {
        return view('pages.dashboardAdmin.artikel.update', [
            "datas" => $artikel
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, artikel $artikel)
    {
        $rules = [
            'penulis_artikel' => 'required|max:255',
            'waktu_dibuat_artikel' => 'required',
            'gambar_artikel' => 'image|file|max:1024',
            'isi_artikel' => 'required'
        ];



        if ($request->judul_artikel != $artikel->judul_artikel) {
            $rules['judul_artikel'] = 'required|unique:artikels|max:255';
        }

        // if ($request->gambar_artikel === null) {
        //     $request->gambar_artikel = $artikel->gambar_artikel;
        // }

        $validateData = $request->validate($rules);

        if ($request->file('gambar_artikel')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validateData['gambar_artikel'] = $request->file('gambar_artikel')->store('post-images');
            // return $request->file('gambar_artikel')->store('images');
        }

        artikel::where('id', $artikel->id)
            ->update($validateData);
        return redirect('/admin/artikel')->with("success", "Artikel berhasil di edit");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function destroy(artikel $artikel)
    {
        // artikel::destroy($artikel);
        if ($artikel->oldImage) {
            Storage::delete($artikel->gambar_artikel);
        }
        artikel::destroy($artikel->id);
        return redirect('/admin/artikel')->with("success", "Artikel berhasil dihapus");
    }
}
