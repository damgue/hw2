<?php

use Illuminate\Routing\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class EquipeController extends Controller {

    public function AddDoctor(){
        $doctors = Doctor::all();
        return $doctors;
    }
    
    public function index(){
        //return view('service');
        $session_id = session('id');
        $user = User::find($session_id);
        if (!isset($user))
            return redirect('login');
        
        return view("equipe");
    }
}
?>

