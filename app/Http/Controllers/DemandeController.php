<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Models\Demande;
use App\Models\Etidiant;

use App\Mail\HelloMail;
use App\Models\Maitrestage;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;



class DemandeController extends Controller
{

        // public function index()
        // {
        //     $demande = Demande::all();

        //     return view('demande.index', compact('demande'));
        // }
        // public function indexMaitrestage()
        // {
        //     $demande = Demande::where('maitrestage_id', '2')->get();

        //     return view('demande.indexMaitrestage', compact('demande'));
        // }
        // public function indexEtidiants()
        // {
        //     $demande = Demande::where('etidiants_id', '1')->get();

        //     return view('demande.indexEtidiants', compact('demande'));
        // }


        public function index()
        {





                // get the demandes for the logged-in etidiant
                $demande = Demande::where('etidiants_id', Auth::guard('etidiant')->user()->id)->get();
                return view('demande.index', compact('demande'));

        }

        public function indexChefdep(){
            $etidiantIds = Etidiant::where('dep_id', Auth::guard('chefd')->user()->dep_id)->
            pluck('id')->toArray();


            $demande = Demande::whereIn('etidiants_id', $etidiantIds)
            ->where('depacp', 'notyet')
            ->get();
            return view('demande.indexChefdep', compact('demande'));
        }

        public function indexMaitrestage(){
            $demande = Demande::where('maitrestage_id', Auth::guard('maitrestage')->user()->id)
                ->where('depacp', 'yes')
                ->get();
                $demandenoacp = Demande::where('maitrestage_id', Auth::guard('maitrestage')->user()->id)
                ->where('depacp', 'no')
                ->get();
                return view('demande.indexMaitrestage', compact('demande'));
        }


        public function create()
        {
            $etidiants = Etidiant ::all();
            $maitres = Maitrestage ::all();
            $etidiantid=Auth::guard('etidiant')->user()->id;

            if (Auth::guard('etidiant')->check()) {
                // get the demandes for the logged-in etidiant
                $demande = Demande::where('etidiants_id',
                Auth::guard('etidiant')->user()->id)->get();}

                return view('demande.create',
             compact('etidiants','maitres','etidiantid','demande'));
        }

        public function store(Request $request)
        {
            $validatedData = $request->validate([
                'stageacp' => 'required',
                'depacp' => 'required',
                'etidiants_id' => 'required|exists:etidiants,id',
                'maitrestage_id' => 'required|exists:maitrestage,id',
                'dateinsc' => 'required',
                'diplome' => 'required',
                'dure' => 'required',
                'period' => 'required',
                'motif' => 'required',
                'theme' => 'required'
            ]);

            $demande = Demande::create($validatedData);

            return redirect()->route('demande.index')->with('success', 'demande created successfully.');
        }

        public function show(Demande $demande)
        {
            return view('demande.show', compact('demande'));
        }

        public function ongoing()
        {

            $today = date('Y-m-d');

    $demande = Demande::where('maitrestage_id', Auth::guard('maitrestage')->user()->id)
        ->where('depacp', 'yes')
        ->whereDate('dateinsc', '<=', $today)
        ->whereDate('datefin', '>=', $today)
        ->get();

    return view('demande.ongoing', compact('demande'));
        }

        public function finich()
        {
            $today = date('Y-m-d');

    $demande = Demande::where('maitrestage_id', Auth::guard('maitrestage')->user()->id)
        ->where('depacp', 'yes')
        ->whereDate('datefin', '<', $today)
        ->get();
                return view('demande.finich', compact('demande'));
        }

        public function edit(Demande $demande)
        {
            $etidiants = Etidiant ::all();
            $maitres = Maitrestage ::all();
            // $userRole = auth()->user()->role;

            return view('demande.edit', compact('etidiants','demande','maitres'));
        }

        public function editChefd($id)
        {

            // $userRole = auth()->user()->role;
            $demande = Demande::find($id);
            return view('demande.editChefd', compact('demande'));
        }

        public function editMaitrestage($id)
        {
            $demande = Demande::find($id);

            // $userRole = auth()->user()->role;

            return view('demande.editMaitrestage', compact('demande'));
        }

