<?php

namespace App\models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
	
	
	
	 protected $fillable = [
        'Name',
        'Dep',
        'UID',
    ];
}
