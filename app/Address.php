<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    
	protected $fillable=['type','address','publickey','pk','secret','saldo'];

	protected $guarded = ['id'];
}
