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

    public function raspored()
    {
        return view('pages.organizacija_rada.raspored');
    }

    public function vannastavne_aktivnosti()
    {
        return view('pages.organizacija_rada.vannastavne_aktivnosti');
    }

    public function produzeni_boravak()
    {
        return view('pages.organizacija_rada.produzeni_boravak');
    }

    public function djacki_parlament()
    {
        return view('pages.za_djake.djacki_parlament');
    }

    public function zavrsni_ispit()
    {
        return view('pages.za_djake.zavrsni_ispit');
    }

    public function takmicenja()
    {
        return view('pages.za_djake.takmicenja');
    }

    public function ucenici_generacije()
    {
        return view('pages.za_djake.ucenici_generacije');
    }

    public function otvorena_vrata()
    {
        return view('pages.za_roditelje.otvorena_vrata');
    }

    public function rasporedi()
    {
        return view('pages.za_roditelje.rasporedi');
    }

    public function spisak_udzbenika()
    {
        return view('pages.za_roditelje.spisak_udzbenika');
    }

    public function upis_prvaka()
    {
        return view('pages.za_roditelje.upis_prvaka');
    }

    public function psiholog_savetuje()
    {
        return view('pages.za_roditelje.psiholog_savetuje');
    }

    public function pedagog_savetuje()
    {
        return view('pages.za_roditelje.pedagog_savetuje');
    }
}
