<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use HasFactory;

    protected $table = 'phones';
    protected $primaryKey= 'id_phone';
    public $timestamps = false;

    protected $fillable = [
        'phone_number',
        'id_contact'      
    ];

    public function contact(){
        return $this->belongsTo(Contact::class, 'id_contact');
    }

}
