<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etidiant;
use App\Models\dep;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

use Auth;
class EtidiantController extends Controller

{
    //
    public function Index(){
        return view('etidiant.etidiant_login');
    }

    public function Setting(){

        $deps = dep ::all();
        return view('etidiant.etidiant_setting',compact('deps'));
    }

    public function EtidiantDashboard(){
        return view(' etidiant.index');


    }
    public function Editprofile(Request $request)
    {
        //dd($request->all());
        if($request->isMethod('post')){
            $data =$request->all();
            if(Hash::check($data['current_pwd'],Auth::guard('etidiant')
            ->user()->password)){
                if($data['new_pwd']==$data['confirm_pwd']){
                    Etidiant::where('id',Auth::guard('etidiant')->user()->id)->update
                    (['password'=>bcrypt($data['new_pwd'])]);
                    return redirect()->back()->with('succes_message',
                    'passwords update succesfuly');

                }else{
                    return redirect()->back()->with('error_message',
                    'passwords not match');
                }

            }else{

                return redirect()->back()->with('error_message','current password
                is incorrect');
            }

        }
        return view('etidiant.etidiant_setting');}


        public function Edit(Request $request)
    {
        //dd($request->all());
        if($request->isMethod('post')){
            $data =$request->all();
            $deps = dep ::all();

            // Update the name field
            Etidiant::where('id', Auth::guard('etidiant')->user()->id)->update([
                'name' => $data['name'],
                'family' => $data['family'],

            'numtlf' => $data['numtlf'],
            'specialie' => $data['specialie'],
            'semestre' => $data['semestre'],
            'email' =>$data['email'],
            'birthday' => $data['birthday'],
            'diplome' => $data['diplome'],
            'dep_id' => $data['dep_id'],


            ]);return redirect()->back()->with('succes_message',
            'profile update succesfuly');

                }


        return view('etidiant.etidiant_setting',compact('deps'));}

       /*  public function edit(Request $request)
        {
            //dd($request->all());
            if($request->isMethod('post')){
                $data =$request->all();


                        Etidiant::where('id',Auth::guard('etidiant')->user()->id)->update
                        (['name'=>bcrypt($data['name'])]);
                        return redirect()->back()->with('succes_message',
                        'passwords update succesfuly');

                    }else{
                        return redirect()->back()->with('error_message',
                        'passwords not match');
                    }




            return view('admin.admin_setting');
            } */




    /* public function edit(Etidiant $etidiant)
    {

        $etidiant=etidiant ::all();
        $deps = dep ::all();
        return view('etidiant.etidiant_setting', compact('etidiant','deps'));
    }

    public function update(Request $request, Etidiant $etidiant)
    {
        $etidiant=etidiant ::all();
        $deps = dep ::all();
        $validatedData = $request->validate([
            'id' => 'required',
            'name' => 'required',
            'family' => 'required',
            'sexe' => 'required',
            'numtlf' => 'required',
            'specialie' => 'required',
            'semestre' => 'required',
            'email' => 'required',
            'birthday' => 'required',
            'diplome' => 'required',
            'dep_id' => 'required|exists:dep,id'
        ]);

        $etidiant->update($validatedData);

        return view('etidiant.etidiant_setting', compact('deps','etidiant'))->with('success', 'Faculty updated successfully.');
    } */



    public function EtidiantLogin(Request $request){
//       dd($request->all());
       $check=$request->all();
       if(Auth::guard('etidiant')->attempt([
           'email'=> $check['email'],
           'password'=> $check['password'],
       ])){
            return redirect()->route('etidiant.dashboard')->with
            ('error','etidiant Login Successfully');
       }else{
           return back()->with('error','Invalid email or
           password');
       }
    }
    public function EtidiantLogout(){
        Auth::guard('etidiant')->logout();
        return redirect()->route('Etidiant_login_form')->with
        ('error','Etidiant Logout Successfully');
    }
    public function EtidiantRegister(){
        return view('etidiant.etidiant_register');

    }
    public function EtidiantRegisterCreate(Request $request){
        // dd($request->all());
        Etidiant::insert([
         'name'=>$request->name,
         'email'=>$request->email,
         'password'=>Hash::make($request->password),
         'Created_at'=> Carbon::now(),
        ]);
        return redirect()->route('Etidiant_login_form')->with
        ('error','Etidiant created Successfully');

     }

}
