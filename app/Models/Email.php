<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    use HasFactory;

    protected $table = 'emails';
    protected $primaryKey= 'id_email';
    public $timestamps = false;

    protected $fillable = [
        'address',
        'id_contact'        
    ];

    public function contact(){
        return $this->belongsTo(Contact::class, 'id_contact');
    }

}
