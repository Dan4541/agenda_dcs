<?php

namespace App\Http\Controllers;

use App\Models\Email;
use Illuminate\Http\Request;

class EmailsController extends Controller
{
    public function index(){
        $emails = Email::with('contact')->get();
        return $emails;
    }

    public static function store_email(Request $request, $id_contact){

        foreach ($request->email as $item) {
            Email::create([
                'address' => $item,
                'id_contact' => $id_contact
            ]);
        }

        /*
        $email = new Email();
        $email->address = $email;
        $email->id_contact = $id_contact;
        $email->save();
        */
    }

}
