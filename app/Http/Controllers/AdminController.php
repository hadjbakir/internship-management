<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Admin;
use App\Models\ChefD;
use App\Models\faculty;
use App\Models\dep;
use App\Models\Maitrestage;
use App\Models\entrp;



use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class AdminController extends Controller
{


    public function Index(){
        return view('admin.admin_login');
    }


    public function Setting(){
        return view('admin.admin_setting');
    }


    public function Showmaitre(){
        $entreprises=entrp ::latest()->paginate(5);
        $product = Maitrestage::latest()->paginate(4);

        return view('admin.admin_addmaitre', compact('product','entreprises'));
    }


    public function Showchef(){
        $deps=dep ::all();
        $products = ChefD::latest()->paginate(4);
       return view('admin.admin_addchef', compact('products','deps'));

    }



    public function destroy(ChefD $chefd)
{


    $chefd->delete();
    $products = ChefD ::all();
    return redirect()->back()->with(compact('products'))
        ->with('error', 'chefd deleted successfully');
}

public function destroymaitre(Maitrestage $maitrestage)
{


    $maitrestage->delete();
    $product = maitrestage ::all();
    return redirect()->back()->with(compact('product'))
        ->with('error', 'maitre deleted successfully');
}

public function destroyentrp(entrp $entrp)
{


    $entrp->delete();
    $entreprises = entrp ::all();
    return redirect()->back()->with(compact('entreprises'))
        ->with('error', 'entreprises deleted successfully');
}


    public function Addchefdep(Request $request){

        Chefd::insert([
            'name'=>$request->name,
            'email'=>$request->email,
            'family'=>$request->family,
            'birthday'=>$request->birthday,
            'sexe'=>$request->sexe,
            'email'=>$request->email,
            'numtlf'=>$request->numtlf,
            'dep_id'=>$request->dep_id,
            'password'=>Hash::make($request->password),

           ]);
           return redirect()->back();

        }

        public function Addmaitre(Request $request){


            Maitrestage::insert([
                'name'=>$request->name,
                'email'=>$request->email,
                'family'=>$request->family,
                'birthday'=>$request->birthday,
                'sexe'=>$request->sexe,
                'email'=>$request->email,
                'numtlf'=>$request->numtlf,
                'entrp_id'=>$request->entrp_id,
                'password'=>Hash::make($request->password),

               ]);
               return redirect()->back();

        }

        public function Addentreprise(Request $request){


            entrp::insert([
                'nomentrp'=>$request->nomentrp,
                'directeur'=>$request->directeur,
                'specialite'=>$request->specialite,
                'Adressentrp'=>$request->Adressentrp,
                'numtlf'=>$request->numtlf,


               ]);
               return redirect()->back();

        }

    public function Addfaculty(Request $request){

        faculty::insert([
            'nom'=>$request->nom,
            'university_id'=>$request->university_id,

            'Created_at'=> Carbon::now(),
           ]);
           return redirect()->route('admin.addchef')->with
           ('error',' faculty created Successfully');

    }

    public function Adddepartement(Request $request){

        dep::insert([
            'name'=>$request->name,
            'faculty_id'=>$request->faculty_id,

            'Created_at'=> Carbon::now(),
           ]);
           return redirect()->route('admin.addchef')->with
           ('error',' departement created Successfully');

    }



    public function Editprofile(Request $request)
    {
        //dd($request->all());
        if($request->isMethod('post')){
            $data =$request->all();
            if(Hash::check($data['current_pwd'],Auth::guard('admin')
            ->user()->password)){
                if($data['new_pwd']==$data['confirm_pwd']){
                    Admin::where('id',Auth::guard('admin')->user()->id)->update
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
        return view('admin.admin_setting');


    }
    public function Edit(Request $request)
    {
        //dd($request->all());
        if($request->isMethod('post')){
            $data =$request->all();


            // Update the name field
            Admin::where('id', Auth::guard('admin')->user()->id)->update([
                'name' => $data['name'],

            'email' =>$data['email'],


            ]);return redirect()->back()->with('succes_message',
            'prifile update succesfuly');

                }


        return view('admin.admin_setting');}


        public function update(Request $request)
        {
            // Get the input data from the request
            $data = $request->all();

            // Find the ChefD record by ID
            $chefd = ChefD::findOrFail($data['id']);
            $deps=dep::all();
            // Update the record with the new data
            $chefd->update([
                'name' => $data['name'],
                'family' => $data['family'],
                'email' => $data['email'],
                'birthday' => $data['birthday'],
                'numtlf' => $data['numtlf'],
                'sexe' => $data['sexe'],
                'password' => bcrypt($data['password']),
                'stauts' => $data['stauts'],
                'dep_id' => $data['dep_id'],

            ]);

            // Redirect back to the previous page with a success message
            return redirect()->route('admin.showchef',compact('deps'))->with('error', 'chefd updated successfully');
        }

        public function updatemaitre(Request $request)
        {
            // Get the input data from the request
            $data = $request->all();

            // Find the ChefD record by ID
            $maitrestage = Maitrestage::findOrFail($data['id']);
            $entrps=entrp::all();
            // Update the record with the new data
            $maitrestage->update([
                'name' => $data['name'],
                'family' => $data['family'],
                'email' => $data['email'],
                'birthday' => $data['birthday'],
                'numtlf' => $data['numtlf'],
                'sexe' => $data['sexe'],
                'password' => bcrypt($data['password']),
                'stauts' => $data['stauts'],
                'entrp_id' => $data['entrp_id'],

            ]);

            // Redirect back to the previous page with a success message
            return redirect()->route('admin.showmaitre',compact('entrps'))->with('error', 'Maitrestage updated successfully');
        }


        public function updatentrp(Request $request)
        {
            // Get the input data from the request
            $data = $request->all();

            // Find the ChefD record by ID
            $entrp = entrp::findOrFail($data['id']);

            // Update the record with the new data
            $entrp->update([
                'nomentrp' => $data['nomentrp'],
                'directeur' => $data['directeur'],
                'specialite' => $data['specialite'],
                'adressentrp' => $data['adressentrp'],
                'numtlf' => $data['numtlf'],

            ]);

            // Redirect back to the previous page with a success message
            return redirect()->route('admin.showmaitre')->with('error', 'entreprise updated successfully');
        }





        public function beforeupdate( $id )
        {
            $deps = dep ::all();
            $chefd =ChefD ::findOrFail($id);

            return view('admin.admin_editchef', compact('deps','chefd'));

        }

        public function beforeupdatem( $id )
        {
            $entrps = entrp ::all();
            $maitrestage =Maitrestage ::findOrFail($id);

            return view('admin.admin_editmaitre', compact('entrps','maitrestage'));

        }

        public function beforeupdatentrp( $id )
        {

            $entrp =entrp ::findOrFail($id);

            return view('admin.admin_editentrp', compact('entrp'));

        }



    public function Login(Request $request){
         $check=$request->all();
        if(Auth::guard('admin')->attempt([
            'email'=> $check['email'],
            'password'=> $check['password'],
        ])){
             return redirect()->route('admin.dashboard')->with
             ('error','Admin Login Successfully');
        }else{
            return back()->with('error','Invalid email or
            password');
        }
    }

    public function Dashboard(){
        return view('admin.index');
    }

    public function AdminLogout(){
        Auth::guard('admin')->logout();
        return redirect()->route('login_form')->with
        ('error','Admin Logout Successfully');
    }

    public function AdminRegister(){
        return view('admin.admin_register');

    }
    public function AdminRegisterCreate(Request $request){
       // dd($request->all());
       Admin::insert([
        'name'=>$request->name,
        'email'=>$request->email,
        'password'=>Hash::make($request->password),
        'Created_at'=> Carbon::now(),
       ]);
       return redirect()->route('login_form')->with
       ('error','Admin created Successfully');

    }



}
