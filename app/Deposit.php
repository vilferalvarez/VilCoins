<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deposit extends Model
{
    protected $fillable=['type','sender_address','rec_address','tx_id','amount'];

	protected $guarded = ['id','confirmations'];
}
