<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Sample extends Model
{
    protected $table = 'example';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'contract_id'
    ];
}