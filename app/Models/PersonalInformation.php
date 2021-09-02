<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalInformation extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'rec_id',
        'nickname',
        'tel',
        'nationality',
        'marital_status',
        'religion',
        'fbname',
        'bankaccnum',
        'sssnum',
        'philhealth',
        'pagibigmidnum',
        'quote',

    ];
}
