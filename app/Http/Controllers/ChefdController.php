<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ChefD;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
use Auth;

class ChefdController extends Controller
{
    //
    public function Index(){
        return view('chefd.chefd_login');
    }
    public function Setting(){
        return view('chefd.chefd_setting');
    }

    public function ChefdDashboard(){
        return view(' chefd.index');


    }
    public function Editprofile(Request $request)
    {
        //dd($request->all());
        if($request->isMethod('post')){
            $data =$request->all();
            if(Hash::check($data['current_pwd'],Auth::guard('chefd')
            ->user()->password)){
                if($data['new_pwd']==$data['confirm_pwd']){
                    Chefd::where('id',Auth::guard('chefd')->user()->id)->update
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
        return view('chefd.chefd_setting');


    }

    public function Edit(Request $request)
    {
        //dd($request->all());
        if($request->isMethod('post')){
            $data =$request->all();

            // Update the name field
            ChefD::where('id', Auth::guard('chefd')->user()->id)->update([
                'name' => $data['name'],
                'family' => $data['family'],
            'numtlf' => $data['numtlf'],
            'email' =>$data['email'],
            'birthday' => $data['birthday'],



            ]);return redirect()->back()->with('succes_message',
            'profile update succesfuly');

                }


        return view('chefd.chefd_setting');}



    public function ChefdLogin(Request $request){
//       dd($request->all());
       $check=$request->all();
       $user = Chefd::where('email', $check['email'])->first();

       if ($user && Hash::check($check['password'], $user->password)) {
       if ($user->stauts == 0) {
        return back()->with('error', 'Your account is not approved yet.');
    }
       if(Auth::guard('chefd')->attempt([
           'email'=> $check['email'],
           'password'=> $check['password'],
       ])){
            return redirect()->route('chefd.dashboard')->with
            ('error','chefd Login Successfully');
       }}
           return back()->with('error','Invalid email or
           password');

    }
    public function ChefdLogout(){
        Auth::guard('chefd')->logout();
        return redirect()->route('Chefd_login_form')->with
        ('error','Chefd Logout Successfully');
    }
    public function ChefdRegister(){
        return view('chefd.chefd_register');

    }
    public function ChefdRegisterCreate(Request $request){
        // dd($request->all());
        Chefd::insert([
         'name'=>$request->name,
         'email'=>$request->email,
         'password'=>Hash::make($request->password),
         'Created_at'=> Carbon::now(),
        ]);
        return redirect()->route('Chefd_login_form')->with
        ('error','Chefd created Successfully');

     }
}
