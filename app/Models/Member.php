<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'member';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'group_id'
    ];
}