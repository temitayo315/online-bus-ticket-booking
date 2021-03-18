<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model implements AuthenticatableContract
{
    use Authenticatable;

    protected $guarded = ['web'];
    
    protected $table = 'customers';

    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'password',
        'phone',
        'status',
        
    ];

    protected $hidden = [
    	'password',
    	'remember_token'
    ];

    public function getfirstname(){
        return $this->firstname;
    }

    public function getlastname(){
        return $this->lastname;
    }

    public function getfullname(){
        return "{$this->firstname} {$this->lastname}";
    }
}
