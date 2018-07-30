<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SpecialityCategory;
class SpecialityCategoryController extends Controller
{
  //*-------------------- Resource list.------------------------------------------
     // *
     // * @return \Illuminate\Http\Response
    public function topmedspecat()
    {
        return view('/specialitycategory/index');
    }
//*-------------------- End resource list.--------------------------------------


//*-------------------- Pagination.---------------------------------------------
     // *
     // * @return \Illuminate\Http\Response
    public function index()
    {
        $specialitycategories = SpecialityCategory::latest()->paginate(5);
        return response()->json($specialitycategories);
    }
//*-------------------- End pagination.-----------------------------------------



//*-------------------- Storage.------------------------------------------------
     // *
     // * @param  \Illuminate\Http\Request  $request
     // * @return \Illuminate\Http\Response
    public function store(Request $request)
    {
        $specialitycategory = SpecialityCategory::create($request->except('_token'));
        return response()->json($specialitycategory);
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
        $specialitycategory = SpecialityCategory::find($id)->update($request->all());
        return response()->json($specialitycategory);
    }
//*-------------------- End Update.---------------------------------------------


//*-------------------- Remove from Storage.------------------------------------
     // *
     // * @param  int  $id
     // * @return \Illuminate\Http\Response
    public function destroy($id)
    {
        SpecialityCategory::find($id)->delete();
        return response()->json(['done']);
    }
}
//*-------------------- End Remove.---------------------------------------------
