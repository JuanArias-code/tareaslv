<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //use HasFactory;
    protected $table = 'tasks';
    protected $fillable = ['title'];

    public function user(){
        return $this->belongsto(related,User::class);
    }
}
