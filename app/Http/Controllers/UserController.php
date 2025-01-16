<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;



class UserController extends Controller
{
    public function Reg(Request $req){
        $req->validate([
            'name'                               => 'required|min:5|unique:user,name',
            'password'                           => ['required', 'confirmed', Password::min(8)
                                                                            ->mixedCase()
                                                                            ->letters()
                                                                            ->numbers()
                                                                            ],
            'password_confirmation'              => 'required',
            'bio'                                => 'required|min:10'
        ],[
            'name.required'                      => 'Kötelező megadni!',
            'name.min'                           => 'Minimum 5 karaktert kell megadni!',
            'name.unique'                        => 'Ez a név már foglalt!',
            'password.required'                  => 'Jelszót kötelező megadni!',
            'password.confirmed'                 => 'A két jelszó nem egyezik!',
            'password_confirmation.required'     => 'Jelszót kötelező mégegyszer megadni!',
            'password.min'                       => 'Minimum 8 karakter legyen a jelszó',
            'password.mixed'                     => 'A jelszó tartalmazzon kis-, és nagybetűt!',
            'password.letters'                   => 'A jelszó tartalmazzon betűket!',
            'password.numbers'                   => 'A jelszó tartalmazzon számokat!',
            'bio.required'                       => 'Írj magadról valamit!',
            'bio.min'                            => 'Írj magadról valamit!',
        ]);

        $data                             = new User;
        $data->name                       = $req->name;
        $data->password          = Hash::make($req->password);
        $data->bio                        = $req->bio;
        $data->Save();

        return redirect('/login');
    }

    public function Login(Request $req){
        $req->validate([
            'name'                                => 'required',
            'password'                            => 'required'
        ]);

        if(Auth::attempt(['name' => $req->name, 'password' => $req->password])){
            return redirect('/');
        } else {

            return view('/login', [
                'sv' => 'Nem sikerült'
            ]);
        }
    }


    public function Logout(){
        Auth::logout();
        return redirect('/');
    }


    public function Mypage(){
        if(Auth::check()){
            return view('mypage');
        } else {
            return redirect('/login');
        }
    }


    public function Newpass(){
        if(Auth::check()){
            return view('Newpass');
        } else {
            return redirect('/login');
        }
    }
}


