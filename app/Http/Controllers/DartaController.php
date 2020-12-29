<?php

namespace App\Http\Controllers;

use App\Models\Darta;
use App\Models\Departmant;
use App\Models\Entry;
use App\Models\Sewa;
use App\Models\Staff;
use App\Models\year;
use Illuminate\Http\Request;

class DartaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dartas = entry::all();
        return view('admin.darta.entry', compact(['dartas']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $years = Year::all();
        $sewas = Sewa::all();
        return \view('admin.darta.add_darta', compact(['years','sewas']));



    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store = new Darta;
        $store->d_darta_no = $request->d_no;
        $store->subject = $request->subject;
        $store->year_id = $request->year;
        $store->d_email = $request->email;
        $store->sewa_id = $request->sewa;
        $store->d_p_office_name = $request->pan;
        $store->date = $request-> date;
        $store->d_mobile = $request->mobile;
        $store->d_comment = $request->comment;
        $store->d_document = $request->document;
        $store->save();
        return redirect()->back()->with('status','Stored Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Darta  $darta
     * @return \Illuminate\Http\Response
     */
    public function show(Darta $darta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Entry  $darta
     * @return \Illuminate\Http\Response
     */
    public function edit(Darta $darta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Darta  $darta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Darta $darta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Darta  $darta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Darta $darta)
    {
        //
    }
}
