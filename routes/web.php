<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EtidiantController;
use App\Http\Controllers\ChefdController;
use App\Http\Controllers\MaitrestController;
use App\Http\Controllers\SeanceController;
use App\Http\Controllers\Controller;

use App\Mail\HelloMail;


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::put('/university/chefstore', [App\Http\Controllers\UniversityController::class, 'chefedit'])->name('university.chefedit');
Route::get('/demande/maitrestage', [App\Http\Controllers\DemandeController::class, 'indexMaitrestage'])->name('demande.indexMaitrestage');
Route::get('/demande/chefd', [App\Http\Controllers\DemandeController::class, 'indexChefdep'])->name('demande.indexChefdep');
Route::get('/demande/createfromoffres/{maitrestage_id}', [App\Http\Controllers\DemandeController::class, 'createfromoffres'])->name('demande.createfromoffres');
Route::get('/demande/createatte/{demande_id}', [App\Http\Controllers\DemandeController::class, 'createatte'])->name('demande.createatte');
Route::get('/demande/edit', [App\Http\Controllers\DemandeController::class, 'edit'])->name('demande.edit');
Route::get('/demande/editchefd/{demande_id}', [App\Http\Controllers\DemandeController::class, 'editChefd'])->name('demande.editchefd');
Route::get('/demande/editmaitrestage/{demande_id}', [App\Http\Controllers\DemandeController::class, 'editMaitrestage'])->name('demande.editmaitrestage');
Route::get('/offres/indexetidiant', [App\Http\Controllers\OffresController::class, 'indexetidiant'])->name('offres.indexetidiant');


Route::get('/demande/ongoing', [App\Http\Controllers\DemandeController::class, 'ongoing'])->name('demande.ongoing');
Route::get('/demande/finich', [App\Http\Controllers\DemandeController::class, 'finich'])->name('demande.finich');

Route::get('/new/calender/{demande}', [App\Http\Controllers\MaitrestController::class, 'showcalender'])->name('calender.show');
Route::POST('/new/calender/owner', [App\Http\Controllers\MaitrestController::class, 'addcalender'])->name('calender.add');
Route::delete('/destroye/{seance}',[MaitrestController::class,'destroycalender'] )->
name('calender.destroy');
// Route::POST('/addentcalender/owner',[SeanceController::class,'store'] )->
// name('seance.store');

Route::get('/mail',[App\Http\Controllers\DemandeController::class, 'updatestageacpchefd'])->name('mail.HelloMail');


Route::post('/register/owner',[MaitrestController::class,'MaitrestRegisterCreatefmet'] )->
    name('maitrestfmet.register.create');


Route::POST('/editdemchefd',['App\Http\Controllers\DemandeController','updatestageacpchefd'] )->
name('demande.updatestageacpchefd');

Route::POST('/editdemmaitre',['App\Http\Controllers\DemandeController','updatestageacpmaitre'] )->
name('demande.updatestageacpmaitre');

/*----------admin route---------------     */

Route::prefix('admin')->group(function (){

Route::get('/login',[AdminController::class,'Index'] )->
name('login_form');

Route::post('/login/owner',[AdminController::class,'Login'] )->
name('admin.login');

Route::get('/dashboard',[AdminController::class,'Dashboard'] )->
name('admin.dashboard')->middleware('admin');

Route::get('/logout',[AdminController::class,'AdminLogout'] )->
name('admin.logout')->middleware('admin');

Route::get('/register',[AdminController::class,'AdminRegister'] )->
name('admin.register');

Route::post('/register/owner',[AdminController::class,'AdminRegisterCreate'] )->
name('admin.register.create');


Route::match(['get','post'],'/setting',[AdminController::class,'Setting'] )->
name('admin.setting');



Route::POST('/editprofile',[AdminController::class,'Editprofile'] )->
name('admin.editp');





Route::get('/addchef',[AdminController::class,'Showchef'] )->
name('admin.showchef');

Route::post('/addchefdep/owner',[AdminController::class,'Addchefdep'] )->
name('admin.addchefdep');


Route::post('/addfaculty/owner',[AdminController::class,'Addfaculty'] )->
name('admin.addfaculty');

Route::post('/adddepartement/owner',[AdminController::class,'Adddepartement'] )->
name('admin.adddepartement');


Route::get('/addmaitre',[AdminController::class,'Showmaitre'] )->
name('admin.showmaitre');

Route::post('/addmaitre/owner',[AdminController::class,'Addmaitre'] )->
name('admin.addmaitre');

Route::post('/addentreprise/owner',[AdminController::class,'Addentreprise'] )->
name('admin.addentreprise');





Route::POST('/edit',[AdminController::class,'Edit'] )->
name('admin.edit');


Route::POST('/edit',[AdminController::class,'update'] )->
name('admin.update');

Route::get('/editchef/{id}', [AdminController::class, 'beforeupdate'])
    ->name('admin.beforeupdate');


Route::POST('/editmaitre',[AdminController::class,'updatemaitre'] )->
            name('admin.updatemaitre');

Route::get('/editmaitre/{id}', [AdminController::class, 'beforeupdatem'])
                ->name('admin.beforeupdatem');


Route::POST('/editentrp',[AdminController::class,'updatentrp'] )->
                name('admin.updatentrp');

 Route::POST('/editen',['App\Http\Controllers\DemandeController','updatestageacp'] )->
                name('demande.updatestageacp');

 Route::POST('/editeoof',['App\Http\Controllers\OffresController','updateoffres'] )->
                name('offres.updateoffres');






Route::get('/editentrp/{id}', [AdminController::class, 'beforeupdatentrp'])
                ->name('admin.beforeupdatentrp');




Route::delete('/destroy/{chefd}',[AdminController::class,'destroy'] )->
name('admin.destroy');

Route::delete('/destroys/{maitrestage}',[AdminController::class,'destroymaitre'] )->
name('admin.destroymaitre');

Route::delete('/destroye/{entrp}',[AdminController::class,'destroyentrp'] )->
name('admin.destroyentrp');


});


