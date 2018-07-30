<?php

namespace App\Http\Controllers;

use App\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{

//*-------------------- Resource list.------------------------------------------
     // *
     // * @return \Illuminate\Http\Response
    public function topmed()
    {
        return view('/appointments/index');
    }
//*-------------------- End resource list.--------------------------------------


//*-------------------- Pagination.---------------------------------------------
     // *
     // * @return \Illuminate\Http\Response
    public function index()
    {
        $appointments = Appointment::latest()->paginate(5);
        return response()->json($appointments);
    }
//*-------------------- End pagination.-----------------------------------------



//*-------------------- Storage.------------------------------------------------
     // *
     // * @param  \Illuminate\Http\Request  $request
     // * @return \Illuminate\Http\Response
    public function store(Request $request)
    {
        $appointment = Appointment::create($request->except('_token'));
        return response()->json($appointment);
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
        $appointment = Appointment::find($id)->update($request->all());
        return response()->json($appointment);
    }
//*-------------------- End Update.---------------------------------------------


//*-------------------- Remove from Storage.------------------------------------
     // *
     // * @param  int  $id
     // * @return \Illuminate\Http\Response
    public function destroy($id)
    {
        Appointment::find($id)->delete();
        return response()->json(['done']);
    }
}
//*-------------------- End Remove.---------------------------------------------
