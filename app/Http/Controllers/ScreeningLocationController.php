<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ScreeningLocation;
class ScreeningLocationController extends Controller
{
  //*-------------------- Resource list.------------------------------------------
     // *
     // * @return \Illuminate\Http\Response
    public function topmedscreen()
    {
        return view('/screeninglocation/index');
    }
//*-------------------- End resource list.--------------------------------------


//*-------------------- Pagination.---------------------------------------------
     // *
     // * @return \Illuminate\Http\Response
    public function index()
    {
        $screeninglocations = ScreeningLocation::latest()->paginate(5);
        return response()->json($screeninglocations);
    }
//*-------------------- End pagination.-----------------------------------------



//*-------------------- Storage.------------------------------------------------
     // *
     // * @param  \Illuminate\Http\Request  $request
     // * @return \Illuminate\Http\Response
    public function store(Request $request)
    {
        $screeninglocation = ScreeningLocation::create($request->except('_token'));
        return response()->json($screeninglocation);
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
        $screeninglocation = ScreeningLocation::find($id)->update($request->all());
        return response()->json($screeninglocation);
    }
//*-------------------- End Update.---------------------------------------------


//*-------------------- Remove from Storage.------------------------------------
     // *
     // * @param  int  $id
     // * @return \Illuminate\Http\Response
    public function destroy($id)
    {
        ScreeningLocation::find($id)->delete();
        return response()->json(['done']);
    }
}
//*-------------------- End Remove.---------------------------------------------

