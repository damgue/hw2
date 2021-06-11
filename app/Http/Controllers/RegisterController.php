<?php

use Illuminate\Routing\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller{

    protected function create(){
        
        $request = request();
        $nome_inserito = $request->username;
        
        $username = User::where('username', request('username'))->first();
        $lun_pw = strlen($request->password);

        /*$old_nome = Request::old('nome');
        $old_cognome = Request::old('cognome');
        $old_eta = Request::old('eta');
        $old_username = Request::old('username');*/
        
        if(isset($username)){
            $errore_username = "";
            return view('register')
                ->with('errore_username', $errore_username);
                /*->with('old_nome', $old_nome)
                ->with('old_cognome', $old_cognome)
                ->with('old_eta', $old_eta)
                ->with('old_username', $old_username);*/
        }
            else{
                if($lun_pw<6){
                    $errore_password = "";
                    return view('register')
                    ->with('errore_password', $errore_password);
                    /*->with('old_nome', $old_nome)
                    ->with('old_cognome', $old_cognome)
                    ->with('old_eta', $old_eta)
                    ->with('old_username', $old_username);*/
                } else {
                        $newUser = User::create([
                        'nome' => $request['nome'],
                        'cognome' => $request['cognome'],
                        'eta' => $request['eta'],
                        'username' => $request['username'],
                        'password' => Hash::make($request['password'])
                        ]);
                        
                        if ($newUser) {
                            Session::put('id', $newUser->id);
                            return redirect('home');
                        } else {
                            return redirect('register')->withInput();
                        }
                    }
            }
    }

    public function index() {
        return view('register');
    } 

}

?>