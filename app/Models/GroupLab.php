<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class GroupLab extends Model
{
    protected $table = 'group_lab';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name'
    ];
    public function regulations()
    {
        return $this->hasMany(Regulation::class, 'group_id', 'id');
    }
}