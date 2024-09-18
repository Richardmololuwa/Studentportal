<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class student extends Model
{


    protected $table = 'students';
    protected $primarykey = 'id';
    protected $fillable = ['name','matric_number','programme','faculty','deparrtment','Session/semester','course1','course2','course3','course4','course5','course6'];


    use HasFactory;
}
