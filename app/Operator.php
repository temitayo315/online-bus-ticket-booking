<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Operator extends Model
{
	use Authenticatable;
    
    protected $table = 'operators';

    protected $fillable = [
        'operator_name',
        'operator_email',
        'opearator_address',
        'operator_logo',
        
    ];

    public function getBus(){
    	return $this->hasOne(Bus::class);
    }
}
