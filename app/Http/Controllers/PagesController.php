<?php

namespace App\Http\Controllers;

use App\Models\Letopis;
use App\Models\Pedagog;
use App\Models\Psiholog;
use App\Models\SavetRoditelja;
use App\Models\Takmicenja;
use App\Models\UceniciGeneracija;
use App\Models\UpisPrvaka;
use App\Models\Vesti;
use App\Models\ZavrsniIspit;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function vesti()
    {
        $posts = Vesti::OrderBy('created_at', 'desc')->get();
        return view('pages.vesti', compact('posts'));
    }

    public function dokumenta()
    {
        return view('pages.dokumenta');
    }

    public function istorijat()
    {
        return view('pages.o_skoli.istorijat');
    }

    public function zaposleni()
    {
        return view('pages.o_skoli.zaposleni');
    }

    public function savet_roditelja()
    {
        $posts = SavetRoditelja::orderBy('created_at', 'desc')->get();
        return view('pages.o_skoli.savet_roditelja', compact('posts'));
    }

    public function biblioteka()
    {
        return view('pages.o_skoli.biblioteka');
    }

    public function letopis()
    {
        $posts = Letopis::OrderBy('created_at', 'desc')->get();
        return view('pages.o_skoli.letopis', compact('posts'));
    }

    public function galerija()
    {
        return view('pages.o_skoli.galerija');
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
        $posts = ZavrsniIspit::orderBy('created_at', 'desc')->get();
        return view('pages.za_djake.zavrsni_ispit', compact('posts'));
    }

    public function takmicenja()
    {
        $posts = Takmicenja::orderBy('created_at', 'desc')->get();
        return view('pages.za_djake.takmicenja', compact('posts'));
    }

    public function ucenici_generacije()
    {
        $posts = UceniciGeneracija::orderBy('created_at', 'desc')->get();
        return view('pages.za_djake.ucenici_generacije', compact('posts'));
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
        $posts = UpisPrvaka::orderBy('created_at', 'desc')->get();
        return view('pages.za_roditelje.upis_prvaka', compact('posts'));
    }

    public function psiholog_savetuje()
    {
        $posts = Psiholog::OrderBy('created_at', 'desc')->get();
        return view('pages.za_roditelje.psiholog_savetuje', compact('posts'));
    }

    public function pedagog_savetuje()
    {
        $posts = Pedagog::OrderBy('created_at', 'desc')->get();
        return view('pages.za_roditelje.pedagog_savetuje', compact('posts'));
    }
}
