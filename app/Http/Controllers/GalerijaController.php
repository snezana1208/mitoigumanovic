<?php

namespace App\Http\Controllers;

use App\Models\Galerija;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class GalerijaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['show']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = Galerija::orderBy('created_at', 'desc')->get();
        return view('admin.galerija.index', compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.galerija.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // if ($request->has('images')) {
        //     $imagesname = '';
        //     foreach ($request->images as $key => $image) {
        //         $imgName = Carbon::now()->timestamp . $key . '.' . $image->extension();
        //         $image->move('\public\assets\images\galerija', $imgName);
        //         $imagesname = $imagesname . ',' . $imgName;
        //     }
        // }

        // $images = new Galerija;
        // $images->name = $imagesname;
        // $images->save();

        if ($request->has('images')) {
            foreach ($request->file('images') as $image) {
                $name = $image->getClientOriginalName();
                $path = $image->storeAs('galerija', $name, 'public');

                Galerija::create([

                    'name' => $name,

                ]);
            }
        }

        return redirect('admin.galerija');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image = Galerija::find($id);
        
        $path = 'storage/galerija/' . $image;
        if (File::exists($path)) {
            File::delete($path);
        }
        

        $image->delete();

        return redirect('admin.galerija');
    }
}
