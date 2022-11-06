<?php

namespace App\Http\Controllers;

use App\Models\Takmicenja;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TakmicenjaController extends Controller
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
        $posts = Takmicenja::orderBy('created_at', 'desc')->get();
        return view('admin.takmicenja.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.takmicenja.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if ($request->hasFile('image')) {
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get just extension
            $extension = $request->file('image')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('image')->storeAs('public/post_image', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        $posts = new Takmicenja;
        $posts->title = $request->input('title');
        $posts->image = $fileNameToStore;
        $posts->body = $request->input('body');
        $posts->save();

        return redirect('admin.takmicenja');
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
        $post = Takmicenja::find($id);
        return view('admin.takmicenja.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Takmicenja::find($id);
        return view('admin.takmicenja.edit', compact('post'));
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

        $post = Takmicenja::find($id);

        if ($request->hasFile('image')) {

            $path = 'storage/post_image/' . $post->image;
            if (File::exists($path)) {
                File::delete($path);
            }
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            //Get just extension
            $extension = $request->file('image')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('image')->storeAs('public/post_image', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

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

        
        
        $post->title = $request->input('title');
        $post->image = $fileNameToStore;
        $post->body = $request->input('body');
        $post->save();

        return redirect('admin.takmicenja');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Takmicenja::find($id);
        $post->delete();
        return redirect('admin.takmicenja');
    }
}
