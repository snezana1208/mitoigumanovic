<?php

namespace App\Http\Controllers;

use App\Models\UpisPrvaka;
use Illuminate\Http\Request;

class UpisPrvakaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = UpisPrvaka::orderBy('created_at', 'desc')->get();
        return view('admin.upis_prvaka.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.upis_prvaka.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $posts = new UpisPrvaka;
        $posts->title = $request->input('title');
        $posts->body = $request->input('body');
        $posts->save();

        return redirect('admin.upis_prvaka');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = UpisPrvaka::find($id);
        return view('admin.upis_prvaka.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = UpisPrvaka::find($id);
        return view('admin.upis_prvaka.edit', compact('post'));
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
        $post = UpisPrvaka::find($id);
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();

        return redirect('admin.upis_prvaka');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = UpisPrvaka::find($id);
        $post->delete();
        return redirect('admin.upis_prvaka');
    }
}
