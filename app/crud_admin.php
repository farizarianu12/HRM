<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class crud_admin extends Model
{
    //
	protected $table = 'berita';
	protected $primarykey = 'id';
	protected $fillable = ['berita'];
	public $timestamps = false;
}
class Reg extends Model
{
	protected $table = 'users';
	protected $primarykey = 'id';
	protected $fillable = ['name', 'email', 'password'];
    protected $hidden = ['password', 'remember_token',];
	public $timestamps = false;

}