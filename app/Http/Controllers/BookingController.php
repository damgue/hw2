<?php

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\User;


class BookingController extends Controller {
    public function AddBooking($q, Request $request){

        $service = Service::where('nome', $q)->get('nome')->first();
        $nome = $service['nome'];
        echo $nome;
        
        $user = $request->session()->get('id');
        //echo $user;        

        $controllo = Booking::where('id_utente', $user)->where('nome', $nome)->pluck('nome')->count();
        echo $controllo;

        if($user != null && $controllo <= 0){
        Booking::create([
            'id_utente' => $user,
            'nome' => $nome
        ]);
        }
    }
}
?>

