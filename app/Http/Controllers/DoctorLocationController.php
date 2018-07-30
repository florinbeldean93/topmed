<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DoctorLocation;

class DoctorLocationController extends Controller
{
//*-------------------- Resource list.------------------------------------------
     // *
     // * @return \Illuminate\Http\Response
    public function topmeddocloc()
    {
        return view('/doctorlocation/index');
    }
//*-------------------- End resource list.--------------------------------------




//*-------------------- Pagination.---------------------------------------------
     // *
     // * @return \Illuminate\Http\Response
    public function index()
    {
        $doctorlocations = DoctorLocation::latest()->paginate(5);
        return response()->json($doctorlocations);
    }
//*-------------------- End pagination.-----------------------------------------



//*-------------------- Storage.------------------------------------------------
     // *
     // * @param  \Illuminate\Http\Request  $request
     // * @return \Illuminate\Http\Response
    public function store(Request $request)
    {
        $doctorlocation = DoctorLocation::create($request->except('_token'));
        return response()->json($doctorlocation);
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
        $doctorlocation = DoctorLocation::find($id)->update($request->all());
        return response()->json($doctorlocation);
    }
//*-------------------- End Update.---------------------------------------------


//*-------------------- Remove from Storage.------------------------------------
     // *
     // * @param  int  $id
     // * @return \Illuminate\Http\Response
    public function destroy($id)
    {
        DoctorLocation::find($id)->delete();
        return response()->json(['done']);
    }
}
//*-------------------- End Remove.---------------------------------------------
