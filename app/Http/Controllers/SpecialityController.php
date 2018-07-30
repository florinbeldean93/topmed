<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Speciality;

class SpecialityController extends Controller
{
  //*-------------------- Resource list.------------------------------------------
     // *
     // * @return \Illuminate\Http\Response
    public function topmedspe()
    {
        return view('/speciality/index');
    }
//*-------------------- End resource list.--------------------------------------


//*-------------------- Pagination.---------------------------------------------
     // *
     // * @return \Illuminate\Http\Response
    public function index()
    {
        $specialities = Speciality::latest()->paginate(5);
        return response()->json($specialities);
    }
//*-------------------- End pagination.-----------------------------------------



//*-------------------- Storage.------------------------------------------------
     // *
     // * @param  \Illuminate\Http\Request  $request
     // * @return \Illuminate\Http\Response
    public function store(Request $request)
    {
        $speciality = Speciality::create($request->except('_token'));
        return response()->json($speciality);
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
        $speciality = Speciality::find($id)->update($request->all());
        return response()->json($speciality);
    }
//*-------------------- End Update.---------------------------------------------


//*-------------------- Remove from Storage.------------------------------------
     // *
     // * @param  int  $id
     // * @return \Illuminate\Http\Response
    public function destroy($id)
    {
        Speciality::find($id)->delete();
        return response()->json(['done']);
    }
}
//*-------------------- End Remove.---------------------------------------------
