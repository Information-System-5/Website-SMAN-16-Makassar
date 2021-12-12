<?php

namespace App\Http\Controllers;
use App\Models\pengurus;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function pengurusMainWebsite()
    {
        $penguruses = pengurus::all();
        return view('pages.mainWebsite.pengurus', compact('pengurus'));
    }
}
