<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\university;

class UniversityController extends Controller
{

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $university = university ::all();
    return view('admin.admin_univ', compact('university')); /*he return the data to a file called inex.blade.php
    which is in a folder called view*/
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {//it takes us to the view of creation
    $university = university ::all();
    return view('admin.admin_univ', compact('university')); /*he return the data to a file called create.blade.php*/

  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store(Request $request)
  {//the controller  makes a new element from the data of view
    $universities = university ::all();
    $request ->validate([
        'name => required',
        'wilaya => required',
    ]);//those data that came by request are an array need,the validate function check if the required fields are full
    $university = university ::create($request ->all());
    $university = university ::all();//we create an instance of the model university withh all datas sended to the view by the request
    return view('admin.admin_univ', compact('university'))//he return as to the page index inside university folder
    ->with('sucess','product addedd successfully');//we return a message called success his value is successfuly

}
   public function show($id)
   {
    return view('university.show',compact('university'))//he return as to the page index inside university folder
    ->with('sucess','university addedd successfully');//we return a message called success his value is successfuly

   }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {//edit the view in where we edit the data
    $university = university::find($id);
    return view('university.edit',compact('university'));
}

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update(Request $request, $id)
  {//return the data  fot the sever to let the server edit them
    //the same work us store function
    //the controller  makes a new element from the data of view
    $request ->validate([
        'name => required',
        'wilaya => required',
    ]);//those data that came by request are an array need,the validate function check if the required fields are full
    $university = University::find($id);
    $university->name = $request->name;
    $university->wilaya = $request->wilaya;
    $university->save();
    $university = university ::all();//we update the model university withh all datas sended to the view by the request
    return view('admin.admin_univ',compact('university'))//he return as to the page index inside university folder
    ->with('sucess','product updated successfully');//we return a message called success his value is successfuly
  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
    }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
{
    $university = university ::all();

    $universities = University::findOrFail($id);
    $universities->delete();
    $university = university ::all();
    return view('admin.admin_univ',compact('university'))
        ->with('sucess', 'University deleted successfully');
}

}

?>
