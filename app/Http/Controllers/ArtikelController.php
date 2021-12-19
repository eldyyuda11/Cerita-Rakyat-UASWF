<?php

namespace App\Http\Controllers;
use App\Models\Story;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stories=Story::where('user_id',Auth::user()->id)->get();
        return view('penulis.artikelpenulis',compact('stories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'judul' => 'required|unique:stories,judul',
            'isi' => 'required',
            'tanggal_publish' => 'required',
            'image_path' =>'file|image|mimes:jpeg,jpg,png|max:5120',
            'user_id' => 'required'
        ]);
        $request->file('image_path') ?  $validate['image_path'] = $request->file('image_path')->store('ilustrasi-image') : null;
        $story = Story::create($validate);
        return redirect()->route('artikel.index')
            ->with('success', 'Berhasil menambah Artikel');
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
    public function update(Request $request)
    {
        $validate = $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'tanggal_publish' => 'required',
            'image_path' =>'file|image|mimes:jpeg,jpg,png|max:5120',
            'user_id' => 'required'
        ]);
        $story = Story::find($request->id_story);
        $request->file('image_path') ?  $img = $request->file('image_path')->store('ilustrasi-image') : $img = $story->image_path;
        dd($img);
        $story->judul = $request->judul;
        $story->isi = $request->isi;
        $story->user_id = $request->user_id;
        $story->tanggal_publish = $request->tanggal_publish;
        $story->image_path = $img;
        $story->save();
        return redirect()->route('artikel.index')
            ->with('success', 'Berhasil meng-update Artikel');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $story = Story::find($id);
        $story->delete();
             return redirect()->route('artikel.index')
            ->with('success', 'Berhasil menghapus artikel');
    }
    public function showartikel(Request $request,$id)
    {
        $id=Story::find($id);
        return Response()->json($id);
    }
}
