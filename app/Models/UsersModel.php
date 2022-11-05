<?php

namespace App\Models;

use Illuminate\Database\DBAL\TimestampType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersModel extends Model
{
    use HasFactory;
    public $table = 'users';
    protected $fillable =[
        'name',
        'email',
        'password',
        'token'
    ]; 
    protected $hidden =[];
    public $timestamps = false;
}
