<?php

namespace App\Http\Controllers;

use App\Models\Departmant;
use App\Models\Office;
use App\Models\Staff;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|Response|View
     */
    public function index()
    {
       $staffs = staff::all();
       /*foreach ($staffs as $staff){
           echo $staff."<br>";
       }*/
       return view('admin.employee.employee', compact(['staffs']));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $departments = Departmant::all();
        return \view('admin.employee.add_staff', compact(['departments']));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return Response
     */
    public function store(Request $request)
    {

        $store = new staff;
        $store->s_name = $request->name;
        $store->s_email = $request->email;
        $store->s_departmant =$request->dep;
        $store->s_nid = $request->nid;
        $store->s_mobile = $request->mobile;
        $store->address = $request->address;
        $store->s_district = $request->district;
        $store->s_zone = $request->zone;
        $store->s_pin = $request->pin;
        $store->s_password = $request->password;
        $store->save();
        return redirect()->back()->with('status','Stored Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Staff  $staff
     * @return Response
     */
    public function show(Staff $staff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Staff  $staff
     * @return Response
     */
    public function edit($id)
    {
        $departments = Departmant::all();

        $staff = staff::find($id);
        return \view('admin.employee.edit_staff', compact(['staff','departments']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Staff  $staff
     * @return Response
     */
    public function update(Request $request, Staff $staff)
    {
       //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Staff  $staff
     * @return Response
     */
    public function destroy(Staff $staff)
    {
        //
    }


}
