<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    use HasFactory;

    protected $table = 'registers';
    protected $primaryKey = 'id';
    protected $fillable = ['name','email','password','confirm_password'];

}
