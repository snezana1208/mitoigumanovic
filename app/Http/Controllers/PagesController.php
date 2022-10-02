<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about()
    {
        return view('pages.about');
    }

    public function istorijat()
    {
        return view('pages.istorijat');
    }

    public function zaposleni()
    {
        return view('pages.zaposleni');
    }

    public function savet_roditelja()
    {
        return view('pages.savet_roditelja');
    }

    public function biblioteka()
    {
        return view('pages.biblioteka');
    }

    public function letopis()
    {
        return view('pages.letopis');
    }

    public function galerija()
    {
        return view('pages.galerija');
    }

    public function kalendar()
    {
        return view('pages.organizacija_rada.kalendar');
    }

    public function zvono()
    {
        return view('pages.organizacija_rada.zvono');
    }

    public function rasporedi()
    {
        return view('pages.organizacija_rada.rasporedi');
    }

    public function vannastavne_aktivnosti()
    {
        return view('pages.organizacija_rada.vannastavne_aktivnosti');
    }

    public function produzeni_boravak()
    {
        return view('pages.organizacija_rada.produzeni_boravak');
    }
}
