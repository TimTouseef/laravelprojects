<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\model\user;

class Admincontroller extends Controller
{
    public function login(Request $req){
        $submit=$req['submit'];
        if($submit=="submit"){
            die('button press');
            $req->validate([
                'email'=>'required',
                password=>'required']);
                
                if(\Auth::attempt($req->only('email','password'))){
                    return redirect('/home');
            
                    }else {
                        return redirect('/login')->witherror('incorrect user name and password');
                    }
                }

          {return view ('login');
        }  
    }

public function dashboard(){
    return view ('main');
}


}

