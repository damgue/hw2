<?php

use Illuminate\Routing\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller {

    public function UpdateProfileBooking(Request $request){
        
        $user = $request->session()->get('id');

        $servizi_prenotati = Booking::where('id_utente', $user)->get()->toJson();
        
        return $servizi_prenotati;
        
    }

    public function DeleteBooking($q){
        $da_eliminare = Booking::where('id_prenotazione', $q)->delete();
    }

    public function UpdateProfileVisit(Request $request){

        $id_user = $request->session()->get('id');
        $utente = User::where('id', $id_user)->pluck('username')->first();
        //echo $utente; 

        $visite = Visit::where('paziente', $utente)->get();
        return $visite;
    }

    public function index(){
        //return view('service');
        $session_id = session('id');
        $user = User::find($session_id);
        if (!isset($user))
            return redirect('login');
        
        return view("profile");
    }
}
?>

