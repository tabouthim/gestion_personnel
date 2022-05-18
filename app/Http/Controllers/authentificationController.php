<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\user;
use Hash;
use Session;

class authentificationController extends Controller
{
    public $timestamps = false;

    public function login()
    {

        return view("auth.login");
    }
    public function registration()
    {

        return view("auth.registration");
    }

    public function registerUser(request $request)
    {
            $request->validate([
                'nom' =>'required',
                'email'=>'required|email',
                'password'=>'required|min:8|max:16',
            ]);
            $user = new User();
            $user -> nom =$request->nom;
        $user -> email =$request->email;
        $user -> password =Hash::make($request->password);
        $res =$user->save();
            if($res){
                return back()->with('success','utilisateur enregistrer avec succes!!!!');
            }
            else{
                return back()->with('fail','utilisateur non enregistrer!!!');
            }
    }
    public function loginUser(request $request)
    {
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required|min:8|max:16',
        ]);
        $user = User::where('email','=',$request->email)->first();
        if($user){
            if(Hash::check($request->password,$user->password)){
                $request->session()->put('loginId',$user->id);
                return redirect('tableaudebord');

            }else{
                return back()-> with('fail','votre mot de passe est incorrect');

            }

        }else{
            return back()-> with('fail','votre adresse email est inconnue  !!!!');
        }
    }

    public function logout(){
        if(session::has('loginId')){
            session::pull('loginId');
            return redirect('login');
        }
    }


}
