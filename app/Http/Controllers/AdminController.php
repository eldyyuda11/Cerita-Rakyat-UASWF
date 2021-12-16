<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Story;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $totalP= User::where('role', 'penulis')->count();
        $totalA= User::where('role', 'admin')->count();
        $jan = story::whereMonth('tanggal_publish', '01')->count();
        $feb = story::whereMonth('tanggal_publish', '02')->count();
        $mar = story::whereMonth('tanggal_publish', '03')->count();
        $apr = story::whereMonth('tanggal_publish', '04')->count();
        $mei = story::whereMonth('tanggal_publish', '05')->count();
        $jun = story::whereMonth('tanggal_publish', '06')->count();
        $jul = story::whereMonth('tanggal_publish', '07')->count();
        $agus = story::whereMonth('tanggal_publish', '08')->count();
        $sep = story::whereMonth('tanggal_publish', '09')->count();
        $okt = story::whereMonth('tanggal_publish', '10')->count();
        $nov = story::whereMonth('tanggal_publish', '11')->count();
        $des =story::whereMonth('tanggal_publish', '12')->count();

        return view('home',compact('totalP','totalA','jan','feb','mar','apr','mei','jun','jul','agus','sep','okt','nov','des'));
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
    public function profile(Request $request)
    {
        return view('profile');
    }
}
