<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data_pemohon extends Model
{
    use HasFactory;
    // protected $guarded = [
    //     'id',
    // ];

    protected $table = 'data_pemohon';

    protected $guarded = [
        'id',
    ];

    
}
