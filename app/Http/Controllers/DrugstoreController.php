<?php

use Illuminate\Routing\Controller;
use App\Models\User;

class DrugstoreController extends Controller {

    public function index(){
        $session_id = session('id');
        $user = User::find($session_id);
        if (!isset($user))
            return redirect('login');
        
        return view("drugstore");
    }

    public function search($q){
        $curl = curl_init(); 
        curl_setopt($curl, CURLOPT_URL,"https://api.fda.gov/drug/event.json?search=patient.drug.drugindication=".$q);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); 
        $result = curl_exec($curl);
        curl_close($curl);
        return $result;
    }

}
?>

