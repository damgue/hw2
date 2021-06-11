<?php

use Illuminate\Routing\Controller;
use App\Models\Service;
use App\Models\User;
use App\Models\Booking;


class ServiceController extends Controller {
    public function AddService() {
        $services = Service::all();
        return $services;
    }

    public function Search($q){
        $services = Service::where('nome', $q)->get();
        return $services;
    }

    public function index(){
        //return view('service');
        $session_id = session('id');
        $user = User::find($session_id);
        if (!isset($user))
            return redirect('login');
        
        return view("service");
    }
}
?>

