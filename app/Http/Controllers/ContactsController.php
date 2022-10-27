<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PhonesController;
use App\Http\Controllers\EmailsController;


class ContactsController extends Controller
{
    
    public function index(){
        
        $current_user = Auth::user()->id_user;        
        $contacts = Contact::where('id_user', '=', $current_user)->get();
        return $contacts;
    }

    public function store_contact(Request $request){

        $contact = new Contact();
        $contact->contact_name = $request->contact_name;
        $contact->photo = $request->contact_photo;
        $contact->id_user = Auth::user()->id_user;

        $temp = Contact::latest('id_contact')->first();
        $new_id = ( isset($temp) ? ($temp->id_contact + 1) : 1);
        $saved = $contact->save();
        
        if ($saved) {
            PhonesController::store_phone($request, $new_id);   
            EmailsController::store_email($request, $new_id);
            $result = true;
            $message = 'Contacto Guardado Correctamente';
            $contacts = $this->index();
            return view('home', compact('result', 'message', 'contacts'));
        } else {
            $result = false;
            $message = 'Error Intentelo Mas Tarde';
            $contacts = $this->index();
            return view('home', compact('result', 'message', 'contacts'));
        }
                
    }



}
