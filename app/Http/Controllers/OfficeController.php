<?php

namespace App\Http\Controllers;

use App\Models\Departmant;
use App\Models\Office;

use App\Models\year;
use Illuminate\Http\Request;

class OfficeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $offices = office::all();
        return view('admin.shakha.shakha', compact(['offices']));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = Departmant::all();
        return \view('admin.shakha.add_shakha', compact(['departments']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'shakha'   =>  'required | unique:offices,off_name,off_name2,departmant_id'
        ]);
        $store = new office;
        $store->off_name = $request->name;
        $store->off_name2 = $request->shakha;
        $store->departmant_id =$request->dep;
        $store->save();
        return redirect()->back()->with('status','Stored Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Office  $office
     * @return \Illuminate\Http\Response
     */
    public function show(Office $office)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Office  $office
     * @return \Illuminate\Http\Response
     */
    public function edit(Office $id)
    {

        $offices = office::find($id);
        return \view('admin.shakha.add_shakha', compact(['offices']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Office  $office
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Offices $office)
    {
        $request->validate([
            'name', 'shakha'   =>  'required | unique:offices,off_name,off_name2,departmant_id'.$office->id,
        ]);
        $office->off_name   =   $request->name;
        $office->off_name2 = $request->shakha;
        $office->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Office  $office
     * @return \Illuminate\Http\Response
     */
    public function destroy(Office $office)
    {
        //
    }
}
