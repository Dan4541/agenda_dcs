<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use Illuminate\Http\Request;

class PhonesController extends Controller
{
    public function index(){
        $phones = Phone::with('contact')->get();
        return $phones;
    }

    public static function store_phone(Request $request, $id_contact){

        foreach ($request->number as $item) {
            Phone::create([
                'phone_number' => $item,
                'id_contact' => $id_contact
            ]);
        }
        /*
        $phone = new Phone();
        $phone->phone_number = $number;
        $phone->id_contact = $id_contact;
        $phone->save();
        */
        return "Resultado Phone Store";
    }
    

}
