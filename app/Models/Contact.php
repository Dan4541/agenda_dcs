<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $table = 'contacts';
    protected $primaryKey= 'id_contact';
    public $timestamps = false;

    protected $fillable = [
        'contact_name',
        'photo',
        'id_user'        
    ];

    protected $with = ['phones', 'emails'];

    public function phones(){
        return $this->hasMany(Phone::class, 'id_contact');
    }

    public function emails(){
        return $this->hasMany(Email::class, 'id_contact');
    }
    


}
