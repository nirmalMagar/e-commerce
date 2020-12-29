<?php

namespace App\Http\Controllers;

use App\Models\Sewa;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class SewaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|Response|View
     */
    public function index()
    {

        $sewa = sewa::all();
        return view('admin.sewa.sewa', compact(['sewa']));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {

        return \view('admin.sewa.add_sewa');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'sewas'   =>  'required | unique:sewas,s_name'
        ]);
        $store = new sewas;
        $store->s_name = $request->sewas;
        $store->save();
        return redirect()->back()->with('status','Stored Successfully');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sewa  $sewa
     * @return Response
     */
    public function show(Sewa $sewa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sewa  $sewa
     * @return Response
     */
    public function edit($id)
    {

        $sewa = sewa::find($id);
        return \view('admin.sewa.edit_sewa', compact(['sewa']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  \App\Models\Sewa  $sewa
     * @return Response
     */
    public function update(Request $request, Sewa $sewa)
    {
        $request->validate([
            'sewas'   =>  'required | unique:sewas,s_name,'.$sewa->id,
        ]);
        $year->s_name   =   $request->sewas;
        $year->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sewa  $sewa
     * @return Response
     */
    public function destroy(Sewa $sewa)
    {
        //
    }
}
