<?php

namespace App\Http\Controllers;

use App\Models\Chalani;
use Illuminate\Http\Request;

class ChalaniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.chalani.chalani');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Chalani  $chalani
     * @return \Illuminate\Http\Response
     */
    public function show(Chalani $chalani)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Chalani  $chalani
     * @return \Illuminate\Http\Response
     */
    public function edit(Chalani $chalani)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Chalani  $chalani
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chalani $chalani)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Chalani  $chalani
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chalani $chalani)
    {
        //
    }
}
