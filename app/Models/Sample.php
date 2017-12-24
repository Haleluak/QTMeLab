<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Sample extends Model
{
    protected $table = 'sample';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'contract_id',
        'category',
        'note',
        'start_date',
        'end_date'
    ];
}