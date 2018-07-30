<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;

class DoctorController extends Controller
{
//*-------------------- Resource list.------------------------------------------
     // *
     // * @return \Illuminate\Http\Response
    public function topmeddoc()
    {
        return view('/doctor/index');
    }
//*-------------------- End resource list.--------------------------------------


//*-------------------- Pagination.---------------------------------------------
     // *
     // * @return \Illuminate\Http\Response
    public function index()
    {
        $doctors = Doctor::latest()->paginate(5);
        return response()->json($doctors);
    }
//*-------------------- End pagination.-----------------------------------------



//*-------------------- Storage.------------------------------------------------
     // *
     // * @param  \Illuminate\Http\Request  $request
     // * @return \Illuminate\Http\Response
    public function store(Request $request)
    {
        $doctor = Doctor::create($request->except('_token'));
        return response()->json($doctor);
    }
//*-------------------- End Storage.--------------------------------------------


//*--------------------Show Storage---------------------------------------------
     //* @param  int  $id
     //* @return \Illuminate\Http\Response*/
    
    public function show($id)
    {
        //
    }
//*--------------------End Show-------------------------------------------------

//*-------------------- Storage Update.-----------------------------------------
     // *
     // * @param  \Illuminate\Http\Request  $request
     // * @param  int  $id
     // * @return \Illuminate\Http\Response
    public function update(Request $request, $id)
    {
        $doctor = Doctor::find($id)->update($request->all());
        return response()->json($doctor);
    }
//*-------------------- End Update.---------------------------------------------


//*-------------------- Remove from Storage.------------------------------------
     // *
     // * @param  int  $id
     // * @return \Illuminate\Http\Response
    public function destroy($id)
    {
        Doctor::find($id)->delete();
        return response()->json(['done']);
    }
}
//*-------------------- End Remove.---------------------------------------------
