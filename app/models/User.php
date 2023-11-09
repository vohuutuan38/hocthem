<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class User extends Model{
    protected $table = 'users';
    public $fillable = ['name', 'email', 'gender'];
    public $timestamps = false;
}


?>