<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Specification extends Model
{
    protected $table = 'specification';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'regulation_id'
    ];
}