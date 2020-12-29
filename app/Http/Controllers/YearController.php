<?php

namespace App\Http\Controllers;

use App\Models\year;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class YearController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|Response|View
     */
    public function index()
    {
        $years = year::all();
        return view('admin.years.year', compact(['years']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|Response|View
     */
    public function create()
    {
        return \view('admin.years.add_year');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
       $request->validate([
           'fiscal_year'   =>  'required | unique:years,y_name'
       ]);
       $store = new year;
       $store->y_name = $request->fiscal_year;
       $store->save();
       return redirect()->back()->with('status','Stored Successfully');
    }
    /**
     * Display the specified resource.
     *
     * @param year $year
     * @return Response
     */
    public function show(year $year)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param year $year
     * @return Application|Factory|Response|View
     */
    public function edit($id)
    {

        $year = year::find($id);
        return \view('admin.years.edit_year', compact(['year']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param year $year
     * @return Response
     */
    public function update(Request $request, year $year)
    {
        $request->validate([
            'fiscal_year'   =>  'required | unique:years,y_name,'.$year->id,
        ]);
        $year->y_name   =   $request->fiscal_year;
        $year->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param year $year
     * @return Response
     */
    public function destroy(year $year)
    {
        $year->delete();
        return redirect()->back();
    }
}
