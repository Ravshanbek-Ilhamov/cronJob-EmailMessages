<?php

namespace App\Http\Controllers;

use App\Mail\EmailMessage;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    public function verification_page(){
        return view('verification_page');
    }

    public function verify_code(){
        // 
    }


    public static function sendCode($id,$data){

        $user = User::find($id);
        Mail::to($user->email)->send(new EmailMessage($data));

    }
}