/*-------------------------------------------- */



/*----------etidiant route---------------     */

Route::prefix('etidiant')->group(function (){

    Route::get('/login',[EtidiantController::class,'Index'] )->
    name('Etidiant_login_form');

    Route::get('/dashboard',[EtidiantController::class,'EtidiantDashboard'] )->
    name('etidiant.dashboard')->middleware('etidiant');

    Route::post('/login/owner',[EtidiantController::class,'EtidiantLogin'] )->
    name('etidiant.login');



    Route::get('/logout',[EtidiantController::class,'EtidiantLogout'] )->
    name('etidiant.logout')->middleware('etidiant');

    Route::get('/register',[EtidiantController::class,'EtidiantRegister'] )->
    name('etidiant.register');

    Route::post('/register/owner',[EtidiantController::class,'EtidiantRegisterCreate'] )->
    name('etidiant.register.create');

    Route::match(['get','post'],'/setting',[EtidiantController::class,'Setting'] )->
    name('etidiant.setting');

    Route::POST('/editprofile',[EtidiantController::class,'Editprofile'] )->
name('etidiant.editp');

Route::POST('/edit',[EtidiantController::class,'Edit'] )->
name('etidiant.edit');

/* Route::POST('/editprofile',[EtidiantController::class,'update'] )->
name('etidiant.update'); */




});



    /*-------------------------------------------- */


    /*----------chefd route---------------     */

Route::prefix('chefd')->group(function (){

    Route::get('/login',[ChefdController::class,'Index'] )->
    name('Chefd_login_form');

    Route::get('/dashboard',[ChefdController::class,'ChefdDashboard'] )->
    name('chefd.dashboard')->middleware('chefd');

    Route::post('/login/owner',[ChefdController::class,'ChefdLogin'] )->
    name('chefd.login');



    Route::get('/logout',[ChefdController::class,'ChefdLogout'] )->
    name('chefd.logout')->middleware('chefd');

    Route::get('/register',[ChefdController::class,'ChefdRegister'] )->
    name('chefd.register');

    Route::post('/register/owner',[ChefdController::class,'ChefdRegisterCreate'] )->
    name('chefd.register.create');

    Route::match(['get','post'],'/setting',[ChefdController::class,'Setting'] )->
    name('chefd.setting');

    Route::POST('/editprofile',[ChefdController::class,'Editprofile'] )->
name('chefd.editp');

Route::POST('/edit',[ChefdController::class,'Edit'] )->
name('chefd.edit');




});




    /*-------------------------------------------- */


   /*----------maitrest route---------------     */

Route::prefix('maitrest')->group(function (){

    Route::get('/login',[MaitrestController::class,'Index'] )->
    name('Maitrest_login_form');

    Route::get('/dashboard',[MaitrestController::class,'MaitrestdDashboard'] )->
    name('maitrest.dashboard')->middleware('maitrest');

    Route::post('/login/owner',[MaitrestController::class,'MaitrestLogin'] )->
    name('maitrest.login');



    Route::get('/logout',[MaitrestController::class,'MaitrestLogout'] )->
    name('maitrest.logout')->middleware('maitrest');

    Route::get('/register',[MaitrestController::class,'MaitrestRegister'] )->
    name('maitrest.register');

    Route::post('/register/owner',[MaitrestController::class,'MaitrestRegisterCreate'] )->
    name('maitrest.register.create');

    Route::match(['get','post'],'/setting',[MaitrestController::class,'Setting'] )->
    name('maitrest.setting');

    Route::POST('/editprofile',[MaitrestController::class,'Editprofile'] )->
name('maitrest.editp');


});




    /*-------------------------------------------- */


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('demande', 'App\Http\Controllers\DemandeController');
Route::resource('stagiaire', 'App\Http\Controllers\StagiaireController');
Route::resource('chefdep', 'App\Http\Controllers\ChefdepController');
Route::resource('maitrestage', 'App\Http\Controllers\maitrestageController');
Route::resource('fichenotation', 'App\Http\Controllers\FichenotationController');
Route::resource('fichepointage', 'App\Http\Controllers\FichepointageController');
Route::resource('dep', 'App\Http\Controllers\DepController');
Route::resource('entrepriseentrp', 'App\Http\Controllers\EntrepriseentrpController');
Route::resource('faculty', 'App\Http\Controllers\FacultyController');
Route::resource('offres', 'App\Http\Controllers\OffresController');
Route::resource('university', 'App\Http\Controllers\UniversityController');


require __DIR__.'/auth.php';
