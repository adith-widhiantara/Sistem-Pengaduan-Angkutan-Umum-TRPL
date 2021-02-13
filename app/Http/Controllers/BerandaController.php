<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function beranda()
    {
        return view('beranda');
    }

    public function beranda1()
    {
        return view('dinas.beranda1');
    }

    public function beranda2()
    {
        $notifikasi = \App\Notifikasi::All();
        return view('owner.beranda2',compact('notifikasi'));
    }
}