        public function update(Request $request, Demande $demande)
        {
            $etidiants = Etidiant ::all();
            $maitres = Maitrestage ::all();
            $validatedData = $request->validate([
                'stageacp' ,
                'depacp' ,
                'etidiants_id' => 'required|exists:etidiants,id',
                'maitrestage_id' => 'required|exists:maitrestage,id',
                'dateinsc',
                'diplome' ,
                'period',
                'motif' ,
                'theme'
            ]);


            $demande->update($validatedData);

            return redirect()->route('demande.index', compact('demande','maitres'))->with('success', 'demande updated successfully.');
        }

        public function updatestageacp(Request $request)
        {
            // Get the input data from the request

            $data = $request->all();
            $etidiants = Etidiant ::all();
            $maitres = Maitrestage ::all();

            // Find the ChefD record by ID
            $demande = Demande::findOrFail($data['id']);
            // Update the record with the new data
            $demande->update([
                'stageacp' => $data['stageacp'],
                'depacp' => $data['depacp'],
                'etidiants_id' => $data['etidiants_id'],
                'maitrestage_id' => $data['maitrestage_id'],
                'dateinsc' => $data['dateinsc'],
                'datefin' => $data['datefin'],
                'diplome' => $data['diplome'],
                'period' => $data['period'],
                'motif' => $data['motif'],
                'theme' => $data['theme'],

            ]);
            return redirect()->route('demande.index',
            compact('demande','maitres','etidiants'))->with('success', 'demande updated successfully.');
        }

        public function updatestageacpchefd(Request $request)
        {
            // Get the input data from the request

            $data = $request->all();


            // Find the ChefD record by ID
            $demande = Demande::findOrFail($data['id']);
            // Update the record with the new data
            $demande->update([

                'stageacp' => $data['stageacp'],
                'depacp' => $data['depacp'],
                'etidiants_id' => $data['etidiants_id'],
                'maitrestage_id' => $data['maitrestage_id'],
                'dateinsc' => $data['dateinsc'],
                'datefin' => $data['datefin'],
                'diplome' => $data['diplome'],
                'period' => $data['period'],
                'motif' => $data['motif'],
                'theme' => $data['theme'],

 ]);

 if ($request->depacp == 'yes') {
    $maitreStage = Maitrestage::findOrFail($request->maitrestage_id);

    if ($maitreStage->stauts == 0) {
        $maitreStage->stauts = 1;
        $password=Str::random(8);
        $name=$maitreStage->name;
        Mail::to($maitreStage->email)->send(new HelloMail($password,$name));
        $maitreStage->password =Hash::make(Str::random(8));
        $maitreStage->save();





    }
}
            return redirect()->route('demande.indexChefdep',
            compact('demande'))->with('succes', 'demande updated successfully.');
        }

        public function updatestageacpmaitre(Request $request)
        {
            // Get the input data from the request

            $data = $request->all();
            // Find the ChefD record by ID
            $demande = Demande::findOrFail($data['id']);
            // Update the record with the new data
            $demande->update([
                'stageacp' => $data['stageacp'],
                'depacp' => $data['depacp'],
                'etidiants_id' => $data['etidiants_id'],
                'maitrestage_id' => $data['maitrestage_id'],
                'dateinsc' => $data['dateinsc'],
                'datefin' => $data['datefin'],
                'diplome' => $data['diplome'],
                'period' => $data['period'],
                'motif' => $data['motif'],
                'theme' => $data['theme'],

            ]);
            return redirect()->route('demande.indexMaitrestage',
            compact('demande'))->with('success', 'demande updated successfully.');
        }


        public function destroy(Demande $demande)
        {
            $demande->delete();

            return redirect()->route('demande.index')->with('success', 'demande deleted successfully.');
        }
        public function createfromoffres($maitrestage_id)
        {

            return view('demande.createfromoffres', compact( 'maitrestage_id'));
        }
       /*  public function createatte($id)
        {

            return view('demande.createatte', compact( 'id'));
        }*/

        public function createatte($id)
{
    // Retrieve the demande with the given id
    $demande = Demande::find($id);

    // Retrieve the etidiant and maitrestages with the same ids as the demande's etidiant_id and maitrestages_id
    $etidiant = Etidiant::find($demande->etidiants_id);
    $maitrestage = Maitrestage::find($demande->maitrestage_id);

    // Pass the data to the view
    return view('demande.createatte', compact('etidiant','demande', 'maitrestage'));
}
    }



?>
