<?php

namespace App\Http\Controllers;

use App\Models\Departmant;
use Illuminate\Http\Request;

class DepartmantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departmants = departmant::all();
        return view('admin.bidhag.intro', compact(['departmants']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.bidhag.add_dep');
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
            'departmants'   =>  'required | unique:departmants,d_name'
        ]);
        $store = new departmant;
        $store->d_name = $request->departmants;
        $store->save();
        return redirect()->back()->with('status','Stored Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Departmant  $departmant
     * @return \Illuminate\Http\Response
     */
    public function show(Departmant $departmant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Departmant  $departmant
     * @return \Illuminate\Http\Response
     */
    public function edit(Departmant $id)
    {

        $departmants = departmant::find($id);
        return \view('admin.bidhag.edit_dep', compact(['departmants']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Departmant  $departmant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Departmant $departmant)
    {
        $request->validate([
            'departmants'   =>  'required | unique:departmants,d_name,'.$departmant->id,
        ]);
        $departmants->d_name   =   $request->departmants;
        $departmant->save();
        return redirect()->back();


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Departmant  $departmant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Departmant $departmant)
    {
        //
    }
}
