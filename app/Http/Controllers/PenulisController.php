<?php

namespace App\Http\Controllers;
use App\Models\Story;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PenulisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jumlah = Story::count();
        $artikelme = Story::where('user_id', Auth::user()->id)->count();
        return view('penulis.homepenulis', compact('jumlah','artikelme'));
    }
    public function profile()
    {
        return view('penulis.profile');
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
        //
    }
    public function profileUpdate(Request $request)
    {
        # code...
        $validate = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed',
            'image_profile' =>'file|image|mimes:jpeg,jpg,png|max:5120'
        ]);
        $request->file('image_profile') ? $img = $request->file('image_profile')->store('profile-image') : $img=Auth::user()->image_profile;
        $password = bcrypt($validate['password']);
        $id = Auth::user()->id;
        $user = User::find($id);
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=$password;
        $user->image_profile=$img;
        $user->save();

        return redirect()->route('profilepenulis')->with('success', 'Berhasil mengupate profile');
    }
}
