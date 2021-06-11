<?php

use Illuminate\Routing\Controller;
use App\Models\User;
use Illuminate\Http\Request;
//use App\Models\Visit;

class VisitController extends Controller {

    public function ListDoctor(){
        $doctors = Doctor::all();
        return $doctors;
    }
    
    public function index(){
        //return view('service');
        $session_id = session('id');
        $user = User::find($session_id);
        if (!isset($user))
            return redirect('login');
        
        return view("prenota_visita");
    }

    public function PostPrenota(Request $request){
        $id_user = $request->session()->get('id');
        $utente = User::where('id', $id_user)->pluck('username')->first();
        echo $utente;   

        $medico = $request->medico;

        $data = strtotime($request->dato);
        $newformat = date('Y-m-d', $data);  

        echo $medico;
        echo $data;
        Visit::create([
            'paziente' => $utente,
            'medico' => $medico,
            'data_visita' => $newformat
        ]);
        
        return redirect('profile');
    }
}
?>

