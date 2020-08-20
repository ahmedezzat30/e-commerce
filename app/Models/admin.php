<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class admin extends Authenticatable
{
    use Notifiable;
    protected $table = 'admins';

    //يعني كل الصفوف متاحة
    protected $guarded =[];         //  protected $fillable = ['name','email','password','created_at','updated_at',]

    public $timestamps = true;
}
