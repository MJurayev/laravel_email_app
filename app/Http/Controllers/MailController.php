<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Mail;

use App\Http\Requests;
use Illuminate\Routing\Controller;

class MailController extends Controller {
    public function html_email(Request $request) {

        $email = $request->post('email');
        $data = array('name'=>"Leaderpack.uz", 'email'=>$email);
        Mail::send('mail', $data, function($message) use ($email) {
            $message->to($email, 'Mijoz')->subject
            ('Mijoz emaili');
            $message->from('solihaeljahonqizi@gmail.com','Leaderopack');
        });
        return json_encode(['success'=>true, 'message'=>'successfully sent message']);
    }
}
