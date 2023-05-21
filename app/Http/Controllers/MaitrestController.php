<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Maitrestage;
use App\Models\Demande;
use App\Models\Seance;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Auth;

class MaitrestController extends Controller
{
    //
    public function Index(){
        return view('maitrest.maitrest_login');
    }
    public function Setting(){
        return view('maitrest.maitrest_setting');
    }

    public function MaitrestdDashboard(){
        return view(' maitrest.index');


    }

    public function showcalender(Demande $demande){
        $seances = Seance::where('demande_id', $demande->id)->get();
        return view('calender.calender', compact('seances'));



    }

    public function addcalender(Request $request)
    {
        $validatedData = $request->validate([
            'demande_id' => 'required|exists:demande,id',
            'date' => 'required',
            'hentre' => 'required',
            'hsorti' => 'required',
            'observation' => 'required'

        ]);

        $seances = Seance::create($validatedData);

        return redirect()->route('calender.show',compact('seances'))->with('success', 'seance created successfully.');
    }

    public function destroycalender(Seance $seance)
    {
        $seance->delete();

        return redirect()->back()->with('succes_message', 'seance deleted successfully.');
    }

    public function Editprofile(Request $request)
    {
        //dd($request->all());
        if($request->isMethod('post')){
            $data =$request->all();
            if(Hash::check($data['current_pwd'],Auth::guard('maitrestage')
            ->user()->password)){
                if($data['new_pwd']==$data['confirm_pwd']){
                    maitrestage::where('id',Auth::guard('maitrestage')->user()->id)->update
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
        return view('maitrest.maitrest_setting');


    }
    public function MaitrestLogin(Request $request){
//       dd($request->all());
       $check=$request->all();
       if(Auth::guard('maitrestage')->attempt([
           'email'=> $check['email'],
           'password'=> $check['password'],
       ])){
            return redirect()->route('maitrest.dashboard')->with
            ('error','maitrest Login Successfully');
       }else{
           return back()->with('error','Invalid email or
           password');
       }
    }
    public function MaitrestLogout(){
        Auth::guard('maitrestage')->logout();
        return redirect()->route('Maitrest_login_form')->with
        ('error','maitrest Logout Successfully');
    }
    public function MaitrestRegister(){
        return view('maitrest.maitrest_register');

    }
    public function MaitrestRegisterCreate(Request $request){
        // dd($request->all());
        Maitrestage::insert([
         'entrp_id'=>$request->entrp_id,
         'name'=>$request->name,
         'email'=>$request->email,
         'password'=>Hash::make($request->password),
         'Created_at'=> Carbon::now(),
        ]);
        return redirect()->route('Maitrest_login_form')->with
        ('error','maitrest created Successfully');

     }

     public function MaitrestRegisterCreatefmet(Request $request){
        // dd($request->all());
        Maitrestage::insert([
         'entrp_id'=>$request->entrp_id,
         'name'=>$request->name,
         'email'=>$request->email,
         'password'=>Hash::make($request->password),
         'Created_at'=> Carbon::now(),
        ]);
        return redirect()->back()->with
        ('error','maitrest created Successfully');

     }

}
