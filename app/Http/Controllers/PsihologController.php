<?php

namespace App\Http\Controllers;

use App\Models\Psiholog;
use Illuminate\Http\Request;

class PsihologController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Psiholog::OrderBy('created_at', 'desc')->get();
        return view('admin.psiholog.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.psiholog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $posts = new Psiholog();
        $posts->title = $request->input('title');
        $posts->body = $request->input('body');
        $posts->save();

        return redirect('admin.psiholog');
    }

    public function uploadImage(Request $request)
    {
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            //Get just filename
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            //Get just extension
            $extension = $request->file('upload')->getClientOriginalExtension();
            //Filename to store
            $fileName = $fileName . '_' . time() . '.' . $extension;
            $request->file('upload')->storeAs('public/media', $fileName);

            $url = asset('/storage/media/' . $fileName);
            return response()->json(['filename' => $fileName, 'uploaded' => 1, 'url' => $url]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Psiholog::find($id);
        return view('admin.psiholog.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Psiholog::find($id);
        return view('admin.psiholog.edit', compact('post'));
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
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            //Get just filename
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            //Get just extension
            $extension = $request->file('upload')->getClientOriginalExtension();
            //Filename to store
            $fileName = $fileName . '_' . time() . '.' . $extension;
            $request->file('upload')->storeAs('public/media', $fileName);

            $url = asset('/storage/media/' . $fileName);
            return response()->json(['filename' => $fileName, 'uploaded' => 1, 'url' => $url]);
        }

        $post = Psiholog::find($id);
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();

        return redirect('admin.psiholog');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Psiholog::find($id);
        $post->delete();
        return redirect('admin.psiholog');
    }
}
