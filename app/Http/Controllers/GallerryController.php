<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth, Str, Storage;
use App\Models\Gallery;

class GallerryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data =Gallery::latest()->paginate(5);
        return view('content/admin/gallery/gallery', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'img' => 'mimes:jpeg,jpg,png,svg|dimensions: max_width = 2464, max_height = 2464|max:2500',
            'description' => 'required|min:20',
        ]);
        $gallery = new Gallery;
        $filename = rand('00000','99999').'.png';
        $gallery->description = $request->description;
        $gallery->author_id = Auth::id();
        if ($request->file_input != null) {

            Storage::disk('upload')->putFileAs('image_content', $request->file_input, $filename);

            $gallery->image_content = $filename;
        };
        $gallery->save();

        // Gallery::create([
        //     'description' => $request->description
        //     'author_id' => Auth::id()
        // ]);
        return redirect('/dashboard/gallery');
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
        $data =Gallery::findOrFail($id);
        return view('content/admin/gallery/edit', compact('data'));
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
        $gallery = Gallery::findOrFail($id);
        $gallery->description = $request->description;
        $gallery->author_id = Auth::id();
        $gallery->save();
        return redirect('/dashboard/gallery');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id)->delete();
        return redirect('/dashboard/gallery');
    }
}
