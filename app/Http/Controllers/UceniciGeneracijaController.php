<?php

namespace App\Http\Controllers;

use App\Models\UceniciGeneracija;
use Illuminate\Http\Request;

class UceniciGeneracijaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = UceniciGeneracija::orderBy('created_at', 'desc')->get();
        return view('admin.ucenici_generacija.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.ucenici_generacija.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $posts = new UceniciGeneracija();
        $posts->title = $request->input('title');
        $posts->body = $request->input('body');
        $posts->save();

        return redirect('admin.ucenici_generacija');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = UceniciGeneracija::find($id);
        return view('admin.ucenici_generacija.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = UceniciGeneracija::find($id);
        return view('admin.ucenici_generacija.edit', compact('post'));
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
        $post = UceniciGeneracija::find($id);
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();

        return redirect('admin.ucenici_generacija');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = UceniciGeneracija::find($id);
        $post->delete();
        return redirect('admin.ucenici_generacija');
    }
}
